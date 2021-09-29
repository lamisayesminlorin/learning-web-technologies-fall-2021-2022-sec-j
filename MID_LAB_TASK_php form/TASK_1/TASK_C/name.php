<!DOCTYPE html>
<html>

<head>
	<title>PHP1c</title>
</head>

<body>
	<form method="POST">
		<fieldset style="width:400px;">
			<legend><b>NAME</b></legend>
			Name: <input type="text" name="myname" value="<?php if(isset($_POST['myname'])){ echo $_POST['myname'];} ?>"> <hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>

</html>