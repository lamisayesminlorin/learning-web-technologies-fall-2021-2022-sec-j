<?php

	if(isset($_POST['submit'])){
		$bloodg = $_POST['bloodGroup'];
		
		echo "BLOOD GROUP: ".$bloodg;
	}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP6b</title>
</head>

<body>
    <form method="POST">
        <fieldset style="width:400px">
            <legend><b>BLOOD GROUP</b></legend>
            <select name="bloodGroup" >
				<option value="A+" selected>A+</option>
				<option value="A-">A-</option>
				<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
			</select>
			<hr>
			<input type="submit" name="submit" value="Submit">
        </fieldset>
        <br>
    </form>    
</body>

</html>