<div class="allprofilf">
<p style=" font-size:14px; font-family: Arial, Helvetica, sans-serif; ">Благотворительность — оказание бескорыстной (безвозмездной или на льготных условиях) помощи тем, 
кто в этом нуждается. Основной чертой благотворительности является добровольный выбор вида, 
времени и места </p>
<p style=" font-size:14px; font-family: Arial, Helvetica, sans-serif; ">Оставить отзыв о статье</p>
	<form  method='post'  > 
	<label >Имя: <input type='text' name='name1' value="<?= $nm ?>" / ></label><br/> 
	<label>Сообщение:<br/><textarea name='text' style=" font-size:14px; font-family: Arial, Helvetica, sans-serif; "></textarea></label><br/> 
	<input type="submit" name=" отправить " / ><br/> 
	</form>

<?php
$page_title="Отзыв";	
if(!$_POST) exit(file_get_contents('base/base.txt')); 
file_put_contents('base.txt', '<div class="gb-item">'.date('d.m.Y H:i:s').' : сообщение от '.$_SESSION['name'].'<br />'.$_POST['text'].'<hr/></div>', FILE_APPEND); 
$_GET['view']='sekret2';
exit("<meta http-equiv='refresh' content='0; url= 'layouts/shabl.php'>");		
?>
<script>
document.title="Отзывы";
</script>
</div>