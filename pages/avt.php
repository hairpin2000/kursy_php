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
<td><input type="submit" class="buttons" value="Войти" /></td>
</tr>
</table>
</form>
<? 
session_start();
if (isset($_POST['username']) && isset($_POST['password']))
{
	$link = mysql_connect('localhost', 'root', '');	
	mysql_select_db('Usersbd');
	$login = mysql_real_escape_string($_POST['username']);
	$password = $_POST['password'];
	$result=mysql_query("SELECT * FROM our_user WHERE username='$login' and password=md5('$password') LIMIT 1",$link);
		if (mysql_num_rows($result)==1) {
			
			$row=mysql_fetch_array($result);
			$_SESSION['id']=$row['user_id'];
			$_SESSION['name']=$row['username'];
			$_SESSION['password']=$row['password'];
			$_SESSION['page']=$row['page'];
			$_GET['view']='first';
			exit("<meta http-equiv='refresh' content='0; url= 'layouts/shabl.php'>");
						}
			else
			$_GET['view']='reg';
		exit("<meta http-equiv='refresh' content='0; url= 'layouts/shabl.php'>");
}	
?>
<script>
document.title="Авторизация";
</script>
