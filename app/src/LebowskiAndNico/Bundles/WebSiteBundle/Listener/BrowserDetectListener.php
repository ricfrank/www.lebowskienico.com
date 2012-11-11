<?php

namespace LebowskiAndNico\Bundles\WebSiteBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use LebowskiAndNico\Bundles\WebSiteBundle\Common\BrowserHunter;

/**
 * Description of BrowserDetectListener
 *
 * @author riccardo
 */
class BrowserDetectListener
{

  public function onKernelRequest(GetResponseEvent $event)
    {
        // don't do anything if it's not the master request
        if (HttpKernel::MASTER_REQUEST == $event->getRequestType()) {
            $browserHunter = new BrowserHunter();
              if($browserHunter->isIE8OrLesser($event->getRequest()->server->get('HTTP_USER_AGENT'))){
                var_dump("EEEEEE");
              }
            return;
        }
    }
}

