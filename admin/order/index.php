<?php
$title = 'Order';
$baseUrl = '../';
session_start();
require_once($baseUrl . '../utils/utility.php');
require_once($baseUrl . '../db/dbhelper.php');
$user = getUserToken();

if ($user == null) {
	header('Location: ' . $baseUrl . 'authen/login.php');
	die();
}

// tìm kiếm theo số điện thoại và phân trang 
$param = "";
$search = isset($_GET['phone']) ? $_GET['phone'] : "";
if ($search) {
	$where = "WHERE phone LIKE N'%" . $search . "%' ";
	$param .= "phone=" . $search . "&";
}

$sql_dem = "SELECT count(id) AS number FROM orders WHERE phone LIKE N'%" . $search . "%' ";
$result_dem = executeResult($sql_dem);
$number = 0;
if ($result_dem != null && count($result_dem) > 0) {
	$number = $result_dem[0]['number']; // lưu number vào 1 mảng để tránh việc bị lỗi 
}
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 12; // 12 sản phẩm trên 1 trang
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1; // trang số 1
$totalPages = ceil($number / $item_per_page); // tính tổng số trang -- làm tròn lên

$offset = ($current_page - 1) * $item_per_page; // id sản phẩm bắt đầu từ ...


//pending, approved, cancel
if($search){
	$sql = "SELECT * FROM orders WHERE phone LIKE N'%" . $search . "%'  ORDER BY status ASC, order_date DESC LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
} else {
	$sql = "SELECT * FROM orders ORDER BY status ASC, order_date DESC  LIMIT " . $item_per_page . " OFFSET " . $offset . " ";

}
$data = executeResult($sql);

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
	<meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
	<meta name="robots" content="noindex,nofollow">
	<title><?= $title ?></title>
	<link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
	<link rel="icon" type="image/png" sizes="46x35" href="<?= $baseUrl ?>../assets/plugins/images/favicon.png">
	<link href="<?= $baseUrl ?>../assets/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= $baseUrl ?>../assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
	<link href="<?= $baseUrl ?>../assets/css/style.min.css" rel="stylesheet">
	<style>
		.sidebar-nav ul .sidebar-item .sidebar-link.active {
			font-weight: 500;
			border-left: 3px solid #fa0000;
		}

		.btn,
		.badge {
			background: #fa0000;
			font-family: 'Roboto', 'sans-serif';
			text-transform: inherit !important;
			padding: 20px 30px;
			color: #f3f4f4 !important;
			cursor: pointer;
			display: inline-block;
			font-size: 15px !important;
			font-weight: 400 !important;
			border-radius: 25px;
			line-height: 1;
			line-height: 0;
			cursor: pointer;
			-moz-user-select: none;
			transition: color 0.4s linear;
			position: relative;
			z-index: 1;
			border: 0;
			overflow: hidden;
		}
	</style>
</head>

