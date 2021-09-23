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
                            <li class="breadcrumb-item active">Create</li>
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
                                <h3 class="card-title">Create</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" id="ProductForm">
                                @csrf
                                <div class="card-body row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputFile">Name Product *</label>
                                        <input type="text" class="form-control val-name" name="name" placeholder="Name Product">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputFile">Description Product *</label>
                                        <input type="text" class="form-control val-description" name="description" placeholder="Name Description">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputFile">Price *</label>
                                        <input type="number" class="form-control val-price" name="price" placeholder="Price">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputFile">Start Date</label>
                                        <input type="date" class="form-control start_date" name="start_date">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="exampleInputFile">End Date</label>
                                        <input type="date" class="form-control end_date" name="end_date" disabled="true">
                                    </div>
                                </div>

                                <div class="card-body row">
                                    <div class="form-group col-6">
                                        <label for="exampleInputFile">Image *</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file"  class="custom-file-input input-images val-image" name="file" id="imgfilesOne">
                                                <label class="custom-file-label " for="imgfilesOne">Choose file</label>
                                            </div>
                                        </div>
                                        <p class="valImage" style="display: none; color: red">Please Enter Image</p>
                                        <div class="output-images-create" >

                                        </div>
                                    </div>
                                 </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary story-submit product-submit">Submit</button>
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
