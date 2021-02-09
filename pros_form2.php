<?php
include 'db_connect.php';


$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$a= $_POST['hobby'];
$b=implode(',',$a);
$colour = $_POST['color'];

$sql= "INSERT INTO person_data(name,age,address,gender,hobby,color)" ."VALUES ('$name','$age','$address','$gender','$b','$colour')";

$query = $connection-> query($sql) or die ("<br>ERROR!!!");

if($query)
{
	echo "Data has been successfully saved!";

}else{
	echo "Error";
}

echo "<br>";
echo "Person name is " . $_POST['name'];
echo "<br>";
if ($_POST['age'] <= 12)
{
echo "Person is studying at an elementary school";
}
else
if ($_POST['age'] > 12 && $_POST['age'] <= 35)
{
echo "Person is a teenager";
}
else
{
echo "Person is a veteran";
}

echo "<br>";

echo "Gender: " . $_POST['gender'];

echo "<br>";


	foreach($_POST['hobby'] as $checked)
	{
		if($checked != ""){
		echo 'Your hobby is '.$checked.'';
		echo "<br>";}
	}

echo "Your most preferred color is " . $_POST['color'];
echo "<br>";
?>
<p><input class="button" type="button" onclick="window.location.replace('http://localhost/DMS/')" value="Home" /></p>

<html>
<head>
<title>Person Data</title>
<link rel="stylesheet" href="layoutstyle.css">
</head>

</html>