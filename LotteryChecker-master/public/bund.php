<?php
	require_once("../includes/functions.php");
	require_once("../includes/header.php");
	require_once("../includes/menu.php");
	$connection=connectDb();
	$u_id=$_SESSION["u_id"];
	$query="SELECT u_name FROM `user` WHERE user.u_id='$u_id'";
	$result=runQuery($connection, $query);
	$row=mysqli_fetch_assoc($result);
	$u_name=$row['u_name'];
?>
<div class="well container">
	<div class="container">
		<p class="btn well">User Name : <?php echo "$u_name";?></p>
	</div>
	<div class="col-md-12 content">
		<div>
			<form class="form-inline" method="post"  >
				<table  id="example" class="table table-striped">
					<thead>
						<tr>
							<th>Bundle No</th>
							<th>Company Name</th>
							<th>Ticket Number</th>
							<th>Bundle Date</th>
						</tr>
					</thead>
				</thead>
			<tbody>
	<?php
	$query="SELECT * FROM `bundle` where bundle.u_id='$u_id'";
	$result=mysqli_query($connection, $query);
	while($row=mysqli_fetch_assoc($result))
	{
	?>
			<tr>
				<form action="" method="POST">
					<td><?php echo $row['b_no']?></td>
					<td><?php echo $row['b_comName']?></td>
					<td><?php echo $row['b_tickNum']?></td>
					<td><?php echo $row['b_date']?></td>
			</tr>
				</form>
	<?php
	}
	?>
			</tbody>

				</table>
			</form>
	 	</div>
	</div>
</div>
<?php
	
	mysqli_close($connection);
	require_once("../includes/footer.php");
?>