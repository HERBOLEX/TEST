<?php 
    include '../dbcon/db.php';
    $title = "خلاط عصير محمول قابل للشحن";
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
    	src: url(../font/beIN-Normal.ttf);
        }
    	@font-face {
    	font-family: 'font-land-ar-normal';
    	src: url(../font/bein-ar-normal.ttf);
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
                  <th scope="col">الإسم الكامل</th>
                  <th scope="col">المدينة</th>
                  <th scope="col">العنوان</th>
                  <th scope="col">رقم الهاتف</th>
                  <th scope="col">رقم الأيبي</th>
                  <th scope="col">التاريخ</th>
                  <th scope="col">حدف</th>
                </tr>
            </thead>
        <?php 
            // Fetch data from the database
            $sql = "SELECT * FROM `commond`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
                  <tbody class="arfont-normal">
                    <tr>
                      <th scope="row"><?php echo htmlspecialchars($row['id']) ?></th>
                      <td><?php echo htmlspecialchars($row['name']) ?></td>
                      <td><?php echo htmlspecialchars($row['city']) ?></td>
                      <td><?php echo htmlspecialchars($row['address']) ?></td>
                      <td><?php echo htmlspecialchars($row['phone']) ?></td>
                      <td><?php echo htmlspecialchars($row['ip']) ?></td>
                      <td><?php echo htmlspecialchars($row['date']) ?></td>
                      <td><a class="btn btn-land" href="?id=<?php echo htmlspecialchars($row['id']) ?>">حدف</a></td>
                    </tr>
                  </tbody>
                
            <?php } 
          }
            ?>
            </table>
    <div class="mb-3">
    			<a class="form-control btn btn-land" href="/page/mini-mixeur/admin">back</a>
    		</div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>

