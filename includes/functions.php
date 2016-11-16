<?php

//redirect
function redto($loc)
{
	header("Location: ".$loc);
	exit;
}

//presense
function presence($value)
{
	trim($value);
	return (isset($value)||$value!=="");
}
//string length
function inmin($value)
{
	$min=6;
	return (strlen($value)>=$min);
}
function inmax($value)
{
	$max=20;
	return (strlen($value)<=$max);
}
function inrange($value)
{
	$min=6;
	$max=20;
	return (strlen($value)>=$min||strlen($value)<=$max);
}

//type
function basicType($value)
{
	return (is_string($value)||is_int($value));
}

//uniqueness
//format
function typeMatch($value,$target)
{
	return preg_match("{$value}", "$target");
}
//conn
function connectDb()
{
	$connection=mysqli_connect('localhost','root','root','lottery');
	if (mysqli_connect_errno()) 
	{
		die("Database Connection Failed : ".
			mysqli_connect_error().
			"("
			.mysqli_connect_errno().")");
	}
	else
		return $connection;
}


//query
function runQuery($connection,$query)
{
	$result=mysqli_query($connection,$query);
	if ($result)
	{
		return $result;
	} 
	else
	{
		die ("Database Query Failed");
	}
}
/*
//insert into
function insertData($connection,$query)//have to edit this
{
	$result=mysqli_query($connection,$query);
	if ($result)
	{
		//redto();
	} 
	else
	{
		die ("Database Query Failed : ".
			mysqli_error().
			"("
			.mysqli_errno().")");
	}
}
//use data//have to edit this
while ($row=mysqli_fetch_assoc($result) ) {
	echo $row["id"]."<br/>";
	echo $row["menu_name"]."<br/>";
	echo $row["position"]."<br/>";
	echo $row["visible"]."<br/>";
	echo "<hr />";
}
*/

//free



//close
function freenClose($result,$connection)
{
	mysqli_free_result($result);
	mysqli_close($connection);	
}
?>
