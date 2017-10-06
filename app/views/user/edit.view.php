<?php view_include('layouts.head-master', ['title' => 'CHỈNH SỬA NGƯỜI DÙNG']);?>
<div class="wrapper">
   <?php view_include('layouts.side-bar');?>
   <div class="main-panel">
    <?php view_include('partials.header', ['title' => 'CHỈNH SỬA NGƯỜI DÙNG'])?>
    <div class="content edit-user">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Sửa thông tin người dùng</h4>
                        </div>
                        <div class="content">
                            <form data-toggle="validator" role="form" method="POST" action="/user/edit" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="userName" class="control-label">Username (<span>*</span>)</label>
                                                    <input type="text" name="username" value="<?=$Info_User[0]->USERNAME?>" class="form-control" id="userName" readonly placeholder="Nhập tài khoản đăng nhập" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="role">Role (<span>*</span>)</label>
                                                    <select class="form-control" name="role" id="role">


                                                    <option <?php if (($Info_User[0]->ROLE) == 1) {echo 'Selected = "Selected"';}?> value="1">Admin</option>
                                                    <option <?php if (($Info_User[0]->ROLE) == 2) {echo 'Selected = "Selected"';}?> value="2">Staff</option>
                                                    <option <?php if (($Info_User[0]->ROLE) == 3) {echo 'Selected = "Selected"';}?> value="3">User</option>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="pass" class="control-label">Password (<span>*</span>)</label>
                                                    <input type="password" value="" data-minlength="6" class="form-control" name="password" id="pass" placeholder="Password" >
                                                    <div class="help-block">(Mật khẩu ít nhất 6 kí tự)</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Confirm Password (<span>*</span>)</label>
                                                    <input type="password" value="" class="form-control" id="confirmPass" name="confirmPass" data-match="#pass" data-match-error="Mật khẩu không trùng khớp" placeholder="Confirm" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Address (<span>*</span>)</label>
                                                    <input type="text" value="<?=$Info_User[0]->ADDRESS?>" name="address" class="form-control" id="confirmPass" >
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Phone (<span>*</span>)</label>
                                                    <input type="text" value="<?=$Info_User[0]->PHONE?>" name="phone" class="form-control" id="confirmPass">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="confirmPass" class="control-label">Email (<span>*</span>)</label>
                                                    <input type="hidden" name="url_img" value="<?=$Info_User[0]->IMAGE?>">
                                                    <input type="text" value="<?=$Info_User[0]->EMAIL?>" name="email" class="form-control" id="confirmPass">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="firstName" class="control-label">First name (<span>*</span>)</label>
                                                    <input type="text" name="firstName" class="form-control" value="<?=$Info_User[0]->FIRST_NAME?>" placeholder="Họ" value="" id="firstName" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="lastName">Last name (<span>*</span>)</label>
                                                    <input type="text" name="lastName" class="form-control" value="<?=$Info_User[0]->LAST_NAME?>" placeholder="Tên" value="" id="lastName" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-md-push-1 wrp-card">
                                        <div class="card card-user">
                                         <div class="content">
                                             <div class="author">
                                                 <div>
                                                     <img class="avatar border-gray" src="/public/assets/img/imagesUser/<?=$Info_User[0]->IMAGE?>" alt="..." />
                                                 </div>
                                                 <div class="edit-avatar ">
                                                     <div class="file bg-button">
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
                             <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" name="add" class="btn bg-button btn-fill pull-left" value="Add" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php view_include('partials.footer');?>
</div>
</div>
<?php view_include('layouts.foot-master');?>