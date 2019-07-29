@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

        <form action="" method="post">
            @csrf
            Tên loại: <input type="text" class="form-control col-md-3" name="name" value="{{$cate->name}}">
            <input type="hidden" name="id" value="{{$cate->id}}">
            <input type="submit" name="update" class="btn btn-dark col-md-1 ml-3" value="update">
        </form>

    </div>
    <div class="col-sm-1"></div>
@endsection