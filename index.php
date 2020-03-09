<?php
session_start();
?>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<fieldset align="center">
			<legend>Login Form</legend>
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<table align="center">
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
						<td><input type="submit" name="login" value="Login"/></td>
					</tr>
				</table>
			</form>
		</fieldset>

	</body>
</html>
<?php
if(isset($_POST['login']))
{
	$con=mysqli_connect("localhost","root","","testdb");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}
	//Retrieve Data

	$password=$_POST['password'];
	$email=$_POST['email'];
	$sql="SELECT * FROM customers WHERE email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);	
	if(mysqli_num_rows($result)>0)
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['name']=$row['name'];
		header("Location:input.php");
	}
	else
	{
		echo "No data found.<br/>";
	}

	
mysqli_close($con);		
}


?>

<?php

	$con=mysqli_connect("localhost","root","","testdb");
	if(!$con)
	{
		die("Connection Error: ".mysqli_connect_error()."<br/>");
	}

	$sql="SELECT * FROM product";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0)
	 {
	 	?>
	 	<table>
	 		<tr>
	 			<th>Product ID</th>
	 			<th>Product Name</th>
	 			<th>Description</th>
	 			<th>Product Quantity</th>
	 		</tr>
	 	<?php
	 	while($row=mysqli_fetch_array($result))
	 	{
	 		echo "<tr>";
	 		echo "<td>".$row['pid']."</td>";
	 		echo "<td>".$row['name']."</td>";
	 		echo "<td>".$row['description']."</td>";
	 		echo "<td>".$row['quantity']."</td>";
	 		echo "</tr>";

	 	
	 	}
	 	echo "</table>";
	 }
	 else
	 {
	 	echo "No data found.<br/>";
	 }
mysqli_close($con);	