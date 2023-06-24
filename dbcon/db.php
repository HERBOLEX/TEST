<?php
    
    // Create connection
    $conn = mysqli_connect('localhost', 'u931942930_janabio', 'Cajjaou@123', 'u931942930_janabio');
    
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
