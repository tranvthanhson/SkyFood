<!-- Require head-->
<?php view_include('layouts.head-master', ['title' => 'Feedback'])?>

<!-- Require modal -->
<?php view_include('partials.modal', ['id_model' => 'delContact', 'title' => 'XÓA PHẢN HỒI', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa']);?>
<?php view_include('partials.modal', ['id_model' => 'replyContact', 'title' => 'GỬI PHẢN HỒI', 'content' => '<div class="form-group">
    <textarea class="form-control" rows="5" id=""></textarea>
</div>', 'bt' => 'GỬI']);?>

<div class="wrapper">
    <!-- Require side-bar -->
    <?php view_include('layouts/side-bar')?>

    <div class="main-panel">

        <!-- Require header -->
        <?php view_include('partials.header')?>

        <!-- Main contain -->
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
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
                                        <th>Tên</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Tin nhắn</th>
                                        <th>Control</th>
                                    </thead>
                                    <tbody>
                                        <?php $index = 0;?>
                                        <?php foreach ($feedbacks as $feedback): ?>
                                            <tr>
                                                <td><?=++$index;?></td>
                                                <td><?=$feedback->FULL_NAME;?></td>
                                                <td><?=$feedback->EMAIL;?></td>
                                                <td><?=$feedback->PHONE;?></td>
                                                <td><?=$feedback->CONTENT;?></td>
                                                <td class="control">
                                                    <div class="form-group">
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#replyContact" href="" class="btn btn-primary" title="Trả lời">
                                                                <i class="pe-7s-back"></i>
                                                            </a>
                                                        </div>
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#delContact" href="" class="btn btn-danger" title="Xoá">
                                                                <i class="pe-7s-trash"></i>
                                                            </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
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

        <!-- Require footer -->
        <?php view_include('partials.footer')?>

    </div>
</div>

<!-- Require foot -->
<?php view_include('layouts.foot-master')?>
