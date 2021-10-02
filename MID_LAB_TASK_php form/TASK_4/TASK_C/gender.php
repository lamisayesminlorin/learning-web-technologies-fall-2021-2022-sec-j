<!DOCTYPE html>
<html>

<head>
	<title>Task</title>
</head>

<body>
	<form method="POST">
		<fieldset style="width:400px">
			<legend><b>GENDER</b></legend>	
					<input type="radio" name="gender" value="male"
					<?php
						if(isset($_POST['submit'])){ 
							if($_POST["gender"] == "male"){ 
							echo "checked";
						}
					}
					?>
					> Male
					<input type="radio" name="gender" value="female"
					<?php
						if(isset($_POST['submit'])){ 
							if($_POST["gender"] == "female"){ 
							echo "checked";
						}
					}?>
					> Female
					<input type="radio" name="gender" value="other"
					<?php
						if(isset($_POST['submit'])){ 
							if($_POST["gender"] == "other"){ 
							echo "checked";
						}					
					}?>
					> Other 
			<hr>	
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>	
</body>

</html>