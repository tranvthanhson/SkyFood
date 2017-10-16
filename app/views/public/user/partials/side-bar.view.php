<div class="avatar-features item-ctn col-md-3">
                                    <div class="wrp">
                                        <form action="/editUserImage" method="POST" enctype="multipart/form-data" class="form-avatar">
                                            <div class="avatar">
                                                <div class="img">
                                                    <img src="public/admin/assets/img/imagesUser/<?=$_SESSION['user']->IMAGE?>" alt="..." />
                                                    <div class="edit-avatar">
                                                        <div class="file">
                                                            <i class="fa fa-camera"></i>
                                                            <input type="file" name="file" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload">
                                                    <div class="btn">
                                                        <i class="fa fa-cloud-upload"></i>
                                                        <input type="submit" name="edit" value="Upload" />
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="features">
                                            <nav>
                                                <ul class="nav">
                                                    <li class="active-menu"><a href="user-profile.html"><i class="fa fa-pencil-square-o"></i>Edit</a></li>
                                                    <li><a href="/editUserPassword"><i class="fa fa-user"></i>Password</a></li>
                                                    <li><a href="user-saved.html"><i class="fa fa-bookmark"></i>Saved</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="wrp-blur"></div>
                                    </div>
                                </div>