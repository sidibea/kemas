<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // kema_main_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'kema_main_homepage');
            }

            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'kema_main_homepage',);
        }

        // kema_main_apropos
        if ('/apropos' === $pathinfo) {
            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::aboutAction',  '_route' => 'kema_main_apropos',);
        }

        // kema_main_actualites
        if ('/actualites' === $pathinfo) {
            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::actualitesAction',  '_route' => 'kema_main_actualites',);
        }

        // kema_main_vision
        if ('/visions' === $pathinfo) {
            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::visionAction',  '_route' => 'kema_main_vision',);
        }

        // kema_main_realisations
        if ('/realisations' === $pathinfo) {
            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::realisationsAction',  '_route' => 'kema_main_realisations',);
        }

        // kema_main_proceduresFormulaires
        if ('/proceduresFormulaires' === $pathinfo) {
            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::proceduresFormulairesAction',  '_route' => 'kema_main_proceduresFormulaires',);
        }

        // kema_main_contact
        if ('/contact' === $pathinfo) {
            return array (  '_controller' => 'Kema\\MainBundle\\Controller\\MainController::contactAction',  '_route' => 'kema_main_contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
