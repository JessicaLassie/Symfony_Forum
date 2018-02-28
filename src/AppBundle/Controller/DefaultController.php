<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Author;
use AppBundle\Entity\Post;
use AppBundle\Form\AuthorType;
use AppBundle\Form\PostType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()
            ->getRepository("AppBundle:Theme");
        $postRepository = $this->getDoctrine()
            ->getRepository("AppBundle:Post");
        $authorRepository = $this->getDoctrine()
            ->getRepository("AppBundle:Author");

        $list = $repository->findAll();

        return $this->render('default/index.html.twig',
            [
                "themeList" => $list,
                "lastPosts" => $postRepository->getLastPost(5)->getResult(),
                "authorSummary" => $authorRepository->getAuthorSummary()->getResult(),
                "yearSummary" => $postRepository->getNumberOfPostsByYear()->getResult(),
                "message" => $this->get('app.hello')->greet()
            ]);
    }

    /**
     * @Route("/theme/{id}", name="theme_details", requirements={"id":"\d+"})
     * @param $id
     * @return Response
     */
    public function themeAction($id, Request $request)
    {

        $repository = $this->getDoctrine()
            ->getRepository("AppBundle:Theme");

        $theme = $repository->find($id);

        $allThemes = $repository->findAll();

        if (!$theme) {
            throw new NotFoundHttpException("Thème introuvable");
        }

        if ($this->getUser() != null) {
            //Création d'une instance de post
            $post = new Post();
            $post->setTheme($theme)
                //Récupération de la date du jour
                ->setCreatedAt(new \DateTime())
                //Récupération de l'auteur logué
                ->setAuthor($this->getUser());
            //Création du formulaire
            $form = $this->createForm(PostType::class, $post, [
                'attr' => ['novalidate' => 'novalidate']
            ]);

            //Traitement du formulaire
            $form->handleRequest($request);

            //Sauvegarde des données si le formulaire est correct
            if ($form->isSubmitted() && $form->isValid()) {

                //dump($post->getImage());

                $em = $this->getDoctrine()->getManager();
                $em->persist($post);

                if ($post->getImage() instanceof UploadedFile) {
                    $uploadManager = $this->get('stof_doctrine_extensions.uploadable.manager');
                    $uploadManager->markEntityToUpload($post, $post->getImage());
                }

                $em->flush();

                //Redirection pour eviter de rester en POST
                return $this->redirectToRoute("theme_details", ["id" => $id]);
            }

            $formView = $form->createView();
        } else {
            $formView = null;
        }

        return $this->render('default/theme.html.twig', [
            "theme" => $theme,
            "postList" => $theme->getPosts(),
            "all" => $allThemes,
            "newPostForm" => $formView
        ]);
    }

    /**
     * @Route("/posts-par-auteur/{id}", name="post_par_auteur")
     * @param Author $author
     */
    public function postsByAuthorAction(Author $author)
    {
        $postRepository = $this->getDoctrine()->getRepository("AppBundle:Post");
        $posts = $postRepository->findByAuthor($author);
        return $this->render("default/posts_by_author.html.twig", [
            "postList" => $posts,
            "condition" => $author->getFullName()
        ]);
    }

    /**
     * @Route("/posts-par-annee/{year}", name="post_par_annee", requirements={"year":"\d{4}"})
     * @param $year
     */
    public function postsByYearAction($year)
    {
        $postRepository = $this->getDoctrine()->getRepository("AppBundle:Post");
        $posts = $postRepository->getPostsByYear($year)->getResult();
        return $this->render("default/posts_by_author.html.twig", [
            "condition" => "l'année $year",
            "postList" => $posts
        ]);
    }

    /**
     * @Route("/admin-login", name="admin_login_route")
     */
    public function adminLoginAction()
    {
        //Récupération des erreurs
        $securityUtils = $this->get('security.authentication_utils');
        return $this->render("default/login-form.html.twig", [
            "action" => $this->generateUrl("admin_check_route"),
            "error" => $securityUtils->getLastAuthenticationError(),
            "userName" => $securityUtils->getLastUsername()
        ]);
    }

    /**
     * @Route("/author-login", name="author_login_route")
     */
    public function authorLoginAction()
    {
        //Récupération des erreurs
        $securityUtils = $this->get('security.authentication_utils');
        return $this->render("default/login-form.html.twig", [
            "action" => $this->generateUrl("author_check_route"),
            "error" => $securityUtils->getLastAuthenticationError(),
            "userName" => $securityUtils->getLastUsername()
        ]);
    }

    /**
     * @Route("/inscription-auteur", name="register_author")
     */
    public function registerAuthorAction(Request $request)
    {
        //Création d'une instance d'auteur
        $author = new Author();
        //Création du formulaire
        $form = $this->createForm(AuthorType::class, $author);
        //Hydratation de l'entité à partir des données de la requete
        $form->handleRequest($request);

        //Traitement des données postées si le formulaire est correct
        if ($form->isSubmitted() && $form->isValid()) {

            //Encryptage du mot de passe récupéré
            $password = password_hash($author->getPlainPassword(), PASSWORD_BCRYPT);
            $author->setPassword($password);

            //Sauvegarde de l'entité
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            //Message flash
            $this->addFlash('info', "Vous êtes inscrits");

            //Authentification de l'utilisateur qui vient de s'inscrire
            //Création d'un token à partir des données de l'auteur
            $token = new UsernamePasswordToken($author, null, 'main', $author->getRoles());
            //Stockage du token en session
            $this->get("security.token_storage")->setToken($token);

            //Redirection vers la page d'accueil
            return $this->redirectToRoute('homepage');
        }
        return $this->render("default/register_author.html.twig", [
            "newInscriptionForm" => $form->createView()
        ]);
    }

}
