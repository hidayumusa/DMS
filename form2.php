<?php
include 'db_connect.php';
?>

<html>
<head>
<title>Personal Information</title>
<link rel="stylesheet" href="layoutstyle.css">
</head>

<body>

<h1>Personal Information</h1>
<form name="form1" method="post" action="pros_form2.php">
<table width ="500" border="0" cellspacing="0" cellpadding="3">

<tr>
<td width = "121">Name : </td>
<td width = "367"> <input name="name" type="text"size="50" maxlength="100"></td>
</tr>

<tr>
<td>Age : </td>
<td><input name="age" type="text"
size="5" maxlength="3"></td>
</tr>

<tr>
<td>Address : </td>
<td><textarea name="address"
cols="40" rows="4"></textarea></td>
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
<input name="hobby[]" type="checkbox" value="Traveling">Traveling<br>
<input name="hobby[]" type="checkbox" value="Reading">Reading<br>
<input name="hobby[]" type="checkbox" value="Hiking">Hiking</td>
</tr>

<tr>
<td>Most Preferred color : </td>
<td>
<select name="color">
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Red">Red</option>
<option value="White">White</option>
<option value="Other">Other</option>
</select>
</td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2">
<div align="center">
<input type ="submit" name="Submit" value="Submit">
<input class="button" type="button" onclick="window.location.replace('http://localhost/DMS/')" value="Cancel" />
</div>
</td>
</tr>

</table>
</form>
</body>
</html>