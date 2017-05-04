<html>
<head>
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
$patientname=$_POST['patientname'];
$bloodgroup=$_POST['bloodgroup'];
$city = $_POST['city'];
$hospitalname = $_POST['hospitalname'];
$doctorname = $_POST['doctorname'];
$contactname = $_POST['contactname'];
$contactemailid = $_POST['contactemailid'];
$contactnumber = $_POST['contactnumber'];
$othermessage = $_POST['othermessage'];


$sql = "INSERT INTO bloodrequest(patientname,bloodgroup,city,hospitalname,doctorname,contactname,contactemailid,contactnumber,othermessage) VALUES('$patientname', '$bloodgroup', '$city', '$hospitalname', '$doctorname','$contactname','$contactemailid','$contactnumber','$othermessage');";
    
if ($conn->query($sql) === TRUE) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('details created')
    window.location.href='3.php'
    </SCRIPT>");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
<br><br><br>

</body>
</html>