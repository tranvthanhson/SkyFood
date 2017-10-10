<nav class="nav-pag">
    <ul class="pagination">
        <!-- nếu current_page > 1 và totalPage > 1 mới hiển thị nút prev -->
        <?php if ($users['currentPage'] > 1 && $users['totalPage'] > 1) {?>
        <li><a href="/user?page=<?=($users['currentPage'] - 1)?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
        <?php }?>
        <!-- Lặp khoảng giữa -->
        <?php for ($i = 1; $i <= $users['totalPage']; $i++) {?>
<!-- // Nếu là trang hiện tại thì hiển thị thẻ span
    // ngược lại hiển thị thẻ a -->
    <?php if ($i == $users['currentPage']) {?>
    <li class="active"><a href="/user?page=<?=$i?>"><?=$i?></a></li>
    <?php } else {?>
    <li><a href="/user?page=<?=$i?>"><?=$i?></a></li>
    <?php }?>
    <?php }?>
    <!-- // nếu currentPage < $totalPage và totalPage > 1 mới hiển thị nút prev -->
    <?php if ($users['currentPage'] < $users['totalPage'] && $users['totalPage'] > 1) {?>
    <li><a href="/user?page=<?=($users['currentPage'] + 1)?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
    <?php }?>
</ul>
</nav>