<?php

function confirmQuery($result)
{
  global $connection;
  if (!$result) {
    die("Query Failed...: " . mysqli_error($connection));
  }
}

function cnicExists($cnic)
{
  global $connection;
  $query = "SELECT cnic FROM votes WHERE cnic = '$cnic'";
  $result = mysqli_query($connection, $query);
  confirmQuery($result);

  if (mysqli_num_rows($result) > 0)   //means there is user with cnic
    return true;
  else
    return false;
}

function addVote($name, $cnic, $location, $party, $ip)
{
  global $connection;

  $query = "INSERT INTO votes(name,cnic,city,party,ip) VALUES('$name','$cnic','$location','$party','$ip')";

  $result = mysqli_query($connection, $query);
  confirmQuery($result);
}

function get_client_ip()
{
  $ipaddress = '';
  if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
  else if (getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
  else if (getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
  else if (getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
  else if (getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
  else if (getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
  else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
  else if (isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
  else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
  else if (isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
  else if (isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
  else
    $ipaddress = 'UNKNOWN';
  return $ipaddress;
}
