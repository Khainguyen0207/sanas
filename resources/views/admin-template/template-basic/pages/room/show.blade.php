@extends(admin_template_basic_theme('layouts.master'))

@section('title', 'Room Details')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="card-title">Room Details</h4>
                    <div>
                        <a href="{{ route('admin.rooms.edit', $room) }}" class="btn btn-warning btn-icon-text">
                            <i class="mdi mdi-pencil btn-icon-prepend"></i> Edit
                        </a>
                        <a href="{{ route('admin.rooms.index') }}" class="btn btn-secondary btn-icon-text">
                            <i class="mdi mdi-arrow-left btn-icon-prepend"></i> Back to List
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Resort</label>
                            <p>{{ $room->resort->name }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Room Name</label>
                            <p>{{ $room->name }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Price</label>
                            <p>${{ number_format($room->price, 2) }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Quantity</label>
                            <p>{{ $room->quantity }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Status</label>
                            <p>
                                <span class="badge {{ $room->quantity > 0 ? 'badge-success' : 'badge-danger' }}">
                                    {{ $room->quantity > 0 ? 'Available' : 'Unavailable' }}
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold">Number of Adults</label>
                            <p>{{ $room->number_of_adults }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Number of Children</label>
                            <p>{{ $room->number_of_children }}</p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Room Amenities</label>
                            <p>
                                @foreach($room->room_amenities as $amenity)
                                    <span class="badge badge-info mr-1">{{ ucfirst($amenity) }}</span>
                                @endforeach
                            </p>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Description</label>
                            <p>{{ $room->description }}</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <label class="font-weight-bold">Room Images</label>
                        <div class="row">
                            @foreach($room->images as $image)
                                <div class="col-md-4 mb-3">
                                    <img src="{{ asset('storage/' . $image) }}" 
                                         alt="Room Image" 
                                         class="img-fluid rounded">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 