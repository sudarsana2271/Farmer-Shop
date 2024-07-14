<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "database1";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if(!$conn){
    die("Database Error".mysqli_connect_error());
}
else{
echo
"Connected";
}

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM `loginid`WHERE`email`='$email'";
$sql1="SELECT * FROM `loginid`WHERE`password`='$password'";

$result = mysqli_query($conn,$sql);
$result1 = mysqli_query($conn,$sql1);

if($result && $result1){
    echo " Login Successfully <a href='index.html' >Home</a>";
}
else{
    echo "Error in Credential";

}



?>