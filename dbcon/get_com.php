<?php

include'db.php';
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $option = mysqli_real_escape_string($conn, $_POST['option']);
    $ip = mysqli_real_escape_string($conn, $_POST['ip']);
    
    $sql = "INSERT INTO commond (name, city, phone, option, ip) VALUES ('$name', '$city', '$phone', '$option', '$ip')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Comment added successfully";
        header("Location: https://janabio.com/thankyou");
exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
