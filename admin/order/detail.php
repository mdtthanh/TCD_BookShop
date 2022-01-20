<?php
	$title = 'Order detail';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$orderId = getGet('id');
	
	$sql = "SELECT orderdetail.*, Book.title, Book.thumbnail FROM orderdetail LEFT JOIN book ON book.id = orderdetail.book_id WHERE orderdetail.order_id = $orderId";
	$data = executeResult($sql);
	if($data == NULL) {
		die();
	}
	$sql = "SELECT * FROM orders WHERE id = $orderId";
	$orderItem = executeResult($sql, true);
?>
<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"  aria-expanded="false">
    <i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> Order</i>
</a>
<div style="margin-left: auto; width: 50px">
	<a title="Print" href="invoice.php?id=<?=$orderId?>" target="_blank">
        <i class="fa fa-print fa-2x" aria-hidden="true" style="color: #000000"></i>
	</a>
</div>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-8 table-responsive">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Thumbnail</th>
					<th class="text-center">Title</th>
					<th class="text-center">Price</th>
					<th class="text-center" style="width: 130px">Quantity</th>
					<th class="text-center">Subtotal</th>
				</tr>
			</thead>
			<tbody>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<th class="text-center">'.(++$index).'</th>
					<td><img src="'.fixUrl($item['thumbnail']).'" style="height: 120px"/></td>
					<td>'.$item['title'].'</td>
					<td class="text-center">'.number_format($item['price']).'</td>
					<td class="text-center">'.$item['num'].'</td>
					<td class="text-center">'.number_format($item['total_money']).'</td>
				</tr>';
	}
?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<th class="text-center">Grand Total</th>
					<th class="text-center"><?=number_format($orderItem['total_money'])?></th>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<table class="table table-bordered table-hover" style="margin-top: 20px;">
			<tr>
				<th>Fullname: </th>
				<td><?=$orderItem['fullname']?></td>
			</tr>
			<tr>
				<th>Email: </th>
				<td><?=$orderItem['email']?></td>
			</tr>
			<tr>
				<th>Address: </th>
				<td><?=$orderItem['address']?></td>
			</tr>
			<tr>
				<th>Phone: </th>
				<td><?=$orderItem['phone']?></td>
			</tr>
		</table>
	</div>
</div>

<?php
	require_once('../layouts/footer.php');
?>