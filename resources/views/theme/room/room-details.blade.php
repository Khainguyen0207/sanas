@extends('layouts.master')

@section('content')
    <section class="container-fluid room-detail-section">
        <div class="rd-content" style="margin-top: 6rem;">
            <div class="rd-main-container mb-3">
                <a href="#" id="scroll">
                        <span class="position-relative">
                            <i class="fa-solid fa-arrow-up"></i>
                        </span>
                </a>
                <div class="rd-content">
                    <div class="rd-body-nav">
                        <ul class="nav-list">
                            <li><a href="#rd-overview">Tổng quan</a></li>
                            <li><a href="#rd-detail-info">Thông tin chi tiết</a></li>
                            <li><a href="#convenient-info">Tiện nghi</a></li>
                            <li><a href="#room-available">Đặt lịch</a></li>
                            <li><a href="#rating">Đánh giá</a></li>
                        </ul>
                    </div>
                    <div id="rd-overview">
                        <div class="ovv-title">
                            {{$resort->name}}
                            <span class="text-warning star">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                        </div>

                        <div class="rd-addr">
                            <i class="fas fa-map-marker-alt"></i> {{ $resort->address }} - <a href="" class="text-primary">Xem trên bản đồ</a>
                        </div>

                        <div class="ovv-info row">
                            @php
                                $images = json_decode($resort->images, true)
                            @endphp
                            <img src=""
                                 class="w-100 rounded-3 detail-img" alt="{{ $resort->name }}">
                            <div class="ovv-left">
                                <div class="ovv-left-top">
                                    <div class="ovv-left-fr1">
                                        <a href="#">
                                            <img src="{{ $images[0] }}" alt="">
                                        </a>
                                    </div>
                                    <div class="ovv-left-fr2">
                                        <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(1).png"
                                                        ) }}" alt=""></a>
                                        <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(2).png"
                                                        ) }}" alt=""></a>
                                        <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(3).png"
                                                        ) }}" alt=""></a>
                                        <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(4).png"
                                                        ) }}" alt=""></a>
                                    </div>
                                </div>
                                <div class="ovv-left-bot ">
                                    <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(5).png"
                                                    ) }}" alt=""></a>
                                    <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(6).png"
                                                    ) }}" alt=""></a>
                                    <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(7).png"
                                                    ) }}" alt=""></a>
                                    <a href="#"><img src="{{ asset("assets/images/theme/images/room/image%20(8).png"
                                                    ) }}" alt=""></a>
                                </div>
                            </div>
                            <div class="ovv-right">
                                <div class="ovv-map">
                                    <img src="{{ asset("assets/images/theme/images/room/image%20(22).png") }}" alt="">
                                    <div class="map-link">
                                        <a href="">Xem trên bản đồ</a>
                                    </div>
                                </div>
                                <div class="ovv-card card ">
                                    <div class="ovv-card-header card-header text-center">
                                        Tổng quan
                                    </div>
                                    <div class="ovv-card-bd card-body mb-0">
                                        <h5 class="card-title"></h5>
                                        <p class="card-text">
                                            Khám phá danh sách các khu nghỉ dưỡng cao cấp tại Việt Nam và quốc tế, nơi mang đến cho bạn trải nghiệm nghỉ dưỡng tuyệt vời, tiện nghi sang trọng, không gian yên bình và dịch vụ đẳng cấp. Tìm kiếm, so sánh và đặt phòng resort một cách dễ dàng chỉ trong vài bước.
                                        </p>

                                        <div class="ovv-contact">
                                            <a href="#" class="btn-contact btn btn-primary">Hotline:
                                                <strong>0789541561</strong></a>
                                            <a href="#" class="btn-contact btn btn-primary"><i
                                                    class="fa-solid fa-heart"></i></a>
                                            <a href="#" class="btn-contact btn btn-primary"><i
                                                    class="fa-solid fa-share-nodes"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rd-detail-info" class="mb-3 py-4">
                <h3 class="text-center mb-3">
                    Resort Hồ Tràm - Vũng Tàu
                </h3>
                <div class="di-content">
                    <div class="intro-content">
                        <div class="intro-slide">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(9).png") }}" alt="">
                        </div>

                        <div class="intro-para">
                            <p>
                                Khám phá danh sách các khu nghỉ dưỡng cao cấp tại Việt Nam và quốc tế, nơi mang đến cho bạn trải nghiệm nghỉ dưỡng tuyệt vời, tiện nghi sang trọng, không gian yên bình và dịch vụ đẳng cấp. Tìm kiếm, so sánh và đặt phòng resort một cách dễ dàng chỉ trong vài bước.
                            </p>
                            <h5>Gồm</h5>
                            <ul>
                                @foreach($resort->rooms() as $room)
                                    <li><a href="#" class="name-room">{{$room->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="produce-detail">
                        @foreach($resort->rooms() as $room)
                            <div class="room-card">
                                <div class="room-img">
                                    <img src="{{ json_decode($room->images, true)[0] }}" alt="">
                                </div>
                                <div class="room-des text-center card-text">
                                    <h5 class="card-title">Deluxe Ocean View</h5>
                                    <p>{{$room->description}}</p>
                                </div>
                                <div class="room-select text-center">
                                    <a href="" class="select-btn btn btn-primary">
                                        Xem ngay
                                    </a>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
            <div id="convenient-info" class="mb-3">
                <div class="detail-info-title">
                    Tiện ích
                </div>

                <div class="detail-board">
                    <div class="utilities-list">
                        <div class="utilities-header">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(13).png") }}" alt="">
                            <div class="utilities-list-title">
                                Tiện nghi phòng
                            </div>
                        </div>

                        <ul class="uti-list">
                            <li>TV màn hình phẳng</li>
                            <li>Bàn làm việc</li>
                            <li>Máy sấy tóc</li>
                            <li>Minibar</li>
                            <li>Tủ lạnh</li>
                            <li>Bồn tắm Jacuzzi</li>
                        </ul>
                    </div>

                    <div class="utilities-list">
                        <div class="utilities-header">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(14).png") }}" alt="">
                            <div class="utilities-list-title">
                                Tiện nghi chung
                            </div>
                        </div>

                        <ul class="uti-list">
                            <li>Hồ bơi vô cực</li>
                            <li>Phòng gym</li>
                            <li>Phòng spa</li>
                            <li>Nhà hàng</li>
                        </ul>
                    </div>

                    <div class="utilities-list">
                        <div class="utilities-header">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(15).png") }}" alt="">
                            <div class="utilities-list-title">
                                Tiện nghi công cộng
                            </div>
                        </div>

                        <ul class="uti-list">
                            <li>Bãi đậu xe</li>
                            <li>Thang máy</li>
                            <li>Két an toàn</li>
                            <li>Wifi miễn phí</li>
                        </ul>
                    </div>

                    <div class="utilities-list">
                        <div class="utilities-header">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(16).png") }}" alt="">
                            <div class="utilities-list-title">
                                Dịch vụ resort
                            </div>
                        </div>

                        <ul class="uti-list">
                            <li>Lễ tân 24h</li>
                            <li>Bảo vệ 24h</li>
                            <li>Dịch vụ giặt ủi</li>
                            <li>Dịch vụ đưa đón sân bay</li>
                        </ul>
                    </div>

                    <div class="utilities-list">
                        <div class="utilities-header">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(17).png") }}" alt="">
                            <div class="utilities-list-title">
                                Vận chuyển
                            </div>
                        </div>

                        <ul class="uti-list">
                            <li>Bãi đậu xe rộng rãi</li>
                            <li>Dịch vụ xe đưa đón</li>
                            <li>Thuê xe đạp</li>
                        </ul>
                    </div>

                    <div class="utilities-list">
                        <div class="utilities-header">
                            <img src="{{ asset("assets/images/theme/images/room/image%20(18).png") }}" alt="">
                            <div class="utilities-list-title">
                                Kết nối mạng
                            </div>
                        </div>

                        <ul class="uti-list">
                            <li>Wifi tốc độ cao</li>
                            <li>Máy tính công cộng</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="room-available" class="mb-3">
                <div class="detail-info-title">
                    Phòng có sẵn
                </div>

                <div class="room-option mb-3">
                    <div class="room-type">
                        Deluxe Ocean View
                    </div>
                    <div class="room-detail">
                        <div class="main-img row g-2 main-img main-img1">
                            <div class="biggest-img col-sm-4 col-md-6">
                                <img src="{{ asset("assets/images/theme/images/room/image%20(19).png") }}" alt=""
                                     style="width: 100%;">
                            </div>
                            <div class="col-6 col-md-3">
                                <img src="{{ asset("assets/images/theme/images/room/image%20(20).png") }}" alt=""
                                     style="width: 100%;" class="mb-2">
                                <img src="{{ asset("assets/images/theme/images/room/image%20(20).png") }}" alt=""
                                     style="width: 100%;">
                            </div>
                            <div class="room-info col-6 col-md-3">
                                <div>
                                    <i class="fa-solid fa-ruler"></i> 45.0 m²
                                </div>
                                <div>
                                    <i class="fas fa-smoking-ban"></i> Không hút thuốc
                                </div>
                                <div>
                                    <i class="fas fa-wind"></i> Điều hòa
                                </div>
                                <a href="">Xem chi tiết phòng</a>
                                <div class="room-price">
                                    <p>Giá chỉ từ</p>
                                    <p class="price1">2.500.000VNĐ/1 đêm</p>
                                </div>
                            </div>
                            <div class="room-table">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Loại Phòng</th>
                                        <th class="text-center">Sức chứa</th>
                                        <th>Tiện ích</th>
                                        <th>Giá tham khảo (VNĐ/đêm)</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <a href="#" class="name-room">Deluxe Ocean View</a>
                                        </td>
                                        <td class="text-center capacity" data-quantity="2">
                                            <i class="fas fa-user"></i>
                                            <i class="fas fa-user"></i>
                                        </td>
                                        <td>
                                                    <span class="d-flex align-items-center mb-1">
                                                        <img src="{{ asset("assets/images/theme/icon-images/tick-success.png"
                                                           ) }}" alt="tick-success" style="max-width: 24px;"
                                                             class="me-2">
                                                        <span class="utilities">Giường King, view biển, ban công
                                                            riêng</span>
                                                    </span>
                                        </td>
                                        <td class="text-end cp-res">
                                            <div class="cp-text badge text-bg-primary mb-1 coupon" data-coupon="200000">
                                                +COUPON 200K
                                            </div>
                                            <p class="price1 mb-0" data-price="2500000">2.500.000 – 3.000.000
                                            </p>
                                            <p class="text-secondary mb-0">Chưa bao gồm thuế và phí</p>
                                        </td>
                                        <td class="text-center room-pick">
                                            <button type="button" class="btn btn-primary mb-2">Chọn</button>
                                            <p class="text-danger mb-0">Còn 5 phòng</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="name-room">Suite</a>
                                        </td>
                                        <td class="text-center capacity" data-quantity="2">
                                            <i class="fas fa-user"></i> <i class="fas fa-user"></i>
                                        </td>
                                        <td>
                                                    <span class="d-flex align-items-center mb-1">
                                                        <img src="{{ asset("assets/images/theme/icon-images/tick-success.png"
                                                           ) }}" alt="tick-success" style="max-width: 24px;"
                                                             class="me-2">
                                                        <span class="utilities">Phòng khách riêng, Jacuzzi, view
                                                            biển</span>

                                                    </span>

                                        </td>
                                        <td class="text-end cp-res">
                                            <div class="cp-text badge text-bg-primary mb-1 coupon" data-coupon="300000">
                                                +COUPON 300K
                                            </div>
                                            <p class="price1 mb-0" data-price="4500000">4.500.000 – 5.500.000
                                            </p>
                                            <p class="text-secondary mb-0">Chưa bao gồm thuế và phí</p>
                                        </td>
                                        <td class="text-center room-pick">
                                            <button type="button" class="btn btn-primary mb-2">Chọn</button>
                                            <p class="text-danger mb-0">Còn 3 phòng</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="name-room">Family</a>
                                        </td>
                                        <td class="text-center capacity" data-quantity="4">
                                            <i class="fas fa-user"></i>
                                            <i class="fas fa-user"></i> <i class="fas fa-user"></i>
                                            <span class="d-inline-block">–</span>
                                            <i class="fas fa-user"></i>
                                        </td>
                                        <td>
                                                    <span class="d-flex align-items-center mb-1">
                                                        <img src="{{ asset("assets/images/theme/icon-images/tick-success.png"
                                                           ) }}" alt="tick-success" style="max-width: 24px;"
                                                             class="me-2">

                                                        <span class="utilities">2 phòng ngủ, Bếp mini, phòng
                                                            khách</span>

                                                    </span>

                                        </td>
                                        <td class="text-end cp-res">
                                            <div class="cp-text badge text-bg-primary mb-1 coupon" data-coupon="400000">
                                                +COUPON 400K
                                            </div>
                                            <p class="price1 mb-0" data-price="6000000">6.000.000 – 7.000.000
                                            </p>
                                            <p class="text-secondary mb-0">Chưa bao gồm thuế và phí</p>
                                        </td>
                                        <td class="text-center room-pick">
                                            <button type="button" class="btn btn-primary mb-2">Chọn</button>
                                            <p class="text-danger mb-0">Còn 2 phòng</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="#" class="name-room">Villa Beach Front</a>
                                        </td>
                                        <td class="text-center capacity" data-quantity="4">
                                            <i class="fas fa-user"></i> <i class="fas fa-user"></i>
                                            <span class="d-inline-block">–</span>
                                            <i class="fas fa-user"></i> <i class="fas fa-user"></i>
                                        </td>
                                        <td>
                                                    <span class="d-flex align-items-center mb-1">
                                                        <img src="{{ asset("assets/images/theme/icon-images/tick-success.png"
                                                           ) }}" alt="tick-success" style="max-width: 24px;"
                                                             class="me-2">

                                                        <span class="utilities">Hồ bơi riêng, View biển trực diện, 2
                                                            phòng ngủ</span>

                                                    </span>

                                        </td>
                                        <td class="text-end cp-res">
                                            <div class="cp-text badge text-bg-primary mb-1 coupon" data-coupon="500000">
                                                +COUPON 500K
                                            </div>
                                            <p class="price1 mb-0" data-price="8000000">8.000.000 - 10.000.000
                                            </p>
                                            <p class="text-secondary mb-0">Chưa bao gồm thuế và phí</p>
                                        </td>
                                        <td class="text-center room-pick">
                                            <button type="button" class="btn btn-primary mb-2">Chọn</button>
                                            <p class="text-danger mb-0">Còn 1 phòng</p>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rating" class="mb-3">
                <div class="detail-info-title">
                    Đánh giá chất lượng của Resort Hồ Tràm
                </div>
                <div class="rating-content">
                    <div class="rating-point p-4">
                        <p class="fs-1 mb-1">
                            9.2/10
                            <span class="text-warning star fs-5" style="margin-bottom: 30px;">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                        </p>
                        <p class="fs-3 text-primary">
                            Xuất sắc
                        </p>
                        <p class="fs-4 text-secondary mb-0">
                            Dựa trên 1,204 đánh giá từ người dùng Sanas
                        </p>
                    </div>

                    <div class="rating-detail">
                        <div class="row rate-bar">
                            <div class="rating-data fs-5">
                                <div>
                                    Dịch vụ
                                    <span class="text-warning star">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                </div>
                                <div class="side right text-primary">
                                    <div>9.8</div>
                                </div>
                            </div>

                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-5"></div>
                                </div>
                            </div>

                            <div class="rating-data fs-5">
                                <div>
                                    Đáng giá tiền
                                    <span class="text-warning star">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                </div>
                                <div class="side right text-primary">
                                    <div>9.5</div>
                                </div>
                            </div>

                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-4"></div>
                                </div>
                            </div>

                            <div class="rating-data fs-5">
                                <div>
                                    Vị trí
                                    <span class="text-warning star">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                </div>
                                <div class="side right text-primary">
                                    <div>9.7</div>
                                </div>
                            </div>

                            <div class="middle">
                                <div class="bar-container">
                                    <div class="bar-3"></div>
                                </div>
                            </div>

                            <div class="rating-data fs-5">
                                <div>
                                    Cơ sở vật chất
                                    <span class="text-warning star">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </span>
                                </div>
                                <div class="side right text-primary">
                                    <div>9.6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
