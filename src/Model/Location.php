<?php

namespace TomekWlod\Geocoder\Model;

class Location
{
    protected $thumb;
    
    protected $name;
    
    protected $country;
    
    protected $city;
    
    protected $street;
    
    protected $postcode;
    
    protected $state;
    
    protected $region;
    
    protected $latitude;
    
    protected $longitude;
    
    protected $lastCheck;
    
    protected $createdAt;
    
    
    public function getThumb()
    {
        return $this->thumb;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getPostcode()
    {
        return $this->postcode;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function getLastCheck()
    {
        return $this->lastCheck;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
        return $this;
    }

    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function setLastCheck($lastCheck)
    {
        $this->lastCheck = $lastCheck;
        return $this;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

}
