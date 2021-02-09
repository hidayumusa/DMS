<?php
	include "db_connect.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM person_data WHERE id = '$id'";
	$query = $connection-> query ($sql);
	if ($row = $query->fetch_array())
	{
			$name = $row['Name'];
			$age = $row['Age'];
			$address = $row['Address'];
			$gender = $row['Gender'];
			$a = $row['Hobby'];
			$b = explode(",",$a);
			$color = $row['Color'];
	}
?>

<html>
<head>
<title>Update Personal Information</title>
<link rel="stylesheet" href="layoutstyle.css">
</head>

<body>

<h1>Update Personal Information</h1>
<form method="post" action="update.php?id=<?php echo $id ?>">
<table width="500" border="0" cellspacing="0" cellpadding="3">

<tr>
	<td width = "121">Name:</td>
	<td width = "367"><input type="text" name="name" value="<?php echo $name?>" 		size='30'>&nbsp;</td>
</tr>
<tr>
	<td>Age : </td>
	<td><input name="age" type="text" size="5" maxlength="3" value="<?php echo $age?>"></td>
	</tr>
<tr>
	<td>Address : </td>
	<td><textarea name="address"
	cols="40" rows="4" value="<?php echo $address?>"></textarea></td>
	</tr>
<tr>
	<td>Gender : </td>
	<td><input type="radio" name="gender" value="Male" checked >Male <br>
	<input type="radio" name="gender" value="Female">Female
	</td>
	</tr>
<tr>
	<td>Hobby : </td>
	<td>
	
	<input name="hobby[]" type="checkbox" value="Travelling"
	<?php
		if(in_array("Traveling",$b))
		{
			echo "checked";
		}
	?>
	>Traveling<br>
	<input name="hobby[]" type="checkbox" value="Reading"
	<?php
		if(in_array("Reading",$b))
		{
			echo "checked";
		}
	?>
	>Reading<br>
	<input name="hobby[]" type="checkbox" value="Hiking"
	<?php
		if(in_array("Hiking",$b))
		{
			echo "checked";
		}
	?>
	>Hiking</td>
</tr>

<tr>
	<td>Most Preferred Color :</td>
	<td><input type="text" name="color" value="<?php echo $color?>" /></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>

<tr>
<td colspan="2">
<div align="center">
<input type="submit" name="submit" value="Update"/>
<input class="button" type="button" onclick="window.location.replace('http://localhost/DMS/')" value="Cancel" />
</td>
</tr>

</table>
</form>
</body>
</html>