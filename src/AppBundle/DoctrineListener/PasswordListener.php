<?php

namespace AppBundle\DoctrineListener;

use AppBundle\Entity\Author;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordListener
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    /**
     * PasswordListener constructor.
     * @param UserPasswordEncoderInterface $encoder
     */
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function prePersist(LifecycleEventArgs $eventArgs)
    {
        //Récupération de l'entité que Doctrine veut persister
        $entity = $eventArgs->getEntity();
        //Ne rien faire si l'entité n'est pas un auteur
        if (!$entity instanceof Author) {
            return;
        }
        $password = $this->encoder->encodePassword($entity, $entity->getPlainPassword());
        $entity->setPassword($password);
        $entity->setPlainPassword(null);
    }

}
