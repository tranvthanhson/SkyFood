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
                                    <h4 class="title">Xem bình luận cua shop:</h4>
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
                                            <th>Tên bài viết</th>
                                            <th>Username</th>
                                            <th>Bình luận</th>
                                            <th>Control</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="">The Coffee House</a></td>
                                                <td class="username"><a href="">hieutran</a></td>
                                                <td class="cmt">The Coffee House có 3 món nước mới là Trà Đen Macchiato (mới), Trà Xanh Macchiato và Đậu Biếc Macchiato. Trà Xanh Macchiato nghe cái tên là đủ biết là sẽ đậm vị Trà Xanh rồi đúng không? Nhưng loại Macchiato này thì lại không, vị Trà lại rất nhẹ và có thêm một chút mùi bạc hà. Phù hợp cho bạn nào thích uống vị Trà Xanh nhẹ và dễ bị mất ngủ khi uống trà vào ban đêm. Loại thứ 2 là Đậu Biếc Macchiato. Loại này khác là dễ uống và dành cho mọi loại lứa tuổi. Mùi vị của loại này sẽ giống như hương vị của trái Blueberry, có một chút mùi ngọt cheese của kem Maccchiato. Thơm, rất là dễ uống cho mọi người.</td>
                                                <td class="control">
                                                    <div class="form-group">
                                                        <div class="item-col">
                                                            <a data-toggle="modal" data-target="#delComment" href="" class="btn btn-danger" title="Xoá">
                                                            <i class="pe-7s-trash"></i>
                                                        </a>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </td>
                                            </tr>

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
    <div class="modal fade" id="delComment" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">XOÁ COMMENT</h4>
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