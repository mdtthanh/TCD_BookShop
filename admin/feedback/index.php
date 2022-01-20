<?php
	$title = 'Feedback';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$sql = "SELECT * FROM Feedback ORDER BY status ASC, updated_at DESC";
	$data = executeResult($sql);
?>

<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th class="text-center" style="width: 60px">No</th>
					<th class="text-center" style="width: 100px">Firstname</th>
					<th class="text-center" style="width: 100px">Lastname</th>
					<th class="text-center" style="width: 120px">Phone</th>
					<th class="text-center" style="width: 200px">Email</th>
					<th class="text-center">Subject</th>
					<th class="text-center">Note</th>
					<th class="text-center" style="width: 120px">Created at</th>
					<th style="width: 120px"></th>
				</tr>
			</thead>
			<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<th class="text-center">'.(++$index).'</th>
					<td>'.$item['firstname'].'</td>
					<td>'.$item['lastname'].'</td>
					<td class="text-center">'.$item['phone'].'</td>
					<td>'.$item['email'].'</td>
					<td>'.$item['subject'].'</td>
					<td>'.$item['note'].'</td>
					<td class="text-center">'.$item['updated_at'].'</td>
					<td class="text-center" style="width: 50px">';
		if($item['status'] == 0) {
			echo '<button onclick="markRead('.$item['id'].')" class="btn btn-danger">Seen</button>';
		}	
		echo '</td>
				</tr>';
	}
?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	function markRead(id) {
		$.post('form_api.php', {
			'id': id,
			'action': 'mark'
		}, function(data) {
			location.reload()
		})
	}
</script>
<?php
	require_once('../layouts/footer.php');
?>