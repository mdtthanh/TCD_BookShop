<?php 
function get_slider_list($con) // hàm lấy danh sách các slider
{
    // SQL
    $sql = "SELECT * FROM slide WHERE active = 1 ORDER BY id";

    // return
    return mysqli_query($con, $sql);
}
?>