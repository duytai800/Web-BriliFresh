@extends('client.overview-product.index_fruit')
@section('fruit_header')
<section class="header scaled-header mx-lg-1 mx-sm-auto">
    <nav class="navbar navbar-expand-xl navbar-light">
        <div class="container-fluid mx-sm-auto">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="logo-name ms-auto my-lg-2">
                    <a class="navbar-brand" href="#">
                        <img id="logo" src="{{asset('public/client/OverviewProductAssets/images/newlogo.png')}}" class="position-start"></img>
                        <span class="firstName p-1">Brili<span class="lastName">Fresh</span></span>
                    </a>
                </div>

                <form class="d-flex align-item-center justify-content-center ms-auto header-form me-auto">

                    <button class="btnHome inline-block" type="button">
                        <!-- <img id="home" src="~/OverviewProductAssets/images/Homebutton.png" class="imgHome me-auto mx-sm-auto"></img> -->
                    </button>
                    <div class="direction ms-3 me-3 d-flex">
                        <i class="fa-sharp fa-solid fa-location-dot ms-2"></i>
                        <p class="direction-detail mt-3 ms-3">Chọn cửa hàng: 17 Trần Khắc Chân... <a href="" class="">Thay đổi</a> </p>
                    </div>

                    <div class="search-container">
                        <input class="form-control ms-0 search-input" type="search" placeholder="Tìm kiếm thực phẩm" aria-label="Search">
                        </input>
                    </div>
                    <div class="search-button">
                        <button name="search" id="search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>

                </form>
                <div class="navbar-nav me-auto mb-lg-0 align-item-center p-1 nav-right">
                    <div class="nav-item col-5 mt-1">
                        <a class="nav-link active" aria-current="page" href="#">Đăng nhập</a>
                    </div>
                    <div class="nav-item mt-2">
                        <p>/</p>
                    </div>
                    <div class="nav-item col-4 mt-1">
                        <a class="nav-link active" href="#">Đăng kí</a>
                    </div>
                    <!-- <div class="vr mt-2"></div> -->
                    <div class="mt-2 " style="border-left:1px solid #8F8C8C;height:25px"></div>
                    <div class="d-flex nav-item mt-2 ms-3 align-item-center justify-content-center" style="margin-top: 0px !important;">
                        <div class="i_cart_shoping">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="nav-item">
                        <div class="nav-item count_product align-item-right ms-2 mt-2">
                            <p class="bought_product pe-1">0</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</section>
@endsection