<?php
$aModule = array(
    'id'           => 'alsobought_basket',
    'title'        => 'Also Bought in Basket',
    'version'     => '1.0.1',
    'url'         => 'http://zunderweb.de',
    'email'       => 'info@zunderweb.de',
    'author'      => 'Zunderweb',
    'extend' => array(
        'basket' => 'alsobought_basket/controllers/alsobought_basket_basket',
    ),
    'blocks' => array(
        array('template' => 'page/checkout/basket.tpl', 'block'=>'checkout_basket_main', 'file'=>'alsobought_basket_basket.tpl'),
    ),
);