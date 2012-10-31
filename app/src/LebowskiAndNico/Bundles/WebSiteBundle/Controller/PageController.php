<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:index.html.twig', array('name' => 'ciao'));
    }
    
     /**
     * @Route("/tour")
     * @Template()
     */
    public function tourAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:tour.html.twig', array('content' => 'ciao'));
    }
    
    /**
     * @Route("/biografia")
     * @Template()
     */
    public function bioAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:bio.html.twig', array('content' => 'ciao'));
    }
    
}
