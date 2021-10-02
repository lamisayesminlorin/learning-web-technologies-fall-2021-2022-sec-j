<?php

	if(isset($_POST['submit'])){
		$day = $_POST['dd'];
		$month = $_POST['mm'];
		$year = $_POST['yyyy'];
		
		if($day == "" || $month == "" || $year == ""){
			echo "Null";
		}else if(($day > 0 && $day <= 31) && ($month > 0 && $day <= 12) && ($year >= 1900 && $year <= 2021)){
			echo "<b>DATE OF BIRTH: </b>".$day." / ".$month." / ".$year;
		}else{
			echo "Please put a valid date";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Task</title>
</head>

<body>
	<form method="POST">
		<fieldset style="width:400px;">
			<legend><b>DATE OF BIRTH</b></legend>	
				
				
				<input type="number" name="dd" style="width:40px;" value=""> / <input type="number" name="mm" style="width:45px;" value="">	/ <input type="number" name="yyyy" style="width:60px;" value="">
				<hr>
				<input type="submit" name="submit" value="Submit">	
		</fieldset>		
	</form>	
</body>

</html>