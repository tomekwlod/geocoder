<?php

namespace TomekWlod\Geocoder\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ApiController extends Controller
{
    public function getAction(Request $request)
    {
        $requestParams = json_decode($request->getContent(), true);
        
        /* @var $service \TomekWlod\Geocoder\Service\Location */
        $service = $this->container->get('tomekwlod_geocoder.location');

        $document = $service->get($requestParams);

        return new JsonResponse($service->serialize($document));
    }
}
