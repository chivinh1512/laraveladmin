@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">

        <div class="row">

            <form action="" method="post">
                @csrf()
                Tên sản phẩm: <input type="text" class="form-control" name="name"><br>
                Hình: <input class="form-control" type="file" name="img"><br>
                Chọn danh mục:
                <select name="idcata">
                    @forelse($datacategory as $d)
                        <option value="{{$d->id}}">{{$d->name}}</option>
                    @empty
                        Không có kết quả
                    @endforelse
                </select><br><br>
                Giá tiền: <input type="text" class="form-control" name="price"><br>
                Chi tiết sản phẩm: <input type="text" class="form-control" name="detail"><br>
                <input type="submit" name="add" class="btn btn-dark" value="thêm">
            </form><br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>Mã sản phẩm</td>
                        <td>Tên sản phẩm</td>
                        <td>Hình</td>
                        <td>Giá tiền</td>
                        <td>Chi tiết sản phẩm</td>
                        <td>Thao tác</td>
                    </tr>
                    @forelse($dataproduct as $da)
                        <tr>
                            <td>{{$da->id}}</td>
                            <td>{{$da->name}}</td>
                            <td><img src="source/image/product/{{$da->img}}" style="width: 70px"/></td>
                            <td>{{$da->price}}</td>
                            <td>{{$da->detail}}</td>

                            <td>
                                <a href="qlproduct/delete/{{$da->id}}">Xóa</a>
                                <a href="qlproduct/edit/{{$da->id}}">Sửa</a></td>
                        </tr>
                    @empty
                        <div style="padding-left: 30px">Không có kết quả</div>
                    @endforelse
                </table>
                {{$dataproduct->links()}}
            </div>
            <div class="col-sm-1"></div>
@endsection