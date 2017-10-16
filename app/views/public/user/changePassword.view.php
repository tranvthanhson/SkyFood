<?php view_include('public.layouts.head-master', ['title' => 'Contact'])?>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="wrapper">
        <?php view_include('public.partials.header')?>

        <div id="content">
            <div class="user-profile wrapper-content">
                <div class="container">
                    <div class="row wrp-ctn-user">
                        <div class="title">
                            <h2>User Profile</h2>
                            <p class="underline"></p>
                        </div>
                        <div class="ctn-user ctn-main">
                            <div class="row ">
                                <?php view_include('public.user.partials.side-bar');?>
                                <div class="user-infor edit-pass item-ctn col-md-9">
                                    <div class="wrp">
                                        <form data-toggle="validator" role="form" action="" class="form-edit-pass form-infor form-border-color">
                                            <div class="row">
                                                <div class="form-group pass">
                                                    <label class="control-label col-sm-3" for="pwd">Password:</label>
                                                    <div class="col-sm-9 input-pass">
                                                        <input type="password" class="form-control" id="pwd" placeholder="" disabled value="123">
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group new-pass">
                                                    <label class="control-label col-sm-3" for="inputNewPass">New Password:</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" id="inputNewPass" placeholder="New Password" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group confirm-pass">
                                                    <label class="control-label col-sm-3" for="inputConfirmPass">Confirm Password:</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control" id="inputConfirmPass" placeholder="Confirm password" required data-match="#inputNewPass" data-match-error="Wrong password!">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group edit">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-bg pull-right">Edit</button>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('public.partials.footer')?>

    </div>
</body>

<?php view_include('public.layouts.foot-master')?>
