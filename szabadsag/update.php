<?php 
	include "config.php";
	$sql="update szabadsag set ev='{$_POST["ev"]}',nap={$_POST["nap"]},hadrendi='{$_POST["hadrendi"]}' where id=".$_POST["azonosito"];
	$con->query($sql);
?>