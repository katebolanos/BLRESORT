<!DOCTYPE html>
<html>
<head>
    <title>BL</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            overflow-x:hidden;
        }
        .img-src { 
            position:fixed;
            z-index:-1;
            background:url(homebg.jpg) center;
            background-size: cover;
            top: -10%;
            bottom: 10%;
            left: -10%;
            right: 10%;
            width:120%;
            height:120%;
        }
        h1 {
            text-transform:uppercase;
            font-size: 150px;
            text-align:center;
            height: 200px;
            width:1500px;
            top:50%;
            transform: translateY(-50%);
            overflow:hidden;
            color:#fff;
        }
    </style> 
</head>
<body>
<?php
    require 'navbar.php';
?>
<center>
    <h1 class="intro-text" style="position:absolute;z-index:1">BLResort&Hotel</h1>
    <div class="carousel-fullscreen">
        <!--<div class="img-src"></div>--> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index:-1;">
            <!-- Indicators -->
            <div class="carousel-inner">
            <!-- Wrapper for slides -->
            <?php
                // GET ALL FILES IN DIRECTORY images/carousel/ AND DISPLAY IT USING CAROUSEL
                foreach (glob("Resort Pictures/*.{jpg,gif,png,JPG,GIF,PNG}", GLOB_BRACE) as $image)
                {
                    $filename = str_replace("ResortPictures/","",$image);
                    echo "<div class='item'><img src='$image?v=".filemtime("$image")."' alt='$filename'></div>\n";
                }
            ?>
            </div>
            
        </div>
    </div>

    <div style=" margin-top:0%;margin-left:17%;">
        <div class="container" >
            <div class="col-md-12" >
                <div class="row" style="width:110%;">
                    <div class="gal wow slideInUp">
                        <img src="BL Pictures/BL 1.jpg" alt=""> 
                        <img src="BL Pictures/BL 5.jpg" alt=""> 
                        <img src="BL Pictures/BL 7.jpg" alt="">
                        <img src="BL Pictures/BL 2.jpg" alt="">
                    </div>	
                </div>
            </div>
        </div>
        <div class="descrip">
        <p>
            The BL Resort and Hotel is relaxing and accomodating place located at eastern part of Cabanatuan City.</br>
            The Resort and Hotel is a better place to relieve oneself and recover from stressing events, with </br>
            proper maintained pool premises, uniqueness of styles from pool side chairs to various cottages, and </br>
            with the beautiful sceneries that captures  ones heart. 
        </p>
        </div>
    </div>
</center>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lettering.js"></script>
<script src="js/wow.min.js"></script>
<script>
$(document).ready(function() {
    new WOW().init();
    $(".intro-text").lettering('words').children("span").lettering();
    $('.carousel').carousel({
        interval: 7000,
        pause: false
    });
});

$(window).scroll(function(e) {
    var s = $(window).scrollTop(),
        opacityVal = (s / 200);

    $('.blurred-image').css('opacity', opacityVal);
});
var $item = $('.carousel .item');
var $wHeight = $(window).height();
$item.eq(0).addClass('active');
$item.height($wHeight);
$item.addClass('carousel-fullscreen');

$('.carousel img').each(function () {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image': "url('"+$src+"')",
    'background-color': $color
  });
  $(this).remove();
});

$(window).on('resize', function () {
  $wHeight = $(window).height();
  $item.height($wHeight);
});

</script>
</body>
</html>