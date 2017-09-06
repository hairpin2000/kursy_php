<?php
session_start();
if (isset($_SESSION['user_id'])) {
	$_SESSION=array();
	if (isset($_COOKIE['name'])) {
		setcookie('name','',time()-3600);
		setcookie('password','',time()-3600);
		$_GET['view']='avt';			
	}
}
session_destroy();
?>
<script>
window.location="index.php";
</script>