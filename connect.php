<?php

$konek = mysqli_connect("localhost", "root", "", "test");

if (mysqli_connect_errno()) {
    echo "gagal om: " . mysqli_connect_error();
}
?>