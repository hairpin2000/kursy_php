<div class="allprofilf">
<?php 
$form=<<<HTML
<form name="form1" method="post" action="">
<p>
<label>Укажите название страницы<br>
<input value="" type="text" name="page" id="page">
<p> <label>
<input type="submit" name="submit" id="submit" value="Искать">
</label>
</p>
</form>
HTML;
echo $form;
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('usersbd') or die(mysql_error());
$z=$_POST["page"];
if (!isset($z))
{ $result = mysql_query("SELECT title FROM product ");
$myrow = mysql_fetch_array($result); 
do {
printf ("<p>%s</p>", $myrow["title"]);  }
while ($myrow = mysql_fetch_array($result)); }
else
{ 
$result = mysql_query ("SELECT * FROM product WHERE title='$z'");
$myrow = mysql_fetch_array($result);
$result2 = mysql_query ("SELECT * FROM category WHERE id='$myrow[cat]'");
$myrow2 = mysql_fetch_array($result2);
?> 
<form name="form2" method="post" action="update_site.php">
<p><label>Вы редактируете страницу из категории &nbsp;<?=  $myrow2[name] ?></label></p>
<p><label>Ввеcти название страницы <br>
<input value="<?=  $myrow[title] ?>" type="text" name="title" id="title">
</label></p>
<p><label>Ввеcти тектовый контент страницы<br>
<textarea name="text" id="text" cols="50" rows="20"><?=  $myrow[description] ?></textarea>
</label></p>
<p><label>Укажите имя файла, содержащего рисунок<br>
<input value="<?=  $myrow[image] ?>" type="text" name="meta_k" id="meta_k">
</label></p> 
<p><label>Ввеcти дату редактирования страницы<br>
<input value="<?=  $myrow[name] ?>" type="date" name="date" id="date">
</label></p>
<input name="id" type="hidden" value="<?=  $myrow[id] ?>">
<p> <label><input type="submit" name="submit" id="submit" value="Сохранить изменения">
</label></p>
</form>
<?php
}
?>
</div>

