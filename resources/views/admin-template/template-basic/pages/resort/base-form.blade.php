<form class="form-sample col-12" method="POST" action="#" data-bs-target="form-resort" enctype="multipart/form-data">
    @csrf
    @method('POST')

    <div class="row flex-row-reverse">
        <div class="col-md-3 col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h3 class="mb-4">Action</h3>
                    <button type="submit" class="btn btn-primary btn-icon-text mb-3">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-icon-text mb-3"
                            data-bb-toggle="btn-with-href" data-url="#">
                        <i class="mdi mdi-file-cancel btn-icon-prepend"></i> Cancel
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-section mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="customer_id">Đối tác</label>
                                    <select name="customer_id" id="customer_id" class="form-control" required>
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Tên resort</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên resort" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" placeholder="Nhập địa chỉ resort" required></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="map">Vị trí bản đồ</label>
                                    <input type="text" class="form-control" id="map" name="map" placeholder="Nhập URL Google Maps hoặc tọa độ" required>
                                    <small class="form-text text-muted">Nhập URL nhúng Google Maps hoặc tọa độ</small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="option_success">Tiện nghi thành công</label>
                                    <select class="form-control" id="option_success" name="option_success[]" multiple>
                                        <option value="wifi">WiFi</option>
                                        <option value="pool">Hồ bơi</option>
                                        <option value="spa">Spa</option>
                                        <option value="gym">Phòng gym</option>
                                        <option value="restaurant">Nhà hàng</option>
                                        <option value="bar">Quầy bar</option>
                                        <option value="parking">Bãi đậu xe</option>
                                        <option value="beach">Bãi biển</option>
                                        <option value="tennis">Sân tennis</option>
                                        <option value="golf">Sân golf</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="option_error">Tiện nghi lỗi</label>
                                    <select class="form-control" id="option_error" name="option_error[]" multiple>
                                        <option value="wifi">WiFi</option>
                                        <option value="pool">Hồ bơi</option>
                                        <option value="spa">Spa</option>
                                        <option value="gym">Phòng gym</option>
                                        <option value="restaurant">Nhà hàng</option>
                                        <option value="bar">Quầy bar</option>
                                        <option value="parking">Bãi đậu xe</option>
                                        <option value="beach">Bãi biển</option>
                                        <option value="tennis">Sân tennis</option>
                                        <option value="golf">Sân golf</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="general_amenities">Tiện nghi chung</label>
                                    <select class="form-control" id="general_amenities" name="general_amenities[]" multiple>
                                        <option value="wifi">WiFi</option>
                                        <option value="pool">Hồ bơi</option>
                                        <option value="spa">Spa</option>
                                        <option value="gym">Phòng gym</option>
                                        <option value="restaurant">Nhà hàng</option>
                                        <option value="bar">Quầy bar</option>
                                        <option value="parking">Bãi đậu xe</option>
                                        <option value="beach">Bãi biển</option>
                                        <option value="tennis">Sân tennis</option>
                                        <option value="golf">Sân golf</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h3 class="mb-4">Hình ảnh</h3>
                                <div class="file-upload-input">
                                    <div class="form-input">
                                        <input type="file"
                                               class="form-control"
                                               id="images"
                                               name="images[]"
                                               accept="image/*"
                                               multiple>
                                        <small class="form-text text-muted">Allowed formats: JPG, PNG, GIF. Max size:
                                            2MB</small>
                                    </div>
                                    <div class="file-preview-container">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

