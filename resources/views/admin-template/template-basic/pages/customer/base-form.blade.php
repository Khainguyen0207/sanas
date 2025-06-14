<form class="form-sample col-12" method="POST" action="#" data-bs-target="form-customer" enctype="multipart/form-data">
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
                            data-bb-toggle="btn-with-href" data-url="{{ route('admin.customers.index') }}">
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
                                    <label for="name">Họ tên</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           id="name" name="name" placeholder="Nhập họ tên">
                                    @error('name')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           id="email" name="email" placeholder="Nhập email">
                                    @error('email')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           id="password" name="password" placeholder="Nhập mật khẩu mới">
                                    @error('password')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                           id="password" name="password_confirmation" placeholder="Nhập mật khẩu mới">
                                    @error('password')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                           id="phone" name="phone" placeholder="Nhập số điện thoại">
                                    @error('phone')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cash">Số dư tài khoản</label>
                                    <input type="number" step="0.01" class="form-control @error('cash') is-invalid @enderror"
                                           id="cash" name="cash" placeholder="Nhập số dư">
                                    @error('cash')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Trạng thái</label>
                                    <select id="status" name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="active">Active</option>
                                        <option value="locked">Locked</option>
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="birthday">Ngày sinh</label>
                                    <input type="date" class="form-control @error('birthday') is-invalid @enderror"
                                           id="birthday" name="birthday">
                                    @error('birthday')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="gender">Giới tính</label>
                                    <select id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror">
                                        <option value="male" selected>Nam</option>
                                        <option value="female" >Nữ</option>
                                        <option value="other">Khác</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                                           id="address" name="address" placeholder="Nhập địa chỉ">
                                    @error('address')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <h3 class="mb-4">Avatar</h3>
                                <div class="file-upload-wrapper">
                                    <div class="file-upload-preview mb-3 text-center">
                                        <img src="{{ !$customer->avatar ? asset('assets/images/default-avatar.png') : url($customer->avatar) }}"
                                             alt="Avatar Preview"
                                             class="img-fluid rounded-circle"
                                             id="avatar-preview"
                                             style="width: 150px; height: 150px; object-fit: cover;">
                                    </div>
                                    <div class="file-upload-input">
                                        <input type="file"
                                               class="form-control @error('avatar') is-invalid @enderror"
                                               id="avatar"
                                               name="avatar"
                                               accept="image/*">
                                        <small class="form-text text-muted">Allowed formats: JPG, PNG, GIF. Max size:
                                            2MB</small>
                                        @error('avatar')
                                        <span class="invalid-feedback"></span>
                                        @enderror
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

