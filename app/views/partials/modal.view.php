<!-- Example: view_include('particals.modal',['id_model'=>'','title'=>'', 'content'=>'','bt'=>'','link'=>'']); -->

<div class="modal fade" id="<?=$id_model?>" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?=$title?></h4>
            </div>
            <div class="modal-body">
                <p><?=$content?></p>
            </div>
            <div class="modal-footer">
                <a href="<?=$link?>"  class="btn btn-danger" ><?=$bt?></a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
            </div>
        </div>
    </div>
</div>
