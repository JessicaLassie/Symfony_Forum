<?php

namespace AppBundle\Repository;

/**
 * AnswerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AnswerRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $post
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getAnswersByPost($post)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->select('a.author', 'a.text', 'a.createdAt')
            ->orderBy('a.createdAt', 'desc')
            ->where('a.post=:post')
            ->setParameter('post', $post);
        return $qb;
    }
}
