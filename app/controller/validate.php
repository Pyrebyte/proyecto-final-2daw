<?php
session_start();
	require("../model/config.php");

	$username=$_GET['email'];
	$pass=$_GET['pass'];

	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pass_admin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
            $_SESSION['email']=$f2['email'];
			echo "<script>location.href='../view/admin.php'</script>";	
		}
	}

	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pass_user']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
            $_SESSION['email']=$f2['email'];
			header("Location: ../../index.php");
		}else{
			echo '<script>alert("¡Contraseña incorrecta!")</script> ';
			echo "<script>location.href='../view/signin.php'</script>";
		}
	}else{
		echo '<script>alert("¡No existe ese usuario, registrese!")</script> ';	
		echo "<script>location.href='../view/signin.php'</script>";	
	}
?>