<?php 
	include "config.php";
	$hadrendi=$_POST["hadrendi"];
	$ev=$_POST["ev"];
	$nap=$_POST["nap"];

	$sql="INSERT INTO szabadsag (ev,nap,hadrendi) VALUES ({$ev},{$nap},{$hadrendi})";
	$con->query($sql);
	$id=$con->insert_id;
	echo "<td>{$ev}</td>";
	echo "<td>{$nap}</td>";
	echo "<td>{$hadrendi}</td>";
	echo"<td><button type='button' class='btn btn-sm btn-info edit' data-id='{$azonosito}'><i class='fa fa-edit'></i></td>";
	echo"<td><button type='button' class='btn btn-sm btn-danger del' data-id='{$azonosito}'><i class='fa fa-trash'></i></td>";

	
?>