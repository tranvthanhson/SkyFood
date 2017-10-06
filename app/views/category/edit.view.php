<?php view_include('layouts.head-master', ['title' => 'CHỈNH SỬA DANH MỤC']);?>
<div class="wrapper">
    <?php view_include('layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('partials.header', ['title' => 'CHỈNH SỬA DANH MỤC'])?>
        <div class="content edit-user">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa danh mục</h4>
                            </div>
                            <div class="content">
                                <form data-toggle="validator" role="form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Tên danh mục (<span>*</span>)</label>
                                                <input type="text" class="form-control" placeholder="Nhập tên danh mục" value="Ăn uống" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn bg-button btn-fill pull-right">Hoàn thành</button>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php view_include('partials.footer');?>
    </div>
</div>
<?php view_include('layouts.foot-master');?>
