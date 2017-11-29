    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css">
    <style>
    .gal {
        -webkit-column-count: 3;
        -moz-column-count: 3; 
        column-count: 3;
    }	
    .gallery img{ width: 100%; padding: 7px 0;}
         @media (max-width: 500px) {
        .gallery {
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
        padding-bottom: 3%;
        margin-bottom: 3%;
        width: 100%;
        margin-top: 9%;
    }
    </style>
</head>
<body background="Hotel Pictures/Single Room 1.jpg"style="background-size:cover;background-attachment:fixed;">
<?php
    require "navbar.php";
?>
<center>
<div class="bgfade">
<table  style="margin-left:5%;margin-top:10%;">
    <caption style="text-align:center;margin-left:-10%;color:white;font-weight:bold;font-size:30px;margin-top:2%;margin-bottom:3%;">HOTEL</caption>
    <tr class="img">
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 50%;">
            <div  style="margin-left:-40%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:0%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  class="gallery"src="Hotel Pictures/Single Room 1.jpg" width="340" height="280"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Single Room </br></br></p>
                    <p style="font-size:18px;">Good for 2 persons.</p>
                    <p style="font-size:16px;">Breakfast for two persons.</p>
                    <p style="font-size:16px;">Free pool entrance for two persons.</p>
                    <p style="font-size:16px;">Towels & toiletries for two persons.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Single Room 1.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 40;">
            <div  style="margin-left:-70%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-3%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Twin Bed Room.jpg" width="340" height="280"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Twin Bed Room </br></br></p>
                    <p style="font-size:18px;">Good for 4 persons.</p>
                    <p style="font-size:16px;">Breakfast for four persons.</p>
                    <p style="font-size:16px;">Free pool entrance for four persons.</p>
                    <p style="font-size:16px;">Towels & toiletries for four persons.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Twin Bed Room.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right:46%;">
            <div  style="margin-left:-70%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-39%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Big Room.jpg" width="340" height="280"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Big Room </br></br></p>
                    <p style="font-size:18px;">Good for 2 persons.</p>
                    <p style="font-size:16px;">Breakfast for two persons.</p>
                    <p style="font-size:16px;">Free pool entrance for two persons.</p>
                    <p style="font-size:16px;">Towels & toiletries for two persons.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Big Room.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
    <tr>
    <div class="img">
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 50%;">
            <div  style="margin-left:-40%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:0%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Big Villa Room.jpg" width="340" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Big Villa Room </br></br></p>
                    <p style="font-size:18px;">Good for 6-8 persons.</p>
                    <p style="font-size:16px;">Free pool entrance for 6-8 persons.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Big Villa Room.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 40;">
            <div  style="margin-left:-70%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-3%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Dorm Type Room.jpg" width="340" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Dorm Type Room </br></br></p>
                    <p style="font-size:18px;">Good for 12 persons.</p>
                    <p style="font-size:16px;">Free pool entrance for 12 persons.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Dorm Type Room.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right:46%;">
            <div  style="margin-left:-70%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-39%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/VIP Dorm 1.jpg" width="340" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">VIP Dorm </br></br></p>
                    <p style="font-size:18px;">Good for 18-20 persons.</p>
                    <p style="font-size:16px;">Free pool entrance for two persons.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/VIP Dorm 1.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
    </tr>
    <tr>
    <div class="img">
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 50%;">
            <div  style="margin-left:-40%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:0%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/VIP Pamana Dorm.jpg" width="340" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">VIP Pamana Dorm </br></br></p>
                    <p style="font-size:18px;">Good for 8-12 persons.</p>
                    <p style="font-size:16px;">Free pool entrance.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/VIP Pamana Dorm.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 40;">
            <div  style="margin-left:-70%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-3%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Villa III Dorm 1.jpg" width="340" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Villa III - Dorm 1 </br></br></p>
                    <p style="font-size:18px;">Good for 12 persons.</p>
                    <p style="font-size:16px;">Free pool entrance.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Villa III Dorm 1.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right:46%;">
            <div  style="margin-left:-70%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-39%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/VIP Dorm 1.jpg" width="340" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Villa III -  Dorm 2 and 3 </br></br></p>
                    <p style="font-size:18px;">Good for 30 persons.</p>
                    <p style="font-size:16px;">Free pool entrance.</p>
                    <p style="font-size:16px;">Hall with chairs and tables setup.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/VIP Dorm 1.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
    </tr>
    <tr>
    <div class="img">
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 50%;">
            <div  style="margin-left:10%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-10%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Villa III 2nd Floor.jpg" width="500" height="350"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Villa III -  2nd Floor </br></br></p>
                    <p style="font-size:18px;">Good for 30-40 persons.</p>
                    <p style="font-size:16px;">Free pool entrance.</p>
                    <p style="font-size:16px;">Spacious hall with chairs and tables setup.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Villa III 2nd Floor.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 40;">
            <div  style="margin-left:20%;margin-top:2%;margin-bottom:10px;text-align:center;margin-right:-40%;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Hotel Pictures/Villa III Big Room.jpg" width="350" height="350"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:23px;">Villa III Big Room </br></br></p>
                    <p style="font-size:18px;">Good for 2 persons.</p>
                    <p style="font-size:16px;">Free pool entrance.</p>
                    <p style="font-size:16px;">Towels and toiletries for 2 persons only.</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Hotel Pictures/Villa III Big Room.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
    </tr>
</table>
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
    
</script>
