<?php view_include('layouts.head-master', ['title' => 'Post']);?>
<div class="wrapper">
    <?php view_include('layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('partials.header', ['title' => 'QUẢN LÝ ĐỊA ĐIỂM'])?>
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <div class="add-btn">
                                            <a href="/post/add" class="btn bg-button"><i class="fa fa-plus"></i> Thêm</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-offset-6 col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-5 col-xs-8">
                                        <div class="input-group search-btn">
                                            <div class="input-group-addon"><span>Tìm kiếm</span></div>
                                            <input type="text" class="form-control" id="inputSearch" />
                                            <div class="input-group-btn">
                                                <button class="btn btn-default" type="button" onclick="search('/post/searchPost')"><i class="pe-7s-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="content content-card table-responsive table-full-width">
                                <table id="view-post" class="table table-hover table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Tên địa điểm</th>
                                        <th>Ảnh</th>
                                        <th>Danh mục</th>
                                        <th>%</th>
                                        <th>Khuyến mãi</th>
                                        <th>Action</th>
                                        <th>Bình luận</th>
                                        <th>Control</th>
                                    </thead>
                                    <tbody class="tableSearch">
                                        <?php foreach ($post['all'] as $value) {
    ?>
                                        <tr>
                                            <td><?=$value->SHOP_ID?></td>
                                            <td class="name-place"><a href=""><?=$value->SHOP_NAME?></a></td>
                                            <td class="img-post">
                                                <a href=""><img  src="/public/assets/img/img-shop/<?=$value->VIEW?>" /></a>
                                            </td>
                                            <td><?=$value->TYPE_NAME?></td>
                                            <td><?=$value->DISCOUNT?></td>
                                            <td class="percent-input">
                                                <div class="form-group">
                                                    <div class="item-col">
                                                        <input type="text" class="form-control" id="discount" value="<?=$value->DISCOUNT?>">
                                                    </div>
                                                    <div class="item-col">
                                                        <button type="submit" class="btn btn-success">Nhập</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <label class="checkbox">
                                                    <?php if (1 == $value->STATUS) {?>
                                                    <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    <?php } else {?>
                                                    <input type="checkbox" value="" data-toggle="checkbox" >
                                                    <?php }?>
                                                </label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <div class="item-col">
                                                        <a href="comments.html" class="btn btn-warning" title="Xem">
                                                            <i class="pe-7s-look"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="control">
                                                <div class="form-group">
                                                    <div class="item-col">
                                                        <a href="/post/edit?id=<?=$value->SHOP_ID?>" class="btn btn-success" title="Sửa">
                                                            <i class="pe-7s-note"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-col">
                                                        <a data-toggle="modal" data-target="#delPost<?=$value->SHOP_ID?>"  href="" class="btn btn-danger" title="Xoá">
                                                            <i class="pe-7s-trash"></i>
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php view_include('partials.modal', ['id_model' => 'delPost' . $value->SHOP_ID, 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/post/del?id=' . $value->SHOP_ID]);
}?>

                                    </tbody>
                                </table>
                            </div>
                            <nav class="nav-pag">
                                <ul class="pagination">

                             <!-- nếu current_page > 1 và totalPage > 1 mới hiển thị nút prev -->
                                <?php if ($post['currentPage'] > 1 && $post['totalPage'] > 1) {?>
                                    <li><a href="/post?page=<?=($post['currentPage'] - 1)?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                <?php }?>
                                 <!-- Lặp khoảng giữa -->
                                <?php for ($i = 1; $i <= $post['totalPage']; $i++) {?>
                                <!-- // Nếu là trang hiện tại thì hiển thị thẻ span
                                // ngược lại hiển thị thẻ a -->
                                    <?php if ($i == $post['currentPage']) {?>
                                        <li class="active"><a href="/post?page=<?=$i?>"><?=$i?></a></li>
                                     <?php } else {?>
                                        <li><a href="/post?page=<?=$i?>"><?=$i?></a></li>
                                    <?php }?>
                                 <?php }?>
                                <!-- // nếu currentPage < $totalPage và totalPage > 1 mới hiển thị nút prev -->
                                <?php if ($post['currentPage'] < $post['totalPage'] && $post['totalPage'] > 1) {?>
                                    <li><a href="/post?page=<?=($post['currentPage'] + 1)?>" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                <?php }?>
                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('partials.footer');?>
    </div>
</div>
<!-- Modal -->


<?php view_include('layouts.foot-master');?>
