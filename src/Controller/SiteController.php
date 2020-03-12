<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }
    
    /**
     * @Route ("/", name="home")
     */

    public function home(){

         return $this->render('site/home.html.twig');

    }
/**
 * @Route ("/tourisme",name="tour")
 */


public function tourisme(){
    return $this->render('site/tourisme.html.twig');
}

/**
 * @Route("/mariages",name="mar")
 */

public function mariages(){
    return $this->render('site/mariages.html.twig');
}
/**
 * @Route("/manifestations",name="man")
 */
public function manifestations(){
    return $this->render('site/manif.html.twig');

}

}
