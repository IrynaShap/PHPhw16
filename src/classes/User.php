<?php
require_once 'LoggingTrait.php';

class User
{
	use LoggingTrait;

	public function createUser($username): void
	{
		$this->log("Created user: $username");
	}
}
