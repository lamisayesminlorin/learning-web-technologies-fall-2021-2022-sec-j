<?php

if (isset($_POST['submit'])) {

	$name = $_POST['myname'];

	if ($name == "") {
		echo "No name..";
	} else {
		echo "Your Name: ".$name;
	}
} else {
	echo "Error...";
}

?>