<?php
    include "db_connect.php";
?>

<html>
<head>
         <title>Database Access</title>
         <link rel="stylesheet" href="layoutstyle.css">
</head>

<body>
      <h1>List of Person</h1>
     <a href="form2.php"> Add New Person </a>
<br><br>

<table width ="950" border="1" cellspacing="1" cellpadding="1">
<tr>
	<th>No.</th>
<!---<th>id</th>--->
	<th>Name</th>
	<th> Age </th>
         	<th>Address</th>
         	<th>Gender</th>
         	<th> Hobby</th>
         	<th>Color</th>
	<th>Action</th>
</tr>

<?php
	$j = 0;
	$conn = new mysqli($host, $username, $password, $databasename);
	$result = mysqli_query($conn,"select * FROM person_data ");
	if ($result->num_rows > 0)
	{
		while ($row = $result->fetch_array())
		{
		echo "<tr><td>";
		echo $j+1;
		echo "</td>";

/*echo "<td>";
echo $row["id"];
echo "</td>";*/

		echo "<td>";
		echo $row["Name"];
		echo "</td>";

		echo "<td>";
       		echo $row["Age"];
      		echo "</td>";

		echo "<td>";
       		echo $row["Address"];
   		echo "</td>";

 		echo "<td>";
		echo $row["Gender"];
      		echo "</td>";

       		echo "<td>";
       		echo $row["Hobby"];
      		echo "</td>";

      		echo "<td>";
       		echo $row["Color"];
       		echo "</td>";

		echo"<td>";
		echo "<a href=\"delete.php?id=" . $row['id'] . "\"" . ">Delete</a>";
		echo "/";
		echo "<a href=\"edit.php?id=" . $row['id'] . "\"" . ">Edit</a>";
		echo "</td></tr>\n";

		$j++;
		}
	}

	$connection -> close();
?>
</table>
</body>
</html>
