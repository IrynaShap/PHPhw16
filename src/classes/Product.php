<?php
require_once 'LoggingTrait.php';

class Product
{
	use LoggingTrait;

	public function addProduct($product): void
	{
		$this->log("Added product: $product");
	}
}
