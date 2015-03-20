<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/19
 * Time: 11:00
 */

namespace inherit;

class CdProduct extends ShopProduct{
    private $playLength = 0;

    /**
     * @param string $title
     * @param string $producerFirstName
     * @param string $producerMainName
     * @param number $price
     * @param $playLength
     */
    function __construct($title, $producerFirstName, $producerMainName, $price, $playLength)
    {
        parent::__construct($title, $producerFirstName, $producerMainName, $price);
        $this->$playLength = $playLength;
    }

    /**
     * @return int
     */
    public function getPlayLength()
    {
        return $this->playLength;
    }

    /**
     * @return string
     */
    public function getSummaryLine()
    {
        $base =  parent::getSummaryLine();
        $base .= ": playing time - {$this->getPlayLength()}";
        return $base;
    }
}
