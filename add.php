<?php
//connection
include "connect.php";

//data
$name = $_POST['nama'];
$age = $_POST['umur'];

//query for insert-data
$add = mysqli_query($konek, "insert into kontak values('', '$name', '$age')");

// if ($add) {
//     echo "success!";
// }else{
//     echo "error";
// }

//back to index
header("location:index.php");

?>