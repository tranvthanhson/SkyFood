<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sky Food</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="wrapper">
        <header id="header">
            <div class="menu-top">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-3 col-xs-3">
                            <div class="wrp-img">
                                <a href="index.html"><img src="assets/img/logo/logo2.png" alt=""></a>
                            </div>
                        </div>
                        <div class="top-right col-md-9 col-xs-9">
                            <div class="toggle-menu item">
                                <a data-toggle="collapse" data-target=".navbar-ex1-collapse" class="btn-toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="search col-md-6 col-sm-6 item">
                                <div class="input-group ">
                                    <input type="text" class="form-control" id="inputSearch" placeholder="">
                                    <div class="input-group-addon"><a href=""><i class="fa fa-search" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                            <div class="user-features col-md-6 col-sm-6 item">
                                <div class="user dropdown item-feature">
                                    <a href="" class="btn-user  dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-user"></i>
                                        Hieu Tran
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="user-profile.html">Profile</a></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                </div>
                                <div class="signIn item-feature"><a href="" class="btn-signIn" data-toggle="modal" data-target="#modal-signIn"><i class="fa fa-sign-in"></i>Login</a></div>
                                <div class="signUp item-feature"><a href="" class="btn-signUp" data-toggle="modal" data-target="#modal-signUp"><i class="fa fa-user"></i>Register</a></div>
                            </div>
                            <div class="btn-modal-search item">
                                <a href="" data-toggle="modal" data-target="#modal-search" class="btn-search"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar" role="navigation" data-spy="affix" data-offset-top="57">
                <div class="container">
                    <div class="row">
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav ">
                                <li><a class="active-menu" href="index.html">home</a></li>
                                <li><a href="#interested">interested</a></li>
                                <li><a href="#news">news</a></li>
                                <li><a href="#aboutUs">about us</a></li>
                                <li><a href="contact.html">contact</a></li>
                                <li><a href="advanced-search.html">search</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div id="content">
            <div class="contact wrapper-content">
                <div class="container">
                    <div class="row">
                        <div class="title">
                            <h2>Contact Us</h2>
                            <p class="underline"></p>
                        </div>
                        <div class="ctn-contact ctn-main">
                            <div class="infor-contact">
                                <div class="item-infor col-md-4 col-xs-4">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <div class="text">
                                        <p>242 Nguyễn Hoàng, Đà Nẵng, Việt Nam</p>
                                    </div>
                                </div>
                                <div class="item-infor col-md-4 col-xs-4">
                                    <span><i class="fa fa-phone"></i></span>
                                    <div class="text">
                                        <p>01282143365</p>
                                        <p>0905594382</p>
                                    </div>
                                </div>
                                <div class="item-infor col-md-4 col-xs-4">
                                    <span><i class="fa fa-envelope"></i></span>
                                    <div class="text">
                                        <p>hieutran040495@gmail.com</p>
                                        <p>tthieu040495@gmail.com</p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="message">
                                <div class="title-mess">
                                    <h3>SEND A MESSAGE</h3>
                                </div>
                                <div class="ctn-mess">
                                    <form class="form-border-color" action="" data-toggle="validator" role="form">
                                        <div class="row">
                                            <div class="col-md-4 col-xs-4 item-ctn-mess">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-4 item-ctn-mess">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="email" placeholder="Email" required>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-xs-4 item-ctn-mess">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="phone" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="row textarea">
                                            <div class="col-md-12 item-ctn-mess">
                                                <div class="form-group">
                                                    <textarea rows="5" class="form-control" placeholder="Message" value="" required></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-bg pull-right" value="Send">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="wrp_footer ">
                <div class="container">
                    <div class="main_footer">
                        <div class="col-md-4 col-xs-4 item_footer logo">
                            <div class="bg"></div>
                        </div>
                        <div class="col-md-4 col-xs-4 item_footer au">
                            <h3>About Us</h3>
                            <p>This year our eatery has been acknowledged as the Best National Restaurant of 2015. Such a prestigious award widens the list of our prizes that we’ve earned.</p>
                        </div>
                        <div class="col-md-4 col-xs-4 item_footer cu">
                            <h3>Contact Us</h3>
                            <div class="ctn_item">
                                <p>Địa chỉ: 193 Nguyễn Lương Bằng, Đà Nẵng</p>
                                <p>SĐT: 0905594382</p>
                                <p>Email: <a href="">pinksky@gmail.com</a></p>
                                <p>Website: <a href="">http://pinksky.com</a></p>
                            </div>
                            <div class="social">
                                <div class="item col-md-3 col-xs-3"><a href=""><i class="fa fa-facebook"></i></a></div>
                                <div class="item col-md-3 col-xs-3"><a href=""><i class="fa fa-twitter"></i></a></div>
                                <div class="item col-md-3 col-xs-3"><a href=""><i class="fa fa-dribbble"></i> </a></div>
                                <div class="item col-md-3 col-xs-3"><a href=""><i class="fa fa-behance"></i></a></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="bottom_footer">
                    <p>© SkyFood copy right.</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- Modal Login-->
    <div id="modal-signIn" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Sign In</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" name="form" id="form-signIn" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label for="input-uerName">Username</label>
                                    <input type="text" id="input-uername" class="form-control" required />
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 password">
                                <div class="form-group item">
                                    <label for="input-uerName">Password</label>
                                    <input type="password" id="input-pass" class="form-control" data-minlength="6" required data-error="Mật khẩu ít nhất 6 kí tự" />
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" class=" btn btn-bg" value="Sign in" required />
                                </div>
                            </div>
                            <div class="col-md-12 forgotPass">
                                <div class="form-group ">
                                    <a href="">Forgot password?</a>
                                </div>
                            </div>
                            <div class="col-md-12 creatAccount">
                                <div class="form-group ">
                                    <p>
                                        Don't have an account?<a data-toggle="modal" data-target="#modal-signUp" data-dismiss="modal" href="">Creat an account</a>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-signUp" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">sign up</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" name="form" id="form-signUp" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div class="col-md-12 username">
                                <div class="form-group item">
                                    <label>Username</label>
                                    <input type="text" class="form-control input-userName" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 password">
                                <div class="form-group item">
                                    <label>Password</label>
                                    <input type="password" class="form-control input-pass" id="pass" data-minlength="6" required data-error="Mật khẩu phải ít nhất 6 kí tự">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 confirmPass">
                                <div class="form-group item">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control input-confirmPass" data-match="#pass" data-minlength="6" required data-match-error="Mật khẩu không trùng khớp">
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 firstName">
                                <div class="form-group item">
                                    <label>First Name</label>
                                    <input type="text" class="form-control input-firstName" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 lastName">
                                <div class="form-group item">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control input-lastName" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" class=" btn btn-bg" value="Sign up" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-search" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content content">
                <div class="wrp-ctn">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">search</h4>
                    </div>
                    <div class="modal-body">
                        <form data-toggle="validator" role="form" name="form" id="form-search" class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div class="col-md-12">
                                <div class="form-group item">
                                    <input type="text" class="form-control" required>
                                    <div class="underline"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group button-action">
                                    <input type="submit" class=" btn btn-bg" value="Search" />
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery Library -->
    <script src="assets/js/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/validator.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/rater.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJTv1mpf9Tm1fWBip0XKIuE1tBcv9GMc&callback=initMap" async defer></script>
</body>

</html>
