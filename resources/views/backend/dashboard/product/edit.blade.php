@extends('layouts.admin')
@section('css')

@endsection
@section('content')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            {{--                        <h1>Create</h1>--}}
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Update</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Update</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data" id="ProductFormUpdate">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body row">
                                        <div class="form-group col-6">
                                            <label for="exampleInputFile">Name Product *</label>
                                            <input type="text" class="form-control val-name" name="name" placeholder="Name Product" value="{{$product->name}}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputFile">Description Product *</label>
                                            <input type="text" class="form-control val-description" name="description" placeholder="Name Description" value="{{$product->description}}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputFile">Price *</label>
                                            <input type="number" class="form-control val-price" name="price" placeholder="Price" value="{{$product->price}}">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputFile">Start Date</label>
                                            <input type="date" class="form-control" name="start_date" value=" {!! date('Y-m-d', $product->start_date) !!} ">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="exampleInputFile">End Date</label>
                                            <input type="date" class="form-control" name="end_date" value=" <?php echo date('Y-m-d', $product->end_date);?>">
                                        </div>
                                    </div>


                                    <div class="card-body row">
                                        <div class="form-group col-6">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file"  class="custom-file-input input-images" name="file" id="imgfilesOne">
                                                    <label class="custom-file-label" for="imgfilesOne">Choose file</label>
                                                    <p class="valImage" style="display: none; color: red">Please Enter Image</p>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="addImg row">
                                                <div style="width: auto;" class="clas-del col-3">
                                                    <img style=" margin-right: 5px; height: auto;" class="img-del" src="{{asset($product->image)}}" alt="">
                                                </div>
                                            </div>
                                            <div class="output-images-create">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary product-submit-update">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->


@endsection
@section('js')
    <script src="{{asset('Backend/assets/js/Product.js')}}"></script>
@endsection
