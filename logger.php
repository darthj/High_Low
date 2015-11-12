<?php

function logMessage($logLevel, $message)
{
    $today = date("Y-m-d");
    $filename = 'log-'.$today.'.log';
	$todayLog = date("Y-m-d h:i:s");
    $handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL.$todayLog.' '.$logLevel.' '.$message.PHP_EOL);
    fclose($handle);
}

function logInfo($message){
	logMessage("INFO",$message);
}
function logError($message){
	logMessage("ERROR",$message);
}


	logInfo("This is an info message.");
	logError("This is an error message.");
	


