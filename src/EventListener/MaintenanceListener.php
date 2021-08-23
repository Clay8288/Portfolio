<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class MaintenanceListener
{
    public function onKernelRequest(RequestEvent $event)
    {
        if(!file_exists($this->Maintenance)){
            return;
        }
        
        $event->setResponse(
            new Response(
                'La page est en maintenance !',
                Response::HTTP_SERVICE_UNAVAILABLE
            )
        );
        // On stop le traitement des evenements 
        $event->stopPropagation();
    }
}