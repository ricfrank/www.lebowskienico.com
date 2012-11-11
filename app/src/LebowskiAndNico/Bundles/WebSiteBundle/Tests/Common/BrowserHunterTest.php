<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Tests\Common;

use LebowskiAndNico\Bundles\WebSiteBundle\Common\BrowserHunter;

class BrowserHunterTest extends \PHPUnit_Framework_TestCase
{
    public function testShouldBeIE8()
    {
      $browserHunter = new BrowserHunter();
      $userAgent = 'MSIE 8;';
      $this->assertTrue($browserHunter->isIE8OrLesser($userAgent));
    }
    
    public function testShouldNotBeIE8ButIE9()
    {
      $browserHunter = new BrowserHunter();
      $userAgent = 'MSIE 9;';
      $this->assertFalse($browserHunter->isIE8OrLesser($userAgent));
    }
    
    public function testShouldNotBeIE8()
    {
      $browserHunter = new BrowserHunter();
      $userAgent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.64 Safari/537.11';
      $this->assertFalse($browserHunter->isIE8OrLesser($userAgent));
    }
}
