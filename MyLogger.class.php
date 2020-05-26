<?php

class MyLogger {
	
	public function log($message)
	{
		echo $message.PHP_EOL;
	}
	
}

$logs = new MyLogger();
$logs -> log("Hi");

?>