<!-- Require head-->
<?php view_include('layouts.head-master')?>

<div class="login-form page-form">
    <div class="container wrp">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title text-center">ĐĂNG NHẬP</div>
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
                        <div class="form-group login-btn">
                            <a href="" class=" btn bg-button">Đăng nhập</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <hr>
                    <p class=" text-center res-link">Bạn chưa có tài khoản? <a href="register.html">Đăng kí</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Require foot -->
<?php view_include('layouts.foot-master')?>
