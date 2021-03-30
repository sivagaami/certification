<html>
<head><title>CERTIFICATION</title></head>
<body bgcolor="pink">
<div class="img-container1"> <!-- Block parent element -->
    </div>


<?php
 $dbserver = "35.232.10.42";
$dbuser = "web-db-user";
$dbpassword = "root";
$database = "registrationdb";
// In a production blog, we would not store the MySQL
// password in the document root. Instead, we would store it in a
// configuration file elsewhere on the web server VM instance.

$conn = new mysqli($dbserver, $dbuser, $dbpassword,$database);

if (mysqli_connect_error()) {
        echo ("Database connection failed: " . mysqli_connect_error());
} else {
        echo ("Database connection succeeded.");
}
if(isset($_POST['submit']))
{    
     $t1 = $_POST['t1'];
     $t2 = $_POST['t2'];
     $s1 = $_POST['s1'];
   $t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = $_POST['t5'];
$t7 = $_POST['t7'];
$t8 = $_POST['t8'];
$t6 = $_POST['t6'];
$to = $_POST['t10'];
//$to = "damodharanvijay@yahoo.in";
$subject = "Confirmation Mail";
$txt = "Registration sucess!!";
$headers = "From: 15madhumitha.r@gmail.com" . "\r\n" .
	        "CC: 15madhumitha.r@gmail.com";

     $sql = "INSERT INTO details (Empname,
  Empid  ,
  CSP  ,
 Certilevel  ,
  Certiname ,
  Certiid  ,
  Date  ,
 Expiry ,
 Validity)
     VALUES ('$t1','$t2','$s1','$t3','$t4','$t5','$t7','$t8','$t6')";
     if (mysqli_query($conn, $sql)) {
	     mail($to,$subject,$txt,$headers);
        header("Location: main1.html");
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
</body></html>
           
