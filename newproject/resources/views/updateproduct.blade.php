@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

        <form action="" method="post">
            @csrf()
            Tên sản phẩm:
            <input type="text" class="form-control col-md-3" name="name" value="{{$product->name}}"><br>
            <input type="hidden" name="id" value="{{$product->id}}">
            Giá:
            <input type="text" name="price" value="{{$product->price}}"><br>

            Chi tiết sản phẩm:
            <input type="text" class="form-control col-md-3" name="detail" value="{{$product->detail}}"><br><br><br>
            Hình sản phẩm:
            <img src="source/image/product/{{$product->img}}" width="100px" height="100px">
            <input type="file" name="img"><br>
            <input type="submit" name="update" class="btn btn-dark col-md-1 ml-3" value="update">
            <div class="col-sm-1"></div>
        </form>
@endsection