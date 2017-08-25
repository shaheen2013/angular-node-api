<?php
//https://p3nlmysqladm001.secureserver.net/nl41/15/index.php
$c_hostname = 'mysql1324int.cp.hostnet.nl';
$c_dbname   = 'db289525_bfcalculator';
$c_username = 'u289525_JoramK';
$c_password ='Freelancer001';

error_reporting(E_ALL ^ E_DEPRECATED);
$con = mysqli_connect($c_hostname, $c_username, $c_password) or DIE('Connection to host is failed, perhaps the service is down!');


$cdir = getcwd();
echo $cdir;
?> 