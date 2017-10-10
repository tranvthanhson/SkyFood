<?php
$i = 1;
foreach ($shop as $value):

    echo '<tr>
			                                            <td>' . $value->SHOP_ID . '</td>
			                                            <td class="name-place"><a href="">' . $value->SHOP_NAME . '</a></td>
			                                            <td class="img-post">
			                                                <a href=""><img  src="/public/assets/img/img-shop/' . $value->VIEW . '" /></a>
			                                            </td>
			                                            <td>' . $value->TYPE_NAME . '</td>
			                                            <td>' . $value->DISCOUNT . '</td>
			                                            <td class="percent-input">
			                                                <div class="form-group">
			                                                    <div class="item-col">
			                                                        <input type="text" class="form-control" id="discount" value="' . $value->DISCOUNT . '">
			                                                    </div>
			                                                    <div class="item-col">
			                                                        <button type="submit" class="btn btn-success">Nhập</button>
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
			                                                        <a href="comments.html" class="btn btn-warning" title="Xem">
			                                                            <i class="pe-7s-look"></i>
			                                                        </a>
			                                                    </div>
			                                                </div>
			                                            </td>
			                                            <td class="control">
			                                                <div class="form-group">
			                                                    <div class="item-col">
			                                                        <a href="/post/edit?id=<?=$value->SHOP_ID?>" class="btn btn-success" title="Sửa">
			                                                            <i class="pe-7s-note"></i>
			                                                        </a>
			                                                    </div>
			                                                    <div class="item-col">
			                                                        <a data-toggle="modal" data-target="#delPost<?=$value->SHOP_ID?>"  href="" class="btn btn-danger" title="Xoá">
			                                                            <i class="pe-7s-trash"></i>
			                                                        </a>
			                                                    </div>
			                                                    <div class="clearfix"></div>
			                                                </div>
			                                            </td>
			                                        </tr>';
    $i++;

    echo "view_include('partials.modal', ['id_model' => 'delPost' . $value->SHOP_ID, 'title' => 'XÓA BÀI ĐĂNG ', 'content' => 'Bạn có chắc chắn muốn xóa không??', 'bt' => 'Xóa', 'link' => '/post/del?id=' . $value->SHOP_ID])";

endforeach;
