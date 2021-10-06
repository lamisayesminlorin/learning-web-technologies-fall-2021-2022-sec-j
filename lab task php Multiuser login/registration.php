<?php
	session_start();

	if(isset($_POST['submit'])){

        $name       = $_POST['name'];
		$uname 		= $_POST['uname'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

        
		if($name != '' && $uname != '' && $password != '' && $email != '')
        {
            $user =['name'=>$name, 'email'=>$email , 'uname'=> $uname , 'password'=>$password];
			$_SESSION['user'] = $user;
			header('location: Login.html');
		}else{
			echo "Null value found...";
		}
	}else{
		header('location: Login.html');
	}

?>