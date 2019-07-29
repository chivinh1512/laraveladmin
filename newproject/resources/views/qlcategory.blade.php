@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

        <form action="" method="post">
            @csrf
            Tên Loại: <input type="text" class="form-control col-md-3" name="name">
            <input type="submit" name="them" class="btn btn-dark col-md-1 ml-3" value="thêm">
        </form>
        <table class="table table-bordered">
            <tr>
                <td>Mã loại</td>
                <td>Tên loại</td>
                <td>thao tác</td>
            </tr>
            @forelse($data as $da)
                <tr>
                    <td>{{$da->id}}</td>
                    <td>{{$da->name}}</td>
                    <td>
                        <a href="qlcategory/delete/{{$da->id}}">Xóa</a>
                        <a href="qlcategory/edit/{{$da->id}}">Sửa</a>
                    </td>
                </tr>
            @empty
                <div style="padding-left: 30px">Không có kết quả</div>
            @endforelse
        </table>
    </div>
    <div class="col-sm-1"></div>
@endsection