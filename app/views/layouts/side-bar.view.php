<div class="sidebar" data-color="purple" data-image="/public/assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="index.html" class="simple-text">Sky Food</a>
        </div>
        <ul class="nav">

<?php $_SERVER['REQUEST_URI'];
$arrLink = ['/post' => ['QL bài đăng', 'note2'],
    '/user' => ['QL user', 'user'],
    '/cat' => ['QL danh mục', 'news-paper'],
    '/feedback' => ['QL phản hồi', 'back-2'],
    '/statistics' => ['QL thống kê', 'graph1'],
];
echo '<pre>';
var_dump($arrLink);
echo '</pre>';
?>

            <!-- <li class="active">
                <a href="/feedback">
                    <i class="pe-7s-back-2"></i>
                    <p>QL phản hồi</p>
                </a>
            </li> -->
            <?php
foreach ($arrLink as $key => $value) {
    ?>
            <li>
                <a href="<?=$key?>">
                    <i class="pe-7s-<?=$key[0]?>"></i>
                    <p>QL thống kê</p>
                </a>
            </li>
            <?php }?>
        </ul>
    </div>
</div>
