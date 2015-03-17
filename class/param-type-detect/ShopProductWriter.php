<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/17
 * Time: 14:23
 */

class ShopProductWriter {
    public function write (ShopProduct $product) {
        $str = "{$product->getTitle()}: ".
            "{$product->getPrice()}.\n";
        print $str;
    }
}
