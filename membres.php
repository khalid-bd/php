<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php require 'contents.php';
foreach($contents as $key=>$value){
	//foreach($value as $k=>$v){
		//var_dump($k);

?>
	<div class="content">
		<h1><?php echo $value['auteur'] ?></h1>
		<h3><?php echo $value['titre'] ?></h3>
		<p><?php echo $value['description'] ?></p>
	</div>
		
<?php
	
}
?>
		
	

</body>
</html>