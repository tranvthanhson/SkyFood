<?php view_include('layouts.head-master', ['title' => 'Danh mục']);?>
<div class="wrapper">
    <?php view_include('layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('partials.header', ['title' => 'Danh mục'])?>
        <div class="content posts">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header-card ">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-4">
                                        <div class="add-btn">
                                            <a href="/admin/type/add" class="btn bg-button"><i class="fa fa-plus"></i> Thêm</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="content content-card table-responsive table-full-width">
                                <table id="view-post" class="table table-hover table-striped">
                                    <thead>
                                        <th>#</th>
                                        <th>Tên danh mục</th>
                                        <th>Control</th>
                                    </thead>
                                    <tbody>

                                        <?php foreach ($types as $type): ?>
                                            <tr>
                                                <td><?=$type->TYPE_ID;?></td>
                                                <td><?=$type->TYPE_NAME;?></td>
                                                <td class="control">
                                                    <div class="form-group">
                                                        <div class="item-col">
                                                        <a href="/admin/type/edit?TYPE_ID=<?=$type->TYPE_ID?>" class="btn btn-success" title="Sửa">
                                                                <i class="pe-7s-note"></i>
                                                            </a>
                                                        </div>
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#delCat" href="" class="btn btn-danger" title="Xoá">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('partials.footer');?>
    </div>
</div>
<!-- Modal -->
<?php view_include('partials.modal', ['id_model' => 'delCat', 'title' => 'XÓA DANH MỤC ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/type/delete?id=' . $type->TYPE_ID]);?>
<?php view_include('layouts.foot-master');?>