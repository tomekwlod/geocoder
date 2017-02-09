<?php

namespace TomekWlod\Geocoder\Service;

abstract class Main
{
    /* @var $dm \Doctrine\ODM\MongoDB\DocumentManager */
    private $dm = null;
    
    public function __construct($documentManager)
    {
        $this->dm = $documentManager;
    }
    
    protected function getLocationDocument($name)
    {
        return $this->dm->getRepository("GeocoderBundle:Location")->findOneBy(['name' => $name]);
    }

    protected function createLocationDocument(\TomekWlod\Geocoder\Document\Location $location)
    {
        $location->setCreatedAt(new \DateTime());
        $location->setGeocoderErrors(0);
        
        $this->dm->persist($location);
        $this->dm->flush($location);
        
        return $location;
    }

    protected function updateLocationDocument(\TomekWlod\Geocoder\Document\Location $location, \TomekWlod\Geocoder\Document\Location $locationModel)
    {
        if (!$location->getCity() && $locationModel->getCity()) {
            $location->setCity($locationModel->getCity());
        }
        if (!$location->getCountry() && $locationModel->getCountry()) {
            $location->setCountry($locationModel->getCountry());
        }
        if (!$location->getState() && $locationModel->getState()) {
            $location->setState($locationModel->getState());
        }
        if (!$location->getStreet() && $locationModel->getStreet()) {
            $location->setStreet($locationModel->getStreet());
        }
        if (!$location->getPostcode() && $locationModel->getPostcode()) {
            $location->setPostcode($locationModel->getPostcode());
        }
        if (!$location->getRegion() && $locationModel->getRegion()) {
            $location->setRegion($locationModel->getRegion());
        }
        if (!$location->getLatitude() && $locationModel->getLatitude()) {
            $location->setLatitude($locationModel->getLatitude());
        }
        if (!$location->getLongitude() && $locationModel->getLongitude()) {
            $location->setLongitude($locationModel->getLongitude());
        }
        
        $this->dm->flush($location);
        
        return $location;
    }
    
    protected function normalizeRequest(Array $requestParams)
    {
        if (!isset($requestParams['name']) || !$requestParams['name']) {
            throw new \Exception("There is no enough parameters to proceed");
        }
        if (isset($requestParams['latitude']) && isset($requestParams['longitude']) && $requestParams['latitude'] && $requestParams['longitude']) {
            throw new \Exception("You already have coordinates");
        }
        
        $location = new \TomekWlod\Geocoder\Document\Location();
        
        $location->setName($requestParams['name']);
        
        if (isset($requestParams['country']) && $requestParams['country']) {
            $location->setCountry($requestParams['country']);
        }
        
        if (isset($requestParams['city']) && $requestParams['city']) {
            $location->setCity($requestParams['city']);
        }
        
        if (isset($requestParams['postcode']) && $requestParams['postcode']) {
            $location->setPostcode($requestParams['postcode']);
        }
        
        if (isset($requestParams['region']) && $requestParams['region']) {
            $location->setRegion($requestParams['region']);
        }
        
        if (isset($requestParams['state']) && $requestParams['state']) {
            $location->setState($requestParams['state']);
        }
        
        if (isset($requestParams['street']) && $requestParams['street']) {
            $location->setStreet($requestParams['street']);
        }
        
        if (isset($requestParams['latitude']) && $requestParams['latitude']) {
            $location->setLatitude($requestParams['latitude']);
        }
        
        if (isset($requestParams['longitude']) && $requestParams['longitude']) {
            $location->setLongitude($requestParams['longitude']);
        }
        
        return $location;
    }
    
    public function serialize(\TomekWlod\Geocoder\Document\Location $location)
    {
        return [
            'name' => $location->getName(),
            'country' => $location->getCountry(),
            'city' => $location->getCity(),
            'postcode' => $location->getPostcode(),
            'region' => $location->getRegion(),
            'state' => $location->getState(),
            'street' => $location->getStreet(),
            'latitude' => $location->getLatitude(),
            'longitude' => $location->getLongitude(),
            'createdAt' => $location->getCreatedAt(),
            'geocoderErrors' => $location->getGeocoderErrors(),
        ];
    }
}