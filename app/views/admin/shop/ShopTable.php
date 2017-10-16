<?php
$i = 1;
foreach ($shop as $value):

    echo '<tr>
						    <td>' . $i . '</td>
						    <td class="name-place"><a href="">' . $value->SHOP_NAME . '</a></td>
						    <td class="img-post">
						    <a href=""><img  src="/public/admin/assets/img/img-shop/' . $value->VIEW . '" /></a>
						    </td>
						    <td>' . $value->TYPE_NAME . '</td>
						    <td class="change-discount' . $value->SHOP_ID . '">' . $value->DISCOUNT . '</td>
						    <td class="percent-input">
						    <div class="form-group">
						    <div class="item-col">
						    <input type="text" class="form-control" id="discount" value="' . $value->DISCOUNT . '">
						    </div>
						    <div class="item-col">
						    <button type="submit" class="btn btn-success" onclick="changeDiscount(' . $value->SHOP_ID . ')">Nhập</button>
						    </div>
						    <div class="clearfix"></div>
						    </div>
						    </td>
						    <td>
						    <label class="checkbox">';
    if (1 == $value->STATUS) {
        echo '<input type="checkbox" value="" data-toggle="checkbox" checked="">';
    } else {
        echo '<input type="checkbox" value="" data-toggle="checkbox" >';
    }
    echo '</label>
					        </td>
					        <td>
					            <div class="form-group">
					                <div class="item-col">
					                    <a href="/admin/shop/comment?id=' . $value->SHOP_ID . '" class="btn btn-warning" title="Xem">
					                        <i class="pe-7s-look"></i>
					                    </a>
					                </div>
					            </div>
					        </td>
					        <td class="control">
					            <div class="form-group">
					                <div class="item-col">
					                    <a href="/admin/shop/edit?id=' . $value->SHOP_ID . '" class="btn btn-success" title="Sửa">
					                        <i class="pe-7s-note"></i>
					                    </a>
					                </div>
					                <div class="item-col">
					                    <a data-toggle="modal" data-target="#delpost' . $value->SHOP_ID . '"  href="" class="btn btn-danger" title="Xoá">
					                        <i class="pe-7s-trash"></i>
					                    </a>
					                </div>
					                <div class="clearfix"></div>
					            </div>
					        </td>
					    </tr>';
    $i++;

    echo "view_include('partials.modal', ['id_model' => 'delshop' . $value->SHOP_ID, 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => 'admin/shop/del?id=' . $value->SHOP_ID])";

endforeach;
