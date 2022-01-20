<?php


session_start();

	require_once('../../utils/utility.php');
	require_once('../../db/dbhelper.php');


	$user = getUserToken();
	
	if($user == null) {
		header('Location: ../authen/login.php');
		die();
	}
	$orderId = $_GET['id'];
	$sql = "SELECT orderdetail.*, Book.title, Book.thumbnail FROM orderdetail LEFT JOIN book ON book.id = orderdetail.book_id WHERE orderdetail.order_id = $orderId";
	$data = executeResult($sql);

	$sql = "SELECT * FROM orders WHERE id = $orderId";
	$orderItem = executeResult($sql, true); 
	if($data == NULL) {
		header('Location: 404.php');
		die();
	}

?>

<!DOCTYPE html>
	
	<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="icon" type="image/png" sizes="46x35" href="../../assets/plugins/images/favicon.png"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	
		<meta name="description" content="Invoicebus Invoice Template">
		<meta name="author" content="Invoicebus">
	
		<meta name="template-hash" content="baadb45704803c2d1a1ac3e569b757d5">
	
		<link rel="stylesheet" href="../../assets/css/template.css">
	</head>
	
	<body>
		<div id="container">
			<section id="memo">
				<div class="logo" style="width: 300px">
					<img src="../../assets/img/logo3_footer.png">
				</div>
	
				<div class="company-info">
					<div>TCD Book </div>
	
					<br />
	
					<span>Số 1, Đại Cồ Việt, Hai Bà Trưng, Hà Nội</span>
	
					<br />
	
					<span>0337 937 397</span>
					<span>| tcdbook01@gmail.com</span>
				</div>
	
			</section>
	
			<section id="invoice-title-number">
	
				<span id="title">Hoá đơn</span>
				<span>#<?=$orderItem['id']?></span>
			</section>
	
			<div class="clearfix"></div>
	
			<section id="client-info">
				<span>Khách hàng:</span>
				<div>
					<span class="bold">Họ tên: <?=$orderItem['fullname']?></span>
				</div>
	
				<div>
					<span>Địa chỉ: <?=$orderItem['address']?></span>
				</div>
	
				<div>
					<span>Điện thoại: <?=$orderItem['phone']?></span>
				</div>
	
				<div>
					<span>Mail: <?=$orderItem['email']?></span>
				</div>
	
				<!-- <div>
					<span></span>
				</div> -->
			</section>
	
			<div class="clearfix"></div>
	
			<section id="items">
	
				 <table cellpadding="0" cellspacing="0">
	
					<tr>
						<th class="text-center" style="text-align: center;">STT</th>
						
						<th>Sản phẩm</th>
						<th class="text-center" style="text-align: center;">Giá</th>
						<th class="text-center" style="text-align: center;">Số lượng</th>
						<th></th>

					</tr>
<?php
	$index = 0;
	foreach($data as $item) {
		echo '<tr>
					<td class="text-center" style="text-align: center;">'.(++$index).'</td>
					<td>'.$item['title'].'</td>
					<td class="text-center" style="text-align: center;">'.number_format($item['price']).'</td>
					<td class="text-center" style="text-align: center;">'.$item['num'].'</td>
					<td class="text-center">'.number_format($item['total_money']).'</td>
				</tr>';
	}
