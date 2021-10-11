<?php
        $conn = mysqli_connect('127.0.0.1','root','','belajar');
        if (mysqli_connect_error()) {
            printf ('Connection Failed: ' . mysqli_connect_error());
            exit();
        }
     ?>