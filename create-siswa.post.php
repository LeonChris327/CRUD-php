<?php
include './connection.php';
$name = $_POST['name'];
$address = $_POST['address'];

$sql = "
    insert into students(name, address)
    values ('$name', '$address');


";
$result = mysqli_query($conn, $sql);
if ($result) {
   header("location: /php/index.php");
    }
else {
    echo ("Failed Create Student: " . mysqli_error($conn));
    exit();
    }

?>