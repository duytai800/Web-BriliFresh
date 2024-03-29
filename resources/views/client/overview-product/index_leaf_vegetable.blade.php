<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('public/client/OverviewProductAssets/List/List_Base.css')}}" />
    <link rel="stylesheet" href="{{asset('public/client/OverviewProductAssets/Vegetable/List_Main_Vegetable.css')}}" />
    <link rel="stylesheet" href="{{asset('public/client/OverviewProductAssets/Vegetable/Vegetable_Header.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('public/client/OverviewProductAssets/asset/fonts/themify-icons/themify-icons.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body>
    <!-- Header no login -->
    @yield('vegetable_header')
    <!-- Header no login -->

    <!-- Content -->
    <div class="main container">
        <div class="header container"></div>
        <div class="container">
            <div class="sliderr">
                <img src="{{asset('public/client/OverviewProductAssets/images/slider3.png')}}" alt="" class="slider-img" />
            </div>
            <div class="location-bar" style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Sản phẩm</a></li>
                    <li class="breadcrumb-item"><a href="">Rau củ</a></li>
                    <li class="breadcrumb-item"><a href="">Rau lá</a></li>
                </ol>
            </div>
            <div class="products-content">
                <div class="row" style="width: 105%">
                    <div class="filter-products col-3">
                        <div class="filter-heading">
                            <p class="filter-heading-item">Danh mục sản phẩm</p>
                        </div>
                        <div class="filter-heading-icon">
                            <ti class="ti-angle-down ti-angle-down-icon"> </ti>
                        </div>
                        <div class="filter-heading-line"></div>
                        <div class="filter-heading-check">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="flexCheckDefault"> Deal sốc </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" checked />
                                <label class="form-check-label" for="flexCheckChecked"> Thịt mới về </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" />
                                <label class="form-check-label" for="flexCheckDefault"> Sản phẩm của Brili </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="" checked />
                                <label class="form-check-label" for="flexCheckChecked"> Hàng nhập khẩu </label>
                            </div>
                        </div>
                        <div class="filter-heading-price">
                            <div class="filter-heading">
                                <p class="filter-heading-item">Giá</p>
                            </div>
                            <div class="filter-heading-icon-2">
                                <ti class="ti-angle-down ti-angle-down-icon"> </ti>
                            </div>

                            <div class="filter-heading-line"></div>
                            <div class="wrapper">
                                <div class="slider">
                                    <div class="progress"></div>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="range-min" min="0" max="500000" value="110000" step="10000" />
                                    <input type="range" class="range-max" min="0" max="500000" value="390000" step="10000" />
                                </div>
                            </div>
                            <div class="price-input">
                                <div class="field">
                                    <input type="currency" class="input-min" value="110.000" disabled />
                                </div>
                                <div class="field">
                                    <input type="currency" class="input-max" value="390.000" disabled />
                                </div>
                            </div>
                            <div class="filter-info-price">
                                <p class="info-price">Giá: 0 - 500.000 VNĐ</p>
                            </div>
                        </div>
                        <div class="filter-check-price">
                            <div class="filter-info-price-check">
                                <p class="info-price-check">Sắp xếp theo</p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="check-price" value="" id="" />
                                <label class="form-check-label" for="flexCheckDefault"> Giá tăng dần </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="check-price" value="" id="" checked />
                                <label class="form-check-label" for="flexCheckChecked"> Giá giảm dần </label>
                            </div>
                        </div>
                    </div>

                    <div class="list-products col-9 row d-flex">
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <a class="nav-link" href="{{URL::to('/vegetable/vegetable/detail-vegetable')}}">
                                    <img src="{{asset('public/client/ImageProduct/is_avth2s1v4qc.png')}}" alt="" class="product-item-img-child" />
                                </a>
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-item col-3">
                            <div class="product-item-img">
                                <img src="~/ImageProduct/kiwi1.png" alt="" class="product-item-img-child" />
                            </div>
                            <div class="product-item-tittle">
                                <p class="product-item-tittle-child">Thăn lưng bò mỹ (200g)</p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="product-item-price">
                                    <p class="product-item-price-child">99,000</p>
                                </div>
                                <div class="product-item-add">
                                    <button class="product-item-add-btn">+</button>
                                </div>
                            </div>
                            <div class="d-flex ">
                                <div class="product-item-price-dis">
                                    <p class="product-item-price-dis-child">199,000</p>
                                </div>
                                <div class="dis-rate">
                                    <p class="dis-rate-child">-20%</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products-pagination d-flex justify-content-end">
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a href="#" class="active">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">...</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->

    <!-- Foooter-->
    @yield('home_footer')
    <!-- Foooter-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('public/client/OverviewProductAssets/List/List.js')}}"></script>
</body>

</html>