@extends('admin.product.layout_product')
@section('content')
<div class="wrapper">
        <!-- end page title --> 
    <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    @if(isset($product))
                    <form method="post" action="{{route('update-Product',['id'=>$product->id])}}" enctype="multipart/form-data">
                    
                        @csrf
                        <div class="col-12">                      
                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Product_cat</label>
                                <select class="browser-default custom-select custom-select-sm-3" style="width:252px;margin-left:11px;" id="" name="cate_id">
                                    <option value="">Chọn product_cat</option>
                                    @foreach($cate as $ds1)
                                        <option value="{{$ds1->id}}">{{$ds1->cat_title}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Product_brand</label>
                                <select class="browser-default custom-select custom-select-sm-3" style="width:252px;margin-left:11px;" id="" name="brand_id">
                                    <option value="">Chọn product_brand</option>
                                    @foreach($brand as $ds2)
                                        <option value="{{$ds2->id}}">{{$ds2->brand_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Product_title</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="userName2" name="pro_title" value="{{$product->product_title}}">
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Product_price</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="userName2" name="pro_price" value="{{$product->product_price}}">
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Product_desc</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="userName2" name="pro_desc" value="{{$product->product_desc}}">
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Image</label>
                                <div class="col-md-4">
                                        {{$product->product_image}}
                                        <input type="file" name="myFile" value="{{$product->product_image}}">
                                </div>
                            </div>

                            <div class="form-group row mb-6">
                                <div class="col-md-3"></div>
                                <label class="col-md-2 col-form-label" for="userName2">Product_keywords</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="userName2" name="pro_keyword" value="{{$product->product_keywords}}">
                                </div>
                            </div>
                            <div class="form-group row mb-6">
                                <div class="col-md-6"></div>
                                <div class="col-md-4"> 
                                    <input type="submit" class="btn btn-primary waves-effect waves-light" name="" value="Sửa">
                                </div>
                            </div>    
                        </div> <!-- end col -->
                    </form>
                    @endif
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
@endsection