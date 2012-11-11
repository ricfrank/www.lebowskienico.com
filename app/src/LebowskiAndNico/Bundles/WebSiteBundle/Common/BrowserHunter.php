<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Common;

/**
 * Some useful function for browser management and IE hunt 
 *
 * @author riccardo
 */
class BrowserHunter {
  
  public function __construct()
  {
    
  }

  public function isIE8OrLesser($userAgent)
  {
      preg_match('/MSIE (.*?);/', $userAgent, $matches);
      
       if (count($matches) > 1) {
         $version = $matches[1];
         return ($version <= 8 ? TRUE : FALSE);
       }
       
       return FALSE;
      
  }
  
}
