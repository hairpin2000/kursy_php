<?php
if (!isset($_SESSION['name'])) {
echo "<div id='nav'>";
	echo "				<ul id='navbar'>";
	echo "				<li><a href='index.php?view=first'  >О нас</a></li>";
	echo "				<li><a href='index.php?view=viewprofil' >Каталог</a>";
	echo "                  <ul >";
	echo "               			<li ><a href='index.php?view=viewprofild'>Одежда</a></li>";
	echo "                  		<li ><a href='index.php?view=viewprofilb'>Обувь</a></li>";
	echo "                  		<li ><a href='index.php?view=viewprofilr'>Распродажа</a></li>";
	echo "                  		<li ><a href='index.php?view=viewprofilp'>В подарок</a></li>";
	echo "				</ul></li><li><a href='index.php?view=reg'>Регистрация</a>";  
	echo "				<li><a href='#'>Контакты</a>";
	echo "				<li><a href='index.php?view=help'>Хочу помочь</a>";  
	echo "				<li><a href='index.php?view=avt'>Вход</a>";  
	echo "</ul>";
	echo"<a href='#' id='pul'>Меню</a></div>";

}
else {
	if ($_SESSION['name']=="admin") {
	echo "<div id='nav'>";
		echo "				<ul id='navbar'>";
		echo "				<li><a href='index.php?view=updatesite' >Вставка</a></li>";
		echo "				<li><a href='index.php?view=delpage' >Удаление</a></li>";
		echo "				<li><a href='index.php?view=edit'>Редактирование</a></li>";
		echo "				<li><a href='index.php?view=logout'>Выход</a></li>";
		echo "</ul>";
	echo"<a href='#' id='pul'>Меню</a></div>"; 
	}
	else
	{
	echo "<div id='nav'>";
		echo "				<ul id='navbar'>";
		echo "				<li><a href='index.php?view=first' >O нас</a></li>";
		echo "				<li><a href='index.php?view=viewprofil'>Каталог</a>";
		echo "                  <ul >";
		echo "               			<li ><a href='index.php?view=viewprofild'>Одежда</a></li>";
		echo "                  		<li ><a href='index.php?view=viewprofilb'>Обувь</a></li>";
		echo "                  		<li ><a href='index.php?view=viewprofilr'>Распродажа</a></li>";
		echo "                  		<li ><a href='index.php?view=viewprofilp'>В подарок</a></li>";
		echo "                  </ul></li>";
		echo "				<li><a href='index.php?view=sekret2'>Отзывы</a></li>";
		echo "				<li><a href='index.php?view=buy'>Корзина</a></li>";
		echo "				<li><a href='index.php?view=logout'>Выход</a></li>";
		echo "</ul>";
	echo"<a href='#' id='pul'>Меню</a></div>";
	}	
}
?>
