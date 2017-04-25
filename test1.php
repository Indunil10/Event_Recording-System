<?php
$servername = "localhost";
$username = "Indunil";
$password = "56964";
$dbname = "Northwind";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT CNAME FROM customers";
$result = $conn->query($sql);

$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

for ($x=0;$x<count($outp);$x++)
{
	echo json_encode($outp[$x]);
	echo "</br>";

}

/*if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name :" . $row["CNAME"]. "<br>";
    }
} else {
    echo "0 results";
}*/


$conn->close();
?>