?>
		</table>
	
			</section>
	
			<section id="sums">
	
				<table cellpadding="0" cellspacing="0">
					<br>
					<tr>
						<th>Thành tiền: </th>
						<td><?=number_format($orderItem['total_money'])?>đ</td>
					</tr>
	
					<tr>
						<th>Phí vận chuyển: </th>
						<td>0đ</td>
					</tr>
	
					<tr class="amount-total">
						<th>Tổng: </th>
						<td><?=number_format($orderItem['total_money'])?>đ</td>
					</tr>
	
					
					<tr data-hide-on-quote="true">
						<th>Đã thanh toán:</th>
						<td>0đ</td>
					</tr>
	
					<tr data-hide-on-quote="true">
						<th>Tổng cộng: </th>
						<td><?=number_format($orderItem['total_money'])?>đ</td>
					</tr>
	
				</table>
	
				<div class="clearfix"></div>
	
			</section>
	
			<div class="clearfix"></div>
	
			<section id="invoice-info">
				<div>
					<span>Ngày đặt hàng:</span> <span><?=$orderItem['order_date'];?></span>
				</div>
				<div>
					<span>Hình thức thanh toán:</span> <span>Thanh toán khi nhận hàng</span>
				</div>
				
				<?php
					if ($orderItem['status'] == 1) {
						echo '<div>
								<span>Trạng thái:</span> <span>Giao hàng thành công</span>
							</div>';
					} else if ($orderItem['status'] == 2){
						echo '<div>
								<span>Trạng thái:</span> <span>Huỷ đơn hàng</span>
							</div>';
					} else {
						echo '<div>
								<span>Trạng thái:</span> <span>Đơn hàng đang chờ xử lý</span>
							</div>';
					}
				?>
	
	
			</section>
			
			<section id="terms">
				
				<div class="notes" style="height: 200px;">Ghi chú: <?=$orderItem['note']?></div>
	
			</section>
	
			<div class="clearfix"></div>
	
			
	
			<div class="clearfix"></div>
		</div>
	
	
		<script src="../../assets/bootstrap/dist/Invoice_files/generator.min.js.download"></script><script type="text/javascript" src="../../assets/bootstrap/dist/Invoice_files/jquery.min.js.download"></script><script src="../../assets/bootstrap/dist/Invoice_files/data.txt"></script><script src="./Invoice_files/raw-data-en.js.download"></script>
	
	
	<script src="../../assets/bootstrap/dist/Invoice_files/data.js.download"></script><script type="text/javascript" src="../../assets/bootstrap/dist/Invoice_files/bootstrap.min.js.download"></script><script src="../../assets/bootstrap/dist/Invoice_files/save-state-en.js.download"></script><script src="../../assets/bootstrap/dist/Invoice_files/how-to-en.js.download"></script></body><ib-div id="ib_howToModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="howToModal" aria-hidden="true"><ib-div class="modal-dialog"><ib-div class="modal-content"><ib-div class="modal-header"><ib-span type="button" class="close" data-dismiss="modal"><ib-span aria-hidden="true">×</ib-span></ib-span><ib-div class="modal-title" id="howToModal">About</ib-div></ib-div><ib-div class="modal-body"><ib-div class="ib_how_to_container"><ib-div class="ib_modal_container">
  

  <ib-div class="ib_h3">What can I do with this template?</ib-div>
  <ib-div class="ib_p">
    <ib-div class="ib_ul">
      <ib-div class="ib_li">
        ● &nbsp; Write professional looking invoices in a matter of seconds.
        <ib-div class="ib_ul">
          <ib-div class="ib_li">
            ○ &nbsp; Use any language or currency.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Add your own logo with simple drag and drop.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Easily add, remove, and reorder item rows.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Add taxes and discounts.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Configure item column visibility.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Auto calculate subtotals, totals, taxes and discounts.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Save the current invoice data for future re-use.
          </ib-div>
          <ib-div class="ib_li">
            ○ &nbsp; Open already saved invoice data (useful when invoicing different clients).
          </ib-div>
        </ib-div>
      </ib-div>
      <ib-div class="ib_li">
        ● &nbsp; Restyle it by using simple HTML &amp; CSS techniques.
      </ib-div>
      <ib-div class="ib_li">
        ● &nbsp; Directly print it out.
      </ib-div>
      <ib-div class="ib_li">
        ● &nbsp; Save it to PDF or save it online.
      </ib-div>
    </ib-div>
  </ib-div>

  <ib-div class="ib_h3">How to save the invoice?</ib-div>
  <ib-div class="ib_p">
    There are three ways to save the invoice:
    <ib-div class="ib_ul">
      <ib-div class="ib_li">
        1) &nbsp;Save it locally in editable <ib-span class="ib_code">.txt</ib-span> format with the "Save State" button.
      </ib-div>
      <ib-div class="ib_li">
        2) &nbsp;Save it to PDF using PDF printer.
      </ib-div>
      <ib-div class="ib_li">
       
      </ib-div>
    </ib-div>
  </ib-div>

  <ib-div class="ib_p">
    1) To save the invoice data locally in editable format use the <ib-span class="ib_b">"Save State"</ib-span> button in the top menu and follow the on-screen instructions.
  </ib-div>

 

  

  <ib-div class="ib_h3">How can I open already saved local invoice data?</ib-div>
  <ib-div class="ib_p">
    To open local data, click the <ib-span class="ib_b">"Open"</ib-span> button and from the file browser window select the data file you want to open. Note that the file must be previously saved invoice data with <ib-span class="ib_code">.txt</ib-span> extension, otherwise it won't load.
  </ib-div>

  <ib-div class="ib_p">
    Due to browser privacy restrictions the file <ib-span class="ib_b">must be loaded</ib-span> from the same location as the <ib-span class="ib_code">template.html</ib-span> file (the root directory of the template). So if you want to open data file from other location on your computer, first copy it to the template root folder.
  </ib-div>

  <ib-div class="ib_h3">How to restyle the template?</ib-div>
  <ib-div class="ib_p">
    The template is made with simplicity in mind so can be easily customized with your own branding and colors. However, basic knowledge in HTML and CSS is required. 
  </ib-div>

 

  <ib-div class="ib_p">
    <ib-span class="ib_b">Note:</ib-span> The template is completely separate from its logic, so you don't need to mess up with any programming or JavaScript code.
  </ib-div>

  <ib-div class="ib_h3">Do I have to be connected to internet to use it?</ib-div>
 

  <ib-div class="ib_p">
    We generally encourage you to continue using the remote script because any recent updates immediately reflect into the template you're using.
  </ib-div>

  <ib-div class="ib_h3">What about the fonts used?</ib-div>


  <ib-div class="ib_h3">Can I use the JavaScript source code?</ib-div>
 

  <ib-div class="ib_h3">Support our work</ib-div>
  

  <ib-div class="ib_p">
    It's fine even if you decide to avoid giving us credit, so we made this choice easier to you. In the local <ib-span class="ib_code">.txt</ib-span> invoice data file there's a property called <ib-span class="ib_code">invoicebus_fineprint</ib-span> which can be set to <ib-span class="ib_code">true</ib-span> (to show the fine print) or <ib-span class="ib_code">false</ib-span> (to hide the fine print).
  </ib-div>

  <ib-div class="ib_h3">Found a bug?</ib-div>
 

  <ib-div class="ib_h3">Suggestions, questions, criticism?</ib-div>
  
