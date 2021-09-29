<?php

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		
		if($email == ""){
			echo "Empty...";
		}else{
			echo "Email ".$email;
		}
	}else{
		echo "Error submission";
	}

?>