<form class="form-sample col-12" method="POST" action="#" data-bs-target="form-room" enctype="multipart/form-data">
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
                                    <label for="resort_id">Resort</label>
                                    <select name="resort_id" id="resort_id" class="form-control" required>
                                        @foreach($resorts as $resort)
                                            <option value="{{ $resort->id }}">{{$resort->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Tên phòng</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Nhập tên phòng" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Giá (VNĐ)</label>
                                    <input type="number" step="0.01" class="form-control" id="price" name="price"
                                           placeholder="Nhập giá phòng" required min="0">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity">Số lượng</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity"
                                           placeholder="Nhập số lượng" required min="0">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number_of_adults">Số người lớn</label>
                                    <input type="number" class="form-control" id="number_of_adults"
                                           name="number_of_adults" placeholder="Nhập số người lớn" required min="1">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="number_of_children">Số trẻ em</label>
                                    <input type="number" class="form-control" id="number_of_children"
                                           name="number_of_children" placeholder="Nhập số trẻ em" required min="0">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Mô tả</label>
                                    <textarea class="form-control" id="description" name="description" rows="4"
                                              placeholder="Nhập mô tả phòng"></textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="room_amenities">Tiện nghi phòng</label>
                                    <select class="form-control" id="room_amenities" name="room_amenities[]" multiple>
                                        <option value="wifi">WiFi</option>
                                        <option value="tv">TV</option>
                                        <option value="air_conditioning">Điều hòa</option>
                                        <option value="minibar">Minibar</option>
                                        <option value="safe">Két sắt</option>
                                        <option value="balcony">Ban công</option>
                                        <option value="desk">Bàn làm việc</option>
                                        <option value="coffee_maker">Máy pha cà phê</option>
                                        <option value="hairdryer">Máy sấy tóc</option>
                                        <option value="iron">Bàn ủi</option>
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
