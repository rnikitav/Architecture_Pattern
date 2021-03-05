<?php
spl_autoload_register(function ($classname){
   require_once $classname . '.php';
});

$orders = [];

array_push($orders, new Order());
array_push($orders, new Order());

$collection = new OrdersCollection($orders);
$paymentMethod = (new PayMethodsCollection())->getPaymentMethod('YandexMoney');
echo $collection->pay($paymentMethod);
