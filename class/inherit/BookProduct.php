<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/19
 * Time: 11:15
 */

namespace inherit;

class BookProduct extends ShopProduct{
    private $numPages = 0;

    /**
     * @param string $title
     * @param string $producerFirstName
     * @param string $producerMainName
     * @param number $price
     * @param $numPages
     */
    function __construct($title, $producerFirstName, $producerMainName, $price, $numPages)
    {
        parent::__construct($title, $producerFirstName, $producerMainName, $price);
        $this->$numPages = $numPages;
    }

    /**
     * @return int
     */
    public function getNumPages()
    {
        return $this->numPages;
    }

    /**
     * @return string
     */
    public function getSummaryLine()
    {
        $base = parent::getSummaryLine();
        $base .= ": page count - {$this->getNumPages()}";
        return $base;
    }

    /**
     * @override BookProduct没有折扣，价格直接返回
     * @return number
     */
    public function getPrice()
    {
        return $this->price;
    }
}