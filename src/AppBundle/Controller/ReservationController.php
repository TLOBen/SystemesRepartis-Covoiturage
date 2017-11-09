<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/reservation")
 */
class ReservationController extends Controller
{    
    /**
     * @Route("/new", name="reservation_new")
     */
    public function newAction(Request $request)
    {
    }
    
    /**
     * @Route("/list", name="reservation_list")
     */
    public function listAction(Request $request)
    {
    }
    
    /**
     * @Route("/view/{id]", name="reservation_view", requirements={"id": "\d+"})
     */
    public function viewAction($id, Request $request)
    {
    }
}