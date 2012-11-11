<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{
    
  
      public function testDiscoPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/disco');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
  
    public function testVideoPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/video');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testListenPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/listenpropaganda');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testGalleryPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/gallery');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
  
    public function testHomePage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testContactPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contatti');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
  
    public function testBioPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/biografia');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
  
    public function testTourPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tour');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
    
    public function testIndexPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
