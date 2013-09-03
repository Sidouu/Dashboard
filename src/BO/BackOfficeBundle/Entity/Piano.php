<?php

namespace BO\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Piano
 */
class Piano
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $number;

    /**
     * @var float
     */
    private $repairPrice;

    /**
     * @var integer
     */
    private $steelStrings;

    /**
     * @var integer
     */
    private $spunStrings;

    /**
     * @var \DateTime
     */
    private $stringDate;

    /**
     * @var float
     */
    private $stringPrice;

    /**
     * @var \DateTime
     */
    private $quoteDate;

    /**
     * @var \DateTime
     */
    private $repairDate;

    /**
     * @var float
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customerId", referencedColumnName="id")
     */
    private $customer;


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
     * Set name
     *
     * @param string $name
     * @return Piano
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Piano
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Piano
     */
    public function setModel($model)
    {
        $this->model = $model;
    
        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Piano
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set repairPrice
     *
     * @param float $repairPrice
     * @return Piano
     */
    public function setRepairPrice($repairPrice)
    {
        $this->repairPrice = $repairPrice;
    
        return $this;
    }

    /**
     * Get repairPrice
     *
     * @return float 
     */
    public function getRepairPrice()
    {
        return $this->repairPrice;
    }

    /**
     * Set steelStrings
     *
     * @param integer $steelStrings
     * @return Piano
     */
    public function setSteelStrings($steelStrings)
    {
        $this->steelStrings = $steelStrings;
    
        return $this;
    }

    /**
     * Get steelStrings
     *
     * @return integer 
     */
    public function getSteelStrings()
    {
        return $this->steelStrings;
    }

    /**
     * Set spunStrings
     *
     * @param integer $spunStrings
     * @return Piano
     */
    public function setSpunStrings($spunStrings)
    {
        $this->spunStrings = $spunStrings;
    
        return $this;
    }

    /**
     * Get spunStrings
     *
     * @return integer 
     */
    public function getSpunStrings()
    {
        return $this->spunStrings;
    }

    /**
     * Set stringDate
     *
     * @param \DateTime $stringDate
     * @return Piano
     */
    public function setStringDate($stringDate)
    {
        $this->stringDate = $stringDate;
    
        return $this;
    }

    /**
     * Get stringDate
     *
     * @return \DateTime 
     */
    public function getStringDate()
    {
        return $this->stringDate;
    }

    /**
     * Set stringPrice
     *
     * @param float $stringPrice
     * @return Piano
     */
    public function setStringPrice($stringPrice)
    {
        $this->stringPrice = $stringPrice;
    
        return $this;
    }

    /**
     * Get stringPrice
     *
     * @return float 
     */
    public function getStringPrice()
    {
        return $this->stringPrice;
    }

    /**
     * Set quoteDate
     *
     * @param \DateTime $quoteDate
     * @return Piano
     */
    public function setQuoteDate($quoteDate)
    {
        $this->quoteDate = $quoteDate;
    
        return $this;
    }

    /**
     * Get quoteDate
     *
     * @return \DateTime 
     */
    public function getQuoteDate()
    {
        return $this->quoteDate;
    }

    /**
     * Set repairDate
     *
     * @param \DateTime $repairDate
     * @return Piano
     */
    public function setRepairDate($repairDate)
    {
        $this->repairDate = $repairDate;
    
        return $this;
    }

    /**
     * Get repairDate
     *
     * @return \DateTime 
     */
    public function getRepairDate()
    {
        return $this->repairDate;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Piano
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set customer
     *
     * @param BO\BackOfficeBundle\Entity $customer
     */
    public function setCustomer(\BO\BackOfficeBundle\Entity\Customer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Get customer
     *
     * @return BO\BackOfficeBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}