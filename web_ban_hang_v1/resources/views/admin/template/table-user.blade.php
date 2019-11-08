<div class="wrapper">
            <div class="container-fluid">
                <br>
                <!-- start page title -->
                <div class="row">
                    <div class="col-2">
                        <!-- <a href="" class="btn btn-primary waves-effect waves-light" name="" value="">Thêm mới</a> -->
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
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Mobile</th>
                                            <th>Address1</th>
                                            <th>Address2</th>
                                            <th></th>
                                        </tr>
                                    </thead>                              
                                    <tbody>
                                        @foreach($dsUser as $ds)
                                        <tr>
                                            <td>{{$ds->id}}</td>
                                            <td>{{$ds->fullname}}</td>
                                            <td>{{$ds->email}}</td>
                                            <td>{{$ds->password}}</td>
                                            <td>{{$ds->mobile}}</td>
                                            <td>{{$ds->address1}}</td>
                                            <td>{{$ds->address2}}</td>
                                            <td>
                                                <!-- <a href="" class="btn btn-warning waves-effect waves-light"><i class="mdi mdi-settings"></i></a> -->
                                                <a href="{{route('delete-user',['id'=>$ds->id])}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>
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