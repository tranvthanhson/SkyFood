<?php $index = 0;?>
<?php foreach ($feedbacks as $feedback): ?>
    <tr>
        <td><?=++$index;?></td>
        <td><?=$feedback->FULL_NAME;?></td>
        <td><?=$feedback->EMAIL;?></td>
        <td><?=$feedback->PHONE;?></td>
        <td><?=$feedback->CONTENT;?></td>
        <td class="control">
            <div class="form-group">
                <div class="item-col">
                    <a data-toggle="modal" data-target="#replyContact<?=$feedback->FEEDBACK_ID?>" href="" class="btn btn-primary" title="Trả lời">
                        <i class="pe-7s-back"></i>
                    </a>
                </div>
                <div class="item-col">
                    <a data-toggle="modal" data-target="#delContact<?=$feedback->FEEDBACK_ID?>" href="" class="btn btn-danger" title="Xoá">
                        <i class="pe-7s-trash"></i>
                    </a>
                </div>

                <div class="modal fade" id="replyContact<?=$feedback->FEEDBACK_ID?>" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <form action="/admin/feedback/reply" method="POST">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">GỬI PHẢN HỒI</h4>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        <div class="form-group">
                                            <input type="hidden" name="emailTo" value="<?=$feedback->EMAIL;?>">
                                            <textarea class="form-control" rows="5" id="" name="content"></textarea>
                                        </div>
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" >GỬI</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
$data = [
    'id_model' => 'delContact' . $feedback->FEEDBACK_ID,
    'title' => 'XÓA PHẢN HỒI',
    'content' => 'Bạn có chắc chắn muốn xóa không??',
    'bt' => 'Xóa',
    'link' => '/feedback/delete?id=' . $feedback->FEEDBACK_ID,
];
?>
                    <?php view_include('partials.modal', $data)?>
                    <div class="clearfix"></div>
                </div>
            </td>
        </tr>

        <?php endforeach;?>