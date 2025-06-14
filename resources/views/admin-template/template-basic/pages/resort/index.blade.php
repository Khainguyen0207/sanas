@php use \Illuminate\Support\Facades\Storage; @endphp
@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Resort</h4>
                        <div class="action float-right">
                            <button type="reset" class="btn btn-inverse-primary btn-icon-text me-3"
                                    data-bb-toggle="btn-with-href"
                                    data-url="{{ route('admin.resorts.create') }}">
                                <i class="mdi mdi-plus"></i> Thêm
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="resort-table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Name</th>
                                    <th>Rooms</th>
                                    <th>Status</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resorts as $resort)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>{{ $resort->id }}</td>
                                        <td>{{ $resort->customer->name ?? '' }}</td>
                                        <td>
                                            @if($resort->images && is_array($resort->images) && count($resort->images) > 0)
                                                <img src="{{ Storage::url($resort->images[0]) }}" alt="image" class="rounded-circle" width="32"/>
                                            @endif
                                            <span class="pl-2">{{ $resort->name }}</span>
                                        </td>
                                        <td>{{ $resort->rooms->count() ?? 0 }}</td>
                                        <td>
                                            @php
                                                $statusClass = $resort->rooms && $resort->rooms->count() > 0 ? 'badge-success' : 'badge-warning';
                                                $statusText  =$resort->rooms &&  $resort->rooms->count() > 0 ? 'Active' : 'No Rooms';
                                            @endphp
                                            <span class="badge {{ $statusClass }}">{{ $statusText }}</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.resorts.edit', $resort)}}" type="button"
                                               class="btn-sm btn-inverse-primary btn-icon">
                                                <i class="mdi mdi-pencil-box-outline"></i>
                                            </a>

                                            <a href="{{ route('admin.resorts.destroy', $resort) }}" type="button" class="btn-sm btn-inverse-danger btn-icon" data-bs-action="modal-confirm-action" data-bs-toggle="modal" data-bs-target="#modal-confirm-delete">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
