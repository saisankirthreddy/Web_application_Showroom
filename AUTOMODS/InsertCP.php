<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','automods');

// get the post records
$name = $_POST['name'];
$address = $_POST['address'];
$phnum = $_POST['phnum'];
$email = $_POST['email'];
$stype = $_POST['stype'];

// database insert SQL code
$sql = "INSERT INTO automods.customerdetails (Name, Address, Phone, EmailID, Purpose) VALUES ('$name', '$address', '$phnum', '$email', '$stype')";
//$rs = mysqli_query($con, $sql);


if ($con->query($sql) === TRUE) {
  $CustomerID = $con->insert_id;
  echo "Submitted Succesfully and CustomerID is " . $CustomerID;
} 
else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>


