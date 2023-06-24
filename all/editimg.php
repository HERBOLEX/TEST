<?php 
    include '../dbcon/db.php';
    $title = "مطحنة كهربائية لاسلكية متعدد الوظائف.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >
	<style>
    	@font-face {
    	font-family: 'font-land';
    	src: url(../font/font_land.ttf);
        }
    	@font-face {
    	font-family: 'font-land-normal';
    	src: url(font/beIN-Normal.ttf);
        }
    	@font-face {
    	font-family: 'font-land-ar-normal';
    	src: url(font/bein-ar-normal.ttf);
        }
    	body {
    	    background: #82ccef;
    	    direction: rtl; 
    	}
    	 .alert-primary {
            background-color: #fff;
            border: none;
            color: #000;
        }
        .bg-land{
            background: #ffffff;
            padding: 10px;
            border-radius: 12px;
        }
        .btn-land {
            background: #2d50a1;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 20px;
        }
        .arfont {
            font-family: 'font-land'!important;
        }
        .arfont-normal {
            font-family: 'font-land-normal'!important;
        }
        .img {
            width: 40px;
        }
    </style>
</head>
<body class="arfont">
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">رابط الصورة</th>
                  <th scope="col">وصف الصورة</th>
                  <th scope="col">حدف الصورة</th>
                </tr>
            </thead>
        <?php 
            // Fetch data from the database
            $sql = "SELECT * FROM `editimgs`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                  <tbody>
                    <tr>
                      <th scope="row"><?php echo htmlspecialchars($row['id']) ?></th>
                      <td><img src="<?php echo htmlspecialchars($row['url_img']) ?>" alt="" class="img" ></td>
                      <td><?php echo htmlspecialchars($row['img_alt']) ?></td>
                      <td><a class="btn btn-land" href="delete.php?id=<?php echo htmlspecialchars($row['id']) ?>">حدف</a></td>
                    </tr>
                  </tbody>
                
            <?php } 
          }
            ?>
            </table>
    	<form class="row m-2 bg-land" action="get_edit_img.php" method="POST">
    		<div class="mb-3">
    			<label for="name" class="form-label">رابط الصورة</label>
    			<input type="url" name="url_img" class="form-control arfont-normal" id="name" placeholder="https://janabio.com/page/mini-mixeur/img/landing_page_05.jpg" required >
    		</div>
    		<div class="mb-3">
    			<label for="city" class="form-label">وصف الصورة</label>
    			<input type="text" name="img_alt" class="form-control arfont-normal" id="city" placeholder="وصف الصورة" required >
    		</div>
    		<div class="mb-3">
    			<input type="submit" name="save" class="form-control btn-land" id="phone" value="تاكيد الطلب">
    		</div>
    		
    	</form>
    
    <div class="mb-3">
    			<a class="form-control btn btn-land" href="/page/mini-mixeur/admin">back</a>
    		</div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>

