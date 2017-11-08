<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

/**
 * Description of TravelService
 *
 * @author Benjamin
 */
class TravelService {
    private $entityManager;

    public function __construct(EntityManager $entityManager) {
        $this->entityManager = $entityManager;
    }
    
    public function getTrajetsInfo($villeDepart, $villeArrivee, $dateDepart) {        
        $queryBuilder = $this->entityManager
                                 ->getRepository('AppBundle:Trajet')
                                 ->createQueryBuilder('t');
        
        if (!empty($villeDepart)) {
            $queryBuilder = $queryBuilder
                    ->andWhere('t.villeDepart LIKE :villeDepart')
                    ->setParameter('villeDepart', '%'.$villeDepart.'%');
        }
        if (!empty($villeArrivee)) {
            $queryBuilder = $queryBuilder
                    ->andWhere('t.villeArrivee LIKE :villeArrivee')
                    ->setParameter('villeArrivee', '%'.$villeArrivee.'%');
        }
        
        $trajetsInfo = array();
        foreach ($queryBuilder->getQuery()->getResult() as $trajet) {
            if (!(sizeof($trajet->getReservations()->getValues()) >= $trajet->getMaxPlaces())) {
                $infos = array();
                
                $infos['villeDepart'] = $trajet->getVilleDepart();
                $infos['villeArrivee'] = $trajet->getVilleArrivee();
                $infos['prix'] = $trajet->getPrix();
                $infos['dateDepart'] = $trajet->getVilleDepart();
                
                $trajetsInfo[] = $infos;
            }
        }
        
        return $trajetsInfo;
    }    
}
