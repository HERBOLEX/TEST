<?php 
    $title = "مطحنة كهربائية لاسلكية متعدد الوظائف.";
    $btn0 = "الطلبات";
    $btn1 = "تعديل الصور ";
    $btn2 = "تعديل الفورم - Form";
    $btn3 = "تعديل الأسئلة";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
    <title><?= $title ?></title>
    <style>
    .btn-land {
    background: #2d50a1;
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 20px;
}
</style>
    
</head>
<body dir="rtl" >
    <div class="container" style=" max-width: 600px; margin: 0 auto; ">
        <div class="my-3 text-center">
            <h1>تعديل</h1>
        </div>
        <div class="my-3 text-center">
            <h1><?=$title?></h1>
        </div>
          <!-- Content here -->
        <div class="text-center my-3" >
            <div class="mb-3">
                <a href="comond.php" class="form-control btn btn-land" ><?=$btn0?></a>
            </div>
            <div class="mb-3">
                <a href="editimg.php" class="form-control btn btn-land" ><?=$btn1?></a>
            </div>
            <div class="mb-3">
                <a href="editform.php" class="form-control btn btn-land" ><?=$btn2?></a>
            </div>
            <div class="mb-3">
                <a href="editasila.php" class="form-control btn btn-land" ><?=$btn3?></a>
            </div>
        </div>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>