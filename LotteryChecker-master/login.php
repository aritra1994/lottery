<?php
include_once("/includes/header.php");
require_once("/includes/functions.php");
?>
<div class="well page-header">
    <h1 class="container header">Lottery Checker</h1>
</div>
<div>
	<form class="form-horizontal reg-form" action="logincheck.php" method="post">
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Username</label>
				<div class="col-sm-6">
				<input class="form-control" type="text" placeholder="ex: xyz123" maxlength="50" name="u_name">
				</div>
		</div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Password</label>
				<div class="col-sm-6">
				<input class="form-control" type="password" placeholder="ex: 1q2w3e4e" maxlength="20" name="u_password">
				</div>
		</div>
		<div class="form-group">
            <div class="col-sm-offset-2 col-md-10">
                <button type="submit" class="btn btn-default" name="subMem">Login</button>
            </div>
        </div>
	</form>
</div>
<div>
	<form class="form-horizontal reg-form" action="logincheck.php" method="post">
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">User's Full Name</label>
				<div class="col-sm-6">
				<input required class="form-control" type="text" placeholder="ex: Mr. Xyz" maxlength="50" name="u_fullname">
				</div>
		</div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Username</label>
				<div class="col-sm-6">
				<input required class="form-control" type="text" placeholder="ex: xyz123" maxlength="50" name="u_name">
				</div>
		</div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Password</label>
				<div class="col-sm-6">
				<input required class="form-control" type="password" placeholder="ex: 1q2w3e4e" maxlength="20" name="u_password">
				</div>
		</div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">Re-Type Password</label>
				<div class="col-sm-6">
				<input required class="form-control" type="password" placeholder="ex: 1q2w3e4e" maxlength="20" name="u_rpassword">
				</div>
		</div>
		<div class="form-group form-group-md">
			<label class="col-md-2 control-label">E Mail number</label>
				<div class="col-sm-6">
				<input required class="form-control" type="email" placeholder="ex: xyz123@email.com" maxlength="50" name="u_email">
				</div>
		</div>
		<div class="form-group">
            <div class="col-sm-offset-2 col-md-10">
                <button type="submit" class="btn btn-default" name="subNewMem">Create</button>
            </div>
        </div>

	</form>
</div>

<?php
include_once("/includes/footer.php");
?>