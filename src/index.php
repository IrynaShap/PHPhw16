<?php
require_once 'classes/User.php';
require_once 'classes/Product.php';

$user = new User();
$user->createUser('John Doe');

$product = new Product();
$product->addProduct('Apple');