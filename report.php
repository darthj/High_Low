<?php
function monthlyReport($filename)
{
    $report = array();
    $handle = fopen($filename, 'r');
    $reportInfo = trim(fread($handle, filesize($filename)));
    $reportInfoArray = explode(PHP_EOL, $reportInfo);
    
    //this shifts off the cruft
    for($i=0; $i<=5; $i++){
    	$cruft[]= array_shift($reportInfoArray);
    }

    //this explodes array by commas and then assigns keys
    foreach($reportInfoArray as $value){
    	$cruftless = explode(', ', $value);
    	$eeNumber = $cruftless[0];
    	$firstName = $cruftless[1];
    	$lastname = $cruftless[2];
    	$fullname = $firstName. " ".$lastname;
    	$sales = $cruftless[3];
    	$report[]= [
    		'units' => $sales,
    		'fullname' => $fullname,
    		'employeeNumber' => $eeNumber
    	];
    	arsort($report);
    }
	fclose($handle);
    array_unshift($report,['Units','Full Name', 'EE Number']);
    return $report;
}

var_dump(monthlyReport('data/report.txt'));

function displayReport($filename)
foreach($report as $value){

}