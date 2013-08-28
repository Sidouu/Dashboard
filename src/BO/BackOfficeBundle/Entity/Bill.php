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
    private $client;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $price;


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
     * Set client
     *
     * @param string $client
     * @return Bill
     */
    public function setClient($client)
    {
        $this->client = $client;
    
        return $this;
    }

    /**
     * Get client
     *
     * @return string 
     */
    public function getClient()
    {
        return $this->client;
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
}
