<div class="wrapper">
            <div class="container-fluid">
                <br>
                <!-- start page title -->
                <div class="row">
                    <div class="col-2">
                        <a href="{{route('re-add-product')}}" class="btn btn-primary waves-effect waves-light" name="" value="">Thêm mới</a>
                    </div>
                    <div class="col-8">
                    </div>
                    <div class="col-2">
                        <!-- <a href="{{route('logout')}}" class="btn btn-primary waves-effect waves-light" name="" value="">Thoát</a> -->
                    </div>
                    <div class="col-8">
                    </div>
                </div>      
                <!-- end page title --> 
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Product_cat</th>
                                            <th>Product_brand</th>
                                            <th>Product_title</th>
                                            <th>Product_price</th>
                                            <th>Product_desc</th>
                                            <th>Product_image</th>
                                            <th>Product_keywords</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>                              
                                    <tbody>
                                        @foreach($product as $pro)
                                        <tr>
                                            <td>{{$pro->id}}</td>
                                            <td>{{$pro->product_cat}}</td>
                                            <td>{{$pro->product_brand}}</td>
                                            <td>{{$pro->product_title}}</td>
                                            <td>{{$pro->product_price}}</td>
                                            <td>{{$pro->product_desc}}</td>
                                            <td>{{$pro->product_image}}</td>
                                            <td>{{$pro->product_keywords}}</td>
                                            <td>
                                                <a href="{{route('re_edit-Product',['id'=>$pro->id])}}" class="btn btn-warning waves-effect waves-light"><i class="mdi mdi-settings"></i></a>
                                                <a href="{{route('delete-product',['id'=>$pro->id])}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->     
            </div> <!-- end container -->
</div>