<div class="avatar-features item-ctn col-md-3">
    <div class="wrp">
        <form action="/editUserImage" method="POST" enctype="multipart/form-data" class="form-avatar">
         <div class="avatar">
            <div class="img">
                <img src="assets/img/user/h5.jpg" alt="..." />
                <div class="edit-avatar" data-toggle="modal" data-target="#modal-crop-img">
                    <i class="fa fa-camera"></i>
                </div>
            </div>
        </div>
        <div id="modal-crop-img" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content content">
                    <div class="wrp-ctn">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit avatar</h4>
                        </div>
                        <div class="modal-body">
                            <form data-toggle="validator" action="/profile" role="form" name="form" id="form-search" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                <div class="image-editor">
                                    <div class="cropit-preview"></div>
                                    <div class="feature-crop">
                                        <div class="col-md-4 col-xs-4 item-feature-crop">
                                            <div class="resize">
                                                <input type="range" class="cropit-image-zoom-input">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4 item-feature-crop">
                                            <div class="file btn-bg">
                                                <i class="fa fa-camera"></i>Choose image
                                                <input type="file" class="cropit-image-input btn btn-bg" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-4 item-feature-crop">
                                            <div class="upload">
                                                <i class="fa fa-cloud-upload"></i>
                                                <input id="image" class="export btn btn-bg" value="Upload" />
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <input id="encryptImage">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="features">
        <nav>
            <ul class="nav">
                <li class="active-menu"><a href="/profile"><i class="fa fa-pencil-square-o"></i>Edit</a></li>
                <li><a href="/editUserPassword"><i class="fa fa-user"></i>Password</a></li>
                <li><a href="user-saved.html"><i class="fa fa-bookmark"></i>Saved</a></li>
            </ul>
        </nav>
    </div>
    <div class="wrp-blur"></div>
</div>
</div>
