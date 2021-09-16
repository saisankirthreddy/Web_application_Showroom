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

$sql = "SELECT * FROM servicesdetails JOIN servicediscounts ON servicediscounts.ServiceID=servicesdetails.ServiceID GROUP BY servicesdetails.ServiceID"; 
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>ServiceName</th>
<th>AmountCharged</th>
<th>ServiceType</th>
<th>ServiceID</th>
<th>CustomerID</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["ServiceName"]. "</td><td>" . $row["AmountCharged"]."</td><td>" . $row["ServiceType"]."</td><td>" . $row["ServiceID"]."</td><td>" . $row["CustomerID"].  "</td></tr><br>";
  }
} else {
  echo "0 results";
}

echo "<a href=http://localhost/Services.html><button>Go Back</button></a><br><br>";
$conn->close();
?>