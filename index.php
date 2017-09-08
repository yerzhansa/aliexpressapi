<?php
namespace Main;

//use AliExpressApi\Aliexpress;


require_once ('vendor/autoload.php');

$obj = new \AliExpressApi\AliExpress();
$obj->setFields('productUrl,imageUrl,localPrice,productId');
$obj->setAppKey(73815);
$result = $obj->getListPromotionProduct('car');


print_r($result);