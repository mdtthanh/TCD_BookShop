<?php 
function get_products_list($con) // hàm lấy danh sách sách
{
    // SQL
    $sql = "SELECT * FROM book WHERE deleted = '0' ORDER BY id DESC ";

    // return
    return mysqli_query($con, $sql);
}
 
function get_products_new($con) // hàm lấy danh sách sách
{
    // SQL
    $sql = "SELECT * FROM book WHERE deleted = '0' ORDER BY publish_year DESC LIMIT 8";

    // return
    return mysqli_query($con, $sql);
}
function get_products_hot($con) // hàm lấy danh sách sách
{
    // SQL
    $sql = "SELECT * FROM book WHERE deleted = '0' ORDER BY id DESC LIMIT 8 ";

    // return
    return mysqli_query($con, $sql);
}

function get_products_hot_inweek($con) {
    $sql = "SELECT book.*, SUM(num) BSL  FROM orderdetail
            INNER JOIN orders ON orders.id = orderdetail.order_id 
            INNER JOIN book ON book.id = orderdetail.book_id
            WHERE YEARWEEK(order_date) = YEARWEEK(CURDATE()) AND status = 1 
            GROUP BY book_id ORDER BY BSL DESC LIMIT 1";
    return mysqli_query($con, $sql);
}
function get_details($con)
{
    // SQL
    $sql = "SELECT * FROM book WHERE deleted = '0' ORDER BY publish_year DESC LIMIT 8";

    // return
    return mysqli_query($con, $sql);
}

?>
