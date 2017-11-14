<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Paiement;
use AppBundle\Service\MailService;

/**
 * @Route("/reservation")
 */
class ReservationController extends Controller
{
    /**
     * @Route("/new/{idTrajet}", name="reservation_new", requirements={"idTrajet": "\d+"})
     */
    public function newAction($idTrajet, Request $request, MailService $mailService)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $trajetRepository = $entityManager->getRepository('AppBundle:Trajet');
        $reservationRepository = $entityManager->getRepository('AppBundle:Reservation');
        
        $trajet = $trajetRepository->find($idTrajet);
        $reservations = $reservationRepository->findBy(array(
            'user' => $this->get('security.token_storage')->getToken()->getUser(),
            'trajet' => $trajet,
        ));
        
        if (sizeof($reservations) > 0) {
            return $this->redirectToRoute('reservation_error', array('id' => 1));
        }
        
        if ($request->getMethod() === 'POST') {
            if ($trajet->getReservations()->count() >= $trajet->getMaxPlaces()) {
                return $this->redirectToRoute('reservation_error', array('id' => '2'));
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
            
            $mailService->sendReservationMail($trajet, $reservation, $paiement);
            
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
     * @Route("/error/{id}", name="reservation_error", requirements={"idTrajet": "\d+"})
     */
    public function errorAction($id, Request $request)
    {
        $error = null;
        if ($id == 1) {
            $error = "Vous avez déjà réservé ce trajet";
        }
        if ($id == 2) {
            $error = "Il n'y a déjà plus de place pour ce trajet";
        }
        
        return $this->render('reservation/error.html.twig', array(
            'error' => $error,
        ));
    }
}
