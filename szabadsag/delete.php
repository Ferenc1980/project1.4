<?php 
	include "config.php";
	$sql="delete from kategoriak where azonosito=".$_POST["azonosito"];
	$stmt->exec($sql);
?>