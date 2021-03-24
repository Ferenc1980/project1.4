<?php 
	session_start();
	//print_r($_GET);
	include "../config.php";
	$sql="delete from szabadsag where datum='{$_GET["datum"]}'";
	try{
		$stmt=$db->exec($sql);
		$_SESSION['delete-date']="sikeres törlés: {$_GET['datum']}";
		echo $sql;
	}catch(Exception $e){
		$_SESSION['delete-date']="Hiba !!! nem sikerült a törlés ...";
		echo "hiba";
	}		
	header('Location:../index.php?p=szabadsag/szabadsag.php');
	
	
?>