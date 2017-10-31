<?php

namespace Kema\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller
{
    public function indexAction(){

        return $this->render('KemaMainBundle::index.html.twig');
    }

    public function aboutAction(){

        return $this->render('KemaMainBundle::about.html.twig');
    }
    public function contactAction(){

        return $this->render('KemaMainBundle::contact.html.twig');
    }

    public function realisationsAction(){

        return $this->render('KemaMainBundle::realisations.html.twig');
    }
    public function actualitesAction(){

        return $this->render('KemaMainBundle::actualites.html.twig');
    }

}