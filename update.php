<?php 
//connection
include "connect.php";
 
// data
$id = $_POST["id"];
$name = $_POST["nama"];
$age = $_POST["umur"];
 
//query for update-data
mysqli_query($konek,"update kontak set nama='$name', umur='$age' where id='$id'");
 
//back to index
header("location:index.php");
 
?>