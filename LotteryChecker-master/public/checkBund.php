<?php
	require_once("../includes/functions.php");
	require_once("../includes/header.php");
	require_once("../includes/menu.php");
	$connection=connectDb();
	$u_id=$_SESSION["u_id"];
	$query="SELECT b_comName FROM `bundle` where bundle.u_id='$u_id' GROUP BY `b_comName`";
	$result=runQuery($connection,$query);?>
<div class="well container">
  <form class="form-horizontal reg-form" action="#" method="post" enctype="multipart/form-data">
		<div class="form-group form-group-md">
               <label class="col-md-2 control-label">Tickets</label>
               <div class="col-md-6 form-group-md">
					<select  class="btn btn-default" name="r_comName">
						<option disabled selected style='display:none;'>Company Names</option>
<?php
	while($row=mysqli_fetch_array($result)) 
	{

		$comName=$row['b_comName'];
?> 
						<option value="<?php echo $comName; ?>" ><?php echo $comName; ?></option>
<?php
	}
?>
                     </select>
               </div>

         </div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Lottery Result Files</label>
				<div class="col-sm-6">
				<input class="form-control" type="file" name="r_result">
				</div>
		</div>
		<div class="form-group">
            <div class="col-sm-offset-2 col-md-10">
                <button type="submit" class="btn btn-default" name="checkBund">Check Results</button>
            </div>
        </div>

	</form>
<?php
	if(isset($_POST['checkBund']))
	{
		$comName=$_POST["r_comName"];
		$connection=connectDb();
		$u_id=$_SESSION["u_id"];
		$query="SELECT u_name FROM `user` WHERE user.u_id='$u_id'";
		$result=runQuery($connection, $query);
		$row=mysqli_fetch_assoc($result);
		$u_name=$row['u_name'];
	?>
	<div class="container">
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
		$file = $_FILES['r_result']['tmp_name']; 
		$handle = fopen($file,"r"); 
		$ticket=array();
		while ($data = fgetcsv($handle,1000,",","'")) 
		{ 
			$ticket=$data;
		}
		$query="SELECT * FROM `bundle` where bundle.u_id='$u_id' and b_comName='$comName'";
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_assoc($result))
		{
			if(in_array($row['b_tickNum'], $ticket))
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
	}

?>
</div>
<?php 
	require_once("../includes/footer.php");
?>