<?php

namespace Stfalcon\Bundle\PortfolioBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{

    /**
     * Get all categories
     *
     * @return array
     */
    public function getAllCategories()
    {
        $query = $this->getEntityManager()->createQuery('SELECT c FROM StfalconPortfolioBundle:Category c');

        return $query->getResult();
    }

}