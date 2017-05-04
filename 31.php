<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4CAF50;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 4px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
h2 {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
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
<body background-color=blue>
<ul>
  <div>
<li><a href="homepage.htm"><h4 class="h3" style="float:left">HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a></li>
<li><a href="staff.htm"><h4 class="h3" style="float:left">STAFF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a><li>
<li><a href="medicine.htm"><h4 class="h3" style="float:left">MEDICINE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4></a></li>
<li><a href="customer.htm" target="blank"><h3 class="h2" style="float:left">CUSTOMER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></a></li>
<li><a href="sellers.php"><h4 class="h2" style="float:left">SELLERS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></a></li>
<li><a href="billing.php"><h4 class="h2" style="float:left">BILLING&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h4></a></li>
</div>
 <li class="dropdown">
    <h4><a href="#" class="dropbtn">SALES</a></h4>
    <div class="dropdown-content">
      <a href="sales.php"><b>Daily Sales</b></a>
      <a href="sales2.php"><b>Monthly Sales</b></a>
      <a href="sales3.php"><b>Yearly Sales</b></a>
    </div>
  <li class="dropdown">
    <h4><a href="#" class="dropbtn">Options</a></h4>
    <div class="dropdown-content">
      <a href="logout.php"><b>Logout</b></a>
      <a href="homepage.htm"><b>Homepage</b></a>
      <a href="login.php"><b>Redirect to login page</b></a>
    </div>
  </li>
</ul>
</div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM medicine";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     echo "<table><tr><th>Medicine ID</th><th>Medicine Name</th><th>Rack no.</th><th>Cabinet no.</th><th>Company Name</th><th>Supplier Name</th><th>Address</th><th>Unit cost</th><th>Sale cost</th><th>Quantity</th><th>MFG. Date</th><th>EXP. Date</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["id"]. "</td><td>" . $row["mname"]. "</td><td>" . $row["rack"]. "</td><td>" . $row["cabinet"]. "</td><td>" . $row["cname"]. "</td><td>" . $row["sname"]. "</td><td>" . $row["address"]. "</td><td>" . $row["ucost"]. "</td><td>" . $row["scost"]. "</td><td>" . $row["quantity"]. "</td><td>" . $row["mdate"]. "</td><td>" . $row["edate"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "Not Available";
}
$conn->close();
?>  

</body>
</html>