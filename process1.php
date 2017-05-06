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
$fullname=$_POST['fullname'];
$password=$_POST['password'];
$sql = "SELECT * FROM donorlogin where fullname='$fullname' and password='$password' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table><tr><th>fullname</th><th>emailid</th><th>dob</th><th>weight</th><th>gender</th><th>bloodgroup</th><th>contactname</th><th>contactemailid</th><th>contactnumber</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["fullname"]. "</td><td>" . $row["emailid"]. "</td><td>" . $row["dob"]. "</td><td>" . $row["weight"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["bloodgroup"]. "</td><td>" . $row["contactname"]. "</td><td>" . $row["contactemailid"]. "</td><td>" . $row["contactnumber"]. "</td><td>" . "</td></tr>";
     }
     echo "</table>";
  
} else {
     echo "No any Details Exist";
}
$conn->close();
?>  


</body>
</html>