<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Listener;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use LebowskiAndNico\Bundles\WebSiteBundle\Common\BrowserHunter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Description of BrowserDetectListener
 *
 * @author riccardo
 */
class BrowserDetectListener
{

  public function onKernelResponse(FilterResponseEvent $event)
  {
    
    $response = $event->getResponse();
    
    $content = $response->getContent();
    
    $ie8AlertMsg = '<div style="background-color: #f03f45; border: 2px solid #009898; padding: 12px; text-align: center;margin: 12px; font-family: Arial; font-size: 14px; position:fixed;height:500px;z-index:10000">
                    <h2>Quest\'aggressione non può essere tollerata</h2>
                    <p>Stai utilizzando una versione obsoleta di <strong>Internet Explorer</strong></p>
                    <p>Ricordati che internet explorer &egrave; il male</p>
                    <p>Se voi continuare a stare dalla parte del male allora clicca per <a href="http://windows.microsoft.com/it-IT/internet-explorer/download-ie" target="_blank">aggiornarlo</a> all\'ultima versione</p>
                    <p>Se invece sei della parte del bene allora scarica un altro browser come 
                    <a href="https://www.google.com/intl/it/chrome/browser/">chrome</a>, <a href="http://www.mozilla.org/it/firefox/new/">firefox</a> 
                    o <a href="http://www.opera.com/">opera</a></p>
                    <br><br><br>
                    <p>La scelta &egrave; tua ma explore 7/8 proprio no!!</p>
                  </div>';

    
    
    $browserHunter = new BrowserHunter();
          if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()){
            if($browserHunter->isIE8OrLesser($event->getRequest()->server->get('HTTP_USER_AGENT'))){
              $responseContentWithAlert = new Response($ie8AlertMsg.$content);
              $event->setResponse($responseContentWithAlert);
            }
          }
  }
}

