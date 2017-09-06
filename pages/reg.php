
<form  method="post">
<table align=center>
<tr>
<td>Логин:</td>
<td><input type="text" name="username" /></td>
</tr>
<tr>
<td>Пароль:</td>
<td><input type="password" name="password" /></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="buttons" value="Зарегистрироваться" /></td>
</tr>
</table>
</form>
<?php
$page_title="Регистрация";
if (isset($_POST['username']) && isset($_POST['password']))
{
	$link = mysql_connect('localhost', 'root', '');	
	mysql_select_db('Usersbd');
	$login = mysql_real_escape_string($_POST['username']);
	$password = md5($_POST['password']);
	$page=$_SERVER['REQUEST_URI'];
	$day=date("d/m/Y");
	$result=mysql_query("INSERT INTO our_user (username, password, page, date) VALUES ('$login', '$password', '$page', '$day')");
	$_SESSION['name']=$login;
	$_SESSION['password']=$password ;
	$_SESSION['page']=$page;
	$_GET['view']='first';	
	exit("<meta http-equiv='refresh' content='0; url= 'layouts/shabl.php'>");		
}	
?>
<script>
document.title="Регистрация";
</script>