<?php

namespace TomekWlod\Geocoder\Service;

use TomekWlod\Geocoder\Service\Main;

class Location extends Main
{
    public function get(Array $requestParams)
    {
        /* @var $locationModel \TomekWlod\Geocoder\Document\Location */
        $locationModel = $this->normalizeRequest($requestParams);
        
        $locationDocument = $this->getLocationDocument($locationModel->getName());
        
        if (!$locationDocument) {
            $locationDocument = $this->createLocationDocument($locationModel);
        } else {
            $locationDocument = $this->updateLocationDocument($locationDocument, $locationModel);
        }
        
        return $locationDocument;
    }
}