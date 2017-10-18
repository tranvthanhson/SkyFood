<?php view_include('admin.layouts.head-master', ['title' => 'Admin']);?>
<div class="wrapper">
    <?php view_include('admin.layouts.side-bar');?>

    <div class="main-panel">
        <?php view_include('admin.partials.header', ['title' => 'Trang chủ'])?>
        <div class="content posts home">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card row">
                            <div class="content content-card table-responsive table-full-width">
                                <div class="col-md-3">
                                    <div class="">
                                        <div class="panel panel-blue">
                                            <div class="panel-body">
                                                <div class="text col-md-6">
                                                    <div class="row">
                                                        <p class="num">100</p>
                                                        <p class="name">Bài đăng</p>
                                                    </div>
                                                </div>
                                                <div class="icon col-md-4">
                                                    <div class="row">
                                                        <i class="fa fa-pencil"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="/shop">Xem <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="">
                                        <div class="panel panel-orange">
                                            <div class="panel-body">
                                                <div class="text col-md-6">
                                                    <div class="row">
                                                        <p class="num">100</p>
                                                        <p class="name">User</p>
                                                    </div>
                                                </div>
                                                <div class="icon col-md-4">
                                                    <div class="row">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="/admin/user">Xem <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="panel panel-green">
                                            <div class="panel-body">
                                                <div class="text col-md-6">
                                                    <div class="">
                                                        <p class="num">12</p>
                                                        <p class="name">Danh mục</p>
                                                    </div>
                                                </div>
                                                <div class="icon col-md-4">
                                                    <div class="row">
                                                        <i class="fa fa-list-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="/admin/type">Xem <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="">
                                        <div class="panel panel-red">
                                            <div class="panel-body">
                                                <div class="text col-md-6">
                                                    <div class="row">
                                                        <p class="num">200</p>
                                                        <p class="name">Phản hồi</p>
                                                    </div>
                                                </div>
                                                <div class="icon col-md-4">
                                                    <div class="row">
                                                        <i class="fa fa-reply"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                                <a href="/admin/feedback">Xem <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('admin.partials.footer');?>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="delCat" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">XOÁ DANH MỤC</h4>
            </div>
            <div class="modal-body">
                <p>Bạn có muốn xoá danh mục này?.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Xoá</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>
<?php view_include('admin.layouts.foot-master');?>
