<?php

namespace ArticleBundle\Repository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllOrdered($col,$sens)
    {
        return $this->findBy(array(), array($col => $sens));
    }
}
