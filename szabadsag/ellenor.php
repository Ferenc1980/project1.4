<?php 
	include '../config.php';
    $sql="select datum  from szabadsag where datum='{$_POST["datum"]}'";
	$stmt=$db->query($sql);
    $str="";
	if($stmt->rowCount()==1)
		echo 1;
    else
        echo 0;
?>