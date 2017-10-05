<?php view_include('layouts.head-master', ['title' => 'THÊM NGƯỜI DÙNG']);?>
    <div class="wrapper">
         <?php view_include('layouts.side-bar');?>
        <div class="main-panel">
            <?php view_include('partials.header', ['title' => 'THÊM NGƯỜI DÙNG'])?>
            <div class="content edit-user">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Thêm user</h4>
                                </div>
                                <div class="content">
                                    <form data-toggle="validator" role="form" method="POST" action="/user/add" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="userName" class="control-label">Username (<span>*</span>)</label>
                                                    <input type="text" value="thuong" class="form-control" name="username" id="userName" placeholder="Nhập tài khoản đăng nhập" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Role (<span>*</span>)</label>
                                                    <select class="form-control" name="role" id="role">

                                                        <option value="1">Admin</option>
                                                        <option value="2">Staff</option>
                                                        <option value="3">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pass" class="control-label">Password (<span>*</span>)</label>
                                                    <input type="password" value="thuong" data-minlength="6" class="form-control" id="pass" name="password" placeholder="Password" required>
                                                    <div class="help-block">(Mật khẩu ít nhất 6 kí tự)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Confirm Password (<span>*</span>)</label>
                                                    <input type="password" value="thuong" name="confirmPass" class="form-control" id="confirmPass" data-match="#pass" data-match-error="Mật khẩu không trùng khớp" placeholder="Confirm" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Address (<span>*</span>)</label>
                                                    <input type="text" value="thuong" name="address" class="form-control" id="confirmPass" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Phone (<span>*</span>)</label>
                                                    <input type="password" value="thuong" name="phone" class="form-control" id="confirmPass">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Email (<span>*</span>)</label>
                                                    <input type="password" value="thuong" name="email" class="form-control" id="confirmPass">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">First name (<span>*</span>)</label>
                                                    <input type="text" value="thuong" class="form-control" name="firstName" placeholder="Họ" value="" id="firstName" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName">Last name (<span>*</span>)</label>
                                                    <input type="text" value="thuong" name="lastName" class="form-control" placeholder="Tên" value="" id="lastName" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="submit" class="btn bg-button btn-fill pull-right" name="add" value="Hoàn thành"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-4">
                            <div class="card card-user">
                                <div class="content">
                                    <div class="author">
                                        <div>
                                            <img class="avatar border-gray" src="assets/img/user1.jpg" alt="..." />
                                        </div>
                                        <div class="edit-avatar ">
                                            <div class="wrp file bg-button">
                                                <i class="pe-7s-cloud-upload"></i>Upload
                                                <input type="file" name="file" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="infor text-center">
                                        <h4 class="title">Trần Thị Như Hiếu</h4>
                                        <smaller>@hieutran</smaller>
                                        <p>01282143365</p>
                                        <p>hieutran@gmail.com</p>
                                        <p>242 Nguyễn Hoàng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <?php view_include('partials.footer');?>
        </div>
    </div>
<?php view_include('layouts.foot-master');?>