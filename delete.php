<?php
	include "db_connect.php";

	$id = $_GET['id'];
	$sql = "DELETE FROM person_data WHERE id = $id";

	$query = $connection->query($sql) or die ("Problem in deleting the student data");

	if($query)
	{
		?>
		<script languange="Javascript">document.location="index.php"</script>
		<?php
	}
?>