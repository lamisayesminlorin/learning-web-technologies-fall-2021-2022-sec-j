<?php
	
	if(isset($_POST['submit'])){

		$name = $_POST['myname'];

		if($name == ""){
			echo "No name..";
		}else{
			echo " Your Name: ".$name;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP1b</title>
</head>
<body>
	<form method="POST" >
		<fieldset style="width:400px;">
			<legend><b>NAME</b></legend>
			<input type="text" name="myname" value=""> <hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>