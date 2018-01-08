<?php

namespace CarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/our-cars", name="offer")
     */
    public function indexAction()
    {
        $cars = [
            ['mark' => 'BMW', 'name' => 'M5'],
            ['mark' => 'Ferrari', 'name' => 'LaFerrari'],
            ['mark' => 'Audi', 'name' => 'RS6'],
        ];
        return $this->render('CarBundle:Default:index.html.twig', ['cars' => $cars]);
    }
}