<body>
	<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
		<header class="topbar" data-navbarbg="skin5">
			<nav class="navbar top-navbar navbar-expand-md navbar-dark" style="background: #fa0000;">
				<div class="navbar-header" data-logobg="skin6" style="background: #fef4f4;">
					<a class="navbar-brand" href="<?= $baseUrl ?>../">
						<span class="logo-text">
							<img src="<?= $baseUrl ?>../assets/plugins/images/logo-text_7.png" />
						</span>
					</a>
					<a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
				</div>
				<div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5" style="background: #fa0000;">
					<ul class="navbar-nav ms-auto d-flex align-items-center">
						<li class=" in">
							<form role="search" action="index.php" method="GET" class="app-search d-none d-md-block me-3">
								<input type="text" value="<?= isset($_GET['phone']) ? $_GET['phone'] : "" ?>" name="phone" placeholder="Search..." class="form-control mt-0">
								<button type="submit" aria-hidden="true" style="border: none; background: #fa0000;">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</li>
						<li>
							<a href="<?= $baseUrl ?>authen/logout.php" class="btn header-btn">Log out</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<aside class="left-sidebar" data-sidebarbg="skin6" style="background: #fef4f4;">
			<div class="scroll-sidebar" style="background: #fef4f4;">
				<nav class="sidebar-nav">
					<ul id="sidebarnav" style="background: #fef4f4;">
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $baseUrl ?>index.php" aria-expanded="false">
								<i class="fa fa-calendar-alt" aria-hidden="true"></i>
								<span class="hide-menu">Dashboard</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $baseUrl ?>user/index.php" aria-expanded="false">
								<i class="fa fa-users" aria-hidden="true"></i>
								<span class="hide-menu">User</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $baseUrl ?>category/index.php" aria-expanded="false">
								<i class="fa fa-table" aria-hidden="true"></i>
								<span class="hide-menu">Category</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $baseUrl ?>book/index.php" aria-expanded="false">
								<i class="fa fa-book" aria-hidden="true"></i>
								<span class="hide-menu">Book</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $baseUrl ?>order/index.php" aria-expanded="false">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i>
								<span class="hide-menu">Order</span>
							</a>
						</li>
						<li class="sidebar-item">
							<a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $baseUrl ?>feedback/index.php" aria-expanded="false">
								<i class="fa fa-comments" aria-hidden="true"></i>
								<span class="hide-menu">Feedback</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</aside>
		<div class="page-wrapper" style="background: #ffffff">
			<div class="page-breadcrumb bg-white">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<h4 class="page-title"><?= $title ?></h4>
					</div>
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						<div class="d-md-flex">
						</div>
					</div>
				</div>
			</div>

			<script src="<?= $baseUrl ?>../assets/plugins/bower_components/jquery/dist/jquery.min.js"></script>
			<script src="<?= $baseUrl ?>../assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
			<script src="<?= $baseUrl ?>../assets/js/app-style-switcher.js"></script>
			<script src="<?= $baseUrl ?>../assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
			<script src="<?= $baseUrl ?>../assets/js/waves.js"></script>
			<script src="<?= $baseUrl ?>../assets/js/sidebarmenu.js"></script>
			<script src="<?= $baseUrl ?>../assets/js/custom.js"></script>
			<script src="<?= $baseUrl ?>../assets/plugins/bower_components/chartist/dist/chartist.min.js"></script>
			<script src="<?= $baseUrl ?>../assets/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
			<script src="<?= $baseUrl ?>../assets/js/pages/dashboards/dashboard1.js"></script>
			<main role="main" class="col-md-20 ml-sm-auto col-lg-20 px-4">

				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12 table-responsive">
						<table class="table table-bordered table-hover" style="margin-top: 20px;">
							<thead>
								<tr>
									<th class="text-center" style="width: 60px">No</th>
                                    <th class="text-center" style="width: 100px">Invoice No</th>
									<th class="text-center" style="width: 200px">Full name</th>
									<th class="text-center">Phone</th>
									<th class="text-center">Address</th>
									<th class="text-center">Note</th>
									<th class="text-center" style="width: 120px">Total money</th>
									<th class="text-center" style="width: 120px">Order date</th>
									
									<th class="text-center" style="width: 120px"></th>
								</tr>
							</thead>
							<tbody>
								<?php
								$index = 0;
								foreach ($data as $item) {
									echo '<tr>
					<th class="text-center">' . (++$index) . '</th>
                    <td class="text-center"><a href="detail.php?id=' . $item['id'] . '">#' . $item['id'] . '</a></td>
					<td><a href="detail.php?id=' . $item['id'] . '">' . $item['fullname'] . '</a></td>
					<td class="text-center">' . $item['phone'] . '</td>
					<td>' . $item['address'] . '</td>
					<td>' . $item['note'] . '</td>
					<td class="text-center">' . number_format($item['total_money']) . '</td>
					<td class="text-center">' . $item['order_date'] . '</td>
					
					<td class="text-center" style="width: 50px">';
									if ($item['status'] == 0) {
										echo '<button onclick="changeStatus(' . $item['id'] . ', 1)" class="btn btn-success" style="margin-bottom: 10px; background: #FFA500; color: #ffffff !important" >Approve</button>
					<button onclick="changeStatus(' . $item['id'] . ', 2)" class="btn btn-danger" style="background: #FFA500; color: #ffffff !important">Cancel</button>';
									} else if ($item['status'] == 1) {
										echo '<label class="btn btn-success" style="background: #228B22; color: #ffffff !important">Approved</label>';
									} else {
										echo '<label class="btn btn-danger" style="background: #fa0000; color: #ffffff !important ">Cancel</label>';
									}
									echo '</td>
						</tr>';
								}
								?>
							</tbody>
						</table>
					</div>
					<?php include('../book/pagination.php') ?>
				</div>

				<script type="text/javascript">
					function changeStatus(id, status) {
						$.post('form_api.php', {
							'id': id,
							'status': status,
							'action': 'update_status'
						}, function(data) {
							location.reload()
						})
					}
				</script>

				<?php
				require_once('../layouts/footer.php');
				?>