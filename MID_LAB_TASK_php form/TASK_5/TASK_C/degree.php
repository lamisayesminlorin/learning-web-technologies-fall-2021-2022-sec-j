<!DOCTYPE html>
<html>

<head>
    <title>PHP5c</title>
</head>

<body>    
    <form method="POST" >
        <fieldset style="width:400px">  
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" name="degree[]" value="SSC"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['degree'] == "SSC"){
						echo "checked";
					}
				}
			?> > SSC
			<input type="checkbox" name="degree[]" value="HSC"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['degree'] == "HSC"){
						echo "checked";
					}
				}
			?>
			> HSC
			<input type="checkbox" name="degree[]" value="BSc"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['degree'] == "BSc"){
						echo "checked";
					}
				}
			?>
			> BSc
			<input type="checkbox" name="degree[]" value="MSc"
			<?php
				if(isset($_POST['submit'])){
					if($_POST['degree'] == "MSc"){
						echo "checked";
					}
				}
			?>
			> MSc
			<hr>
			<input type="submit" name="submit" value="Submit">
		</fieldset>
    </form>
</body>

</html>