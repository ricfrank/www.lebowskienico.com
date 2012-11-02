<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{

    
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
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Contatti")')->count());
    }
  
    public function testBioPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/biografia');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Biografia")')->count());
    }
  
    public function testTourPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/tour');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Reasonaze")')->count());
    }
    
    public function testIndexPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
        
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertGreaterThan(0, $crawler->filter('html:contains("Reasonaze")')->count());
    }
}
