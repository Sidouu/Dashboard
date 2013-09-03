<?php

namespace BO\BackOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bill
 */
class Bill
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $billNumber;

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
     * @var datetime $payDate
     *
     * @ORM\Column(name="payDate", type="datetime")
     */
    private $payDate;

    /**
     * @ORM\ManyToOne(targetEntity="Customer")
     * @ORM\JoinColumn(name="customerId", referencedColumnName="id")
     */
    private $customer;


    public function __construct()
    {
        $this->createdDate = new \Datetime();
        $datetime = new \Datetime();
        $this->payDate = $datetime->modify('+1 months');
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
     * Set content
     *
     * @param string $content
     * @return Bill
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
     * @return Bill
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
     * Set billNumber
     *
     * @param integer $billNumber
     * @return Bill
     */
    public function setBillNumber($billNumber)
    {
        $this->billNumber = $billNumber;
    
        return $this;
    }

    /**
     * Get billNumber
     *
     * @return integer 
     */
    public function getBillNumber()
    {
        return $this->billNumber;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     */
    public function setCreatedDate(\Datetime $createdDate)
    {
        $this->createdDate = $createdDate;
    }

    /**
     * Get createdDate
     *
     * @return datetime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set payDate
     *
     * @param datetime $payDate
     */
    public function setPayDate(\Datetime $payDate)
    {
        $this->payDate = $payDate;
    }

    /**
     * Get payDate
     *
     * @return datetime
     */
    public function getPayDate()
    {
        return $this->payDate;
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