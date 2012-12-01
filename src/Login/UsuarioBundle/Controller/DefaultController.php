<?php

namespace Login\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function loginAction()
    {
    	$request = $this->getRequest();
    	$sesion = $request->getSession();
    	
    	if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
    		$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    	} else {
    		$error = $sesion->get(SecurityContext::AUTHENTICATION_ERROR);
    	}
    	
    	return $this->render('UsuarioBundle:Default:login.html.twig', array(
    			'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
    			'error' => $error
    	));
    	 
    }
    
    public function usuarioAction() {
    	return $this->render('UsuarioBundle:Default:usuario.html.twig', array('name' => $this->getUser()));
    }
}
