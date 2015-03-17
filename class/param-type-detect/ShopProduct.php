<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/17
 * Time: 14:15
 */

class ShopProduct {
    private $title = '';
    private $price = 0;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function getTitle () {
        return $this->title;
    }
    public function getPrice () {
        return $this->price;
    }
} 