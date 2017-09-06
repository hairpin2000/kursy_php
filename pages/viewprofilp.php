<div class="prpfil">
	<div class="new">
	<h4 align="center">Новые товары</h4>
<?php 
$link = mysql_connect('localhost', 'root', '');	
mysql_select_db('usersbd');
$result=mysql_query("SELECT * FROM product ORDER BY date ASC LIMIT 1",$link);
if (mysql_num_rows($result)==1) {
	while($row=mysql_fetch_array($result)) {
	echo "<div class='newimg'>";
		echo "<img src='img_play/". $row['image']."'  class='pict' height='100px' >";
		echo "<p>".$row['description']."</p>";
		echo "</div>";
		echo "<div class='newtext'>";
	echo "<ul>";
  }
} 
$result=mysql_query("SELECT * FROM product WHERE present=true ORDER BY date ASC LIMIT 5",$link);
if (mysql_num_rows($result)>1) {
	while($row=mysql_fetch_array($result))	
	{ 
	echo"<li>". $row['title']."</li>";
	}
}	
?></div>
		</ul>
		</div>
	</div>
<div class="prpfil1">
	<div class="allprofil">
		<table class="us" border=0>
		<caption><b>Перечень товаров</b></caption>
 		 <tr>
    	  <th>№ п/п</th>
    	  <th>Товар</th>
   		  <th>Характеристики</th>
    	  <th>Размер</th>
    	  <th>Цена</th>
		   <th>Купить</th>
   		 </tr>
<?php
$result=mysql_query("SELECT * FROM product WHERE present=true ORDER BY title ASC",$link);
if (mysql_num_rows($result)>1) { $i=1;
	while($row=mysql_fetch_array($result))	
	{ 
		if ($i%2==0) echo"<tr>"; else echo"<tr class='alt'>";
        echo "<td>".$i."</td>";
        echo "<td><img src='img_play/".$row['image']."'  class='pict' height='100px'><br>".$row['title']."</td><td>".$row['description']."</td><td>".$row['size']."</td><td>".$row['kosht']."</td><td><button>Купить</button></td>";
        echo "</tr>";
		$i++;
	}
}
?>	
        </table>
	</div>
</div>

