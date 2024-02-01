<?php

trait LoggingTrait
{
	public function log($message): void
	{
		echo "[LOG] " . date('Y-m-d H:i:s') . " - " . $message . "\n";
	}
}
