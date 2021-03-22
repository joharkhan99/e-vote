<?php 

$db='e-vote';
$user='root';
$pass='';
$host='localhost';

$connection=mysqli_connect($host,$user,$pass,$db);

if(!$connection){
  die("Sorry Connection to Database Failed");
}
