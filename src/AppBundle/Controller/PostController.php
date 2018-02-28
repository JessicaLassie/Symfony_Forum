<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Answer;
use AppBundle\Entity\Vote;
use AppBundle\Form\AnswerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use AppBundle\Entity\Post;

class PostController extends Controller
{

    /**
     * @param $id
     * @Route("/post/{slug}",
     *          name="post_details"
     * )
     * @return Response
     */
    public function detailsAction($slug, Request $request){

        $postRepository = $this->getDoctrine()
            ->getRepository("AppBundle:Post");
        $answerRepository = $this->getDoctrine()
            ->getRepository("AppBundle:Answer");

        /** @var $post Post */
        $post = $postRepository->findOneBySlug($slug);

        if(! $post){
            throw new NotFoundHttpException("post introuvable");
        }

        //Création du formulaire
        $answer = new Answer();
        $answer->setPost($post)
            ->setCreatedAt(new \DateTime());
        $form = $this->createForm(AnswerType::class, $answer, [
            'attr' => ['novalidate' => 'novalidate']
        ]);

        //Traitement du formulaire
        $form->handleRequest($request);

        //Sauvegarde des données si le formulaire est correct
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($answer);
            $em->flush();

            //Redirection pour eviter de rester en POST
            return $this->redirectToRoute("post_details", ["slug" => $slug]);
        }

        return $this->render("post/details.html.twig", [
            "post" => $post,
            "answerList" => $answerRepository->getAnswersByPost($post)->getQuery()->getResult(),
            "newAnswerForm" => $form->createView(),
            "query" => $answerRepository->getAnswersByPost($post)->getQuery()->getResult()
        ]);
    }



}