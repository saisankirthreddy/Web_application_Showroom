<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "automods";

// Create connection
$conn = mysqli_connect('localhost', $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `billinginformation` WHERE `BillingID`=54"; 
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>BillingID</th>
<th>Purpose</th>
<th>Name</th>
<th>CustomerID</th>
<th>Address</th>
<th>Phone</th>
<th>EmailID</th>
<th>TotalAmount</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["BillingID"]. "</td><td>" . $row["Purpose"]."</td><td>" . $row["Name"]."</td><td>" . $row["CustomerID"]."</td><td>" . $row["Address"]."</td><td>" . $row["Phone"]. "</td><td>" . $row["EmailID"]."</td><td>" . $row["TotalAmount"]. "</td></tr><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>