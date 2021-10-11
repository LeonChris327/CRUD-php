<?php
include './connection.php';

$id = $_GET['id'];

$sql = "delete from students where id = $id";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("location: /php/index.php");
     }
 else {
     echo ("Failed Delete Student: " . mysqli_error($conn));
     exit();
     }




?>