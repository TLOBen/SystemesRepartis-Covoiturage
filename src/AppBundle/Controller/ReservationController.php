<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Paiement;

/**
 * @Route("/reservation")
 */
class ReservationController extends Controller
{    
    /**
     * @Route("/new/{idTrajet}", name="reservation_new", requirements={"idTrajet": "\d+"})
     */
    public function newAction($idTrajet, Request $request)
    {
        if ($request->getMethod() === 'POST') {
            $entityManager = $this->getDoctrine()->getManager();
            $trajetRepository = $entityManager->getRepository('AppBundle:Trajet');
            $trajet = $trajetRepository->find($idTrajet);
            
            if ($trajet->getReservations()->count() >= $trajet->getMaxPlaces()) {
                return $this->redirectToRoute('reservation_error');
            }
            
            $paiement = new Paiement();
            $paiement->setMontant($trajet->getPrix());
            
            $reservation = new Reservation();
            $reservation->setTrajet($trajet);
            $reservation->setPaiement($paiement);
            $reservation->setUser($this->get('security.token_storage')->getToken()->getUser());
            
            $entityManager->persist($paiement);
            $entityManager->persist($reservation);
            $entityManager->flush();
            
            return $this->redirectToRoute('reservation_list');
        }
        
        return $this->render('reservation/new.html.twig', array(
            'idTrajet' => $idTrajet,
        ));
    }
    
    /**
     * @Route("/list", name="reservation_list")
     */
    public function listAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reservationRepository = $entityManager->getRepository('AppBundle:Reservation');
        $reservations = $reservationRepository->findBy(array('user' => $this->get('security.token_storage')->getToken()->getUser()));
        
        return $this->render('reservation/list.html.twig', array(
            'reservations' => $reservations,
        ));
    }
    
    /**
     * @Route("/error", name="reservation_error")
     */
    public function errorAction(Request $request)
    {
        return $this->render('reservation/error.html.twig');
    }
}