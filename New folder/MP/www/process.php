<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$bloodgroup=$_POST['bloodgroup'];
$city=$_POST['city'];
$sql = "SELECT * FROM bloodrequest where bloodgroup='$bloodgroup' and city='$city' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table><tr><th>BLOOD GROUP</th><th>CITY</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["bloodgroup"]. "</td><td>" . $row["city"]. "</td></tr>";
     }
     echo "</table>";
  
} else {
     echo "No any Details Exist";
}
$conn->close();
?>  


</body>
</html>