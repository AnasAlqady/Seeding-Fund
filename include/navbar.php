<?php 
include_once ('config.php');
include_once ('functions.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.4/superfish.min.js"></script>
    <title>Document</title>
</head>
<body>
     
 <header class="site-header"> <nav class="navbar navbar-default">
<div class="top-line">
		<div class="container">
				<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
								<p> <span><i class="fa fa-phone"></i><a href="tel:0123 - 45678">0123 - 45678</a></span> <span><i class="fa fa-envelope-o"></i><a href="">info@company.com</a></span> </p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 text-right">
								<p> <span><i class="fa fa-certificate"></i><a href="">Our Certifications</a></span> <span><i class="fa fa-file-pdf-o"></i><a href="">Download Brochure</a></span> </p>
						</div>
				</div>
		</div>
</div>
<div class="header-inner">
		<div class="container">
				<div class="row">
						<div class="col-md-11">
								<div class="brand " >
										<img src="../img/large_seedingfund-01.png" alt="" width=200 >
										
                                    </div>
								<nav  id="nav-wrap" class="main-nav"> <a id="toggle-btn" href="#"><i class="fa fa-bars"></i> </a>
								<ul class="sf-menu">
										<li class="current" style="margin-right:3rem"> <a href=""> <span style="font-size:1.8rem"> welcome <?php 
                                        if(!empty($_SESSION['user']))
                                        echo getUserName($_SESSION['user']);
                                        else if (!empty($_SESSION['admin']))
                                        echo getUserName($_SESSION['admin']);
                                        else 
                                        echo "";

                                ?></a> </li>
										<li> <a href="<?php if(!empty($_SESSION['user']))
                                        echo "profile.php";
                                        else if (!empty($_SESSION['admin']))
                                        echo "";
                                        else 
                                        echo "";?>"><?php 
                                        if (!empty($_SESSION['admin']))
                                        echo " ";
                                        else if(!empty($_SESSION['user']))
                                        echo "prevluos Order";
                                        else 
                                        echo "";?></a></li>
										<li> <a href="<?php 
                                        if(!empty($_SESSION['user']))
                                        echo "index.php";
                                        else if (!empty($_SESSION['admin']))
                                        echo "index.php";
                                        else 
                                        echo "";?>
                                        ">
                                        <?php if(!empty($_SESSION['admin']))
                                        echo "HOME";
                                        else if (!empty($_SESSION['user']))
                                        echo "new order";
                                        else 
                                        echo "";?></a> </li>
										<li > <a href="../handle/logout.php"> logout <img src="../img/logout.svg" width="20"> </a> </li>
								</ul>
								</nav> </div>
				</div>
		</div>
</div>
</nav>

</header>



</body>
<script>
    var $ = jQuery.noConflict();

$(document).ready(function() {
    jQuery('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },  
        delay: 100 
    }); 
    $("#toggle-btn").click(function() {
        $(".sf-menu").slideToggle("slow"); 
    });

    $('.toggle-subarrow').click(
        function() {
            $(this).parent().toggleClass("mob-drop");
    });
		
		var header = $(".header-inner");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100 && $(this).width() > 769) {
            header.addClass("navbar-fixed-top");
        } else {
            header.removeClass('navbar-fixed-top');
        }
    });	  
	  $(this).find(".h4 i").each(function(){
            $(this).addClass("green");
    }); 
});  
 
</script>
</html>

