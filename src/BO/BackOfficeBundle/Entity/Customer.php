<?php

namespace BO\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Customer
 */
class Customer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var \DateTime
     */
    private $nextVisit;

    /**
     * @var string
     */
    private $tour;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $locality;

    /**
     * @var integer
     */
    private $postalCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var \DateTime
     */
    private $lastVisit;

    /**
     * @var integer
     */
    private $homePhone;

    /**
     * @var integer
     */
    private $workPhone;

    /**
     * @var integer
     */
    private $mobilePhone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $job;

    /**
     * @var string
     */
    private $notes;


    public function __toString()
    {
        return $this->lastName." ".$this->firstName;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Customer
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set nextVisit
     *
     * @param \DateTime $nextVisit
     * @return Customer
     */
    public function setNextVisit($nextVisit)
    {
        $this->nextVisit = $nextVisit;
    
        return $this;
    }

    /**
     * Get nextVisit
     *
     * @return \DateTime 
     */
    public function getNextVisit()
    {
        return $this->nextVisit;
    }

    /**
     * Set tour
     *
     * @param string $tour
     * @return Customer
     */
    public function setTour($tour)
    {
        $this->tour = $tour;
    
        return $this;
    }

    /**
     * Get tour
     *
     * @return string 
     */
    public function getTour()
    {
        return $this->tour;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set locality
     *
     * @param string $locality
     * @return Customer
     */
    public function setLocality($locality)
    {
        $this->locality = $locality;
    
        return $this;
    }

    /**
     * Get locality
     *
     * @return string 
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     * @return Customer
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Customer
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set lastVisit
     *
     * @param \DateTime $lastVisit
     * @return Customer
     */
    public function setLastVisit($lastVisit)
    {
        $this->lastVisit = $lastVisit;
    
        return $this;
    }

    /**
     * Get lastVisit
     *
     * @return \DateTime 
     */
    public function getLastVisit()
    {
        return $this->lastVisit;
    }

    /**
     * Set homePhone
     *
     * @param integer $homePhone
     * @return Customer
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;
    
        return $this;
    }

    /**
     * Get homePhone
     *
     * @return integer 
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set workPhone
     *
     * @param integer $workPhone
     * @return Customer
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
    
        return $this;
    }

    /**
     * Get workPhone
     *
     * @return integer 
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Set mobilePhone
     *
     * @param integer $mobilePhone
     * @return Customer
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    
        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return integer 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set job
     *
     * @param string $job
     * @return Customer
     */
    public function setJob($job)
    {
        $this->job = $job;
    
        return $this;
    }

    /**
     * Get job
     *
     * @return string 
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Customer
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    
        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }
}