<?php
$mysqli = new mysqli("localhost", "root", "", "Automods");
  
if($mysqli === false){
    die("ERROR: Could not connect. "
            . $mysqli->connect_error);
}

$CustomerID = $_POST['CustomerID'];
  
$sql = "DELETE FROM `customerdetails` WHERE `CustomerID`='$CustomerID'";
if($mysqli->query($sql) === true){
    echo '<script>alert("Record was updated successfully")</script>';
} else{
    echo '<script>alert("ERROR: Could not able to execute $sql. " 
                                        . $mysqli->error)</script>';
}
$mysqli->close();
?>