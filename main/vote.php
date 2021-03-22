<?php include "db.php" ?>
<?php include "functions.php"; ?>
<?php

if (!empty($_POST)) {

  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $cnic = mysqli_real_escape_string($connection, $_POST['cnic']);
  $location = mysqli_real_escape_string($connection, $_POST['location']);
  $party = mysqli_real_escape_string($connection, $_POST['party']);

  $cnic = str_replace('-', '', $cnic);
  $ip = get_client_ip();

  if (cnicExists($cnic)) {
    echo "User with this CNIC already voted0";
  } else {
    addVote($name, $cnic, $location, $party, $ip);
    echo "Vote Submitted Successfully!";
  }
}
