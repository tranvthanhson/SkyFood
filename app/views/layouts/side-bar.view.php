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

foreach ($arrLink as $key => $value) {
    if ($_SERVER['REQUEST_URI'] == $key) {
        $active = 'active';
    } else {
        $active = '';
    }
    ?>
                <li class="<?=$active;?>">
                    <a href="<?=$key?>">
                        <i class="pe-7s-<?=$value[1]?>"></i>
                        <p><?=$value[0]?></p>
                    </a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
