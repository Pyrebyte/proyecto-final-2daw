<?php

extract($_POST);
	require("../model/config.php");
	$sentencia="update login set user='$user', pass_user='$pass', email='$email', pass_admin='$passadmin' where id='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("ERROR: NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location:../view/admin.php");	
		echo "<script>location.href='../view/admin.php'</script>";
	}else {
		echo "<script>location.href='../view/admin.php'</script>";
	
	}
?>