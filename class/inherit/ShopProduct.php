<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/19
 * Time: 10:28
 */

namespace inherit;

/**
 * 商品基类
 * Class ShopProduct
 * @package inherit
 */
class ShopProduct {
    private $title;
    private $producerMainName;
    private $producerFirstName;
    protected $price;
    private $discount = 0;

    /**
     * @param string $title
     * @param string $producerFirstName
     * @param string $producerMainName
     * @param number $price
     */
    function __construct($title, $producerFirstName, $producerMainName, $price)
    {
        $this->title = $title;
        $this->producerFirstName = $producerFirstName;
        $this->producerMainName = $producerMainName;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getProducerMainName()
    {
        return $this->producerMainName;
    }

    /**
     * @return string
     */
    public function getProducerFirstName()
    {
        return $this->producerFirstName;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return number
     */
    public function getPrice()
    {
        return $this->price - $this->discount;
    }

    /**
     * @return string
     */
    public function getProducer()
    {
        return "{$this->getProducerFirstName()}"."{$this->getProducerMainName()}";
    }

    /**
     * @return string
     */
    public function getSummaryLine()
    {
        $base = "{$this->getTitle()} ( {$this->getProducerMainName()}, ";
        $base .= "{$this->getProducerFirstName()} )";
        return $base;
    }
}
