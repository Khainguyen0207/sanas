<form class="form-sample col-12" method="POST" action="{{ route('admin.customers.store') }}">
    @csrf
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
                                    <label for="username">Username</label>
                                    <input type="text"
                                           class="form-control @error('username') is-invalid @enderror"
                                           id="name" name="name"
                                           placeholder="Enter username">
                                    @error('username')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           id="email" name="email"
                                           placeholder="Enter email" autocomplete="false"
                                    >
                                    @error('email')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password"
                                           class="form-control @error('password') is-invalid @enderror"
                                           id="password" name="password" placeholder="Enter new password">
                                    @error('password')
                                    <span class="invalid-feedback"></span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control"
                                           id="password_confirmation" name="password_confirmation"
                                           placeholder="Confirm password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date"
                                           class="form-control @error('dob') is-invalid @enderror"
                                           id="birthday" name="dob">
                                    @error('dob')
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
                                        <img src="{{ asset('assets/images/default-avatar.png') }}"
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

