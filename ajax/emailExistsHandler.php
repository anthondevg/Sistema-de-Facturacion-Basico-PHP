<?php include_once '../config/connection.php'; ?>
<?php include_once '../config/db.php'; ?>
<?php include_once '../class/error.php'; ?>

<?php 

	$tp = new Errors();
	echo $res = $tp->dataExists('correo',$_POST['email']);
 ?>