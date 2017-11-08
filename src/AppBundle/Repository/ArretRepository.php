<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ArretRepository extends EntityRepository
{
    public function fetchArretsDepart($villeDepart) {
        $arretsDepart = array();
        
        $arrets = $this->createQueryBuilder('a')
                       ->Where('a.ville LIKE :ville')
                       ->setParameter('ville', '%'.$villeDepart.'%')
                       ->getQuery()
                       ->getResult();
            
        foreach ($arrets as $arret) {
            if (!isset($arretsDepart[$arret->getTrajet()->getId()])) {
                $arretsDepart[$arret->getTrajet()->getId()] = $arret->getId();
            }
        }
        
        return $arretsDepart;
    }
    
    public function fetchArretsArrivee($villeArrivee) {
        $arretsArrivee = array();
        
        $arrets = $this->createQueryBuilder('a')
                       ->Where('a.ville LIKE :ville')
                       ->setParameter('ville', '%'.$villeArrivee.'%')
                       ->getQuery()
                       ->getResult();
            
        foreach ($arrets as $arret) {
            $arretsArrivee[$arret->getTrajet()->getId()] = $arret->getId();
        }
        
        return $arretsArrivee;
    }
}
