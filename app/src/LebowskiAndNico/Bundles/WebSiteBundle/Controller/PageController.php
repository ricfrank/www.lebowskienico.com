<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction(Request $request)
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:index.html.twig');
    }
    
     /**
     *
     * @Template()
     */
    public function tourAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:tour.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function bioAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:bio.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function homeAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:home.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function contactAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:contact.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function galleryAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:gallery.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function listenPropagandaAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:listenpropaganda.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function videoAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:video.html.twig');
    }
    
    /**
     * 
     * @Template()
     */
    public function discoAction()
    {
          return $this->render('LebowskiAndNicoBundlesWebSiteBundle:Page:disco.html.twig');
    }
    
}
