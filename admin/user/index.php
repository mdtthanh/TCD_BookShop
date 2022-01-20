<?php
	$title = 'User';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$sql = "select User.*, Role.name as role_name from User left join Role on User.role_id = Role.id where User.deleted = 0";
	$data = executeResult($sql);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<a href="editor.php"><button class="btn btn-success">Add account</button></a>

		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th class="text-center" style="width: 60px">No</th>
					<th class="text-center" style="width: 180px">Fullname</th>
					<th class="text-center">Email</th>
					<th class="text-center">Phone</th>
					<th class="text-center">Address</th>
					<th class="text-center" style="width: 90px">Role</th>
					<th style="width: 50px"></th>
					<th style="width: 50px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<th class="text-center">'.(++$index).'</th>
					<td>'.$item['fullname'].'</td>
					<td>'.$item['email'].'</td>
					<td class="text-center">'.$item['phone'].'</td>
					<td>'.$item['address'].'</td>
					<td class="text-center">'.$item['role_name'].'</td>
					<td style="width: 50px">
						<a href="editor.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a>
					</td>
					<td style="width: 50px">';
		if($user['id'] != $item['id'] && $item['role_id'] != 1) {
			echo '<button onclick="deleteUser('.$item['id'].')" class="btn btn-danger">Delete</button>';
		}
		echo '
					</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	function deleteUser(id) {
		option = confirm('Are you sure you want to delete this account?')
		if(!option) return;

		$.post('form_api.php', {
			'id': id,
			'action': 'delete'
		}, function(data) {
			location.reload()
		})
	}
</script>

<?php
	require_once('../layouts/footer.php');
?>