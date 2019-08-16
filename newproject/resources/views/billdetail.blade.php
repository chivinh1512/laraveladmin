@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td>Các sản phẩm</td>
                <td>Số Lượng</td>
                <td>Giá</td>
                <td>Tổng</td>
            </tr>
                @forelse($billdetail as $bi)
                <tr>
                    <td>{{$bi->sanpham}} </td>
                    <td>{{$bi->amount}}</td>
                    <td>{{$bi->price}}</td>
                    <td>{{$bi->total}}</td>
                </tr>
                    @empty
                <div style="padding-left: 30px">Không có kết quả</div>
                    @endforelse
        </table>
        <a href="/qlbills/{id}/2">Xác nhận đơn hàng</a>
        <a href="/qlbills/{id}/3">Hủy đơn hàng</a></td>

    </div>
    </div>
@endsection