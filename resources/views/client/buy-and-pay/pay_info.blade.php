<html lang="en">

<head>
    <title>Thanh toán & Đặt hàng</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/logo.png">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17egcferpgzkcm0j0feq1ycjuyawdz9kutv1ejvuaoz8pdnh/0nzxmu6bbxwaaxqoi9pqxnrwqlcdb027hgv9a==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yhknp1/awr+yx26cb1y0cjvqumvea2pfzt1c9lls4prq5notzfwbhbig+x9g9eyw/8m0/4oxnx8pxj6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{asset('public/client/HomeAssets/asset/fonts/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/client/HomeAssets/homeheadermain.css')}}" />
    <link rel="stylesheet" href="{{asset('public/client/HomeAssets/HomeFooter.css')}}" />
    <link rel="stylesheet" href="{{asset('public/client/BuyAndPayAssets/PayInfo/PayInfo.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <form class="thanhtoanform">
        {{ csrf_field() }}

        <!-- Header login -->
        @yield('home_header')
        <!-- Header login -->

        <div class="content">
            <div class="content__title">
                <h3 class="content__headline">
                    <center>THANH TOÁN & ĐẶT HÀNG</center>
                </h3>
            </div>
            @if (session ()->has('fail_order'))
            <div class="alert alert-danger">
                {{ session()->get('fail_order') }}
            </div>
            @endif

            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div id="left-column">
                            <div class="content__delivery">
                                <span><b>Chọn hình thức giao hàng</b></span>
                                <br>
                                <label id="delivery-method1" class="content__delivery-method">
                                    <input type="radio" class="content__delivery-method-button" name="delivery-method" id="delivery-method-button1" value="1" checked="checked">
                                    <label for="delivery-method-button1" class="content__delivery-method-name">Giao hàng tiết kiệm</label>
                                </label>
                                <label id="delivery-method2" class="content__delivery-method">
                                    <input type="radio" class="content__delivery-method-button" name="delivery-method" id="delivery-method-button2" value="2">
                                    <label for="delivery-method-button2" class="content__delivery-method-name">Giao hàng hỏa tốc</label>
                                </label>
                            </div>

                            <fieldset class="content__delivery-detail">
                                <legend id="deliveryLegend">
                                    <img id="deliveryIcon" src="{{asset('public/client/assets/icons/delivery.png')}}">
                                    <label id="deliveryTime">Gói: Giao vào Thứ 3, 12/11</label>
                                </legend>

                                <div class="content__deliveryDetail">
                                    <b><label id="deliveryName">GIAO HÀNG TIẾT KIỆM</label></b>
                                    <div>
                                        <span id="deliveryFee">
                                            14,000 đ
                                        </span>
                                        <br>
                                        <span id="deliveryInfo">
                                            Được giao bởi BriliNOW Smart Logistics (giao từ Hồ Chí Minh)
                                        </span>
                                    </div>
                                </div>
                                <div class="content__deliveryDetail" id="products">
                                    <b><label id="deliveryName">CHI TIẾT ĐƠN HÀNG</label></b>
                                </div>
                            </fieldset>
                            <br>
                            <div class="content__payment">
                                <span><b>Chọn hình thức thanh toán</b></span>
                                <br>
                                <div class="content__payment-methods">
                                    <label class="content__payment-method">
                                        <input type="radio" name="payment-method" id="payment-method-button1" value="1" checked="checked">
                                        <img src="{{asset('public/client/assets/icons/tienmat.png')}}">
                                        <label for="payment-method-button1" class="content__payment-name">Thanh toán tiền mặt khi nhận hàng</label>
                                    </label>
                                    <br>
                                    <label class="content__payment-method">
                                        <input type="radio" name="payment-method" id="payment-method-button2" value="2">
                                        <img src="{{asset('public/client/assets/icons/vidientu.png')}}">
                                        <label for="payment-method-button2" class="content__payment-name">Thanh toán bằng ví điện tử</label>
                                        <br>
                                        <label id="E-wallet-message">Vui lòng chọn ví điện tử!</label>
                                        <div class="content__E-wallets">
                                            <label class="content__E-wallet">
                                                <input type="radio" class="content__E-wallet-button" name="E-wallet" value="21" id="E-wallet-button1" checked="checked">
                                                <img class="content__E-wallet-image" src="{{asset('public/client/assets/icons/ViMoMo.png')}}">
                                                <label class="content__E-wallet-name" for="E-wallet-button1">Ví MoMo</label>
                                            </label>
                                            <label class="content__E-wallet">
                                                <input type="radio" class="content__E-wallet-button" name="E-wallet" value="22" id="E-wallet-button2">
                                                <img class="content__E-wallet-image" src="{{asset('public/client/assets/icons/VNPAY.png')}}">
                                                <label class="content__E-wallet-name" for="E-wallet-button2">VNPAY</label>
                                            </label>
                                            <label class="content__E-wallet">
                                                <input type="radio" class="content__E-wallet-button" name="E-wallet" value="23" id="E-wallet-button3">
                                                <img class="content__E-wallet-image" src="{{asset('public/client/assets/icons/ZaloPay.png')}}">
                                                <label class="content__E-wallet-name" for="E-wallet-button3">ZaloPay</label>
                                            </label>
                                            <label class="content__E-wallet">
                                                <input type="radio" class="content__E-wallet-button" name="E-wallet" value="24" id="E-wallet-button4">
                                                <img class="content__E-wallet-image" src="{{asset('public/client/assets/icons/VinID.png')}}">
                                                <label class="content__E-wallet-name" for="E-wallet-button4">VinID</label>
                                            </label>
                                            <label class="content__E-wallet">
                                                <input type="radio" class="content__E-wallet-button" name="E-wallet" value="25" id="E-wallet-button5">
                                                <img class="content__E-wallet-image" src="{{asset('public/client/assets/icons/ViMoca.png')}}">
                                                <label class="content__E-wallet-name" for="E-wallet-button5">Ví Moca</label>
                                            </label>

                                        </div>
                                    </label>
                                    <br>
                                    <label class="content__payment-method">
                                        <input type="radio" name="payment-method" id="payment-method-button3" value="3">
                                        <img src="{{asset('public/client/assets/icons/thequocte.png')}}">
                                        <label for="payment-method-button3" class="content__payment-name">Thanh toán bằng thẻ quốc tế Visa, Master, JCB</label>
                                    </label>
                                    <br>
                                    <label class="content__payment-method">
                                        <input type="radio" name="payment-method" id="payment-method-button4" value="4">
                                        <img src="{{asset('public/client/assets/icons/theatm.png')}}">
                                        <label for="payment-method-button4" class="content__payment-name">Thẻ ATM nội địa/Internet Banking (Hỗ trợ Internet Banking)</label>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div id="right-column">
                            <div class="content__frame">
                                <div class="content__description">
                                    <div>
                                        <a href="#" onclick="goBack()">Thay đổi</a>
                                    </div>
                                    <div><b>Giao tới</b></div>
                                    <b><span id="fullname"></span></b>
                                    <span>|</span>
                                    <b><span id="phonenum"></span></b>
                                    <div id="address">
                                        <span id="specificAddress"></span>
                                        <span id="specificAddress-comma">, </span>
                                        <span id="ward"></span>
                                        <span>, </span>
                                        <span id="district"></span>
                                        <span>, </span>
                                        <span id="city"></span>
                                        <span>, Việt Nam.</span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="content__frame">
                                <div class="content__description">
                                    <lable class="content__invoice-request">
                                        <input type="checkbox" id="invoice-request-checkbox">
                                        <label for="invoice-request-checkbox" id="invoice-request-name">Yêu cầu hóa đơn</label>
                                    </lable>

                                </div>
                            </div>
                            <br>
                            <div class="content__frame">
                                <div class="content__description">
                                    <div>
                                        <a href="./GioHang.html">Thay đổi</a>
                                    </div>
                                    <div><b>Đơn hàng</b></div>
                                    <div>
                                        <span class="content__attitude" id="numPro"></span>
                                        <button id="detail-button" type="button">Xem thông tin</button>
                                    </div>
                                    <hr class="content__line">
                                    <div>
                                        <span class="content__attitude">Tạm tính</span>
                                        <span class="content__value" id="subtotal"></span>
                                    </div>
                                    <br>
                                    <div>
                                        <span class="content__attitude">Phí vận chuyển</span>
                                        <span class="content__value" id="transort-fee">14000</span>
                                    </div>
                                    <br>
                                    <div>
                                        <span class="content__attitude">Giảm giá</span>
                                        <span class="content__value" id="discount"></span>
                                    </div>
                                    <br>
                                    <hr class="content__line">
                                    <table>
                                        <tr>
                                            <td>
                                                <span id="total-tittle">Tổng tiền</span>
                                            </td>
                                            <td id="total"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <span class="content__value" id="vat">(Đã bao gồm VAT nếu có)</span>
                                            </td>
                                        </tr>
                                    </table>
                                    <br>
                                    <div class="content__submit">
                                        <!-- <input type="submit" value="Đặt hàng" id="order-button" class="confirrm-order" > -->
                                        <button id="order-button" type="button" value="Đặt hàng" class="confirrm-order" name="add-to-cart">Đặt hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="content__info">
                <span>Bằng việc tiến hành Đặt Mua, khách hàng đồng ý với các Điều Kiện Giao Dịch Chung được ban hành bởi BriliFresh:</span>
                <br>
                <span>Quy chế hoạt động | Chính sách giải quyết khiếu nại | Chính sách bảo hành | Chính sách bảo mật thanh toán | Chính sách bảo mật thông tin cá nhân</span>
                <br>
                <span>© 2019 - Bản quyền của Công Ty Cổ Phần BriliFresh - BriliFresh.vn</span>
            </div>
        </div>
        <!-- Footer -->
        @yield('home_footer')
        <!-- Footer -->
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script type="text/javascript" src="{{asset('public/client/BuyAndPayAssets/PayInfo/PayInfo.js')}}"></script>
    <script type>
        $(document).ready(function() {
            $('.confirrm-order').click(function() {

                var delivery_method = document.querySelector('input[name="delivery-method"]:checked').value;
                var payment_method = document.querySelector('input[name="payment-method"]:checked').value;
                if (payment_method == 2) {
                    var payment_method_videntu = document.querySelector('input[name="E-wallet"]:checked').value;
                    payment_method = payment_method_videntu;
                } else {
                    payment_method = document.querySelector('input[name="payment-method"]:checked').value;
                }

                var subtotal = document.getElementById('subtotal').innerText;
                subtotal = subtotal.split(" ");
                subtotal = subtotal[0];
                subtotal = subtotal.split(",");
                subtotal = subtotal[0] + subtotal[1];

                var total = document.getElementById('total').innerText;
                var total = total.split(" ");
                total = total[0];
                total = total.split(",");
                total = total[0] + total[1];
                var OrderDate = new Date();
                var curr_date = OrderDate.getDate();

                var curr_month = OrderDate.getMonth() + 1;

                var curr_year = OrderDate.getFullYear();
                var seconds = OrderDate.getSeconds();
                var minutes = OrderDate.getMinutes();
                var hour = OrderDate.getHours();
                OrderDate = curr_year + "-" + curr_month + "-" + curr_date + " " + hour + ":" + minutes + ":" + seconds;

                var fullname = document.getElementById('fullname').innerText;
                var phonenum = document.getElementById('phonenum').innerText;

                var specificAddress = document.getElementById('specificAddress').innerText;
                var ward = document.getElementById('ward').innerText;
                var district = document.getElementById('district').innerText;
                var city = document.getElementById('city').innerText;

                var disid = sessionStorage.getItem("DISID");

                var product_image = JSON.parse(sessionStorage.getItem("PROIMAGE"));
                var product_name = JSON.parse(sessionStorage.getItem("PRONAME"));
                var product_unit_price = JSON.parse(sessionStorage.getItem("UNITPRICE"));
                var product_quantity = JSON.parse(sessionStorage.getItem("QUANTITY"));


                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: "{{route('pay_info_ajax')}}",
                    method: 'POST',
                    data: {
                        delivery_method: delivery_method,
                        payment_method: payment_method,
                        subtotal: subtotal,
                        total: total,
                        OrderDate: OrderDate,
                        specificAddress: specificAddress,
                        ward: ward,
                        district: district,
                        city: city,
                        disid: disid,
                        fullname: fullname,
                        phonenum: phonenum,
                        product_image: product_image,
                        product_name: product_name,
                        product_unit_price: product_unit_price,
                        product_quantity: product_quantity,
                        _token: _token
                    },
                    success: function(data) {
                        //alert(data);
                        swal({
                                title: "Đã đặt hàng thành công",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: false,
                                //cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Quay về trang chủ",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/')}}";
                            });

                    }

                });
            });
        });
    </script>
</body>

</html>