<?php
$serverName="tcp:applicationtest.database.windows.net";
$connectionOptions = array(  
"Database" => "ApplicationTest",  
"UID" => "DemoTest",  
"PWD" => "Test");
$conn = sqlsrv_connect($serverName, $connectionOptions);
?>
