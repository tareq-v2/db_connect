<?php

	include"db_connect1.php";
	$db = new database();

	if(isset($_POST["add"]))
	{
		$x = $_POST["txtName"];
		$y = $_POST["txtDepartment"];


		$sql = $db->link->query("INSERT INTO student_info (name, department) VALUES ('$x','$y')");

		if($sql)
		{
			echo "Add Successfully";
		}
		else 
		{
			echo "Add Unsuccessful";
		}
	}

	if(isset($_POST["delete"]))
	{
		$sql = $db->link->query("DELETE FROM student_info");

		if($sql)
		{
			echo "Delete Successfully";
		}
		else 
		{
			echo "Delete Unsuccessful";
		}
	}

	if(isset($_POST["singleDelete"]))
	{
		$sql = $db->link->query("DELETE FROM student_info WHERE id=16");

		if($sql)
		{
			echo "Delete Successfully";
		}
		else 
		{
			echo "Delete Unsuccessful";
		}
	}

	if(isset($_POST["update"]))
	{
		$x = $_POST["txtName"];
		$y = $_POST["txtDepartment"];

		$sql = $db->link->query("UPDATE student_info SET name='$x', department='$y' WHERE id=17");

		if($sql)
		{
			echo "update Successfully";
		}
		else 
		{
			echo "update Unsuccessful";
		}
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST"> 
		<input type="text" name="txtName">
		<input type="text" name="txtDepartment">
		<input type="submit" name="add" value="Add">
		<input type="submit" name="update" value="Update">
		<input type="submit" name="delete" value="Delete">
		<input type="submit" name="singleDelete" value="Single Delete">
	</form>
</body>
</html>