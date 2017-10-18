<?php view_include('public.layouts.head-master', ['title' => 'Detail'])?>


<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="wrapper">
        <?php view_include('public.partials.header')?>

        <div id="content">
            <div class="pagination-tab">
                <div class="container">
                    <div class="row">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Detail</a></li>
                            <li class="breadcrumb-item active-breadcrumb"><?=$shop[0]->SHOP_NAME?></li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="detail">
                <div class="information">
                    <div class="container">
                        <div class="row">
                            <div class="infor-main">
                                <div class="col-md-5 col-xs-5 image">
                                    <div class="wrp">
                                        <img src="public/admin/assets/img/img-shop/<?=$shop[0]->VIEW?>" alt="">
                                        <div class="ribbon">
                                            <p>
                                                <span>Sale</span> <?=$shop[0]->DISCOUNT?>%
                                            </p>
                                        </div>
                                        <?php if (1 == $check) {?>
                                        <div class="ribbon bookmark">
                                            <p>
                                                <span>Saved</span>
                                            </p>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                                <div class="col-md-7  col-xs-7 ctn">
                                    <div class="wrp">
                                        <div class="item name">
                                            <div class="score">
                                                <p><?=$shop[0]->AVG+''?></p>
                                            </div>
                                            <div class="name-address">
                                                <h3> <?=$shop[0]->SHOP_NAME?> </h3>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <p class="item address "><i class="fa fa-location-arrow"></i><?=$shop[0]->ADDRESS?></p>
                                       <p class="item phone "><i class="fa fa-phone"></i><?=$shop[0]->PHONE?></p>
                                        <p class="item time "><i class="fa fa-clock-o"></i><?=$shop[0]->TIME_OPEN?> - <?=$shop[0]->TIME_CLOSE?></p>
                                        <div class="item features">
                                            <div id='notification'></div>
                                            <form action="javascript:void(0)" method="POST">
                                                <div class="item-feature save">
                                                    <div class="form-group">
                                                        <?php
$link = '';
if ('' == $checkRate) {
    $link = '/shop/ajaxRate?id=' . $shop[0]->sid;
} else {
    $link = '/shop/ajaxUpdateRate?id=' . $shop[0]->sid;
}

if (0 == $check) {
    ?>
                                                        <input type="submit" class=" btn btn-bg" value="Save" onclick="save('/shop/ajaxSave',<?=$shop[0]->sid?>)" />
                                                        <?php } else {?>
                                                        <input type="submit" class=" btn btn-bg" value="Unsave" onclick="save('/shop/ajaxUnsave',<?=$shop[0]->sid?>)" />
                                                        <?php }?>
                                                    </div>
                                                </div>
                                                <div class="item-feature rate">
                                                    <div class="form-group">
                                                        <a href="javascript:void(0)" class="btn btn-bg" data-toggle="modal" data-target="#modal-rating" onclick="rate(<?=$link?>,<?=$shop[0]->SHOP_ID?>)">Rate</a>
                                                    </div>
                                                </div>

                                                <div id="modal-rating" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content content">
                                                            <div class="wrp-ctn">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Rating</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?=$link?>" role="form" name="form-rate" id="form-rate" class="form-horizontal" enctype="multipart/form-data" method="POST">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group item">
                                                                                <div class="rating"></div>
                                                                                <input id="input-rate" type="text" name='rate'>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group button-action">
                                                                                <input type="submit" class=" btn btn-bg" value="Send" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="clearfix"></div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="ggmap">
                                <div id="map"></div>
                            </div>
                            <div class="features"></div>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="wrp-blur wrapper-content">
                        <div class="container">
                            <div class="row">
                                <div class="title">
                                    <h2>Description</h2>
                                    <p class="underline"></p>
                                </div>
                                <div class="ctn-description ctn-main">
                                    <div class="col-md-8 col-md-push-2">
                                        <p><?=$shop[0]->DETAIL?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="album products wrapper-content">
                    <div class="container">
                        <div class="row">
                            <div class="title">
                                <h2>Album</h2>
                                <p class="underline"></p>
                            </div>
                            <div class="ctn-products ctn-main">
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/food/food1.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                            <div id="modal-img" class="modal fade" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content content">
                                                        <div class="wrp-ctn">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="wrp-item">
                                                                    <div class="img-product">
                                                                        <img class="img" src="public/public/assets/img/restaurant/res5.jpg" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/restaurant/res2.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/food/food3.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/restaurant/res4.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/restaurant/res6.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/food/food5.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/food/food7.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-product col-md-3 col-xs-4">
                                    <div class="wrp-item">
                                        <div class="img-product">
                                            <img class="img" src="public/public/assets/img/restaurant/res5.jpg" alt="">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="" data-toggle="modal" data-target="#modal-img"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-more col-md-12 col-xs-12">
                                    <button class="btn btn-bg" type="submit">View more</button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="other wrapper-content">
                    <div class="container">
                        <div class="row">
                            <div class="wrp">
                                <div class="title">
                                    <h2>Others</h2>
                                    <p class="underline"></p>
                                </div>
                                <div class="ctn-slide ctn-main">
                                    <div class="slider-other slider">
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/slide_banner/hd1.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/restaurant/res1.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/food/food1.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/food/food2.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/restaurant/res3.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/restaurant/res4.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/food/food3.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrp-item">
                                            <img src="public/public/assets/img/food/food5.jpg">
                                            <div class="hover-view">
                                                <div class="view">
                                                    <a class="btn-view" href="#"><i class="fa fa-eye"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comments wrapper-content">
                    <?php
if (0 == $check) {
    ?>
                    <div class="container">
                       <h3><a href="login">Login to comment</a></h3>
                    </div>
                    <?php } else {
    ?><div class="container">
                     <div class="row">
                            <div class="title">
                                <h2>Comments</h2>
                                <p class="underline"></p>
                            </div>
                            <div class="ctn-comments ctn-main">
                                <div class="media input-cmt">
                                    <div class="media-left">
                                        <img src="public/public/assets/img/user/h5.jpg" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?=$_SESSION['user']->USERNAME?> </h4>
                                        <form action="javascript:void(0)" class="form-border-color">
                                            <div class="form-group">
                                                <textarea class="form-control" rows="3" id="cmt"></textarea>
                                            </div>
                                            <div class="pull-right form-group">
                                                <input type="submit" class="btn btn-bg" value="Send" onclick="loadMyComments(<?=$shop[0]->sid?>)">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
foreach ($comments as $value) {
        ?>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="public/public/assets/img/user/<?=$value->IMAGE?>" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading"><?=$value->USERNAME?> <small><i><?=$value->DATE_CREATED?></i></small></h4>
                                        <p><?=$value->CONTENT?></p>
                                    </div>
                                </div>
                                <?php }?>
                                <div id="ajaxComment">

                                </div>
                            </div>
                        </div><?php }?>
                </div>
            </div>
        </div>
        <?php view_include('public.partials.footer')?>
    </div>
</body>

<?php view_include('public.layouts.foot-master')?>
