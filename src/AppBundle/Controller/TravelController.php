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
        return $this->render('travels/new.html.twig');
    }
    
    /**
     * @Route("/edit/{id]", name="travel_edit", requirements={"id": "\d+"})
     */
    public function editAction($id, Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Trajet');
        $trajet = $repository->find($id);
        
        return $this->render('travels/edit.html.twig');
    }
    
    /**
     * @Route("/view/{id]", name="travel_view", requirements={"id": "\d+"})
     */
    public function viewAction($id, Request $request)
    {
        return $this->render('travels/view.html.twig');
    }
}