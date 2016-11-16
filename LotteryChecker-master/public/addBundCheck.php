<?php
	session_start();
	require_once("../includes/functions.php");

	if (isset($_POST['addBund']))
	{
		$file = $_FILES['b_tickList']['tmp_name']; 
		$handle = fopen($file,"r"); 
		$ticket=array();
		while ($data = fgetcsv($handle,1000,",","'")) 
		{ 
			$ticket=$data;
		}
		$ticknum=sizeof($ticket);
		$u_id=$_SESSION["u_id"];
		$b_comName=$_POST['b_comName'];
		$connection=connectDb();
		for ($count=0; $count < $ticknum; $count++) 
		{ 
			$b_tickNum=$ticket[$count];
			$query="insert into lottery.bundle(u_id,b_tickNum,b_comName) values ('$u_id','$b_tickNum','$b_comName')";
			$result=runQuery($connection,$query);
			if(!$result)
			{
				echo "problem";
				break;
			}
		}
		mysqli_close($connection);
		redto("addBund.php");
	}
	
?>