@extends('layouts.master')

@section('content')
    <section class="hero-section">
        <div class="hero-banner">
            <img src="{{ asset('assets/images/theme/images/homepage/bg.png') }}" alt="Background" class="hero-banner-img">
            <div class="hero-content">
                <h1 class="title mb-4 fw-bold">Sanas</h1>
                <p class="lead fw-semibold" style="margin-bottom: 80px;">Khám phá thế giới với dịch vụ đặt phòng
                    <br> và du lịch chuyên nghiệp
                </p>
                <a href="#" class="btn btn-lg mb-4 button-has-icon">
                    <span>ĐẶT NGAY</span>
                    <span>
                                <img src="{{ asset('assets/images/theme/icon-images/final-arrow.png') }}" alt="Arrow">
                            </span>
                </a>
                <a href="#" class="fst-italic d-block text-white fw-bold">https://sanas.com</a>
            </div>
        </div>
    </section>
    <section class="homepage-section">
        <form class="booking-form">
            <div class="form-group">
                <i class="fa fa-map-marker-alt"></i>
                <input type="text" placeholder="Địa điểm..." required/>
            </div>

            <div class="two-columns">
                <div class="form-group">
                    <i class="fa fa-calendar-alt"></i>
                    <div class="label-inside">Nhận phòng:</div>
                    <input type="date" placeholder="Thời gian nhận phòng"/>
                </div>

                <div class="form-group">
                    <i class="fa-solid fa-calendar-alt"></i>
                    <div class="label-inside">Trả phòng:</div>
                    <input type="date" placeholder="Thời gian trả phòng"/>
                </div>
            </div>

            <div class="guest-selector">
                <div class="selector-toggle" onclick="toggleGuestBox()">
                    <i class="fa fa-user" style="font-size: 20px; color: #1da1f2;"></i>
                    <span id="guestSummary">2 Người lớn, 0 Trẻ em, 1 Phòng</span>
                    <i class="fa fa-chevron-down arrow"></i>
                </div>

                <div class="guest-box" id="guestBox" style="display: none;">
                    <div class="row">
                                <span class="mb-2"><i class="fa fa-user" style="font-size: 20px; color: #1da1f2;"></i> Người
                                    lớn</span>
                        <div class="controls">
                            <button type="button" onclick="changeValue('adults', -1)">−</button>
                            <span id="adults">2</span>
                            <button type="button" onclick="changeValue('adults', 1)">+</button>
                        </div>
                    </div>

                    <div class="row">
                        <span class="mb-2"><i class="fa fa-child" style="font-size: 20px; color: #1da1f2;"></i> Trẻ em</span>
                        <div class="controls">
                            <button type="button" onclick="changeValue('children', -1)">−</button>
                            <span id="children">0</span>
                            <button type="button" onclick="changeValue('children', 1)">+</button>
                        </div>
                    </div>
                    <div id="childrenAges" class="children-ages"></div>

                    <div class="row">
                        <span class="mb-2"><i class="fa fa-bed" style="font-size: 20px; color: #1da1f2;"></i> Phòng</span>
                        <div class="controls">
                            <button type="button" onclick="changeValue('rooms', -1)">−</button>
                            <span id="rooms">1</span>
                            <button type="button" onclick="changeValue('rooms', 1)">+</button>
                        </div>
                    </div>

                    <div class="done-wrapper">
                        <div class="done" onclick="toggleGuestBox()">Xong</div>
                    </div>
                </div>
            </div>
            <button type="submit" class="search-btn"><i class="fa fa-search"></i> Tìm kiếm</button>
        </form>

        <div class="container-slider">
            <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                <h1 class="title" style="margin: 0 10px 0 0;">Du lịch Việt Nam</h1>
                <img src="https://flagcdn.com/w40/vn.png" alt="Cờ Việt Nam" width="30" height="20">
            </div>

            <div class="slider slider-right mb-4">
                <div class="slide-track">
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/tphcm.jpg') }}" class="card-img" style="--i:1;"
                             alt="Tp.HCM">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Tp.Hồ Chí Minh</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/phuquoc.jpg') }}" class="card-img" style="--i:2;"
                             alt="Phú Quốc">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Phú Quốc</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/cantho.jpg') }}" class="card-img" style="--i:3;"
                             alt="Cần Thơ">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Cần Thơ</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/haiphong.jpg') }}" class="card-img" style="--i:4;"
                             alt="Hải Phòng">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Hải Phòng</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/hue.jpg') }}" class="card-img" style="--i:5;"
                             alt="Huế">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Huế</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/hanoi.jpg') }}" class="card-img" style="--i:6;"
                             alt="Hà Nội">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Hà Nội</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/nhatrang.jpg') }}" class="card-img" style="--i:7;"
                             alt="Nha Trang">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Nha Trang</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/halong.jpg') }}" class="card-img" style="--i:8;"
                             alt="Hạ Long">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Hạ Long</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/danang.jpg') }}" class="card-img" style="--i:9;"
                             alt="Đà Nẵng">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Đà Nẵng</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/phanthiet.jpg') }}" class="card-img" style="--i:10;"
                             alt="Phan Thiết">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Phan Thiết</h5>
                        </div>
                    </div>
                    <div class="card destination">
                        <img src="{{ asset('assets/images/theme/images/homepage/hoian.jpg') }}" class="card-img" style="--i:11;"
                             alt="Hội An">
                        <div class="card-img-overlay d-flex align-items-end justify-content-center">
                            <h5 class="card-title text-white fw-bold">Hội An</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all">
                <a href="#" class="btn-view-all">
                    Xem tất cả <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <h1 class="title" style="margin-bottom: 10px;">Du lịch khắp thế giới</h1>
        <div class="city-grid">
            <div class="city-card"
                 style="--i:0; background-image: url('{{ asset('assets/images/theme/images/homepage/hanquoc.jpg') }}');">
                <span>Hàn Quốc</span>
            </div>
            <div class="city-card"
                 style="--i:1; background-image: url('{{ asset('assets/images/theme/images/homepage/nhât.jpg') }}');">
                <span>Nhật Bản</span>
            </div>
            <div class="city-card"
                 style="--i:2; background-image: url('{{ asset('assets/images/theme/images/homepage/singapore.jpg') }}');">
                <span>Singapore</span>
            </div>
            <div class="city-card"
                 style="--i:3; background-image: url('{{ asset('assets/images/theme/images/homepage/thailan.jpg') }}');">
                        <span>Thái
                            Lan</span>
            </div>
            <div class="city-card"
                 style="--i:4; background-image: url('{{ asset('assets/images/theme/images/homepage/trungquoc.jpg') }}');">
                        <span>Trung
                            Quốc</span></div>
            <div class="city-card"
                 style="--i:5; background-image: url('{{ asset('assets/images/theme/images/homepage/dubai.jpg') }}');">
                <span>Dubai</span>
            </div>
            <div class="city-card"
                 style="--i:6; background-image: url('{{ asset("assets/images/theme/images/homepage/hongkong.jpg") }}');">
                        <span>Hong
                            Kong</span></div>
            <div class=" city-card
                "
                 style="--i:7; background-image: url('{{ asset('assets/images/theme/images/homepage/uc.jpg') }}');">
                <span>Australia</span>
            </div>
        </div>
        <div class="view-all">
            <a href="#" class="btn-view-all">
                Xem tất cả <i class="fa fa-arrow-right"></i>
            </a>
        </div>

        <h1 class="title">Chỗ nghỉ nổi bật được đề xuất cho bạn</h1>
        <section class="housing-section">
            <div class="card-container">
                <div class="row">
                    <div class="col-lg-4 g-3 col-md-6 col-12">
                        <div class="card rounded-4">
                            <div class="p-3"><img src="{{ asset('assets/images/theme/images/room/image.png') }}"
                                                  class="w-100 rounded-3 detail-img" alt="InterContinental Danang">
                            </div>

                            <div class="card-body p-3 pt-0">
                                <h6 class="card-title fw-bold">Resort Hồ Tràm - Vũng Tàu</h6>
                                <div class="p-3 pt-0 pb-0">
                                    <p class="mb-1 text-info fw-bold text-decoration-underline"><i
                                            class="fa-solid fa-location-dot"></i>
                                        Đường Bình Châu, Xã Bình Châu, Huyện Xuyên Mộc, Tỉnh Bà Rịa - Vũng Tàu</p>
                                    <ul class="list-unstyled text-success list-option-benefit">
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
                                    <p class="fw-bold" style="color: #f47c0e;">Từ: 1,500,000 VNĐ</p>
                                </div>
                                <div class="text-end">
                                    <a href="rooms/vietnam-resort.html" class="see-more btn btn-primary rounded-4">Xem
                                        chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 g-3 col-md-6 col-12">
                        <div class="card rounded-4">
                            <div class="p-3"><img src="{{ asset('assets/images/theme/images/room/image.png') }}"
                                                  class="w-100 rounded-3 detail-img" alt="InterContinental Danang">
                            </div>

                            <div class="card-body p-3 pt-0">
                                <h6 class="card-title fw-bold">InterContinental Danang Sun Peninsula Resort</h6>
                                <div class="p-3 pt-0 pb-0">
                                    <p class="mb-1 text-info fw-bold text-decoration-underline"><i
                                            class="fa-solid fa-location-dot"></i>
                                        Bán đảo Sơn Trà, Đà Nẵng</p>
                                    <ul class="list-unstyled text-success list-option-benefit">
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
                                    <p class="fw-bold" style="color: #f47c0e;">Từ: 3,500,000 VNĐ</p>
                                </div>
                                <div class="text-end">
                                    <a href="rooms/room-detail-intercontinental.html"
                                       class="see-more btn btn-primary rounded-4">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 g-3 col-md-6 col-12">
                        <div class="card rounded-4">
                            <div class="p-3"><img src="{{ asset('assets/images/theme/images/room/image (1).png') }}"
                                                  class="w-100 rounded-3 detail-img" alt="Amanoi Resort"></div>

                            <div class="card-body p-3 pt-0">
                                <h6 class="card-title fw-bold">Amanoi Resort</h6>
                                <div class="p-3 pt-0 pb-0">
                                    <p class="mb-1 text-info fw-bold text-decoration-underline"><i
                                            class="fa-solid fa-location-dot"></i>
                                        Vịnh Vĩnh Hy, Ninh Thuận</p>
                                    <ul class="list-unstyled text-success list-option-benefit">
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
                                    <p class="fw-bold" style="color: #f47c0e;">Từ: 4,500,000 VNĐ</p>
                                </div>
                                <div class="text-end">
                                    <a href="rooms/room-detail-amanoi.html"
                                       class="see-more btn btn-primary rounded-4">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 g-3 col-md-6 col-12">
                        <div class="card rounded-4">
                            <div class="p-3"><img src="{{ asset('assets/images/theme/images/room/image (2).png') }}"
                                                  class="w-100 rounded-3 detail-img" alt="Furama Resort"></div>

                            <div class="card-body p-3 pt-0">
                                <h6 class="card-title fw-bold">Furama Resort Đà Nẵng</h6>
                                <div class="p-3 pt-0 pb-0">
                                    <p class="mb-1 text-info fw-bold text-decoration-underline"><i
                                            class="fa-solid fa-location-dot"></i>
                                        Bãi biển Đà Nẵng</p>
                                    <ul class="list-unstyled text-success list-option-benefit">
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
                                    <p class="fw-bold" style="color: #f47c0e;">Từ: 2,800,000 VNĐ</p>
                                </div>
                                <div class="text-end">
                                    <a href="rooms/room-detail-furama.html"
                                       class="see-more btn btn-primary rounded-4">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 g-3 col-md-6 col-12">
                        <div class="card rounded-4">
                            <div class="p-3"><img src="{{ asset('assets/images/theme/images/room/image (3).png') }}"
                                                  class="w-100 rounded-3 detail-img" alt="Vinpearl Resort"></div>

                            <div class="card-body p-3 pt-0">
                                <h6 class="card-title fw-bold">Vinpearl Resort & Spa Phú Quốc</h6>
                                <div class="p-3 pt-0 pb-0">
                                    <p class="mb-1 text-info fw-bold text-decoration-underline"><i
                                            class="fa-solid fa-location-dot"></i>
                                        Bãi Dài, Phú Quốc</p>
                                    <ul class="list-unstyled text-success list-option-benefit">
                                        <li class="button-has-icon">
                                                    <span>
                                                        <img src="{{ asset('assets/images/theme/icon-images/tick-success.png') }}"
                                                             alt="tick-success">
                                                    </span>
                                            <span class="fw-bold">Miễn phí hủy</span>
                                        </li>
                                        <li class="button-has-icon">
                                                    <span>
                                                        <img src="{{ asset('assets/images/theme/icon-images/xmark.png') }}"
                                                             alt="tick-success">
                                                    </span>
                                            <span class="fw-bold text-danger">Không cọc trước</span>
                                        </li>
                                    </ul>
                                    <p class="fw-bold" style="color: #f47c0e;">Từ: 3,200,000 VNĐ</p>
                                </div>
                                <div class="text-end">
                                    <a href="rooms/room-detail-vinpearl.html"
                                       class="see-more btn btn-primary rounded-4">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 g-3 col-md-6 col-12">
                        <div class="card rounded-4">
                            <div class="p-3"><img src="{{ asset('assets/images/theme/images/room/image (4).png') }}"
                                                  class="w-100 rounded-3 detail-img" alt="Six Senses"></div>

                            <div class="card-body p-3 pt-0">
                                <h6 class="card-title fw-bold">Six Senses Ninh Van Bay</h6>
                                <div class="p-3 pt-0 pb-0">
                                    <p class="mb-1 text-info fw-bold text-decoration-underline"><i
                                            class="fa-solid fa-location-dot"></i>
                                        Vịnh Ninh Vân, Nha Trang</p>
                                    <ul class="list-unstyled text-success list-option-benefit">
                                        <li class="button-has-icon">
                                                    <span>
                                                        <img src="{{ asset('assets/images/theme/icon-images/xmark.png') }}"
                                                             alt="tick-success">
                                                    </span>
                                            <span class="fw-bold text-danger">Miễn phí hủy</span>
                                        </li>
                                        <li class="button-has-icon">
                                                    <span>
                                                        <img src="{{ asset('assets/images/theme/icon-images/xmark.png') }}"
                                                             alt="tick-success">
                                                    </span>
                                            <span class="fw-bold text-danger">Không cọc trước</span>
                                        </li>
                                    </ul>
                                    <p class="fw-bold" style="color: #f47c0e;">Từ: 5,000,000 VNĐ</p>
                                </div>
                                <div class="text-end">
                                    <a href="rooms/room-detail-sixsenses.html"
                                       class="see-more btn btn-primary rounded-4">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-all">
                <a href="rooms.html" class="btn-view-all">
                    Xem tất cả <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </section>

        <div class="promo-section">
            <div class="promo-title">Chiến dịch khuyến mại siêu hấp dẫn</div>
            <a class="promo-link" href="#">Xem tất cả <i class="fa fa-arrow-right"></i></a>
        </div>

        <div class="promo-wrapper">
            <div class="promo-container">
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai1.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai2.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai3.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai4.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai5.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai6.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai7.png') }}" alt="">
                </div>
                <div class="promo-card">
                    <img src="{{ asset('assets/images/theme/images/homepage/uudai8.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="usp-container">
            <div class="usp-item">
                <img
                    src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/10/1494407528373-a0e2c450b5cfac244d687d6fa8f5dd98.png?tr=h-150,q-75,w-150"
                    alt="Ưu đãi ứng dụng">
                <div class="usp-text">
                    <h3>Booking phòng giá rẻ mỗi ngày với nhiều ưu đãi đặc biệt</h3>
                    <p>Lụa chọn đặt phòng để nhận ngay giá tốt nhất với các khuyến mãi tuyệt vời!</p>
                </div>
            </div>

            <div class="usp-item">
                <img
                    src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/10/1494407536280-ddcb70cab4907fa78468540ba722d25b.png?tr=h-150,q-75,w-150"
                    alt="Thanh toán linh hoạt">
                <div class="usp-text">
                    <h3>Phương thức thanh toán an toàn và linh hoạt</h3>
                    <p>Giao dịch trực tuyến bảo mật, an toàn, nhanh chóng và tiện lợi với nhiều phương thức như
                        thanh toán trực tiếp
                        hay trực tuyến qua ngân hàng. Không phí giao dịch.</p>
                </div>
            </div>

            <div class="usp-item">
                <img
                    src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/10/1494407541562-61b4438f5439c253d872e70dd7633791.png?tr=h-150,q-75,w-150"
                    alt="Hỗ trợ khách hàng">
                <div class="usp-text">
                    <h3>Hỗ trợ khách hàng 24/7</h3>
                    <p>Đội ngũ nhân viên luôn sẵn sàng hỗ trợ khách hàng trong quá trình đặt phòng.</p>
                </div>
            </div>

            <div class="usp-item">
                <img
                    src="https://ik.imagekit.io/tvlk/image/imageResource/2017/05/10/1494407562736-ea624be44aec195feffac615d37ab492.png?tr=h-150,q-75,w-150"
                    alt="Đánh giá thực tế">
                <div class="usp-text">
                    <h3>Khách thực, đánh giá thực</h3>
                    <p>Hơn 10.000.000 đánh giá, bình chọn đã được xác thực từ du khách sẽ giúp bạn đưa ra lựa
                        chọn
                        đúng đắn.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
