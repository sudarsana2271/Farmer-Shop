<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "farmer shop";

$conn = mysqli_connect($servername, $username, $pass, $dbname);

if(!$conn){
    die("Detabase Error");
}

$product_id = "1";
$name = "";
$description = "";
$price = "";
$category = "";
$image_url= "";
$stock_quantity ="";


$sql="INSERT INTO student(product_id, name, description, price, category, image_url, stock_quantity) VALUE('$product_id', '$name', '$description', '$price', '$category', '$image_url', '$stock_quantity')";
if(mysqli_query($conn,$sql)){

    echo"Submitted Succesfully!";

}
else{
    echo"Error :".$sql."<br>";
}
?>