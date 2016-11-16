<?php
	require_once("../includes/header.php");
	require_once("../includes/menu.php");

?>
<div class="well container">
  <form class="form-horizontal reg-form" action="addBundCheck.php" method="post" enctype="multipart/form-data">
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Lottery Company Name</label>
				<div class="col-sm-6">
				<input class="form-control" type="text" placeholder="ex: Xyz" maxlength="50" name="b_comName">
				</div>
		</div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Lottery Files</label>
				<div class="col-sm-6">
				<input class="form-control" type="file" name="b_tickList">
				</div>
		</div>
		<div class="form-group">
            <div class="col-sm-offset-2 col-md-10">
                <button type="submit" class="btn btn-default" name="addBund">Add Ticket</button>
            </div>
        </div>

	</form>
</div>
<?php 
	require_once("../includes/footer.php");
?>