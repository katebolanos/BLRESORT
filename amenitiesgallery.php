<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .gal {
        -webkit-column-count: 3;
        -moz-column-count: 3; 
        column-count: 3;
    }	
    .gal img{ width: 100%; padding: 7px 0;}
         @media (max-width: 500px) {
        .gal {
            -webkit-column-count: 1; 
            -moz-column-count: 1;
            column-count: 1; 
        }     
    }
    a.fancybox img {
        border: none;
        box-shadow: 0 1px 7px rgba(0,0,0,0.6);
        -o-transform: scale(1,1);
         -ms-transform: scale(1,1); 
         -moz-transform: scale(1,1); 
         -webkit-transform: scale(1,1); 
         transform: scale(1,1); 
         -o-transition: all 0.2s ease-in-out; 
         -ms-transition: all 0.2s ease-in-out; 
         -moz-transition: all 0.2s ease-in-out; 
         -webkit-transition: all 0.2s ease-in-out; 
         transition: all 0.2s ease-in-out;
    } 
    a.fancybox:hover img {
        position: relative; 
        z-index: 999; 
        -o-transform: scale(1.03,1.03); 
        -ms-transform: scale(1.03,1.03); 
        -moz-transform: scale(1.03,1.03); 
        -webkit-transform: scale(1.03,1.03); 
        transform: scale(1.03,1.03);
    }
    .bgfade{
        background-color: rgba(0,0,0,0.5);
        margin-bottom: 10%;
        width: 100%;
        margin-top: -43%;
    }
    .active {
        display:block !important;
    }
    .gallery {
        display:none;
    }
    @media only screen and (max-width: 768px) {
        img {
            width:100%;
            height:200px;
        }
    }
    </style>
</head>
<body background="Amenities Pictures/amenitiesbg.jpg">
<?php
    require "navbar.php";
?>
<center>
<div class="bgfade">
<div class="container" style="width:100%;">                
  <ul style="margin-top:50%;" class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#" onclick="show('pools');">Pools</a></li>
    <li><a href="#" onclick="show('playground');">Playground</a></li>
    <li><a href="#">Garden</a></li> 
    <li><a href="#">Private Pool</a></li>
    <li><a href="#">Function Hall</a></li>   
  </ul>
</div>
<div id="pools" class="gallery active" style="margin-top:3%;">
    <div class="container">
        <div class="col-md-12">
            <div class="row" style="width:95%;">
    	        <div class="gal">
                    <img class = "fancybox" src="Amenities Pictures/Pools 1.jpg" height="300" alt="">
                    <img class = "fancybox" src="Amenities Pictures/Pools 2.jpg" height="300" alt="">
                    <img class = "fancybox" src="Amenities Pictures/Pools 3.jpg" height="300" alt="">
                    <img class = "fancybox" src="Amenities Pictures/Pools 4.jpg" height="300" alt="">
                    <img class = "fancybox" src="Amenities Pictures/Pools 5.jpg" height="300" alt="">
                    <img class = "fancybox" src="Amenities Pictures/Pools 6.jpg" height="300" alt="">
                              
    	        </div>	
            </div>
        </div>
    </div>
</div> 
<div id="playground" class="gallery" style="margin-top:3%;margin-left:16%;">
    <img  class = "fancybox" src="Amenities Pictures/Playground.jpg" >
</div>    
</div>
</center>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/tada.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
<script type="text/javascript">
    $(function($){
        var addToAll = false;
        var gallery = true;
        var titlePosition = 'inside';
        $(addToAll ? 'img' : 'img.fancybox').each(function(){
            var $this = $(this);
            var title = $this.attr('title');
            var src = $this.attr('data-big') || $this.attr('src');
            var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            $this.wrap(a);
        });
        if (gallery)
            $('a.fancybox').attr('rel', 'fancyboxgallery');
        $('a.fancybox').fancybox({
            titlePosition: titlePosition
        });
    });
    $.noConflict();
    function show(pictures) {
        $('.gallery').each(function(){
            $(this).removeClass("active");
        });
        $('#'+pictures).addClass("active");
    }
</script>
</body>
</html>