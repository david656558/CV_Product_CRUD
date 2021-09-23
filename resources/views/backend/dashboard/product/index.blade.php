@extends('layouts.admin')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">
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
                        <h1>Product</h1>
                        <h6> <strong style="color: red">Attention: </strong> php artisan storage:link</h6>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                    <a class="create-button" href="{{route('product.create')}}">Create</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Data / activate(<span style="color: red">{{count($productsGlobal)}}</span>) / deactivate(<span style="color: red">{{count($products) - count($productsGlobal)}}</span>)</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        @if(isset($product))
                                        <tr>
                                            <td style="width: 15%;">
                                                <img style="width: 100%;    border-radius: 10px;" class="img-del" src="{{asset($product->image)}}" alt="">
                                            </td>
                                            <td>
                                                {{$product->name}}
                                            </td>
                                            <td>
                                                {{$product->description}}
                                            </td>
                                            <td>
                                                {{$product->price}}$
                                            </td>
                                            <td @if($product->end_date < time() || $product->start_date > time()) style="color: red" @endif>
                                                Start Data: {!! date('Y-m-d', $product->start_date) == date('Y-m-d', 0) ? 'no date' : date('Y-m-d', $product->start_date) !!} <br>
                                                End Data: {!! date('Y-m-d', $product->end_date) == date('Y-m-d', 0) ? 'no date' : date('Y-m-d', $product->end_date) !!} <br>
                                            </td>
                                            <td>
                                                <div class="d-flex">
                                                    <a style="padding: 0px 5px;" href="{{ route("product.edit" , $product->id) }}" class="btn btn-primary"><i  class="fas fa-edit" ></i></a>
                                                    <form method="POST" action="{{ route("product.destroy" , $product->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="padding: 0px 5px;" class="ml-2 btn btn-danger" >
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                            </tr>
                                    @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection
@section('js')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
                "dom": 'Bfrtip',
                "buttons": []
            });
        });
    </script>
{{--    <script src="{{asset('Backend/assets/js/Gallery.js')}}"></script>--}}
@endsection
