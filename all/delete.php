<?php  
    include '../dbcon/db.php';

    if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete=mysqli_query($conn, "DELETE FROM `editimgs` WHERE `id`=$id");
}
header("location:editimg.php");
