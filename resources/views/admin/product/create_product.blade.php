@extends('admin_layout')
@section('admin_content')
<div class="page-header">
    <h2 class="header-title">Brili Fresh</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="{{URL::to('/dashboard')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
            <a class="breadcrumb-item" href="{{URL::to('/all-products')}}">Quản lý sản phẩm</a>
            <span class="breadcrumb-item active">Thêm sản phẩm</span>
        </nav>
    </div>
</div>
<hr />
<form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <h1>Thêm sản phẩm</h1>
    <?php

    use Illuminate\Support\Facades\Session;

    $message_save_product_no_des = Session::get('message_save_product_no_des');
    if ($message_save_product_no_des) {
        echo '<span style= "color: red"; text-align: center; font-size: 14px; >' . $message_save_product_no_des . '</span>';
        Session::put('message_save_product_no_des', null);
    }

     ?>
    <div class="row">
        <div class="col-md-12">
            <div class="text-danger"></div>
            <div class="d-md-flex m-b-15 align-items-center ">
                <div class="media align-items-center m-b-15">
                    <div class="avatar avatar-image rounded" style="height: 140px; width: 140px">
                        <img id="blah" src="#" alt="Ảnh chính" style='width: 100%;max-height: 100%'>
                    </div>
                </div>
                <div class="m-b-15" style="padding-left: 268px">
                    <input type="file" id="image_submit" name="product_img_main" class="btn btn-primary" accept="image/gif, image/jpeg, image/png" style="display:none;"  />
                    <label id="choose_image" for="image_submit" class="btn-primary btn"> <i class="anticon anticon-save"></i>&nbsp Ảnh đại diện</label>
                    <span class="text-danger"></span>
                </div>
            </div>

            <div class="d-md-flex m-b-15 align-items-center">
                <div class="media align-items-center m-b-15" id="img1" style="padding-right: 32px">
                    <div class="avatar avatar-image rounded" style="height: 140px; width: 140px"></div>
                </div>
                <div class="media align-items-center m-b-15" id="img2" style="padding-right: 32px">
                    <div class="avatar avatar-image rounded" style="height: 140px; width: 140px"></div>
                </div>
                <div class="media align-items-center m-b-15" id="img3" style="padding-right: 32px">
                    <div class="avatar avatar-image rounded" style="height: 140px; width: 140px"></div>
                </div>
                <div class="m-b-15" style="padding-left: 100px">
                    <input type="file" id="image_submit_2" name="product_img_description[]" class="btn btn-primary" multiple accept="image/gif, image/jpeg, image/png" style="display: none"  />
                    <label id="choose_image" for="image_submit_2" class="btn-primary btn"> <i class="anticon anticon-save"></i>&nbsp Ảnh chi tiết</label>
                    <span class="text-danger"></span>
                </div>
            </div>
            <hr />
            <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="product-edit-basic">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_name">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Tên" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_type">Danh mục</label>
                                <select class="custom-select" name="product_type" id="Type_MainType" required>
                                    <option value="" disabled="true" selected>Chọn danh mục</option>
                                    @foreach ($main_type as $key =>$main_type)
                                    <option value="{{$main_type->MainType}}">{{$main_type->MainType}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="sub1">
                                <select class="custom-select" name="product_subtype" id="type1" required>
                                    <option value="" disabled="true" selected>Chọn loại sản phẩm</option>
                                    @foreach ($sub_type_raucu as $key =>$sub_type_raucu)
                                    <option value=" {{$sub_type_raucu->SubType}}">{{$sub_type_raucu->SubType}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="sub2">
                                <select class="custom-select" name="product_subtype" id="type2" required>
                                    <option value="" selected>Chọn loại sản phẩm</option>
                                    @foreach ($sub_type_thitca as $key =>$sub_type_thitca)
                                    <option value="{{$sub_type_thitca->SubType}}">{{$sub_type_thitca->SubType}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group" id="sub3">
                                <select class="custom-select" name="product_subtype" id="type3" required>
                                    <option value="" selected>Chọn loại sản phẩm</option>
                                    @foreach ($sub_type_traicay as $key =>$sub_type_traicay)
                                    <option value="{{$sub_type_traicay->SubType}}">{{$sub_type_traicay->SubType}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_price">Giá nhập hàng</label>
                                <input type="number" class="form-control" name="product_original_price" id="product_price" min="1000" placeholder="VNĐ" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_price">Đơn giá</label>
                                <input type="number" class="form-control" name="product_price" id="product_price" min="1000" placeholder="VNĐ" required>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_source">Nguồn gốc</label>
                                <select class="custom-select" name="product_source" id="product_source" required="required">
                                    <option value="" selected>Nguồn gốc sản phẩm</option>
                                    <option value="Sản phẩm của Brili Fresh">Sản phẩm của Brili Fresh</option>
                                    <option value="Sản phẩm nhập khẩu">Sản phẩm nhập khẩu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_date">Ngày tạo</label>
                                <input type="date" class="form-control" name="product_date" id="product_date" placeholder="dd/mm/yyyy" required="required">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="product_discription">Mô tả sản phẩm</label>
                                <textarea type="text-area" class="form-control" name="product_discription" id="product_discription" placeholder="Mô tả ngắn gọn về sản phẩm mới của Brili Fresh" required="required" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="unit">Đơn vị bán</label>
                                <br>
                                <label class="font-weight-semibold" for="unit_number">&nbsp &nbsp Số lượng</label>
                                <input type="number" class="form-control" name="unit_number" id="unit_number" placeholder="1/100/... " required>

                                <label class="font-weight-semibold" for="unit_count">&nbsp &nbsp Đơn vị tính</label>
                                <select class="custom-select" name="unit_count" id="unit_count" required>
                                    <option value=selected>Chọn đơn vị</option>
                                    <option value="Kg" selected>Kg</option>
                                    <option value="Gam">Gam</option>
                                    <option value="Hộp">Hộp</option>
                                    <option value="Túi">Túi</option>
                                </select>
                            </div>
                        </div>
                        <div class="m-b-15">
                            <button type="submit" name="save-product" class="btn btn-primary">
                                <i class="anticon anticon-save"></i>
                                <span>Thêm sản phẩm</span>
                            </button>
                            <a class="breadcrumb-item" href="{{URL::to('/all-products')}}"> &nbsp Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script type="text/javascript">
    var s1 = $("#sub1")
    var t1 = $("#type1")
    var s2 = $("#sub2")
    var t2 = $("#type2")
    var s3 = $("#sub3")
    var t3 = $("#type3")
    var maintype = $("#Type_MainType");
    t2.prop("disabled", true);
    t3.prop("disabled", true);
    s2.hide()
    s3.hide()

    maintype.change(function() {
        if (maintype.find(":selected").val() === 'Rau củ') {
            t2.prop("disabled", true);
            t3.prop("disabled", true);
            t1.prop("disabled", false);
            s2.hide()
            s3.hide()
            s1.show()


        } else if (maintype.find(":selected").val() === 'Thịt cá') {
            t2.prop("disabled", false);
            t3.prop("disabled", true);
            t1.prop("disabled", true);
            s2.show()
            s3.hide()
            s1.hide()
        } else {
            t2.prop("disabled", true);
            t3.prop("disabled", false);
            t1.prop("disabled", true);
            s2.hide()
            s3.show()
            s1.hide()
        }
    })

    $("#image_submit").change(function() {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };
            reader.readAsDataURL(this.files[0]);
        }
    })
    var filesInput = document.getElementById("image_submit_2");
    filesInput.addEventListener("change", function(event) {
        var files = event.target.files; //FileList object
        var file1 = files[0];
        var file2 = files[1];
        var file3 = files[2];
        var outfile1 = document.getElementById("img1");
        var outfile2 = document.getElementById("img2");
        var outfile3 = document.getElementById("img3");
        var picReader1 = new FileReader();
        picReader1.addEventListener("load", function(event) {
            var picFile1 = event.target;
            outfile1.innerHTML = `<img src="${picFile1.result}" alt="your image" style="width: 140px; max-height: 140px" />`;
        });
        picReader1.readAsDataURL(file1);
        var picReader2 = new FileReader();
        picReader2.addEventListener("load", function(event) {
            var picFile2 = event.target;
            outfile2.innerHTML = `<img src="${picFile2.result}" alt="your image" style="width: 140px; max-height: 140px" />`;
        });
        picReader2.readAsDataURL(file2);
        var picReader3 = new FileReader();
        picReader3.addEventListener("load", function(event) {
            var picFile3 = event.target;
            outfile3.innerHTML = `<img src="${picFile3.result}" alt="your image" style="width: 140px; max-height: 140px" />`;
        });
        picReader3.readAsDataURL(file3);
    });
    $(document).ready(function() {
        flatpickr("#product_date", {
            altInput: true,
            altFormat: " d/m/Y ",
            dateFormat: "m/d/Y",
            minDate: 'today',
        });


        t2.prop("disabled", true);
        t3.prop("disabled", true);
        s2.hide()
        s3.hide()
        maintype.change(function() {
            if (maintype.find(":selected").val() === 'Rau củ') {
                t2.prop("disabled", true);
                t3.prop("disabled", true);
                t1.prop("disabled", false);
                s2.hide()
                s3.hide()
                s1.show()
            } else if (maintype.find(":selected").val() === 'Thịt cá') {
                t2.prop("disabled", false);
                t3.prop("disabled", true);
                t1.prop("disabled", true);
                s2.show()
                s3.hide()
                s1.hide()
            } else {
                t2.prop("disabled", true);
                t3.prop("disabled", false);
                t1.prop("disabled", true);
                s2.hide()
                s3.show()
                s1.hide()
            }
        })
    })
</script>
@endsection