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