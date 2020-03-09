<html>
	<head>
		<title>Registration Page</title>
	</head>
	<body>
		<fieldset align="center">
			<legend>Registration Form</legend>
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<table align="center">
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" placeholder="Give your name"/></td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><input type="text" name="mobile" placeholder="Give your mobile number"/></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" placeholder="Give your email"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Give your password"/></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="register" value="Register"/></td>
					</tr>
				</table>
			</form>
		</fieldset>

	</body>
</html>
<?php
if(isset($_POST['register']))
{
	$con=mysqli_connect("localhost","root","","testdb");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Row Insert
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$mobile=$POST['mobile'];
	$sql="INSERT INTO customers(name,password,email,mobile) VALUES('$name','$password','$email','$mobile')";
	if(mysqli_query($con,$sql))
	{
		header("Location:login.php");
	}
	else
	{
		echo "Error in inserting: ".mysqli_error($con);
	}
mysqli_close($con);		
}

	



//Row Update	
	// $sql="UPDATE customers SET name='Loki' WHERE id=2";
	// if(mysqli_query($con,$sql))
	// {
	// 	echo "Successfully row updated..<br/>";
	// }
	// else
	// {
	// 	echo "Error in updating: ".mysqli_error($con);
	// }

//Row Delete
	// $sql="DELETE FROM customers WHERE id=2";
	// if(mysqli_query($con,$sql))
	// {
	// 	echo "Successfully row deleted..<br/>";
	// }
	// else
	// {
	// 	echo "Error in deleting: ".mysqli_error($con);
	// }

//Retrieve Data
	// $sql="SELECT * FROM customers WHERE id=1";
	// $result=mysqli_query($con,$sql);	
	// if(mysqli_num_rows($result)>0)
	// {
	// 	while($row=mysqli_fetch_array($result))
	// 	{
	// 		//echo "Id: ".$row[0]." Name: ".$row[1]."<br/>";
	// 		echo "Id: ".$row['id']." Name: ".$row['name']."<br/>";
	// 	}
	// }
	// else
	// {
	// 	echo "No data found.<br/>";
	// }


?>