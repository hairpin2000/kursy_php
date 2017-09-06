<?php
session_start();
if (!isset($_SESSION['name'])) {
	if (isset($_COOKIE['user_id'])||isset($_COOKIE['username'])) {
		$_SESSION['user_id']=$_COOKIE['user_id'];
		$_SESSION['username']=$_COOKIE['username'];
	}
}
header('Content-Type: text/html; charset= utf-8');
$page_title="Сайт-пример";
require_once('bloks/header.php');
require('bloks/navmenu.php');
$view=empty($_GET['view'])?'first':$_GET['view'];
include($_SERVER['DOCUMENT_ROOT'].'/superpuper/layouts/shabl.php');
?>
   <div id="content"><?php echo $content; ?></div>
<?php
require_once('bloks/footer.php');
?>
