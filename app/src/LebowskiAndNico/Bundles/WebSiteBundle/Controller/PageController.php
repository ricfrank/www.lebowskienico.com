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
    
    /**
     * @Route("/home")
     * @Template()
     */
    public function homeAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:home.html.twig', array('content' => 'ciao'));
    }
    
    /**
     * @Route("/contatti")
     * @Template()
     */
    public function contactAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:contact.html.twig', array('content' => 'ciao'));
    }
    
}
