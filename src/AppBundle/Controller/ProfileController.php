<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * @Route("/profile")
 */
class ProfileController extends Controller
{
    /**
     * @Route("/view/{id}", name="profile_view", requirements={"id": "\d+"})
     */
    public function viewAction($id, Request $request)
    {
        $profile = $this->getDoctrine()
                       ->getManager()
                       ->getRepository('AppBundle:User')
                       ->find($id);
        
        return $this->render('profile/view.html.twig', array(
            'user' => $profile
        ));
    }    
}