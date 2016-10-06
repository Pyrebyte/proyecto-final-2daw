<?php
	$user=$_GET['user'];
	$mail=$_GET['email'];
	$pass= $_GET['pass'];
	$rpass=$_GET['rpass'];

	require("../model/config.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("¡Ya existe ese email, verifique sus datos!");</script> ';
                echo "<script>location.href='../view/signin.php'</script>";	
			}else{
				mysqli_query($mysqli,"INSERT INTO login VALUES('','$user','$pass','$mail','')");
				echo ' <script language="javascript">alert("¡Usuario registrado con éxito!");</script> ';
                echo "<script>location.href='../view/signin.php'</script>";	
			}
		}else{
			echo ' <script language="javascript">alert("¡Las contraseñas no coinciden!");</script> ';
            echo "<script>location.href='../view/signin.php'</script>";	
		}
?>