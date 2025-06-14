@extends('layouts.master')

@section('content')
    <section class="rooms-section" style="margin-top: 6rem;">
        <div class="main-display container-fluid row mt-4">
            <div class="filter col-lg-3 col-12">
                <div class="title">
                    <strong>
                        <h4>Lọc theo:</h4>
                    </strong>
                </div>
                <section class="filter-section">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-1 row-cols-sm-2 row-gap-2">
                        <div class="col">
                            <div class="card card-custom h-100">
                                <div class="card-header d-flex justify-content-between align-items-center toggle-filter"
                                     data-target="price-filter-body" style="cursor: pointer;">
                                    <strong class="mb-0">
                                        Giá mỗi đêm
                                    </strong>
                                    <i class="bi bi-chevron-down toggle-icon"></i>
                                </div>
                                <div class="card-body filter-body" id="price-filter-body">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input price-filter" type="radio"
                                               name="priceRange" value="250-400" id="price1">
                                        <label class="form-check-label" for="price1">
                                            250,000 - 400,000 VND
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input price-filter" type="radio"
                                               name="priceRange" value="400-600" id="price2">
                                        <label class="form-check-label" for="price2">
                                            400,000 - 600,000 VND
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input price-filter" type="radio"
                                               name="priceRange" value="600-800" id="price3">
                                        <label class="form-check-label" for="price3">
                                            600,000 - 800,000 VND
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input price-filter" type="radio"
                                               name="priceRange" value="800-1000" id="price4">
                                        <label class="form-check-label" for="price4">
                                            800,000 - 1,000,000 VND
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input price-filter" type="radio"
                                               name="priceRange" value="1000-100000" id="price5">
                                        <label class="form-check-label" for="price5">
                                            Above 1,000,000 VND
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-custom h-100">
                                <div class="card-header d-flex justify-content-between align-items-center toggle-filter"
                                     data-target="facility-filter-body" style="cursor: pointer;">
                                    <strong class="mb-0">
                                        Tiện nghi
                                    </strong>

                                    <i class="bi bi-chevron-down toggle-icon"></i>
                                </div>
                                <div class="card-body filter-body" id="facility-filter-body">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="wifi"
                                               id="wifiCheck">
                                        <label class="form-check-label" for="wifiCheck">
                                            Wifi miễn phí
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="pool"
                                               id="poolCheck">
                                        <label class="form-check-label" for="poolCheck">
                                            Hồ bơi
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="parking"
                                               id="parkingCheck">
                                        <label class="form-check-label" for="parkingCheck">
                                            Bãi đậu xe
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="restaurant"
                                               id="restaurantCheck">
                                        <label class="form-check-label" for="restaurantCheck">
                                            Nhà hàng
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-custom h-100 ">
                                <div class="card-header d-flex justify-content-between align-items-center toggle-filter"
                                     data-target="quantity-filter-body" style="cursor: pointer;">
                                    <strong class="mb-0">
                                        Số lượng phòng và giường
                                    </strong>
                                    <i class="bi bi-chevron-down toggle-icon"></i>
                                </div>
                                <div class="card-body filter-body" id="quantity-filter-body">
                                    <div
                                        class="room-item d-flex justify-content-between align-items-center mb-3">
                                        <div>Phòng ngủ</div>
                                        <div class="buttons d-flex align-items-center border rounded px-2 py-1">
                                            <button class="btn btn-light border-0"
                                                    onclick="decrease('bedroom')">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <div id="bedroom" class="count-value px-2"
                                                 data-target="quantity-bedroom">0
                                            </div>
                                            <button class="btn btn-light border-0"
                                                    onclick="increase('bedroom')">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>


                                    <div
                                        class="room-item d-flex justify-content-between align-items-center mb-3">
                                        <div>Giường</div>
                                        <div class="buttons d-flex align-items-center border rounded px-2 py-1">
                                            <button class="btn btn-light border-0" onclick="decrease('bed')">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <div id="bed" class="count-value px-2">0</div>
                                            <button class="btn btn-light border-0" onclick="increase('bed')">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="room-item d-flex justify-content-between align-items-center mb-3">
                                        <div>Phòng tắm</div>
                                        <div class="buttons d-flex align-items-center border rounded px-2 py-1">
                                            <button class="btn btn-light border-0"
                                                    onclick="decrease('bathroom')">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <div id="bathroom" class="count-value px-2">0</div>
                                            <button class="btn btn-light border-0"
                                                    onclick="increase('bathroom')">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="reset" class="btn btn-primary my-2 w-100">Tìm kiếm</button>
                </section>
            </div>

            <div class="col-lg-9 rooms-wrapper">
                <div class="pro-place mb-4">
                    <div class="title">
                        <strong>
                            <h4>Thành phố Hồ Chí Minh:</h4>
                        </strong>
                    </div>
                    <div>
                        <select class="form-select form-select-sm"
                                style="width: 150px; border-radius: 50px; padding: 8px;">
                            <option value="popular">Phổ biến nhất</option>
                            <option value="price-low">Giá: Thấp đến cao</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="rating">Highest Rated</option>
                        </select>
                    </div>
                </div>
                <div class="place-img">
                    <img src="{{ asset('assets/images/theme/images/TPHCM.png') }}" class="w-100" alt="">
                    <div class="img-layer">
                        <div class="img-para">
                            <h3>Khám phá thành phố Hồ Chí Minh</h3><br>
                            <p>Ho Chi Minh City, commonly known as Saigon, is the most populous city in Vietnam
                                with a
                                population of around 10 million in 2023.</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 g-3" id="rooms">
                    @foreach($resorts as $resort)
                        <div class="col-lg-4 g-3">
                            <div class="card rounded-4">
                                <div class="p-3">
                                    @php
                                        $resortImages = json_decode($resort->images, true);
                                    @endphp
                                    <img
                                        src="{{ $resortImages[0] ?? asset('assets/images/theme/images/room/image.png')}}"
                                        class="w-100 rounded-3 detail-img" alt="{{ $resort->name }}">
                                </div>

                                <div class="card-body p-3 pt-0">
                                    <h6 class="card-title fw-bold">{{ $resort->name }}</h6>
                                    <div class="p-3 pt-0 pb-0">
                                        <p class="mb-1 text-info fw-bold text-decoration-underline">
                                            <i class="fa-solid fa-location-dot"></i>
                                            {{ $resort->address }} {{-- Giả sử resort có cột 'address' --}}
                                        </p>
                                        <ul class="list-unstyled text-success list-option-benefit">
                                            {{-- Bạn có thể lặp qua các tiện ích nếu có --}}
                                            <li class="button-has-icon">
                                <span>
                                    <img src="{{ asset('assets/images/theme/icon-images/tick-success.png') }}"
                                         alt="tick-success">
                                </span>
                                                <span class="fw-bold">Miễn phí hủy</span>
                                            </li>
                                            <li class="button-has-icon">
                                <span>
                                    <img src="{{ asset('assets/images/theme/icon-images/tick-success.png') }}"
                                         alt="tick-success">
                                </span>
                                                <span class="fw-bold">Không cọc trước</span>
                                            </li>
                                        </ul>
                                        {{-- Giả sử resort có cột 'min_price' hoặc 'starting_price' --}}
                                        <p class="fw-bold" style="color: #f47c0e;">
                                            Từ: {{ number_format($resort->min_price ?? 1500000, 0, ',', '.') }} VNĐ
                                        </p>
                                    </div>
                                    <div class="text-end">
                                        {{-- Liên kết đến trang chi tiết của resort cụ thể --}}
                                        <a href="{{ route('resort.show', $resort) }}"
                                           class="see-more btn btn-primary rounded-4">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="mt-5 mb-5">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center">

                                <li class="page-item">
                                    <a class="page-link" href="#">Prev</a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
