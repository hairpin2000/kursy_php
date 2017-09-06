<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$page_title ?></title>

<meta http-equiv="Content-Type" content="text/html; Charset=UTF-8">  
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
var imgs = ["img_play/123.png","img_play/124.png"];
var n=0;
time=800;
play=setInterval("chgImg(0)", 5000);

function chgImg(number) {
if (number!=0) n=number-2;
 $('#slide_show').fadeOut(time, function() {     
  $(this).attr('src', imgs[n]).fadeIn(time);
 });

 n++;
if (n>=imgs.length) n=0;
}

$(function() {
			var pull 		= $('a#pul');
				menu 		= $('#nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
</script>

</head>
<body>
<div class="karkas">
	<div class="header">
<?php 
$nm =$_SESSION['name'] ;
$page=$_SERVER['REQUEST_URI'] ;
if (isset($_SESSION['name'])) {
echo "<div class='user'>";
print "Пользователь системы $nm &nbsp<br>";
print "Вы на странице $page <br> ";
echo "</div>"; }
?>
	<div class="ban"><img src="img_play/123.png" width="50%" id="slide_show" style="margin-left:-50px;"></div>
</div>
