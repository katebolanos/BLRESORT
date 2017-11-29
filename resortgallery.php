<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.css">
    <style>
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
        padding-bottom: 2%;
        margin-bottom: 10%;
        width: 100%;
        margin-top: 5%;
    }

    </style>
</head>
<body background="Resort Pictures/Umbrella.jpg"style="background-size:cover;background-repeat:no-repeat;">
<?php
    require "navbar.php";
?>
<center>
<div class="bgfade">


<?php
        echo "<table>";
           foreach (glob("Resort Pictures/*.{jpg,gif,png,JPG,GIF,PNG}", GLOB_BRACE) as $image)
            {
             echo '<caption style="text-align:center;margin-left:-10%;color:white;font-weight:bold;font-size:30px;margin-top:2%;margin-bottom:3%;">RESORT</caption>';
             echo  '<tr class="img">';
                   echo '<td style="font-weight:bold;color:white;font-size:25px;margin-right: 50%;">';
                   echo '<div  style="margin-left:-40%;margin-top:2%;margin-bottom:10px;text-align:center;">';
                        echo '<figure class="imghvr-shutter-out-diag-2">';
                        $filename = str_replace("Resort Pictures/*","",$image);
                        echo '<img  src="$filename" width="380" height="320">';
                           echo' <figcaption style ="background-color:black;">';
                           echo ' insert description here';
                        echo'<div style = "opacity:0.2;">';
                            echo'<img class = "fancybox" src="$filename" width="380" height="300">';
                        echo '</div>';
                        echo '</figcaption>';  
                   echo  '</figure>';
                    echo '</div>';
                echo'</td>';
                
              echo "<a href='$image' data-caption='$filename'><img src='$image?v=".filemtime("$image")."' alt='$filename' class='zoom'></a>\n";
            }
        echo "</table>";
 ?>
<!--<table>
    <caption style="text-align:center;margin-left:-10%;color:white;font-weight:bold;font-size:30px;margin-top:2%;margin-bottom:3%;">RESORT</caption>
    <tr class="img">
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 50%;">
            <div  style="margin-left:-40%;margin-top:2%;margin-bottom:10px;text-align:center;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Resort Pictures/Umbrella.jpg" width="380" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:25px;">UMBRELLA </br></br></p>
                    <p style="font-size:20px;">Good for 8-10 persons</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Resort Pictures/Umbrella.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 30%;">
            <div  style="margin-left:0%;margin-top:2%;margin-bottom:10px;text-align:center;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Resort Pictures/NipaHut.jpg" width="380" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:25px;">NIPA HUT </br></br></p>
                    <p style="font-size:20px;">Good for 8-12 persons</p>
                    <p style="font-size:20px;">Good for 12-20 persons</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Resort Pictures/NipaHut.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
    </tr>
    <tr>
    <td style="font-weight:bold;color:white;font-size:25px;margin-right: 30%;">
            <div  style="margin-left:-40%;margin-top:2%;margin-bottom:10px;text-align:center;">
            <figure class="imghvr-shutter-out-diag-2">
            <img  src="Resort Pictures/Pool Side.jpg" width="380" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:25px;">POOL SIDE </br></br></p>
                    <p style="font-size:20px;">Good for 8-12 persons</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Resort Pictures/Pool Side.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
        <td style="font-weight:bold;color:white;font-size:25px;margin-right: 30%;">
            <div  style="margin-left:0%;margin-top:2%;margin-bottom:10px;text-align:center;">
            <figure  class="imghvr-shutter-out-diag-2 " >
            <img  src="Resort Pictures/Villa Cottage.jpg"  width="380" height="320"> 
                <figcaption style ="background-color:black;"> 
                    <p style="font-size:25px;">VILLA COTTAGE </br></br></p>
                    <p style="font-size:20px;">Villa Cottage 1</p>
                    <p style="font-size:20px;">Good for 40 persons</p>
                    <p style="font-size:20px;">Villa Cottage 2</p>
                    <p style="font-size:20px;">Good for 30 persons with small room</p>
                <div style = "opacity:0.2;">
                    <img class = "fancybox" src="Resort Pictures/Villa Cottage.jpg" width="380" height="300">
                </div>
                </figcaption>  
            </figure>
            </div>
        </td>
    </tr>
</table>-->
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
</body>
</html>