<?php
	include "db_connect.php";

	$id = $_GET['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$c = $_POST['hobby'];
	$d=implode(",",$c);
	$color = $_POST['color'];


	$sql = "UPDATE person_data SET name='$name', age='$age', address='$address', gender='$gender', hobby='$d', color='$color' " . "WHERE id = '$id'";

	$query = $connection->query($sql) or die("Problem in updating the student data");

	if($query)
	{
		?>
		<script language="Javascript">document.location="index.php"</script>
		<?php
	}

?>