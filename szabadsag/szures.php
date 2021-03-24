<?php
session_start();
require_once "../config.php";
$ev=intval(substr($_POST['datum'],0,4));
$ho=intval(substr($_POST['datum'],5,2));
$sql="select datum from szabadsag where year(datum)={$ev} and month(datum)={$ho}  order by datum";
//echo $sql;
$stmt=$db->query($sql);
$str="";

while($row=$stmt->fetch()){
	extract($row);
	$str.="<tr><td>{$datum}</td><td class='btn btn-outline-danger m-1 '><a href='szabadsag/delete.php?datum={$datum}'>törlés</a></td></tr>";
}
echo $str;
?>