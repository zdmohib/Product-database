<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
</head>
<body>
	<?php
		$name=$email=$date=$exam=$gender=$bloodGroup="";
		$nameErr = $emailErr = $dateErr=$examErr= $genderErr=$bgErr= $monthErr = $yearErr = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["name"])){
				$nameErr = "Please Enter Your Name";
			} 
			else {
				$name = $_POST["name"];
			}
			if (empty($_POST["email"])){
				$emailErr = "Invalid email format";
			} 
			else {
				$email = $_POST["email"];
			}
			
			if (empty($_POST["date"])){
				$dateErr = "Please Enter Your Birth Date";
			} 
			else {
				$date = $_POST["date"];
			}
			
			
			if (empty($_POST["gender"])){
				$genderErr = "Please Enter Your Gender";
			} 
			else {
				$gender = $_POST["gender"];
			}
			if (($_POST["bloodGroup"])=="none"){
				$bgErr = "BloodGroup is required";
			} 
			else {
				$bloodGroup = $_POST["bloodGroup"];
			}
			
			if (empty($_POST["degree"]) ){
				$examErr = "Minimum Degree SSC  ";
			} 
			else {
				
				$degree = $_POST["degree"];
				
				/*if(!empty($_POST["bsc"]))
					$exam =$exam.", ".$_POST["bsc"];
				if(!empty($_POST["msc"]))
					$exam =$exam.", ".$_POST["msc*/
			}
			
			
		}
	?>
	<form method="post" action="insertdb.php">
		<h1>Lab Task 3 </h1>
		
				Name :
				<input type="text" name="name"/>
				<span style="color:red;">* <?php echo $nameErr;?></span>
				<br><br>
			
			
				Quantity :
				<input type="text" name="quantity"/>
				
                <br><br>			
			
				Description :
				<input type="text" name="description"/>
				
			    <br><br> 
			
				
			
		
		
		<input type="submit" name="submit" value="Submit">  
</form>
	<br><br>








<form method="post" action="table.php">
							
		
		<input type="submit" name="submit" value="Show table">  

			<br><br>
</form>



<form method="post" action="delete.php">
		
			
        eter a id you want to delate :
				<input type="number" name="id"/>				
					
		
		<input type="submit" name="submit" value="delete">  

		<br><br>
</form>


<form method="post" action="update.php">
		
			
        eter a id you want to update :
				<input type="number" name="id"/>	
		eter updated name :
				Name :
				<input type="text" name="name"/>
	     eter updated quantity :
				<input type="text" name="quantity"/>
		eter updated description :
				description :
				<input type="text" name="description"/>
				<br><br>			
				<br><br>	
				<br><br>						
					
		
		<input type="submit" name="submit" value="update">  
</form>







	<?php
	if($name!="" && $email!="" && $date!="" && $exam!="" && $gender!="" && $bloodGroup!="")
		{
			echo "<h3>Name : $name</h3>";
			echo "<h3>Email : $email</h3>";
			echo "<h3>Date of Birth : $date</h3>";
			echo "<h3>Gender : $gender</h3>";
			echo "<h3>Degree : $degree</h3>";
			echo "<h3>Blood group : $bloodGroup</h3>";
		}
	?>
	
</body>
</html>