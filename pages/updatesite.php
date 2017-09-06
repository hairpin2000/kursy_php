<div class="allprofilf">
<form name="form2" method="post" >
<p><label>Ввеcти название страницы <br>
<input value="Наименование товара" type="text" name="title" id="title">
</label></p>
<p><label>Ввеcти тектовый контент страницы<br>
<textarea name="text" id="text" cols="50" rows="20">Описание</textarea>
</label></p>
<p><label>Ввеcти размер <br>
<input value="Размер товара" type="text" name="size" id="title">
</label></p>
<p><label>Ввеcти цену товара <br>
<input value="Цена товара" type="text" name="kosht" id="title">
</label></p>
<p><label>Укажите имя файла, содержащего рисунок<br>
<input value="Имя и тип файла" type="text" name="meta_k" id="meta_k">
</label></p> 
<p><label>Ввеcти дату редактирования страницы<br>
<input value="0000-00-00" type="date" name="date" id="date">
</label></p>
<input name="id" type="hidden" value="Лола Сова">
<p> <label><input type="submit" name="submit" id="submit" value="Сохранить изменения">
</label></p>
</form>
</div>
<?php
$title=$_POST["title"];
$text=$_POST["text"];
$size=$_POST["size"];
$kosht=$_POST["kosht"];
$meta_k=$_POST["meta_k"];
$date=$_POST["date"];
$link = mysql_connect('localhost', 'root', '');
mysql_select_db('usersbd');
if(!isset($title) || $title!= "Наименование товара") {
mysql_query("INSERT INTO product (title, description, image, size, kosht) VALUES ('$title', '$description', '$image', '$size', '$kosht' ) ") or die(mysql_error());
echo "<div class='allprofilf'>Товар добавлен в каталог!</div>";}
else 
echo "<div class='allprofilf'>Вы не ввели название товара!</div>";
?>