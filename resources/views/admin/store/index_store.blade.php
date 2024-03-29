@extends('admin_layout')
@section('admin_content')
<div class="page-header">
    <h2 class="header-title">Brili Fresh</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{URL::to('/dashboard')}}" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Trang chủ</a>
                <span class="breadcrumb-item active">Quản lý cửa hàng</span>
            </nav>
        </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row m-b-30">
        <div class="col-lg-8">
                        <h2>DANH SÁCH CỬA HÀNG</h2>
                        <hr />
                        <div class="d-md-flex">
                            <div class="m-b-10 m-r-15">
                                <b>Tỉnh/Thành</b>
                                <select id="city" class="form-control" style="width:300px">
                                    <option value="" selected>Tất cả</option>
                                </select>
                            </div>
                    <div class="m-b-10 m-r-15" style="margin-left: 12px">
                                <b>Quận/Huyện</b>
                                <select id="district" class="form-control" style="width:300px" >
                                    <option value="" selected>Tất cả</option>
                                </select>
                            </div>
                            <div class="m-b-10 m-r-15" style="margin-left: 12px">
                                <b>Phường/Xã</b>
                                <select id="ward" class="form-control"  style="width:300px">
                                    <option value="" selected>Tất cả</option>
                                </select>
                            </div>
                        </div>
                    </div>
            <div class="col-lg-4 text-right">
                <a href="{{URL::to('/create-store')}}" class="btn btn-primary">
                    <i class="anticon anticon-plus-circle m-r-5"></i>
                    <span>Thêm mới cửa hàng</span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover e-commerce-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Địa chỉ</th>
                        <th>Phường/Xã</th>
                        <th>Quận/Huyện</th>
                        <th>Tỉnh/Thành</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($index_store as $key =>$store)
                        <tr class="rowitem">
                            <td>{{$store->StoreID}}</td>
                            <td>{{$store->SpecificAddress}}</td>
                            <td class="ward">{{$store->Ward}}</td>
                            <td class="district">{{$store->District}}</td>
                            <td  class="city">{{$store->City}}</td>
                            <td class="text-right">
                                <a href="{{URL::to('/edit-store/'.$store->StoreID)}}" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                    <i class="anticon anticon-edit"></i>
                                </a>
                                <a href="{{URL::to('/delete-store/'.$store->StoreID)}}" class="btn btn-icon btn-hover btn-sm btn-rounded">
                                    <i class="anticon anticon-delete"></i>
                                </a>
                                <a href="{{URL::to('/detail-store/'.$store->StoreID)}}" style="padding: 12px 20px;">
                                    Xem chi tiết
                                </a>
                            </td>
                        </tr>
                    @endforeach
                                    
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script>
$(document).ready(function () {

        var citis = document.getElementById("city");
        var districts = document.getElementById("district");
        var wards = document.getElementById("ward");
        var Parameter = {
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            method: "GET",
            responseType: "application/json",
        };
        var promise = axios(Parameter);
        promise.then(function (result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function () {
                $(".rowitem").show();
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        districts.options[districts.options.length] = new Option(k.Name, k.Id);
                    }
                    
                    for (var i = 0; i < $(".rowitem").length; i++) {
                        var a = $(".city")[i].innerText;
                        if (a != this.options[this.selectedIndex].text) {
                            $(".rowitem")[i].style.display = 'none';
                        }
                    }
                }
            };
            districts.onchange = function () {
                $(".rowitem").show();
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }

                    for (var i = 0; i < $(".rowitem").length; i++) {
                        var b = $(".district")[i].innerText;
                        if (b != this.options[this.selectedIndex].text) {
                            $(".rowitem")[i].style.display = 'none';
                        }
                    }
                }
            };
            wards.onchange = function () {
                $(".rowitem").show();
                if (this.value != "") {
                    for (var i = 0; i < $(".rowitem").length; i++) {
                        var c = $(".ward")[i].innerText;
                        if (c != this.options[this.selectedIndex].text) {
                            $(".rowitem")[i].style.display = 'none';
                        }
                    }
                }
            }
        }
    })
</script>
@endsection