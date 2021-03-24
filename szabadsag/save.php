<?php 
	//print_r($_POST);
	include 'config.php';
	$n=count($_POST["kod"]);
	if($n>=1)
	{
		for($i=0;$i<$n;$i++)
		{
			if(trim($_POST["kod"][$i])!='')
			{
				$sql="insert into kategoriak  values ('{$_POST["kod"][$i]}','leiras');";
				$stmt=$db->exec($sql);
			}
		}
		echo "siekres insert";
	}
	else
	{
		echo "hiba";
	}
?>