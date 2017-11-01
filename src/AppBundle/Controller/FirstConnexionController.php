<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of FirstConnexionController
 *
 * @author Benjamin
 */
class FirstConnexionController extends Controller
{
    /**
     * @Route("/first", name="first_connexion")
     * @Method({"GET", "POST"})
     */
    public function firstAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $user->setFirstConnexion(false);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return $this->render('default/index.html.twig');
    }
}
