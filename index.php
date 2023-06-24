<?php include 'dbcon/ip.php';
    $title = "مطحنة كهربائية لاسلكية متعدد الوظائف.";
    $pixel = "529070439377314";
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
<script>
    // disable right click
    document.addEventListener('contextmenu', event => event.preventDefault());
 
    document.onkeydown = function (e) {
 
        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }
 
        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
 
        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
 
        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 
</script>


	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?=$title?></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<style>
    	@font-face {
    	font-family: 'font-land';
    	src: url(font/font_land.ttf);
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
    	    background: #fff;
    	    direction: rtl; 
    	}
    	 .alert-primary {
            background-color: #fff;
            border: none;
            color: #000;
        }
        .bg-land{
            background: #e9e4d7;
            padding: 10px;
            border-radius: 12px;
        }
        .btn-land {
            background: #6b2c0b;
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
        .fixedbutton {
    position: fixed;
    bottom: 0;
    right: 0; 
}
    </style>
    
    	<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '<?php $pixel ?>');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=<?php $pixel ?>&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


</head>
<body class="arfont">
	<?php 
	    include 'imgs.php';
	    include 'form.php';
	    include 'asila.php';
    ?>
<a href="#form" class="fixedbutton form-control btn btn-land text-center" style=" font-size: 25px; ">اشتري الأن</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>

