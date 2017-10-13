<?php view_include('layouts.head-master', ['title' => 'BÌNH LUẬN']);?>
    <div class="wrapper">
        <?php view_include('layouts.side-bar');?>
        <div class="main-panel">
            <?php view_include('partials.header', ['title' => 'BÌNH LUẬN'])?>
            <div class="content posts comments">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Xem bình luận của địa điểm:<b><?=$shop->SHOP_NAME?></b></h4>
                                </div>
                                <div class="header-card ">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-4">
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="content content-card table-responsive table-full-width">
                                    <table id="view-post" class="table table-hover table-striped">
                                        <thead>
                                            <th>#</th>
                                            <th>Username</th>
                                            <th>Bình luận</th>
                                            <th>Control</th>
                                        </thead>
                                        <tbody>
                                        	<?php
foreach ($comments['all'] as $value) {
    ?>
                                            <tr>
                                                <td><?=$value->COMMENT_ID?></td>
                                               <td class="username"><a href=""><?=$value->USERNAME?></a></td>
                                                <td class="cmt"><?=$value->CONTENT?></td>
                                                <td class="control">
                                                    <div class="form-group">
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#delComment<?=$value->COMMENT_ID?>" href="" class="btn btn-danger" title="Xoá">
                                                            <i class="pe-7s-trash"></i>
                                                        </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </td>
                                            </tr>

	<?php view_include('partials.modal', ['id_model' => 'delComment' . $value->COMMENT_ID, 'title' => 'XÓA BINH LUAN ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/shop/comment/del?id=' . $value->COMMENT_ID]);
}?>
                                        </tbody>
                                    </table>
                                </div>
 <?php $pagination = $comments?>
                        <?php view_include('partials.pagination', compact('pagination'));?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php view_include('partials.footer');?>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="delComment" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">XOÁ BÌNH LUẬN</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn có muốn xoá bình luận này?.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Xoá</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                </div>
            </div>
        </div>
    </div>

<?php view_include('layouts.foot-master');?>