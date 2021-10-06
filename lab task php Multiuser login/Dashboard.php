<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<body>
	</body>

	<table height = "50px" width = "100%"  border="1">
		<tr height = "100px">
<td colspan="2" > <center>
				 <h1>Logged in as <a href="profile.html"> <?=$_SESSION['user']['uname']?>  </a><a href="logout.php">| Logout</a> </h1>
			</center>
			
			</td>
		</tr>
		<tr height = "150px">
		<th >
		    Account
		</th>
		<th rowspan="2">
		  <h1>Welcome home! <?=$_SESSION['user']['uname']?> </h1>

		</th>
		<tr>
			<td>
				<a href="Dashboard.php"><u>. Dashboard</u></a><br>
               
               
               
               
               <a href="logout.php"><u>. Logout</u></a><br>
                <br>
			</td>
		</tr>
		<tr>
		    <td align="center" colspan="2">
            
		        
		    </td>
		</tr>
	</table>
	</head>
</html>
<?php
	
	}else{
		header('location: ../view/login.php');
	}
?>