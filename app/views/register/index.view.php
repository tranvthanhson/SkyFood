<!-- Require head-->
<?php view_include('layouts.head-master')?>

<!-- Main Content -->
<div class="register-form page-form">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title text-center">ĐĂNG KÍ</div>
        </div>
        <div class="panel-body">
            <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" action="/register" method="POST">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" value="thuong" name="username" placeholder="Tên đăng nhập">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" value="thuong" name="password" placeholder="Mật khẩu">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="first_name" value="thuong" placeholder="Họ">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="last_name" value="thuong" placeholder="Tên">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="thuong@thuong" placeholder="Email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group cancel-btn">
                        <a href="login.html" class=" btn bg-button">Huỷ</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group res-btn">
                        <input type="submit" class=" btn bg-button" name="register" value="Đăng kí" />
                    </div>
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>

<!-- Require foot -->
<?php view_include('layouts.foot-master')?>
