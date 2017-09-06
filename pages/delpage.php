<div class="allprofilf">
<p><strong>Выберите страницу для удаления </strong></p>
<form  method="post">
<?php
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('usersbd')or die(mysql_error());
$result = mysql_query("SELECT title,id FROM product ");
$myrow = mysql_fetch_array($result); 
do 
{
printf ("<p><input name='id' type='radio' value='%s'><label> %s</label></p>",$myrow["id"],$myrow["title"]);
}
while ($myrow = mysql_fetch_array($result));
?>
<p><input name="submit" type="submit" value="Удалить страницу"></p>
</form>
<?php 
$id=$_POST['id'];
if (isset ($id))
{
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('usersbd')or die(mysql_error());
$result = mysql_query ("DELETE FROM product WHERE id='$id'");
if ($result == 'true') {echo "<p>Ваша страница успешно удалена!</p>";}
else {echo "<p>Ваша страница не удалена!</p>";}
exit("<meta http-equiv='refresh' content='0; url= $_SERVER[PHP_SELF]'>");
}
else 
{
echo "<p>Вы не выбрали радиокнопку и поэтому, удалить страницу невозможно.</p>";
}

?>
</div>