@extends('frontend.layouts.master')
@section('title','Danh sách sản phẩm')
@section('content')
    <h1 class="mt-4">Danh sách sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Trang chủ</a></li>
        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <h3 class="card-title">
                <a class="btn btn-success" href="{{ route('products.create') }}">Thêm mới</a>
            </h3>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách sản phẩm
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>STT</th>
                    <th width="150">Tên sản phẩm</th>
                    <th width="150">Loại sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá bán</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $key=>$product)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->type}}</td>
                        <td style="width: 150px">
                            <img src="{{ asset('storage/'.$product->image) }}" alt=""
                                 style="width: 100%">
                        <td>{{number_format($product->price)}}</td>
                        <td>
                            <a href="" class="btn btn-success">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{route('products.edit',['id'=>$product->id])}}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{route('products.destroy',['id'=>$product->id])}}"
                               onclick="return confirm('Bạn muốn xóa sản phẩm này?')"
                               class="btn btn-danger">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
