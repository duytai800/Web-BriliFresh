<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="{{asset('public/client/Overviewproductassets/fishandmeat/detailfishandmeat.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/OverviewProductAssets/FishAndMeat/FishAndMeat_Header.css')}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('public/client/Overviewproductassets\fishandmeat\detailfishandmeat.js')}}">

</head>

<body>
    <!-- Header no login -->
    @yield('fish_and_meat_header')
    <!-- Header no login -->

    <!-- Content -->
    @foreach($beef_goat_products as $key =>$beef_goat_product)
    <section class="directory mt-3">
        <nav class="navbar navbar-expand-xl navbar-light ">
            <div class="container-fluid ms-5">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="{{URL::to('/fish-and-meat')}}">Thịt cá</a></li>
                        <li class="breadcrumb-item"><a href="{{URL::to('/fish-and-meat/beef-goat')}}">Bò dê</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$beef_goat_product->ProName}}</li>
                    </ol>
                </nav>
            </div>
        </nav>
    </section>
    <section class="product scaled-product">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-item-center mx-auto">
                <div class="product-imgs justify-content-center aligns-items-center ms-0">
                    <div class="row product-img-main">
                        <img src="{{URL::to('../public/upload/product/'.$beef_goat_product->ImgData)}}" alt="" id="img-main">
                    </div>
                    <div class="product-img-album align-items-center">
                        <ul class="d-flex img-album-list">
                            <li class="">
                                <img src="{{URL::to('../public/upload/product/'.$des_img_0)}}" alt="" id="img-album-1">
                            </li>
                            <li class="">
                                <img src="{{URL::to('../public/upload/product/'.$des_img_1)}}" alt="" id="img-album-2">
                            </li>
                            <li class="">
                                <img src="{{URL::to('../public/upload/product/'.$des_img_2)}}" alt="" id="img-album-3">
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="recommended-eating">
                        <p class="title">Gợi ý món ăn</p>
                        <p class="name">1. Thịt ba rọi chiên nước mắm</p>
                        <p class="title-table">Chuẩn bị nguyên liệu</p>
                        <table class="mx-3 my-3 table-instruct ">
                            <thead>
                                <td>Khẩu phần</td>
                                <td>Thời gian chuẩn bị</td>
                                <td>Thời gian nấu</td>
                                <td>Độ khó</td>
                            </thead>
                            <tr class="content">
                                <td>4 người</td>
                                <td>25 phút</td>
                                <td>30 phút</td>
                                <td>Dễ</td>
                            </tr>
                        </table>
                            <ul>
                                <li>500 gram thịt ba rọi</li>
                                <li>5 trái ớt</li>
                                <li>4 – 5 tép tỏi</li>
                                <li>4 – 5 tép hành khô</li>
                                <li>2 nhánh gừng</li>
                                <li>2 nhánh sả</li>
                                <li>100 gram bột chiên giòn</li>
                                <li>Gia vị: hạt nêm, muối, mì chính, nước mắm, dầu ăn</li>
                            </ul>
                            <span><p class="title-table">Cách làm :</p>
                                <div class="how ms-2">
                                    <ul>
                                        <li>Sả bỏ phần vỏ già bên ngoài, đập dập rồi băm nhỏ. Tỏi, ớt băm nhỏ.</li>
                                        <li>Thịt ba chỉ xát muối rửa sạch. Luộc thịt với gừng và 1 muỗng cà phê muối trong 5 phút. Vớt ra để ráo, cắt thành miếng vừa ăn và dùng dao khứa nhiều đường lên phần da (giúp khi chiên da sẽ giòn hơn).</li>
                                        <li>Ướp thịt với sả, tỏi, ớt băm nhỏ, 1 thìa canh nước mắm, 1 thìa cà phê đường, ½ thìa cà phê mì chính, ½ thìa cà phê hạt nêm. Ướp trong 20 phút.</li>
                                        <li>Chiên thịt: lăn thịt đã ướp vào bột chiên giòn và cho vào nồi dầu đã sôi. Chiên thịt đến khi chín đều 2 mặt là được.</li>
                                        <li>Sau khi chiên xong thì tiếp tục dùng chảo đó (chắt bớt dầu ra nếu còn nhiều), phi thơm số hành, tỏi, ớt còn lại. Cho thêm 1 thìa canh nước mắm và 1 thìa canh đường vào khuấy đều. Cho thịt đã chiên vào đảo với sốt trong khoảng 3 – 4 phút. Khi ăn thì thái miếng, ăn kèm rau sống và cơm.</li>
                                    </ul>
                                </div>
                            </span>
                        </table>
                    </div> -->
                </div>
                <div class="product-info justify-content-center align-items-center">
                    <div class="product-info-title">
                        {{$beef_goat_product->ProName}} ({{$beef_goat_product->Unit}})
                    </div>
                    <div class="product-info-star d-flex justify-content-left align-items-left mb-auto ">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="ratings">
                                <i class="fa fa-star    "></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star rating-color"></i>
                                <i class="fa fa-star"></i>
                            </div>&nbsp;
                            (Xem&nbsp;<span comment-count> 143 </span>&nbsp;đánh giá)
                            &nbsp;<div class="mt-2" style="border-left:1px solid #8F8C8C;height:20px"></div>&nbsp;
                            &nbsp;Đã bán&nbsp;<span sold-count>5000</span>+
                        </div>
                    </div>
                    <div class="product-info-cost d-flex  align-items-center mt-3 me-auto">
                        <div class="product-info-cost-detail ps-4 pt-1 pb-2 me-auto justify-content-center align-items-center">
                            <div class="new-cost">
                                <span value="80000">
                                    <?php
                                    $value_discount_product = $beef_goat_product->value_discount_product;
                                    $beef_goat_product_price = $beef_goat_product->Price;
                                    if ($value_discount_product) {
                                        $beef_goat_product_price = $beef_goat_product_price * (1 - $value_discount_product);
                                        //echo $beef_goat_product_price;
                                        $beef_goat_product_price = number_format($beef_goat_product_price);
                                        echo  $beef_goat_product_price . 'đ';
                                    } else {
                                        $beef_goat_product_price = number_format($beef_goat_product_price);
                                        echo  $beef_goat_product_price . 'đ';
                                    }
                                    ?>
                                </span>
                            </div>

                            <div class="old-dis-cost d-flex">
                                <span class="old-cost me-2" value="100000">
                                    <?php
                                    $value_discount_product = $beef_goat_product->value_discount_product;
                                    $beef_goat_product_price = $beef_goat_product->Price;
                                    if ($value_discount_product) {
                                        $beef_goat_product_price = number_format($beef_goat_product_price) . " VNĐ";
                                        echo  $beef_goat_product_price;
                                    } else {
                                        echo " ";
                                    }
                                    ?>
                                </span>
                                <span class="dis-cost" value="20">
                                    <?php
                                    $value_discount_product = $beef_goat_product->value_discount_product * 100;
                                    if ($value_discount_product) {
                                        echo  '-' . $value_discount_product . '%';
                                    } else echo " ";
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="countdown-sale align-items-center justify-content-center me-2 ">
                            @if ($beef_goat_product->value_discount_product)
                            <div class="info mx-2 my-auto">
                                <span>Kết thúc sau</span>
                            </div>
                            <div class="count-down-sale d-flex mt-1 mb-1">
                                <div class="hours-countdown box-countdown cd-bg mx-1">
                                    <div class="countdown-num mx-auto">
                                        06
                                    </div>
                                </div>
                                <div class="count-down-sale-split">:</div>
                                <div class="minute-countdown box-countdown cd-bg mx-1">
                                    <div class="countdown-num mx-auto">
                                        06
                                    </div>
                                </div>
                                <div class="count-down-sale-split">:</div>
                                <div class="second-countdown box-countdown cd-bg mx-1">
                                    <div class="countdown-num mx-auto ">
                                        06
                                    </div>
                                </div>
                            </div>
                            <div class="info mx-2 my-auto">
                                <span>Vừa mở bán</span>
                            </div>
                            @else
                            @endif

                        </div>
                    </div>
                    <div class="c-title mt-3">
                        <span>Số lượng</span>
                    </div>
                    <form action="{{URL::to('/save-cart')}}" method="post">
                        {{csrf_field()}}
                        <div class="row product-quantity ">
                            <div class="col-xl-3 ">
                                <div class="input-group">
                                    <div class="input-group-btn justify-content-end align-items-center ">
                                        <button type="button" class="quantity-left-minus btn btn-default btn-number" data-type="minus" data-field="">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>

                                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                    <div class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-default btn-number " data-type="plus" data-field="">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex mt-4">

                            <div class="btn-buy me-2">
                                <input type="hidden" name="pro_id_hidden" value="{{$beef_goat_product->ProID}}">
                                <!-- <input type="submit" id="btn-buy" value="CHỌN MUA"></input> -->
                                <button id="btn-buy" type="button" name="add-to-cart">CHỌN MUA</button>
                            </div>


                            <div class="btn-chat me-4">

                                <input type="button" id="btn-chat" value="CHAT"></input>

                            </div>

                        </div>
                    </form>

                    <div class="cr-info mt-5">
                        <!-- <div class="brand-info d-flex col-4">
                            <span class="name brand-name me-auto">Danh mục:</span>
                            <span id="content">{{$beef_goat_product->Source}}</span>
                        </div> -->
                        <div class="country d-flex col-4">
                            <span class="name country-name me-auto">Danh mục:</span>
                            <span id="content">{{$beef_goat_product->Source}}</span>
                        </div>
                    </div>
                    <div class="description mt-3 mb-auto">
                        <p class="description-title">
                            Khách hàng được hoàn tiền 100%, không phải trả lại hàng nếu không hài lòng với chất lượng của sản phẩm này.

                            Mô tả sản phẩm {{$beef_goat_product->ProName}}:
                            <button class="more-desc">Xem ngay</button>
                        </p>

                        <p class="description-body">
                            <li>Với sản phẩm tươi sống, trọng lượng thực tế có thể chênh lệch khoảng 10%</li>
                        </p>
                        <p class="description-title">

                        </p>
                        <p class="description-body">
                            {{$beef_goat_product->Des}}
                            <button class="less-desc">Rút gọn</button>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>


    <!-- Gợi ý cho bạn -->
    <section class="items-recommended scaled-recommended justify-content-center align-items-center">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center text-align-center scale-container">
                <div class="">
                    <div class="items-recommended-bar d-flex align-items-center">
                        <p class="items-recommended-title col-2 pt-3 ms-3">
                            Gợi ý cho bạn
                        </p>
                        <div class="more-items text-center align-item-center me-3">
                            <a href="{{URL::to('/fish-and-meat/beef-goat')}}" class="p-more-item">Xem thêm <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="items-container mt-5 ms-3">
            <div class="d-flex justify-content-between align-items-center text-align-center ms-0 p-0 list-items">
                <div class="list-products col-12 row d-flex" style="justify-content: space-evenly; margin: 0px;">
                    @foreach($related_beef_goat_products as $key =>$related_beef_goat_product)
                    <div class="product-item col-2">
                        <a class="nav-link" href="{{URL::to('/fish-and-meat/beef-goat/' .$related_beef_goat_product->ProID)}}">

                            <div class="product-item-img">
                                <img src="{{URL::to('../public/upload/product/'.$related_beef_goat_product->ImgData)}}" alt="" class="product-item-img-child" />
                            </div>
                        </a>

                        <div class="product-item-tittle">
                            <p class="product-item-tittle-child">{{$related_beef_goat_product->ProName}} ({{$related_beef_goat_product->Unit}} )</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="product-item-price">
                                <p class="product-item-price-child">
                                    <!-- hiển thị giá sản phẩm sau bước tính giảm giá (nếu Có) -->
                                    <?php
                                    $value_discount_product = $related_beef_goat_product->value_discount_product;
                                    $beef_goat_product_price = $related_beef_goat_product->Price;
                                    if ($value_discount_product) {
                                        $beef_goat_product_price = $beef_goat_product_price * (1 - $value_discount_product);
                                        $beef_goat_product_price = number_format($beef_goat_product_price);
                                        echo  $beef_goat_product_price . ' VNĐ';
                                    } else {
                                        $beef_goat_product_price = number_format($beef_goat_product_price);
                                        echo  $beef_goat_product_price . ' VNĐ';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="product-item-add">
                                <button class="product-item-add-btn">+</button>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <div class="product-item-price-dis">
                                <p class="product-item-price-dis-child">
                                    <!-- Hiển thị giá gốc bị gạch ngang nếu có giảm giá -->
                                    <?php
                                    $value_discount_product = $related_beef_goat_product->value_discount_product;
                                    $beef_goat_product_price = $related_beef_goat_product->Price;
                                    if ($value_discount_product) {
                                        $beef_goat_product_price = number_format($beef_goat_product_price);
                                        echo  $beef_goat_product_price;
                                    } else {
                                        echo " ";
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="dis-rate">
                                <p class="dis-rate-child">
                                    <?php
                                    $value_discount_product = $related_beef_goat_product->value_discount_product;
                                    if ($value_discount_product) {
                                        echo  '- ' . $value_discount_product * 100 . '%';
                                    } else echo " ";
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <div class="gap mt-5">
        <!-- Gợi ý cho bạn -->

        <!-- Nhận xét khách hàng -->
    </div>
    <section class="comments scaled-comments">
        <div class="container-fluid mt-5">
            <div class="row comments-header mb-4">
                <span>Đánh Giá-Nhận Xét Từ Khách Hàng</span>
            </div>
            <div class="row comment-info">
                <div class="container-fluid mt-2 d-flex mb-auto">
                    <div class="col-3 comment-info-star justify-content-center align-items-center me-0">
                        <div class="comment-info-star-total d-flex">
                            <div class="avg-star ms-auto">
                                <span id="avg-star">4.9</span>
                            </div>
                            <div class="total-comment-star mx-auto">
                                <div class="total-comment-star-details">
                                    <div class="star-5 d-flex">
                                        <div class="info-star-total d-flex justify-content-left align-items-left mt-auto mb-auto ">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="ratings">
                                                    <i class="fa fa-star "></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star rating-color"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="total-commnent mt-1">
                                    <span id="total-comment">123</span><span>&nbsp;Nhận xét</span>
                                </div>
                            </div>
                        </div>

                        <div class="comment-info-star-details ms-4">
                            <div class="star-5 d-flex">
                                <div class="info-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto ">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="rating">
                                            <i class="fa fa-star checked "></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star checked"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress col-5 my-auto mx-auto" style="height:5px">
                                    <div class="star-progress-bar" style="width:70%"></div>
                                </div>
                                <div class="total-progress-bar">123</div>
                            </div>
                            <div class="star-4 d-flex">
                                <div class="info-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto ">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="rating">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star non-checked"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress col-5 my-auto mx-auto" style="height:5px">
                                    <div class="star-progress-bar" style="width:70%"></div>
                                </div>
                                <div class="total-progress-bar">123</div>
                            </div>
                            <div class="star-3 d-flex">
                                <div class="info-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="rating">
                                            <i class="fa fa-star checked "></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color non-checked"></i>
                                            <i class="fa fa-star non-checked"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress col-5 my-auto mx-auto" style="height:5px">
                                    <div class="star-progress-bar" style="width:70%"></div>
                                </div>
                                <div class="total-progress-bar">123</div>
                            </div>
                            <div class="star-2 d-flex">
                                <div class="info-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="rating">
                                            <i class="fa fa-star checked "></i>
                                            <i class="fa fa-star rating-color checked"></i>
                                            <i class="fa fa-star rating-color non-checked"></i>
                                            <i class="fa fa-star rating-color non-checked"></i>
                                            <i class="fa fa-star non-checked"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress col-5 my-auto mx-auto" style="height:5px">
                                    <div class="star-progress-bar" style="width:70%"></div>
                                </div>
                                <div class="total-progress-bar">123</div>
                            </div>
                            <div class="star-1 d-flex">
                                <div class="info-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="rating">
                                            <i class="fa fa-star checked"></i>
                                            <i class="fa fa-star rating-color non-checked"></i>
                                            <i class="fa fa-star rating-color non-checked"></i>
                                            <i class="fa fa-star rating-color non-checked"></i>
                                            <i class="fa fa-star non-checked"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress col-5 my-auto mx-auto" style="height:5px">
                                    <div class="star-progress-bar" style="width:70%"></div>
                                </div>
                                <div class="total-progress-bar">123</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 comment-info-imgs me-auto ms-5">
                        <span class="title ms-4">Tất cả hình ảnh</span><span class="title" id="total-comment"> &nbsp;(25)</span>
                        <div class="product-img-album mt-3 ms-0 me-auto col-12">
                            <ul class="row d-flex comment-img-album-list">
                                <li class="ms-0 me-4">
                                    <img src="{{asset('public/client/images/comment/cmt1.png')}}" alt="" id="img comment-img-album-1">
                                </li>
                                <li class="me-4">
                                    <img src="{{asset('public/client/images/comment/cmt2.png')}}" alt="" id=" img comment-img-album-2">

                                </li>
                                <li class="me-4">
                                    <img src="{{asset('public/client/images/comment/cmt3.png')}}" alt="" id=" img comment-img-album-3">

                                </li>
                                <li class="me-4">
                                    <img src="{{asset('public/client/images/comment/cmt4.png')}}" alt="" id="img comment-img-album-4">

                                </li>
                                <li class="">
                                    <a href="#" class="">
                                        <img src="{{asset('public/client/images/comment/cmt5.png')}}" alt="" id="img comment-img-album-5">
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="filter-comments d-flex mt-5 mb-5 me-5">
                            <span class="title me-1 ms-5 mt-2 col-3">Lọc xem theo:</span>
                            <div class="filter-comment-detail d-flex align-items-center">
                                <div class="filter-comment filter-comment-new me-4 col-3 text-center pt-2">
                                    <span class="">Mới nhất</span>
                                </div>
                                <div class="filter-comment filter-comment-picture me-4 col-4 text-center pt-2">
                                    <span class="">Có hình ảnh</span>
                                </div>
                                <div class="filter-comment-star mx-auto text-center me-3 col-2" id="5-start">
                                    <span>5<i class="fa-regular fa-star mt-2"></i> </span>
                                </div>
                                <div class="filter-comment-star mx-auto text-center me-3 col-2" id="4-start">
                                    <span>4<i class="fa-regular fa-star mt-2"></i> </span>
                                </div>
                                <div class="filter-comment-star  mx-auto text-center me-3 col-2" id="3-start">
                                    <span>3<i class="fa-regular fa-star mt-2"></i> </span>
                                </div>
                                <div class="filter-comment-star  mx-auto text-center me-3 col-2" id="2-start">
                                    <span>2<i class="fa-regular fa-star mt-2"></i> </span>
                                </div>
                                <div class="filter-comment-star  mx-auto text-center me-auto col-2" id="1-start">
                                    <span>1<i class="fa-regular fa-star mt-2"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- <div class="split "></div> -->
    <div class="gap mt-5"></div>
    <section class="user-comments scaled-comment">
        <div class="user-comment mb-5 " id="user-id">
            <div class=" row mt-2">
                <div class="container container-comment d-flex mt-4 ms-0 me-1">
                    <div class="user-comment-info d-flex">
                        <div class="user-avatar me-3" id="user-avatar">

                        </div>
                        <div class="user-name me-5">
                            <span id="user-name">Nguyễn Minh Cường</span>
                            <div class="user-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star checked    "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="user-comment-time mt-2">
                                <span id="user-comment-time">2022-10-07 15:46</span>
                            </div>
                            <div class="smell d-flex mt-4">
                                <span id="smell">Hương vị:&nbsp;</span>
                                <span id="smell-comment">tươi ngon</span>
                            </div>
                            <div class="pack d-flex mt-4">
                                <span id="pack">Bao bì/Mẫu mã:&nbsp;</span>
                                <span id="pack-comment">đẹp</span>
                            </div>
                            <div class="desc-detail mt-4">
                                <span id="desc-detail">Shop đóng gói đẹp, thịt thơm ngon vẫn còn tươi, mềm</span>
                            </div>
                            <div class="img-comment mt-4 mb-5 ">
                                <ul class="d-flex user-cmt-imgs p-0">
                                    <li class="ms-0 ">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt1.png')}}" alt="" id="comment-img-album-1">
                                    </li>
                                    <li class="ms-4 ">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt2.png')}}" alt="" id="comment-img-album-2">

                                    </li>

                                </ul>
                            </div>
                        </div>
                        <a href="#" value="">
                            <div class="liked ms-0 d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-thumbs-up"></i>&nbsp;
                                <span class="user-like" id="user-like-id">Hữu ích</span>
                            </div>

                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="user-comment mb-5 " id="user-id">
            <div class="row mt-2">
                <div class="container-fluid container-comment d-flex mt-4">
                    <div class="user-comment-info d-flex">
                        <div class="user-avatar me-3" id="user-avatar">

                        </div>
                        <div class="user-name me-auto">
                            <span id="user-name">Nguyễn Minh Cường</span>
                            <div class="user-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star checked    "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="user-comment-time mt-2">
                                <span id="user-comment-time">2022-10-07 15:46</span>
                            </div>
                            <div class="smell d-flex mt-4">
                                <span id="smell">Hương vị:&nbsp;</span>
                                <span id="smell-comment">tươi ngon</span>
                            </div>
                            <div class="pack d-flex mt-4">
                                <span id="pack">Bao bì/Mẫu mã:&nbsp;</span>
                                <span id="pack-comment">đẹp</span>
                            </div>
                            <div class="desc-detail mt-4">
                                <span id="desc-detail">Shop đóng gói đẹp, thịt thơm ngon vẫn còn tươi, mềm</span>
                            </div>
                            <div class="img-comment mt-4 mb-5 ">
                                <ul class="d-flex user-cmt-imgs p-0">
                                    <li class="ms-0">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt1.png')}}" alt="" id="comment-img-album-1">
                                    </li>
                                    <li class="ms-4">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt2.png')}}" alt="" id="comment-img-album-2">

                                    </li>

                                </ul>
                            </div>
                        </div>
                        <a href="#" value="">
                            <div class="liked ms-auto d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-thumbs-up"></i>&nbsp;
                                <span class="user-like" id="user-like-id">Hữu ích</span>
                            </div>

                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="user-comment mb-5 " id="user-id">
            <div class="row mt-2">
                <div class="container-fluid container-comment d-flex mt-4">
                    <div class="user-comment-info d-flex">
                        <div class="user-avatar me-3" id="user-avatar">

                        </div>
                        <div class="user-name me-auto">
                            <span id="user-name">Nguyễn Minh Cường</span>
                            <div class="user-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star checked    "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="user-comment-time mt-2">
                                <span id="user-comment-time">2022-10-07 15:46</span>
                            </div>
                            <div class="smell d-flex mt-4">
                                <span id="smell">Hương vị:&nbsp;</span>
                                <span id="smell-comment">tươi ngon</span>
                            </div>
                            <div class="pack d-flex mt-4">
                                <span id="pack">Bao bì/Mẫu mã:&nbsp;</span>
                                <span id="pack-comment">đẹp</span>
                            </div>
                            <div class="desc-detail mt-4">
                                <span id="desc-detail">Shop đóng gói đẹp, thịt thơm ngon vẫn còn tươi, mềm</span>
                            </div>
                            <div class="img-comment mt-4 mb-5 ">
                                <ul class="d-flex user-cmt-imgs p-0">
                                    <li class="ms-0">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt1.png')}}" alt="" id="comment-img-album-1">
                                    </li>
                                    <li class="ms-4">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt2.png')}}" alt="" id="comment-img-album-2">

                                    </li>

                                </ul>
                            </div>
                        </div>
                        <a href="#" value="">
                            <div class="liked ms-auto d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-thumbs-up"></i>&nbsp;
                                <span class="user-like" id="user-like-id">Hữu ích</span>
                            </div>

                        </a>

                    </div>
                </div>
            </div>

        </div>
        <div class="user-comment mb-5 " id="user-id">
            <div class="row mt-2">
                <div class="container-fluid container-comment d-flex mt-4">
                    <div class="user-comment-info d-flex">
                        <div class="user-avatar me-3" id="user-avatar">

                        </div>
                        <div class="user-name me-auto">
                            <span id="user-name">Nguyễn Minh Cường</span>
                            <div class="user-star d-flex justify-content-left align-items-left mt-auto mb-auto me-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star rating-color checked"></i>
                                        <i class="fa fa-star checked    "></i>
                                    </div>
                                </div>
                            </div>
                            <div class="user-comment-time mt-2">
                                <span id="user-comment-time">2022-10-07 15:46</span>
                            </div>
                            <div class="smell d-flex mt-4">
                                <span id="smell">Hương vị:&nbsp;</span>
                                <span id="smell-comment">tươi ngon</span>
                            </div>
                            <div class="pack d-flex mt-4">
                                <span id="pack">Bao bì/Mẫu mã:&nbsp;</span>
                                <span id="pack-comment">đẹp</span>
                            </div>
                            <div class="desc-detail mt-4">
                                <span id="desc-detail">Shop đóng gói đẹp, thịt thơm ngon vẫn còn tươi, mềm</span>
                            </div>
                            <div class="img-comment mt-4 mb-5 ">
                                <ul class="d-flex user-cmt-imgs p-0">
                                    <li class="ms-0">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt1.png')}}" alt="" id="comment-img-album-1">
                                    </li>
                                    <li class="ms-4">
                                        <img src="{{asset('public/client/OverviewProductAssets/images/comment/cmt2.png')}}" alt="" id="comment-img-album-2">

                                    </li>

                                </ul>
                            </div>
                        </div>
                        <a href="#" value="">
                            <div class="liked ms-auto d-flex justify-content-center align-items-center">
                                <i class="fa-regular fa-thumbs-up"></i>&nbsp;
                                <span class="user-like" id="user-like-id">Hữu ích</span>
                            </div>

                        </a>

                    </div>
                </div>
            </div>

        </div>
        <section class="pag mt-3">
            <div class="row ">
                <div class="container d-flex ">
                    <ul class="list-page d-flex text-dark align-items-right justify-content-right ms-auto me-5  ">
                        <li class="page-item-pre mx-auto">
                            <a class="page-link-nonebs text-dark" href="#" aria-label="Previous" id="pre">
                                <i class="fa-solid fa-angle-left"></i>
                            </a>
                        </li>
                        <li class="page-item mx-2"><a class="page-link-nonebs text-dark" href="#">1</a></li>
                        <li class="page-item mx-2"><a class="page-link-nonebs text-dark" href="#">2</a></li>
                        <li class="page-item mx-2"><a class="page-link-nonebs text-dark" href="#">3</a></li>
                        <li class="page-item mx-2"><a class="page-link-nonebs text-dark" href="#">...</a></li>
                        <li class="page-item-next mx-auto">
                            <a class="page-link-nonebs text-dark" href="#" aria-label="Next" id="next">
                                <i class="fa-solid fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </section>
    <!-- Content -->

    <!-- Footer -->
    @yield('home_footer')
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="{{asset('public/client/Overviewproductassets\fishandmeat\detailfishandmeat.js')}}"></script>



</body>

</html>