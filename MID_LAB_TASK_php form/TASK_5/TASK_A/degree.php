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
	}else{
		echo "error submission";
	}

?>