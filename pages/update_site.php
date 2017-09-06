<?php
$title=$_POST['title'];
$meta_d=$_POST['text'];
$meta_k=$_POST['meta_k'];
$text=$_POST['date'];
$id=$_POST['id'];
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('usersbd') or die(mysql_error());
$result = mysql_query ("UPDATE product SET title='$title', description='$meta_d', image='$meta_k', date='$text' WHERE id='$id'");
if ($result == 'true') {echo "<p>Ваша страница успешно обновлена</p>";}
else {echo "<p>Ваша страница не обновлена!</p>";}
?>
