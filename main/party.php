<?php include "db.php" ?>
<?php include "functions.php"; ?>

<?php

if (!empty($_POST)) {

  $flag = $_FILES['flag']['name'];
  $symbol = $_FILES['symbol']['name'];
  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $leader = mysqli_real_escape_string($connection, $_POST['leader']);

  if (!empty($flag) && !empty($symbol) && !empty($name) && !empty($leader)) {
    $upload_path = "../assets/img/";

    $flag_file_name = $_FILES['flag']['name'];
    $symbol_file_name = $_FILES['symbol']['name'];

    $flag_UploadPath = $upload_path . $flag_file_name;
    $symbol_UploadPath = $upload_path . $symbol_file_name;

    $flag_file_type = pathinfo($flag_UploadPath, PATHINFO_EXTENSION);
    $symbol_file_type = pathinfo($symbol_UploadPath, PATHINFO_EXTENSION);

    $allowTypes = ['jpg', 'png', 'jpeg', 'gif'];

    $flag_tmp_name = $_FILES['flag']['tmp_name'];
    $symbol_tmp_name = $_FILES['symbol']['tmp_name'];

    $query = "INSERT INTO parties(name,leader,flag,symbol) VALUES('$name','$leader','$flag','$symbol')";
    $result = mysqli_query($connection, $query);

    confirmQuery($result);

    move_uploaded_file($flag_tmp_name, $flag_UploadPath);
    move_uploaded_file($symbol_tmp_name, $symbol_UploadPath);

    echo "Party added successfully!";
  } else {
    echo "please fill all fields0";
  }
}
