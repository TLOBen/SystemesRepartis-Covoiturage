<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Trajet;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\TravelService;
use AppBundle\Form\TrajetFormType;

/**
 * @Route("/travels")
 */
class TravelController extends Controller
{
    /**
     * @Route("/list", name="travel_list")
     */
    public function listAction(Request $request)
    {
        return $this->render('travels/list.html.twig');
    }

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
        $trajet = new Trajet();
        $form = $this->createForm(TrajetFormType::class, $trajet);
        $form->handleRequest($request);
        
        if($form->isSubmitted()&& $form->isValid()) {
            $trajet = $form->getData();
            $trajet->setUser($this->get('security.token_storage')->getToken()->getUser());
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trajet);
            $entityManager->flush();
            
            return $this->redirectToRoute('travel_list');
        }
        
        return $this->render('travels/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
    /**
     * @Route("/view/{id]", name="travel_view", requirements={"id": "\d+"})
     */
    public function viewAction($id, Request $request)
    {
        $trajet = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('AppBundle:Trajet')
                       ->find($id);
        
        return $this->render('travels/view.html.twig', array(
            'trajets' => $trajet
        ));
    }
}