<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface;
use AppBundle\Entity\Trajet;
use AppBundle\Entity\Reservation;
use AppBundle\Entity\Paiement;
use AppBundle\Entity\User;

/**
 * Description of MailService
 *
 * @author Benjamin
 */
class MailService {
    private $mailer;
    private $templating;
    
    public function __construct(ContainerInterface $container) {
        $this->mailer = $container->get('mailer');
        $this->templating = $container->get('templating');
    }
    
    public function sendReservationMail(Trajet $trajet, Reservation $reservation, Paiement $paiement) {
        $message = \Swift_Message::newInstance()
            ->setSubject('Reservation effectuée')
            ->setFrom('benjamin.dagouret@orange.fr')
            ->setTo($reservation->getUser()->getEmail())
            ->setBody(
            $this->templating->render(
                'email/reservation.html.twig',
                array(
                    'username' => $reservation->getUser()->getUsername(),
                    'mail' => $trajet->getUser()->getEmail(),
                    'villeDepart' => $trajet->getVilleDepart(),
                    'villeArrivee' => $trajet->getVilleArrivee(),
                    'dateDepart' => $trajet->getDateDepart(),
                )
            ),
            'text/html'
        );

        $this->mailer->send($message);
        
        $message = \Swift_Message::newInstance()
            ->setSubject('Reservation reçue')
            ->setFrom('benjamin.dagouret@orange.fr')
            ->setTo($trajet->getUser()->getEmail())
            ->setBody(
            $this->templating->render(
                'email/trajet.html.twig',
                array(
                    'username' => $trajet->getUser()->getUsername(),
                    'mail' => $reservation->getUser()->getEmail(),
                    'trajetUsername' => $reservation->getUser()->getUsername(),
                    'villeDepart' => $trajet->getVilleDepart(),
                    'villeArrivee' => $trajet->getVilleArrivee(),
                    'dateDepart' => $trajet->getDateDepart(),
                )
            ),
            'text/html'
        );

        $this->mailer->send($message);
    }
}
