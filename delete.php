<?php

//connection
include "connect.php";

//data
$id = $_GET["id"];

//query for delete-data
mysqli_query($konek, "delete from kontak where id='$id'");

//back to index
header("location:index.php");

?>