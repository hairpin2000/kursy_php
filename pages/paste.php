<?php
$title=$_POST["title"];
$text=$_POST["text"];
$size=$_POST["size"];
$kosht=$_POST["kosht"];
$meta_k=$_POST["meta_k"];
$date=$_POST["date"];
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('usersbd');
mysql_query("INSERT INTO product (title, description, image, size, kosht) VALUES ('$title', '$description', '$image', '$size', '$kosht' ) ") or die(mysql_error());
?>