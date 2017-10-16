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
     <script src="/public/public/assets/js/jquery/jquery.min.js"></script>
    <script src="/public/public/assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/public/public/assets/js/validator.min.js"></script>
    <script src="/public/public/assets/js/wow.min.js"></script>
    <script src="/public/public/assets/js/slick.js"></script>
    <script src="/public/public/assets/js/rater.js"></script>
    <script src="/public/public/assets/js/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbJTv1mpf9Tm1fWBip0XKIuE1tBcv9GMc&callback=initMap" async defer></script>
</body>
</body>

</html>
