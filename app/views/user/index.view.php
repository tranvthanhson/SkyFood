<?php view_include('layouts.head-master', ['title' => 'NGƯỜI DÙNG']);?>
<div class="wrapper">
    <?php view_include('layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('partials.header', ['title' => 'NGƯỜI DÙNG'])?>
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <div class="add-btn">
                                            <a href="/user/add" class="btn bg-button"><i class="fa fa-plus"></i> Thêm </a>
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
                                        <th>User name</th>
                                        <th>Avatar</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Control</th>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;?>
                                        <?php foreach ($users as $user): ?>

                                          <tr>
                                            <td><?=$i;?></td>
                                            <td class="username"><a href=""><?=$user->USERNAME;?></a></td>
                                            <td class="img-post">
                                                <a href=""><img  src="assets/img/<?=$user->IMAGES;?>" /></a>
                                            </td>
                                            <td><?=$user->FULL_NAME;?></td>
                                            <td><?=$user->EMAIL;?></td>
                                            <td><?=$user->ADDRESS;?></td>
                                            <td><?=$user->PHONE;?></td>
                                            <td><?=$user->ROLE?></td>
                                            <td class="control">
                                                <div class="form-group">
                                                    <div class="item-col">
                                                        <a href="/user/edit?idu=<?=$user->USERNAME?>" class="btn btn-success" title="Sửa">
                                                            <i class="pe-7s-note"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-col">
                                                        <a data-toggle="modal" data-target="#delUser<?=$user->USERNAME?>" href="" class="btn btn-danger" title="Xoá">
                                                            <i class="pe-7s-trash"></i>
                                                        </a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++;?>
                                        <!-- Modal -->
                                        <?php view_include('partials.modal', ['id_model' => 'delUser' . $user->USERNAME, 'title' => 'XÓA NGƯỜI DÙNG', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => 'user/del?username=' . $user->USERNAME]);?>



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
    <?php view_include('partials.footer');?>
</div>
</div>

<?php view_include('layouts.foot-master');?>
