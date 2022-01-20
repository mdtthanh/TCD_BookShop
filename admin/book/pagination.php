<nav class="blog-pagination justify-content-center d-flex">
  <ul class="pagination">
    <?php
      // tìm kiếm các trang

      if($current_page > 3) {
        $first_page = 1;
    ?>
      <li class="page-item">
      <a class="page-link" aria-label="Previous" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?= $first_page ?>"><<
    </a>
    </li>
    <?php
      }
    if($current_page > 1) {
      $prev_page = $current_page - 1;
      ?>
      <li class="page-item">
      <a class="page-link" aria-label="Previous" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?=$prev_page?>"><</i>
    </a>
    </li>
    <?php } ?>
    <?php for($num = 1; $num <= $totalPages; $num++) { ?>
      <?php if($num != $current_page) { ?>
        <?php if($num > $current_page - 3 && $num < $current_page + 3) { ?>
          <li class="page-item">
          <a class="page-link" aria-label="Previous" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?=$num?>"><?=$num?></a>
          </li>
        <?php } ?>
      <?php } else { ?>
        <li class="page-item" >
        <strong class="page-link " style="background-color: #e8cece;" ><?= $num ?></strong>
        </li>
    <?php } ?>
    <?php
    }
      if($current_page < $totalPages - 1) {
        $next_page = $current_page + 1;
    ?>
      <li class="page-item">
      <a class="page-link" aria-label="Previous" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?=$next_page?>">></a>
      </li>
    <?php
      }
      if($current_page < $totalPages = 3) {
        $end_page = $totalPages;
      ?>
      <li class="page-item">
      <a class="page-link" aria-label="Previous" href="?<?=$param?>per_page=<?=$item_per_page?>&page=<?=$end_page?>">>></a>
      </li>
    <?php } ?>
  </ul>
</nav>

