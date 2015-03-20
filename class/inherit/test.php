<?php
/**
 * Created by PhpStorm.
 * User: lvsheng
 * Date: 2015/3/17
 * Time: 14:25
 */

require_once("ShopProduct.php");
require_once("BookProduct.php");
require_once("CdProduct.php");
require_once("ShopProductWriter.php");

$writer = new \inherit\ShopProductWriter();
$writer->addProduct(new \inherit\BookProduct("《坏蛋是怎样炼成的》", "mike", "john", 3, 10));
$writer->addProduct(new \inherit\CdProduct("celebrate", "json", "john", 2, 60));
$writer->write();
