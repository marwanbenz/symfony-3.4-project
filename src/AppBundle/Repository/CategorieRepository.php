<?php 

// src/AppBundle/Repository/CategorieRepository.php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategorieRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppBundle:Categorie p ORDER BY p.name ASC'
            )
            ->getResult();
    }
}

?>