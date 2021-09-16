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
$Company = $_POST['Company'];
$sql = "SELECT * FROM `cardetails` WHERE Company='$Company'"; 
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Model</th>
<th>Company</th>
<th>Chassis Number</th>
<th>Price</th>
<th>Type</th>
<th>Release Year</th>
</tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Model"]. "</td><td>" . $row["Company"]."</td><td>" . $row["ChassisNumber"]."</td><td>" . $row["Price"]."</td><td>" . $row["Type"]."</td><td>" . $row["ReleaseYear"].  "</td></tr><br>";
  }
} else {
  echo "0 results";
}
echo "<a href=http://localhost/billing_information.html><button>Continue</button></a><br><br>";
echo "<a href=http://localhost/Min_Max.php><button>Min and Max Prices</button></a><br><br>";
$conn->close();
?>