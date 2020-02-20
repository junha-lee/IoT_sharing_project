<?php
$username = 'root';
$pass = 'admin';
$ip = 'localhost';
$dbname = 'apimarket';

$connection_string = "Driver={SQL Server};Server=".$ip.";Database=".$dbname;
$conn = odbc_connect($connection_string,$username,$pass);
?>