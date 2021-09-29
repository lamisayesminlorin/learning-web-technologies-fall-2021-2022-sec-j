<?php

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		
		if($email == ""){
			echo "empty submission...";
		}else{
			echo "<b>Email: </b>".$email;
		}
	}

?>

<!DOCTYPE html>
<html>

<head>
	<title>PHP2b</title>
</head>

<body>	
	<form method="POST">
		<fieldset style="width:400px">
				<legend><b>Email</b></legend>
				<input type="email" name="email" value=""> 
				<button title="hint: sample@example.com" style="color: green; font-size: 18px;"><b>i</b></button>
				<hr>
				<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>	
</body>

</html>