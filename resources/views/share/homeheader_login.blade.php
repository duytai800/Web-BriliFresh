@extends('welcome')
@section('home_header')
<header class="header">
    <nav class="header__navbar">
        <div></div>
        <div class=" d-flex align-items-center" style="height: 64px; width: inherit;justify-content: space-evenly;">
            <img src="{{asset('public/client/HomeAssets/asset/image/logo.png')}}" alt="" class="header__navbar-logo" />
            <h2 class="header__navbar-tittle"><span style="color: #118129; font-weight: 600;">Brili</span><span style="color: #14df41; font-weight: 600;">Fresh</span></h2>
            <form>
            {{ csrf_field() }}
                <div class="location_container">
                    @foreach ($store_selected as $key => $store_selected)
                    <div class="direction change-location-store ms-3 me-3 d-flex">
                        <i class="ti-location-pin" style="font-size:20px !important;padding-right: 8px;padding-bottom: 16px;"></i>
                        <p class="direction-detail" data-storeid="{{$store_selected->StoreID}}" type="button" style="margin-top: 5px;">{{ $store_selected->SpecificAddress}}, {{$store_selected->Ward}}, {{$store_selected->District}}, {{$store_selected->City}}</p>
                    </div>
                    @endforeach
                    <div class="list_location display_list_location">
                        <div class="location_item">
                            <ol class="location_item_list">
                                @foreach ($store as $key => $store)
                                <li type="button " class="location_item_child"><a class="location_item_child_link" type="button" data-storeid="{{$store->StoreID}}"> {{$store->SpecificAddress}}, {{$store->Ward}}, {{$store->District}}, {{$store->City}}</a></li>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </div>
            </form>

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
                            <li class="type-item"><a href="{{URL::to('/vegetable')}}" style="color: gray !important;">Rau củ</a> </li>
                        </ul>
                    </div>
                </li>
                <li class="header__navbar-item"><a href="#">Liên hệ</a></li>
            </ul>
            <ul class="header__navbar-list " style="margin-right: -52px;">
                <a href="{{URL::to('/account-info')}}" method="get">

                    @foreach ($customer as $key => $customer)
                    <li class="header__navbar-name">{{$customer->LastName}} {{$customer->FirstName}} </li>
                    <li class="header__navbar-avt"><img src="{{asset('/public/client/avatar/'. $customer->Avatar )}}" alt="" id="avartar_user"></li>
                    @endforeach
                </a>
            </ul>
            <div class="line">
            </div>
            <a href="{{URL::to('/show-cart')}}" method="post">
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