<?php
$title = 'Book';
$baseUrl = '../';
require_once('../layouts/header.php');

$param = "";
$search = isset($_GET['name']) ? $_GET['name'] : "";
if ($search) {
  $where = "WHERE title LIKE N'%" . $search . "%' ";
  $param .= "name=" . $search . "&";

}

$sql_dem = "SELECT count(id) AS number FROM book WHERE deleted = '0' AND title LIKE N'%" . $search . "%' ";
$result_dem = executeResult($sql_dem);
$number = 0;
if($result_dem != null && count($result_dem) > 0){
    $number = $result_dem[0]['number']; // lưu number vào 1 mảng để tránh việc bị lỗi 
}
$item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 12; // 12 sản phẩm trên 1 trang
$current_page = !empty($_GET['page']) ? $_GET['page'] : 1; // trang số 1
$totalPages = ceil($number / $item_per_page); // tính tổng số trang -- làm tròn lên

$offset = ($current_page - 1) * $item_per_page; // id sản phẩm bắt đầu từ ...

if($search){
    $sql = "SELECT book.*, Category.name AS category_name FROM book LEFT JOIN category ON book.category_id = category.id WHERE book.deleted = '0' AND title LIKE N'%" . $search . "%' LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
} else {
    $sql = "SELECT book.*, Category.name AS category_name FROM book LEFT JOIN category ON book.category_id = category.id WHERE book.deleted = '0' LIMIT " . $item_per_page . " OFFSET " . $offset . " ";
}
$data = executeResult($sql);
?>
<a href="editor.php"><button class="btn btn-success" style="margin-top: 20px">Add Book</button></a>

<table class="table table-bordered table-hover" style="margin-top: 20px; overflow-x:hidden; overflow-y:auto;">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th>Thumbnail</th>
            <th>Book title</th>
            <th>Price</th>
            <th>Category</th>
            <th style="width: 50px"></th>
            <th style="width: 50px"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $index = 0;
        foreach ($data as $item) {
            echo '<tr>
                                    <th class="text-center">' . (++$index) . '</th>
                                    <td><img src="' . fixUrl($item['thumbnail']) . '" style="height: 100px"/></td>
                                    <td>' . $item['title'] . '</td>
                                    <td>' . number_format($item['discount']) . ' VNĐ</td>
                                    <td>' . $item['category_name'] . '</td>
                                    <td style="width: 50px">
                                        <a href="editor.php?id=' . $item['id'] . '"><button class="btn btn-warning">Edit</button></a>
                                    </td>
                                    <td style="width: 50px">
                                        <button onclick="deleteBook(' . $item['id'] . ')" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>';
        }
        ?>
    </tbody>
</table>
        <?php 
            include('pagination.php');
        ?>
</div>
</div>




<script type="text/javascript">
    function deleteBook(id) {
        option = confirm('Are you sure you want to delete this book?')
        if (!option) return;

        $.post('form_api.php', {
            'id': id,
            'action': 'delete'
        }, function(data) {
            location.reload()
        })
    }
</script>



<script type="text/javascript">
    function deleteBook(id) {
        option = confirm('Are you sure you want to delete this book?')
        if (!option) return;

        $.post('form_api.php', {
            'id': id,
            'action': 'delete'
        }, function(data) {
            location.reload()
        })
    }
</script>