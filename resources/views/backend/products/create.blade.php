@extends('frontend.layouts.master')
@section('title','Thêm mới sách')
@section('content')
    <h1 class="mt-4">Thêm mới sản phẩm</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('home.index')}}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{route('products.index')}}">Danh sách sản phẩm</a></li>
        <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
    </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">
                        <h3>THÊM SẢN PHẨM</h3></p>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('products.store') }}" class="form" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <lable><b>Tên sản phẩm</b></lable>
                                <strong class="text-danger">*</strong>
                                <input type="text" value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       name="name">
                                @error('name')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label><b>Giá</b></label>
                                <strong class="text-danger">*</strong>
                                <input type="number" value="{{ old('price') }}"
                                       class="form-control @error('price') is-invalid  @enderror"
                                       name="price">
                                @error('price')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="image"><b>Chọn hình:</b></label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <br>
                            <div class="form-group">
                                <label><b>Loại sản phẩm</b></label>
                                <select name="type" id="type">
                                    <option value="Cà Phê">Cà Phê</option>
                                    <option value="Kem">Kem</option>
                                </select>
                            </div>
                            </br>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                            <a href="{{route('home.index')}}" type="button">Trang chủ</a>
                            <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
