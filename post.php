<html>
	<head>
		<title>Post</title>
	</head>
	<body>
		<fieldset align="center">
			<legend>Post</legend>
			<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
				<table align="left">
					<tr>
						<td>Rent For<input type="radio" name="rentFor" value="flat"> Flat
							<input type="radio" name="rentFor" value="room"> Room
						</td>
					</tr>
					<tr>
						<td>Address</td>
			            <td><input type="text" name="location"></td>
					</tr>
					<tr>
						<td>Type</td>
						<td><select name="type">
			    		<option value="MaleMess">Male Mess</option>
			 			<option value="FemaleMess">Female Mess</option>
			  			<option value="Sublet">Sublet</option>
			            </select>
			            </td>
					</tr>
					<tr>
						<td>Area(sq.ft)</td>
						<td><input type="text" name="area"></td>
						<td></td>
						<td>Bed(s)</td>
			            <td><select name="bed">
			    		<option value="1">1</option>
			 			<option value="2">2</option>
			  			<option value="3">3</option>
			  			<option value="4">4</option>
			            </select>
			    		</td>
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
					<tr>
						<td>Bath Attach <input type="checkbox" name="bath" value="yes">
			    		Balcony Attach <input type="checkbox" name="balcony" value="yes">
			    		</td>
					</tr>
					<tr>
						<td>Mobile</td>
						<td><input type="text" name="mobile" placeholder="Give your mobile number"/></td>
					</tr>
					<tr>
						<td>Description</td>
						<td><textarea rows="10" cols="50" name="comment" form="post"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="post" value="Post"/></td>
					</tr>
				</table>
			</form>
		</fieldset>

	</body>
</html>