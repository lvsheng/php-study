<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/17
 * Time: 14:25
 */

require_once("ShopProduct.php");
require_once("ShopProductWriter.php");

//correct:
$product = new ShopProduct("铅笔", 2);
$writer = new ShopProductWriter();
$writer->write($product);

//wrong:
class Wrong { }
$writer->write(new Wrong());
