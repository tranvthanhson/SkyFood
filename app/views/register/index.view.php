<!-- Require head-->
<?php view_include('layouts.head-master')?>

<!-- Main Content -->
<div class="register-form page-form">
    <div class="container wrp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title text-center">ĐĂNG KÍ</div>
            </div>
            <div class="panel-body">
                <form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" value="" placeholder="Tên đăng nhập">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="password" class="form-control" value="" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" value="" placeholder="Họ">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" class="form-control" value="" placeholder="Tên">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="email" class="form-control" value="" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group cancel-btn">
                            <a href="login.html" class=" btn bg-button">Huỷ</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group res-btn">
                            <a href="" class=" btn bg-button">Đăng kí</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Require foot -->
<?php view_include('layouts.foot-master')?>
