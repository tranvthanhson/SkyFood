<!-- Require head-->
<?php view_include('admin.layouts.head-master')?>

<!-- Main Content -->
<div class="register-form page-form">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title text-center">ĐĂNG KÍ</div>
        </div>
        <div class="panel-body">
            <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" data-toggle="validator" role="form">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="username"  placeholder="Tên đăng nhập" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" class="form-control" name="password"  placeholder="Mật khẩu" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="lastname"  placeholder="Họ" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="firstname"  placeholder="Tên" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email"  placeholder="Email" required>
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
<?php view_include('admin.layouts.foot-master')?>
