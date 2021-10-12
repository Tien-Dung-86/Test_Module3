@extends('frontend.layouts.master')
@section('title','Sửa sản phẩm')
@section('content')
    <h1 class="mt-4">Chỉnh sửa sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Trang chủ</a></li>
        <li class="breadcrumb-item active"><a href="{{route('products.index')}}">Danh sản phẩm sản phẩm</a></li>
        <li class="breadcrumb-item active">Chỉnh sửa sản phẩm</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Chỉnh sửa sản phẩm</p>
                    </div>
                    <div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <lable>Tên sản phẩm</lable>
                                <strong class="text-danger">*</strong>
                                <input type="text" value="{{$product->name}}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <strong class="text-danger">*</strong>
                                <input type="number" value="{{$product->price}}"
                                       class="form-control @error('price') is-invalid  @enderror"
                                       name="price">
                                @error('price')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Ảnh</label>
                                <input type="file" name="image" class="form-control-file"">
                            </div>
                            <div class="form-group">
                                <label><b>Loại sản phẩm</b></label>
                                <select name="type" id="type">
                                    <option value="Cà Phê">Cà Phê</option>
                                    <option value="Kem">Kem</option>
                                </select>
                            </div>
                            </br>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <button class="btn btn-secondary"
                                    onclick="window.history.go(-1); return false;">Hủy
                            </button>
                            <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