</ib-div></ib-div></ib-div><ib-div class="modal-footer"><ib-span class="ib_default_button" data-dismiss="modal">OK, got it</ib-span></ib-div></ib-div></ib-div></ib-div><ib-div id="ib_saveCurrentStateModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="saveStateModal" aria-hidden="true"><ib-div class="modal-dialog"><ib-div class="modal-content"><ib-div class="modal-header"><ib-span type="button" class="close" data-dismiss="modal"><ib-span aria-hidden="true">×</ib-span></ib-span><ib-div class="modal-title" id="saveStateModal">Save State</ib-div></ib-div><ib-div class="modal-body"><ib-div class="ib_how_to_container"><ib-div class="ib_modal_container">
  <ib-div class="ib_p">
    This action will save the current state of the template to a local <ib-span class="ib_code">.txt</ib-span> file. The data from this file can be used to pre-populate the template fields in the future. This comes handy when you want to save the invoice details such as company address, logo, client info, currency, notes, etc. so you don't need to re-enter them every time.
  </ib-div>

  <ib-div class="ib_p">
    After clicking the button below, you'll be prompted to save the file. In order to open the file in future make sure you save it in the template root directory. The saved file will store instance of the invoice for record keeping.
  </ib-div>

  <ib-div class="ib_p ib_b">
    To save the current invoice data as your default, make sure to name the file <ib-span class="ib_code">data.txt</ib-span> and save it in the template root directory. If the file already exists, overwrite it.
  </ib-div>

  <ib-div class="ib_p ib_notice">
  
  </ib-div>

  <a href="javascript:void(0);" download="data.txt" class="ib_default_button ib_success_button ib_large_button" id="ib-save-current-data"><ib-span class="fa fa-bolt"></ib-span> Save Invoice Data</a>
  <ib-div id="ib-safari-save-as" class="ib_hide ib_safari_note">Right click the button and choose <ib-span class="ib_b">"Download Linked File As..."</ib-span></ib-div>
</ib-div></ib-div></ib-div></ib-div></ib-div></ib-div></ib-span></ib-div></ib-div></html>