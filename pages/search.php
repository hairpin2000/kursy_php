<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Поиск</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../styles/style.css"> 
</head>
<body>
<form action="search.php" method="post">
<input name="search" type="text" value="введите ключевые слова" size="40"> 
<input type="submit" value="Искать">
</form>
<?php
include ('../db_fns.php');
$word=$_POST['search'];
$products=search_product($word);
echo "<div class='resurs'>";
if ($products==NULL) echo "<div class='message'>Нет данных, удовлетворяющих поиску</div>";
else {
foreach($products as $item)
{ echo "<div class='resurs_num'>";
echo "<div class='product-name'><a href='#'>".$item['title']."></a></div>";
echo "<div class='img_res'><a href='#'><img src='../img_play/".$item['image']."' width='145' ></a></div>";
echo "<div class='description'>".$item['description']."</div>"; 
echo "</div>";
echo "<div classs='clear'></div>"; } }
echo "</div>";

?>

</body>
</html>

