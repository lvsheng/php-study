<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/20
 * Time: 10:05
 */

namespace inherit;

class ShopProductWriter {
    public $products = array();

    public function addProduct(ShopProduct $shopProduct) {
        $this->products[] = $shopProduct;
    }

    public function write() {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= $shopProduct->getSummaryLine()."\n";
        }
        print $str;
    }
}
