<?php

namespace TomekWlod\Geocoder\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(collection="twl__location")
 * @MongoDB\Indexes({
 *     @MongoDB\Index(keys={"name"="asc"}),
 *     @MongoDB\Index(keys={"geocoderErrors"="asc"}),
 *     @MongoDB\Index(keys={"createdAt"="desc"})
 * })
 */
class Location
{
    /**
     * @MongoDB\Id
     */
    protected $id;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $thumb;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $country;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $city;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $street;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $postcode;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $state;
    
    /**
     * @MongoDB\Field(type="string")
     */
    protected $region;
    
    /**
     * @MongoDB\Field(type="float")
     */
    protected $latitude;
    
    /**
     * @MongoDB\Field(type="float")
     */
    protected $longitude;
    
    /**
     * @MongoDB\Field(type="date")
     */
    protected $lastCheck;
    
    /**
     * @MongoDB\Field(type="int")
     */
    protected $geocoderErrors;
    
    /**
     * @MongoDB\Field(type="date")
     */
    protected $createdAt;
    
    public function getId()
    {
        return $this->id;
    }

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

    public function getGeocoderErrors()
    {
        return $this->geocoderErrors;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
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

    public function setGeocoderErrors($geocoderErrors)
    {
        $this->geocoderErrors = $geocoderErrors;
        return $this;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }



}
