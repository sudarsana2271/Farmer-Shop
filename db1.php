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
echo"Connected"; 

// $name=$_POST['Name'];
// $email=$_POST['Email'];
// $pass=$_POST['Pass'];
// $conf=$_POST['Confirm'];

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$conf=$_POST['confirm'];

$sql="SELECT * FROM `loginid`WHERE`email`!='$email'";
$result = mysqli_query($conn,$sql);
if($result){
    $sql1="INSERT INTO `loginid` (`name`,`email`,`pass`,`confirm`)VALUES ('$name','$email','$pass','$conf')";
    $result1= mysqli_query($conn,$sql1);


if($result1){
    echo "Record Inserted";
}
else{
    echo "Record is not Inserted" .mysqli_error($conn);
}
}
}
?>