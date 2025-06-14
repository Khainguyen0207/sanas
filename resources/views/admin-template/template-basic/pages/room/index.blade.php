@php use \Illuminate\Support\Facades\Storage; @endphp
@extends(admin_template_basic_theme('layouts.master'))

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Room</h4>
                        <div class="action float-right">
                            <button type="reset" class="btn btn-inverse-primary btn-icon-text me-3"
                                    data-bb-toggle="btn-with-href"
                                    data-url="{{ route('admin.rooms.create') }}">
                                <i class="mdi mdi-plus"></i> Thêm
                            </button>
                        </div>
                        <div class="table-responsive">
                            <table class="table" id="room-table">
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
                                    <th>Resort</th>
                                    <th>Name</th>
                                    <th>Price (VNĐ)</th>
                                    <th>Quantity</th>
                                    <th>Capacity</th>
                                    <th>Status</th>
                                    <th>Operations</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $room)
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->resort->name ?? '' }}</td>
                                        <td>
                                            @if($room->images && is_array($room->images) && count($room->images) > 0)
                                                <img src="{{ Storage::url($room->images[0]) }}" alt="image"
                                                     class="rounded-circle" width="32"/>
                                            @endif
                                            <span class="pl-2">{{ $room->name }}</span>
                                        </td>
                                        <td>{{ number_format($room->price, 0) }}</td>
                                        <td>{{ $room->quantity }}</td>
                                        <td>{{ $room->number_of_adults }} Adults, {{ $room->number_of_children }}
                                            Children
                                        </td>
                                        <td>
                                            @php
                                                $statusClass = $room->quantity > 0 ? 'badge-success' : 'badge-danger';
                                                $statusText = $room->quantity > 0 ? 'Available' : 'Unavailable';
                                            @endphp
                                            <span class="badge {{ $statusClass }}">{{ $statusText }}</span>
                                        </td>
                                        <td>
                                            <a href="{{route('admin.rooms.edit', $room)}}" type="button"
                                               class="btn-sm btn-inverse-primary btn-icon">
                                                <i class="mdi mdi-pencil-box-outline"></i>
                                            </a>
                                            <a href="{{ route('admin.rooms.destroy', $room) }}" type="button"
                                               class="btn-sm btn-inverse-danger btn-icon"
                                               data-bs-action="modal-confirm-action" data-bs-toggle="modal"
                                               data-bs-target="#modal-confirm-delete">
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
