<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("Location:login.php");
}
?>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<?php
		$name=$_SESSION['name'];
		echo "<h1>Welcome $name</h1>";
		?>
		<a href= "post.php">Post</a>&nbsp; |&nbsp; <a href= "logout.php">Log Out</a> |&nbsp; <a href="index.php">Delete My Account</a>
		<fieldset align="left">
		<legend>Flat</legend>
		<table align="left">
			<tr>
			    <td>Location</td>
			    <td><input type="text" name="location"></td>
			    <td></td>
			    <td>Type</td>
			    <td><select name="type">
			    		<option value="MaleMess">Male Mess</option>
			 			<option value="FemaleMess">Female Mess</option>
			  			<option value="Sublet">Sublet</option>
			        </select>
			    </td>
			    <td></td>
			    <td>Bed(s)</td>
			    <td><select name="bed">
			    		<option value="1">1</option>
			 			<option value="2">2</option>
			  			<option value="3">3</option>
			  			<option value="4">4</option>
			        </select>
			    </td>
			</tr>
			<tr>
				<td>Area(sq.ft)</td>
				<td><input type="text" name="area"></td>
				<td></td>
				<td>Bath(s)</td>
				<td><select name="bath">
			    		<option value="1">1</option>
			 			<option value="2">2</option>
			  			<option value="3">3</option>
			        </select>
			    </td>
			    <td></td>
			    <td>Balcony(s)</td>
			    <td><select name="balcony">
			    		<option value="1">1</option>
			 			<option value="2">2</option>
			  			<option value="3">3</option>
			        </select>
			    </td>
            </tr>
		</table>
	</fieldset>
	<fieldset align="right">
		<legend>Room</legend>
		<table align="right">
			<tr>
			    <td>Location</td>
			    <td><input type="text" name="location"></td>
			    <td></td>
			    <td>Type <select name="type">
			    		 <option value="MaleMess">Male Mess</option>
			 			 <option value="FemaleMess">Female Mess</option>
			  			 <option value="Sublet">Sublet</option>
			        </select>
			    </td>
			    <td></td>
			</tr>
			<tr>
				<td>Area(sq.ft)</td>
				<td><input type="text" name="area"></td>
				<td></td>
				<td>Bath Attach <input type="checkbox" name="bath" value="yes">
			    Balcony Attach <input type="checkbox" name="balcony" value="yes">
			    </td>
            </tr>
		</table>
	</fieldset>
	<br>
	<button>Search</button>
	<fieldset align="center">
		<legend>Search Result</legend>
		<table align="left">
			
		</table>
	</fieldset>
		
	</body>
</html>
