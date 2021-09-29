<?php

	if(isset($_POST['submit'])){
		$deg = $_POST['degree'];
		
		if(empty($deg)){
				echo "empty submission...";
			}else{
				$n = count($deg);
				
				echo "<b>DEGREE: </b>";
				for($i = 0; $i < $n; $i++){
					echo $deg[$i]." ";
				}
			}
	}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP5b</title>
</head>

<body>    
    <form method="POST">
        <fieldset style="width:400px">  
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"> SSC
			<input type="checkbox" name="degree[]" value="HSC"> HSC
			<input type="checkbox" name="degree[]" value="BSc"> BSc
			<input type="checkbox" name="degree[]" value="MSc"> MSc
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
    </form>
</body>

</html>