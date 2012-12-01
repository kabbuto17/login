<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuario_login
            if ($pathinfo === '/usuario/login') {
                return array (  '_controller' => 'Login\\UsuarioBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuario_login',);
            }

            // usuario_login_check
            if ($pathinfo === '/usuario/login_check') {
                return array('_route' => 'usuario_login_check');
            }

            // usuario_logout
            if ($pathinfo === '/usuario/logout') {
                return array('_route' => 'usuario_logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
