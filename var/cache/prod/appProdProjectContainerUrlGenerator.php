<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'kema_main_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kema_main_apropos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::aboutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/apropos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kema_main_vision' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::visionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visions',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kema_main_actualites' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::actualitesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/actualites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kema_main_realisations' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::realisationsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/realisations',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kema_main_proceduresFormulaires' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::proceduresFormulairesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/proceduresFormulaires',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'kema_main_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Kema\\MainBundle\\Controller\\MainController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
