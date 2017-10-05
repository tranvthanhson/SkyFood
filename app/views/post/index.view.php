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
                                                <a href="post/add" class="btn bg-button"><i class="fa fa-plus"></i> Thêm</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-offset-6 col-md-4 col-md-offset-6 col-sm-5 col-sm-offset-5 col-xs-8">
                                            <div class="input-group search-btn">
                                                <div class="input-group-addon"><span>Tìm kiếm</span></div>
                                                <input type="text" class="form-control" />
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="pe-7s-search"></i></button>
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
                                        <tbody>
                                            <?php
foreach ($post as $value) {
    ?>
                                            <tr>
                                                <td>1</td>
                                                <td class="name-place"><a href=""><?=$value->SHOP_NAME?></a></td>
                                                <td class="img-post">
                                                    <a href=""><img  src="assets/img/<?=$value->IMAGE?>" /></a>
                                                </td>
                                                <td><?=$value->tn?></td>
                                                <td>50</td>
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
                                                        <?php
if (1 == $value->STATUS) {
        ?>
                                                        <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                        <?php
} else {
        ?>
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
                                                            <a href="post/edit?<?=$value->SHOP_ID?>" class="btn btn-success" title="Sửa">
                                                            <i class="pe-7s-note"></i>
                                                        </a>
                                                        </div>
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#delPost" href="post/del?<?=$value->SHOP_ID?>" class="btn btn-danger" title="Xoá">
                                                            <i class="pe-7s-trash"></i>
                                                        </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <nav class="nav-pag">
                                    <ul class="pagination">
                                        <li><a href="" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="" aria-label="Next"><span aria-hidden="true">»</span></a></li>
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

     <?php view_include('partials.modal', ['id_model' => 'delPost', 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa']);?>
<?php view_include('layouts.foot-master');?>
