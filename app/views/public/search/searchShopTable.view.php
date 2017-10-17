<?php if (count($shops) == 0) {?>
<h1 class="noItem">Không có kết quả nào</h1>
<?php }?>
<?php for ($i = 0; $i < count($shops); $i++) {?>
    <div class="item-product col-md-4 col-xs-4">
        <div class="wrp-item">
            <div class="img-product">
                <img class="img" src="/public/admin/assets/img/img-shop/<?=$shops[$i]->VIEW?>" alt="">
                <div class="hover-view">
                    <div class="view">
                        <a class="btn-view" href=""><i class="fa fa-eye"></i></a>
                    </div>
                </div>
            </div>
            <div class="ctn-product">
                <div class="info">
                    <h3><a href=""><?=$shops[$i]->SHOP_NAME?></a></h3>
                    <p class="address"><?=$shops[$i]->ADDRESS?></p>
                </div>
                <div class="parameter">
                    <div class="col-md-4 col-xs-4">
                        <p href=""><i class="fa fa-star"></i><?=$shops[$i]->AVG_RATE+''?></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <p href=""><i class="fa fa-comment"></i><?=$shops[$i]->SUM_COMMENT?></p>
                    </div>
                    <div class="col-md-4 col-xs-4">
                        <p href=""><i class="fa fa-bookmark"></i>50</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <?php if (0 != $shops[$i]->DISCOUNT) {?>
            <div class="ribbon">
                <p>
                    <span>Sale</span> <?=$shops[$i]->DISCOUNT?>%
                </p>
            </div>
            <?php }?>
        </div>
    </div>

    <?php }?>
<!--      <div class="view-more col-md-12 col-xs-12">
        <button class="btn btn-bg" type="submit" onclick="viewMore()">View more</button>
    </div>
 -->
