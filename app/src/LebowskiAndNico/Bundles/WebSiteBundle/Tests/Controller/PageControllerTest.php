<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PageControllerTest extends WebTestCase
{

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
