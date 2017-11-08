<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\TravelService;

/**
 * @Route("/travels")
 */
class TravelController extends Controller
{
    /**
     * @Route("/search", name="travel_search")
     */
    public function searchAction(Request $request, TravelService $travelService)
    {        
        $villeDepart = $request->get('villeDepart');
        $villeArrivee = $request->get('villeArrivee');
        $dateDepart = $request->get('dateDepart');
        
        return $this->render('travels/search.html.twig', array(
            'trajets' => $travelService->getTrajetsInfo($villeDepart, $villeArrivee, $dateDepart),
        ));
    }
    
    /**
     * @Route("/new", name="travel_new")
     */
    public function newAction(Request $request)
    {
        if($request->getMethod() === 'POST') {
            $trajet = new Trajet();

            $trajet->setUser($this->get('security.token_storage')->getToken()->getUser());
            $trajet->setVilleDepart($request->get('villeDepart'));
            $trajet->setVilleArrivee($request->get('villeArrivee'));
            $trajet->setPrix($request->get('prix'));
            $trajet->setDateDepart($request->get('dateDepart'));
            
            $this->getDoctrine()->getManager()->persist($trajet)->flush();
        }
        
        return $this->render('travels/new.html.twig');
    }
    
    /**
     * @Route("/view/{id]", name="travel_view", requirements={"id": "\d+"})
     */
    public function viewAction($id, Request $request)
    {
        return $this->render('travels/view.html.twig');
    }
}