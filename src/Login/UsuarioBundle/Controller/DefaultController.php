<?php

namespace Login\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function loginAction()
    {
    	$peticion = $this->getRequest();
    	$sesion = $peticion->getSession();
    	
    	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    		$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    	} else {
    		$error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
    	}
    	
    	return $this->render('UsuarioBundle:Default:login.html.twig', array(
    			'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
    			'error' => $error
    	));
    	 
    }
}
