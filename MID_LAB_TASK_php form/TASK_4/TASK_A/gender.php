<?php

	if(isset($_POST['submit'])){
		$gender = $_POST['gender'];
		
		if($gender == ""){
			echo "Null";
		}else{
			echo "GENDER - ".$gender;
		}
	}else{
		echo "Error";
	}

?>