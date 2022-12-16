@extends('welcome')
@section('home_header')
<header class="header">
    <nav class="header__navbar">
        <div></div>
        <div class=" d-flex align-items-center" style="height: 64px; width: inherit;justify-content: space-evenly;">
            <img src="{{asset('public/client/HomeAssets/asset/image/logo.png')}}" alt="" class="header__navbar-logo" />
            <h2 class="header__navbar-tittle"><span style="color: #118129; font-weight: 600;">Brili</span><span style="color: #14df41; font-weight: 600;">Fresh</span></h2>
            <div class="location_container">
                <div class="direction ms-3 me-3 d-flex">
                    <i class="ti-location-pin" style="font-size:20px !important;padding-right: 8px;padding-bottom: 16px;"></i>
                    <p class="direction-detail" style="margin-top: 5px;">Chọn cửa hàng: 17 Trần Khắc Chân... <a href="" class="">Thay đổi</a> </p>
                </div>
            </div>
            <ul class="header__navbar-list">
                <li class="header__navbar-item"><a href="#">Trang chủ</a></li>
                <li class="header__navbar-item"><a href="#">Giới thiệu</a></li>
                <li class="header__navbar-item">
                    <a href="#">Sản phẩm</a>
                    <ti class="arrow-list-item ti-angle-down"></ti>
                    <div class="row sub-nav">
                        <ul class="nav-list-type-item">
                            <li class="type-item"><a href="{{URL::to('/fish-and-meat')}}" style="color: gray !important;">Thịt cá</a></li>
                            <li class="type-item"><a href="{{URL::to('/fruit')}}" style="color: gray !important;">Trái cây 4 mùa</a></li>
                            <li class="type-item"><a href="{{URL::to('/vegetable')}}" style="color: gray !important;">Rau củ</a></li>
                        </ul>
                    </div>
                </li>
                <li class="header__navbar-item"><a href="#">Liên hệ</a></li>
            </ul>
            <ul class="header__navbar-list " style="margin-right: -52px;">
                <li class="header__navbar-register">Đăng ký /</li>
                <li class="header__navbar-login"> <a href="{{URL::to('/login')}}">Đăng nhập</a></li>
            </ul>
            <div class="line">
            </div>
            <a href="{{URL::to('/save-cart')}}">
                <div class="header__cart " style="margin-left: -32px;">

                    <i class="ti-shopping-cart"></i>
                    <div class="header__cart-number">
                        <p class="number-item">
                            9
                        </p>
                    </div>

                </div>
            </a>
        </div>
        <div style="width: 20px;"></div>
    </nav>
</header>

@endsection