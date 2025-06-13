@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $title }}</h4>
                        <div class="action float-right">
                            <button type="reset" class="btn btn-inverse-primary btn-icon-text me-3"
                                    data-bb-toggle="btn-with-href"
                                    data-url="{{ route('admin.customers.create') }}">
                                <i class="mdi mdi-plus"></i> Thêm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
