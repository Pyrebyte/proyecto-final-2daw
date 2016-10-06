<?php
    session_start();
	$user=$_GET['user'];
	$email=$_GET['email'];
	$text=$_GET['text'];
    
	require("../model/config.php");
		
    if($user=$_SESSION['user']){
        mysqli_query($mysqli,"INSERT INTO message VALUES('','$user','$email',now(),'$text')");
        echo ' <script language="javascript">alert("¡Mensaje enviado!");</script> ';
        echo "<script>location.href='../view/contact.php'</script>";	
    }else{
        echo ' <script language="javascript">alert("¡Usuario icorrecto, comprueba tu usuario!");</script> ';
        echo "<script>location.href='../view/contact.php'</script>";	
	}
?>