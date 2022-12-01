@extends('admin_layout')
@section('admin_content')
<div class="page-header">
    <h2 class="header-title">Orders List</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="#">Apps</a>
            <a class="breadcrumb-item" href="#">E-commerce</a>
            <span class="breadcrumb-item active">Orders List</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row m-b-30">
            <div class="col-lg-8">
                <div class="d-md-flex">
                    <div class="m-b-10 m-r-15">
                        <select class="custom-select" style="min-width: 180px;">
                            <option selected>Catergory</option>
                            <option value="all">All</option>
                            <option value="homeDeco">Home Decoration</option>
                            <option value="eletronic">Eletronic</option>
                            <option value="jewellery">Jewellery</option>
                        </select>
                    </div>
                    <div class="m-b-10">
                        <select class="custom-select" style="min-width: 180px;">
                            <option selected>Status</option>
                            <option value="all">All</option>
                            <option value="inStock">In Stock </option>
                            <option value="outOfStock">Out of Stock</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-right">
                <button class="btn btn-primary">
                    <i class="anticon anticon-plus-circle m-r-5"></i>
                    <span>Add Product</span>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover e-commerce-table">
                <thead>
                    <tr>
                        <th>
                            <div class="checkbox">
                                <input id="checkAll" type="checkbox">
                                <label for="checkAll" class="m-b-0"></label>
                            </div>
                        </th>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Stock Left</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-1" type="checkbox">
                                <label for="check-item-1" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #31
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-9.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Gray Sofa</h6>
                            </div>
                        </td>
                        <td>Home Decoration</td>
                        <td>$912.00</td>
                        <td>20</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>In Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-2" type="checkbox">
                                <label for="check-item-2" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #32
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-10.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Beat Headphone</h6>
                            </div>
                        </td>
                        <td>Eletronic</td>
                        <td>$137.00</td>
                        <td>56</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>In Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-3" type="checkbox">
                                <label for="check-item-3" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #33
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-11.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Wooden Rhino</h6>
                            </div>
                        </td>
                        <td>Home Decoration</td>
                        <td>$912.00</td>
                        <td>12</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>In Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-4" type="checkbox">
                                <label for="check-item-4" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #34
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-12.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Red Chair</h6>
                            </div>
                        </td>
                        <td>Home Decoration</td>
                        <td>$128.00</td>
                        <td>0</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-danger badge-dot m-r-10"></div>
                                <div>Out of Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-5" type="checkbox">
                                <label for="check-item-5" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #35
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-13.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Wristband</h6>
                            </div>
                        </td>
                        <td>Eletronic</td>
                        <td>$776.00</td>
                        <td>0</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-danger badge-dot m-r-10"></div>
                                <div>Out of Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-6" type="checkbox">
                                <label for="check-item-6" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #36
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-14.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Charging Cable</h6>
                            </div>
                        </td>
                        <td>Eletronic</td>
                        <td>$119.00</td>
                        <td>37</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>In Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="checkbox">
                                <input id="check-item-7" type="checkbox">
                                <label for="check-item-7" class="m-b-0"></label>
                            </div>
                        </td>
                        <td>
                            #37
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid rounded" src="assets/images/others/thumb-15.jpg" style="max-width: 60px" alt="">
                                <h6 class="m-b-0 m-l-10">Three Legs</h6>
                            </div>
                        </td>
                        <td>Home Decoration</td>
                        <td>$199.00</td>
                        <td>17</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="badge badge-success badge-dot m-r-10"></div>
                                <div>In Stock</div>
                            </div>
                        </td>
                        <td class="text-right">
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                <i class="anticon anticon-edit"></i>
                            </button>
                            <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                <i class="anticon anticon-delete"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection