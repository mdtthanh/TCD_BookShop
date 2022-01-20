<?php
	$title = 'ADD/EDIT Account';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$id = $msg = $fullname = $email = $phone = $address = $role_id = '';
	require_once('form_save.php');

	$id = getGet('id');
	if($id != '' && $id > 0) {
		$sql = "select * from User where id = '$id'";
		$userItem = executeResult($sql, true);
		if($userItem != null) {
			$fullname = $userItem['fullname'];
			$email = $userItem['email'];
			$phone = $userItem['phone'];
			$address = $userItem['address'];
			$role_id = $userItem['role_id'];
		} else {
			$id = 0;
		}
	} else {
		$id = 0;
	}
	$sql = "SELECT * FROM Role";
	$roleItems = executeResult($sql);
?>
<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> User</i>
</a>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h5 style="color: red;"><?=$msg?></h5>
			</div>
			<div class="panel-body">
				<form method="post" onsubmit="return validateForm();">
					<div class="form-group">
					  <label for="usr">Fullname:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="fullname" value="<?=$fullname?>" style="border-radius: 10px; width: 500px">
					  <input type="text" name="id" value="<?=$id?>" hidden="true">
					</div>
					<div class="form-group">
					  <label for="usr">Role:</label>
					  <select class="form-control" name="role_id" id="role_id" required="true" style="border-radius: 10px; width: 500px">
					  	<option value="">-Choose-</option>
					  	<?php
					  		foreach($roleItems as $role) {
					  			if($role['id'] == $role_id) {
					  				echo '<option selected value="'.$role['id'].'">'.$role['name'].'</option>';
					  			} else {
					  				echo '<option value="'.$role['id'].'">'.$role['name'].'</option>';
					  			}
					  		}
					  	?>
					  </select>
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$email?>" style="border-radius: 10px; width: 500px">
					</div>
					<div class="form-group">
					  <label for="phone">Phone:</label>
					  <input required="true" type="tel" class="form-control" id="phone" name="phone" value="<?=$phone?>" style="border-radius: 10px; width: 500px">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input required="true" type="text" class="form-control" id="address" name="address" value="<?=$address?>" style="border-radius: 10px; width: 500px">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:</label>
					  <input <?=($id > 0?'':'required="true"')?> type="password" class="form-control" id="pwd" name="password" minlength="8" style="border-radius: 10px; width: 500px">
					</div>
					<div class="form-group">
					  <label for="confirmation_pwd">Confirm Password:</label>
					  <input <?=($id > 0?'':'required="true"')?> type="password" class="form-control" id="confirmation_pwd" minlength="8" style="border-radius: 10px; width: 500px">
					</div>
					<button class="btn btn-success" style="margin-top: 20px; margin-left: 200px">Save</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function validateForm() {
		$pwd = $('#pwd').val();
		$confirmPwd = $('#confirmation_pwd').val();
		if($pwd != $confirmPwd) {
			alert("Password and Confirm Password Field do not match!")
			return false
		}
		return true
	}
</script>

<?php
	require_once('../layouts/footer.php');
?>