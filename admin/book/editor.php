<?php
	$title = 'ADD/EDIT Book';
	$baseUrl = '../';
	require_once('../layouts/header.php');

	$id = $thumbnail = $title = $price = $discount = $category_id = $description = $author = $publisher = $total_page = $publish_year = '';
	require_once('form_save.php');

	$id = getGet('id');
	if($id != '' && $id > 0) {
		$sql = "SELECT * FROM book WHERE id = '$id' AND deleted = 0";
		$userItem = executeResult($sql, true);
		if($userItem != null) {
			$thumbnail = $userItem['thumbnail'];
			$author = $userItem['author'];
			$publisher = $userItem['publisher'];
			$title = $userItem['title'];
			$price = $userItem['price'];
			$discount = $userItem['discount'];
			$publish_year = $userItem['publish_year'];
			$total_page = $userItem['total_page'];
			$category_id = $userItem['category_id'];
			$description = $userItem['description'];
		} else {
			$id = 0;
		}
	} else {
		$id = 0;
	}
	$sql = "SELECT * FROM Category";
	$categoryItems = executeResult($sql);

?>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php" aria-expanded="false">
                                <i class="fa fa-arrow-left" aria-hidden="true" style="color: #f40000"> Book</i>
</a>
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12 table-responsive">
		<div class="panel panel-primary">
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-md-9 col-12">
						<div class="form-group">
						  <label for="usr">Book title:</label>
						  <input required="true" type="text" class="form-control" id="usr" name="title" value="<?=$title?>" style="border-radius: 10px">
						  <input type="text" name="id" value="<?=$id?>" hidden="true">
						</div>
						<div class="form-group">
						  <label for="pwd">Description:</label>
						  <textarea class="form-control" rows="5" name="description" id="description" style="border-radius: 10px; height: 500px"><?=$description?></textarea>
						</div>

						<button class="btn btn-success" style="margin-left: 550px; margin-top: 20px">Save</button>
					</div>
					<div class="col-md-3 col-12" style=" border: solid grey 1px; padding-top: 10px; padding-bottom: 10px; border-radius: 15px">
						<div class="form-group">
						  <label for="thumbnail">Thumbnail:</label>
						  <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
						  <img id="thumbnail_img" src="<?=fixUrl($thumbnail)?>" style="max-height: 160px; margin-top: 5px; margin-bottom: 15px;">
						</div>

						<div class="form-group">
						  <label for="usr">Category:</label>
							<select class="form-control" name="category_id" id="category_id" required="true">
								<option value="">-Choose-</option>
								<?php
									foreach($categoryItems as $item) {
										if($item['id'] == $category_id) {
											echo '<option selected value="'.$item['id'].'">'.$item['name'].'</option>';
										} else {
											echo '<option value="'.$item['id'].'">'.$item['name'].'</option>';
										}
									}
								?>
							</select>
						</div>
						<div class="form-group">
						  <label for="author">Author:</label>
						  <input required="true" type="text" class="form-control" id="author" name="author" value="<?=$author?>">
						</div>
						<div class="form-group">
						  <label for="publisher">Publisher:</label>
						  <input required="true" type="text" class="form-control" id="publisher" name="publisher" value="<?=$publisher?>">
						</div>
						<div class="form-group">
						  <label for="publish_year">Publish year:</label>
						  <input required="true" type="text" class="form-control" id="publish_year" name="publish_year" value="<?=$publish_year?>">
						</div>
						<div class="form-group">
						  <label for="total_page">Total page:</label>
						  <input required="true" type="text" class="form-control" id="total_page" name="total_page" value="<?=$total_page?>">
						</div>
						<div class="form-group">
						  <label for="price">Price:</label>
						  <input required="true" type="number" class="form-control" id="price" name="price" value="<?=$price?>">
						</div>
						<div class="form-group">
						  <label for="discount">Discount:</label>
						  <input required="true" type="text" class="form-control" id="discount" name="discount" value="<?=$discount?>">
						</div>
						
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function updateThumbnail() {
		$('#thumbnail_img').attr('src', $('#thumbnail').val())
	}
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  $('#description').summernote({
    tabsize: 2,
    height: 500,
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture', 'video']],
      ['view', ['fullscreen', 'codeview', 'help']]
    ]
  });
</script>

<?php
	require_once('../layouts/footer.php');
?>