<!-- Modal -->
<div class="modal fade" id="delContact" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?=$title1?></h4>
            </div>
            <div class="modal-body">
                <p><?=$content?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Xoá</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="replyContact" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?=$title2?></h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <textarea class="form-control" rows="5" id=""></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Gửi</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>
