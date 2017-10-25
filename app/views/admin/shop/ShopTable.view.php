<?php $index = 0;?>
<?php foreach ($shops as $value): ?>
    <tr>
      <td><?=++$index?></td>
      <td class="name-place"><a href=""><?=$value->SHOP_NAME?></a></td>
      <td class="img-post">
          <a href=""><img  src="/public/admin/assets/img/img-shop/<?=$value->VIEW?>" /></a>
      </td>
      <td><?=$value->TYPE_NAME?></td>
      <td class="change-discount<?=$value->SHOP_ID?>"><?=$value->DISCOUNT?></td>
      <td>
          <?php $status = (1 == $value->STATUS) ? 'active' : 'inactive'?>
          <div class="status <?=$status?>"></div>
      </td>
      <td>
          <div class="form-group">
              <div class="item-col">
                  <a href="/admin/shop/comment?id=<?=$value->SHOP_ID?>" class="btn btn-warning" title="Xem">
                      <i class="pe-7s-look"></i>
                  </a>
              </div>
          </div>
      </td>
      <td class="control">
          <div class="form-group">
              <div class="item-col">
                  <a href="/admin/shop/edit?id=<?=$value->SHOP_ID?>" class="btn btn-success" title="Sửa">
                      <i class="pe-7s-note"></i>
                  </a>
              </div>
              <div class="item-col">
                  <a data-toggle="modal" data-target="#delpost<?=$value->SHOP_ID?>"  href="" class="btn btn-danger" title="Xoá">
                      <i class="pe-7s-trash"></i>
                  </a>
              </div>
              <div class="clearfix"></div>
          </div>
      </td>
</tr>
  <?php view_include('admin.partials.modal', ['id_model' => 'delpost' . $value->SHOP_ID, 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/admin/shop/del?id=' . $value->SHOP_ID]);?>
<?php endforeach?>

