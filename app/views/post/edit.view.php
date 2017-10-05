<?php view_include('layouts.head-master', ['title' => 'CHỈNH SỬA ĐỊA ĐIỂM']);?>
<div class="wrapper">
    <?php view_include('layouts.side-bar');?>
    <div class="main-panel">
        <?php view_include('partials.header', ['title' => 'CHỈNH SỬA ĐỊA ĐIỂM'])?>
        <div class="content edit-post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sửa bài đăng</h4>
                            </div>
                            <div class="content">
                                <form data-toggle="validator" role="form">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="place" class="control-label">Place's name (<span>*</span>)</label>
                                                <input type="text" class="form-control" id="place" placeholder="Tên địa điểm" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="phone" class="control-label">Phone (<span>*</span>)</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Số điện thoại" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="discount" class="control-label">Discount (<span>*</span>)</label>
                                                <input type="text" class="form-control" id="discount" placeholder="Khuyến mãi" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="type">Type (<span>*</span>)</label>
                                                <select class="form-control" id="type">
                                                    <option>[Chọn]</option>
                                                    <option>Ăn vặt</option>
                                                    <option>Coffee</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="city" class="control-label">City (<span>*</span>)</label>
                                                <input type="text" class="form-control" id="city" placeholder="Thành phố" value="Đà Nẵng" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Địa chỉ (<span>*</span>)</label>
                                                <input id="pac-input" type="text" class="form-control" placeholder="Address" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lat" class="control-label">Latitude</label>
                                                <input type="text" class="form-control" id="lat" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="lung" class="control-label">Lungtide</label>
                                                <input type="text" class="form-control" id="lung" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="openTime" class="control-label">Open time (<span>*</span>)</label>
                                                <input type="text" class="form-control" placeholder="Giờ mở cửa" value="" id="openTime" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="closeTime" class="control-label">Close time (<span>*</span>)</label>
                                                <input type="text" class="form-control" placeholder="Giờ đóng cửa" value="" id="closeTime" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="price">Price (<span>*</span>)</label>
                                                <input type="text" class="form-control" placeholder="Mức giá ( VD: 2000đ - 50000đ )" value="" id="price" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Detail</label>
                                                <textarea rows="5" class="form-control" placeholder="Chi tiết địa điểm" value=""></textarea required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn bg-button btn-fill pull-right">Hoàn thành</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="content">
                                    <div class="author">
                                        <div>
                                            <img class="avatar border-gray" src="assets/img/res2.jpg" alt="..." />
                                        </div>
                                        <div class="edit-avatar ">
                                            <div class="wrp file bg-button">
                                                <i class="pe-7s-cloud-upload"></i>Upload
                                                <input type="file" name="file" />
                                            </div>
                                        </div>
                                        <h4 class="title">The Coffee House<br />
                                            <small>0905594382</small>
                                        </h4>
                                    </div>
                                    <p class="description text-center">
                                        "Lamborghini Merce Your chick she so thirsty I'm in that two seat Lambo"
                                    </p>
                                </div>
                            </div>
                            <div class="">
                                <div id="map" class="form-group"></div>
                                <div id="infowindow-content">
                                    <img src="" width="16" height="16" id="place-icon">
                                    <span id="place-name" class="title"></span>
                                    <br>
                                    <span id="place-address"></span>
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
