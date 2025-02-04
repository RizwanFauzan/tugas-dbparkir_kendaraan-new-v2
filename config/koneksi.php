<?php
$conn= mysqli_connect(
    "localhost",
    "root",
    "",
    "dbparkir_kendaraan_"
);

if(!$conn){
    die("connection is fail" . mysqli_connect_error());
}