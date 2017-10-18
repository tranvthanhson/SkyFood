<?php view_include('public.layouts.head-master', ['title' => 'Search'])?>
<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="wrapper">
        <?php view_include('public.partials.header')?>
        <div id="content">
            <div class="user-profile wrapper-content advanced-search">
                <div class="container">
                    <div class="row wrp-ctn-user">
                        <div class="title">
                            <h2>Advanced search</h2>
                            <p class="underline"></p>
                        </div>
                        <div class="ctn-user ctn-main">
                            <div class="row ">
                                <div class="item-ctn col-md-3">
                                    <div class="wrp">
                                        <div class="features">
                                            <nav>
                                                <div class="form-avatar">
                                                    <ul class="nav">
                                                        <li class="input-address item">
                                                            <div class="form-group">
                                                                <div>
                                                                    <input type="text" class="form-control" id="input" placeholder="Tên nhà hàng" value="<?=$_GET['name']?>">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                        <li class="type item-three item">
                                                            <div class="form-group wrp-item">
                                                                <select name="type" class="form-control" id="type">
                                                                    <option value="0">Tất cả thể loại</option>
                                                                    <?php foreach ($types as $type): ?>
                                                                        <option value="<?=$type->TYPE_ID?>"><?=$type->TYPE_NAME;?> </option>
                                                                       <!--  <option>Ăn vặt</option>
                                                                        <option>Coffee</option>
                                                                        <option>Nhà hàng</option> -->
                                                                    <?php endforeach;?>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li class="type item-three item">
                                                            <div class="form-group wrp-item">
                                                                <select id="sortBy" class="form-control">
                                                                    <option value="0" selected>Mới nhất</option>
                                                                    <option value="1">Đánh giá tốt nhất</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li class="button-search item-three item">
                                                            <div class="wrp-item">
                                                                <div>
                                                                    <input class="form-control btn btn-bg" id="searchId" onclick="searchShopName('search/shop')" value="Search" type="button">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </nav>
                                        </div>
                                        <div class="wrp-blur"></div>
                                    </div>
                                </div>
                                <div class="user-infor user-saved item-ctn products col-md-9">
                                    <div class="wrp">
                                        <div class="ctn-products searchShopTable">

                                           <!--      <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/food/food1.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href="detail.html"><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="detail.html">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="ribbon">
                                                            <p>
                                                                <span>Sale</span> 50%
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/restaurant/res2.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/food/food3.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/restaurant/res4.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/restaurant/res6.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/food/food5.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/food/food7.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">The Coffee House</a></h3>
                                                                <p class="address">100 Nguyễn Văn Linh, Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-product col-md-4 col-xs-4">
                                                    <div class="wrp-item">
                                                        <div class="img-product">
                                                            <img class="img" src="/public/public/assets/img/restaurant/res5.jpg" alt="">
                                                            <div class="hover-view">
                                                                <div class="view">
                                                                    <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctn-product">
                                                            <div class="info">
                                                                <h3><a href="">Highlands Nguyễn Du</a></h3>
                                                                <p class="address">74 Nguyễn Du Đà Nẵng</p>
                                                            </div>
                                                            <div class="parameter">
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-star"></i> 20</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-comment"></i> 100</p>
                                                                </div>
                                                                <div class="col-md-4 col-xs-4">
                                                                    <p href=""><i class="fa fa-bookmark"></i> 50</p>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->


                                                <div class="clearfix"></div>
                                            </div>
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
