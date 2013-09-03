<?php

namespace BO\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quote
 */
class Quote
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quoteNumber;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $price;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="createdDate", type="datetime")
     */
    private $createdDate;

    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customerId", referencedColumnName="id")
     */
    private $customer;


    public function __construct()
    {
        $this->createdDate = new \Datetime();
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
     * Set quoteNumber
     *
     * @param integer $quoteNumber
     * @return Quote
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->quoteNumber = $quoteNumber;
    
        return $this;
    }

    /**
     * Get quoteNumber
     *
     * @return integer 
     */
    public function getQuoteNumber()
    {
        return $this->quoteNumber;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Quote
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Quote
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     * @return Quote
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
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
