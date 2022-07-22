<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    
    <style>
       html, body {
      position: relative;
      height: 100%;
    }
    body {
      background-color:#fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 90%;
        height:50%;
     padding-top: 5%;
       margin-left: 7%;
        margin-top:-7%;
            padding-bottom: 10%;
    }
        .swiper-wrapper
        {
            background-position: center;
            background-size: cover;
           height:100%
        }
    .swiper-slide {
      background-position: center;
     background-size: cover;
       
           width:100%;
    height:500px;
           

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
       
    </style>
    </head>
    <body>
        
    <!-- Swiper -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<div class="swiper-slide" style="background-image: url(img/k7.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(img/k2.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(img/k3.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(img/k4.jpg);"></div>
			<div class="swiper-slide" style="background-image: url(img/k5.jpg);"></div>
			
			
        </div>
       
   <!-- Add Arrows -->
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
	</div>
  
			
			
			
   <!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script>
		var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
        
	</script>
    </body>
</html>