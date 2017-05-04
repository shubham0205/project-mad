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
$fullname=$_POST['fullname'];
$emailid=$_POST['emailid'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$dob = $_POST['dob'];
$weight = $_POST['weight'];
$gender = $_POST['gender'];
$bloodgroup = $_POST['bloodgroup'];
$contactname = $_POST['contactname'];
$contactemailid = $_POST['contactemailid'];
$contactnumber = $_POST['contactnumber'];

$sql = "INSERT INTO donorlogin (fullname,emailid,password,confirmpassword,dob,weight,gender,bloodgroup,contactname,contactemailid,contactnumber) VALUES('$fullname', '$emailid', '$password', '$confirmpassword', '$dob', '$weight', '$gender', '$bloodgroup', '$contactname','$contactemailid','$contactnumber');";
    
if ($conn->query($sql) === TRUE) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('details created')
    window.location.href='2.html'
    </SCRIPT>");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
<br><br><br>

</body>
</html>