<?php view_include('layouts.head-master', ['title' => 'Người dùng']);?>
<div class="wrapper">
    <?php view_include('layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('partials.header', ['title' => 'Người dùng'])?>
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
                                            <input type="text" id="inputSearch" class="form-control" />
                                            <div class="input-group-btn">

                                                <button class="btn btn-default" id="search" onclick="search('user/searchUser')" type="button"><i class="pe-7s-search"></i></button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['notice'])) {?>
                            <div class="alert alert-success">

                              <strong><?=$_SESSION['notice']?></strong>
                          </div>
                          <?php }?>
                          <?php unset($_SESSION['notice']);?>
                          <div class="content content-card table-responsive table-full-width ">
                            <table id="view-post"  class="table table-hover table-striped ">
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
                                <tbody class="tableSearch">
                                    <?php $i = 1;?>
                                    <?php foreach ($users['all'] as $user): ?>

                                        <tr>
                                            <td><?=$i;?></td>
                                            <td class="username"><a href=""><?=$user->USERNAME;?></a></td>
                                            <td class="img-post">
                                                <?php if (null != $user->IMAGE) {$image = $user->IMAGE;} else { $image = 'default-avatar.png';}?>
                                                <a href=""><img  src="/public/assets/img/imagesUser/<?=$image;?>" /></a>
                                            </td>
                                            <td><?=$user->FULL_NAME;?></td>
                                            <td><?=$user->EMAIL;?></td>
                                            <td><?=$user->ADDRESS;?></td>
                                            <td><?=$user->PHONE;?></td>
                                            <td><?=$user->ROLE?></td>
                                            <td class="control">
                                                <div class="form-group">
                                                    <?php if (($_SESSION['user']->USERNAME == $user->USERNAME) || (1 == $_SESSION['user']->ROLE)) {?>
                                                    <div class="item-col">
                                                        <a href="/user/edit?idUser=<?=$user->USERNAME?>" class="btn btn-success" title="Sửa">
                                                            <i class="pe-7s-note"></i>
                                                        </a>
                                                    </div>
                                                    <?php }if ((1 == $_SESSION['user']->ROLE) && (1 != $user->ROLE)) {?>
                                                    <div class="item-col">
                                                        <a data-toggle="modal" data-target="#delUser<?=$user->USERNAME?>" href="" class="btn btn-danger" title="Xoá">
                                                            <i class="pe-7s-trash"></i>
                                                        </a>
                                                    </div>
                                                    <?php }?>
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
                        <?php $pagination = $users?>
                        <?php view_include('partials.pagination', compact('pagination'));?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php view_include('partials.footer');?>
</div>
</div>

<?php view_include('layouts.foot-master');?>
