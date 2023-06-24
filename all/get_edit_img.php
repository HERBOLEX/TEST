<?php
    include '../dbcon/db.php';


    $url_img = mysqli_real_escape_string($conn, $_POST['url_img']);
    $img_alt = mysqli_real_escape_string($conn, $_POST['img_alt']);
    
    $sql = "INSERT INTO `editimgs`(url_img, img_alt) VALUES ('$url_img', '$img_alt')";
    
    if (mysqli_query($conn, $sql)) {
        echo "تم إضافة الصورة بنجاح";
        header("Location:/page/mini-mixeur/admin/editimg.php");
exit();

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

?>