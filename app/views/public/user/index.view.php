<?php view_include('public.layouts.head-master', ['title' => $_SESSION['user']->USERNAME])?>

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
                                <div class="user-infor item-ctn col-md-9">
                                    <div class="wrp">
                                        <form data-toggle="validator" role="form" action="/editUserInfo" class="form-infor form-border-color" method="POST">
                                            <!-- <div class="row">
                                                <div class="form-group name">
                                                    <label class="control-label col-xs-3">Name:</label>
                                                    <div class="col-xs-9 show-name">
                                                        <h4>Hiếu Trần</h4>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div> -->
                                            <div class="row">
                                                <div class="form-group username">
                                                    <label class="control-label col-sm-3">Username:</label>
                                                    <div class="col-sm-9 show-username">
                                                        <p><?=$_SESSION['user']->USERNAME;?></p>
                                                    </div>
                                                    <input type="hidden" name="username" value="<?=$_SESSION['user']->USERNAME;?>">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group first-name">
                                                    <label class="control-label col-sm-3" for="inputFirstName">First Name:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="First name" value="<?=$_SESSION['user']->FIRST_NAME;?>" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group last-name">
                                                    <label class="control-label col-sm-3" for="inputLastName">Last Name:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="Last name" value="<?=$_SESSION['user']->LAST_NAME;?>" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group email">
                                                    <label class="control-label col-sm-3" for="inputEmail">Email:</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" value="<?=$_SESSION['user']->EMAIL;?>" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group email">
                                                    <label class="control-label col-sm-3" for="inputEmail">Phone:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Phone" value="<?=$_SESSION['user']->PHONE;?>" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group email">
                                                    <label class="control-label col-sm-3" for="inputEmail">Address:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Address" value="<?=$_SESSION['user']->ADDRESS;?>" required>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group edit">
                                                    <div class="col-md-12">
                                                        <input type="submit" name="edit" class="btn btn-bg pull-right" value="Edit" />
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php var_dump($_SESSION['user'])?>
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

