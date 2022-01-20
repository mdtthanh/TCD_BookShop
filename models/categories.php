<?php 
function get_category_list($con) // hàm lấy danh sách các thể loại sách
{
    // SQL
    $sql = "SELECT * FROM tbl_category ORDER BY name";

    // return
    return mysqli_query($con, $sql);
}
?>