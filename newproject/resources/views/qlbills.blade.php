@extends('admin')
@section('content')
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <td>Mã đơn hàng</td>
                <td>Ngày đặt hàng</td>
                <td>Id người mua</td>
                <td>Giá tiền</td>
                <td>Ghi chú</td>
                <td>Chi tiết đơn hàng</td>
            </tr>
            @forelse($databills as $da)
                <tr>
                    <td>{{$da->id}} </td>
                    <td>{{$da->created_at}}</td>
                    <td>{{$da->iduser}}</td>
                    <td>{{$da->total}}</td>
                    <td>{{$da->note}}</td>
                    <td>  <a href="qlbills/{{$da->id}}">Xem</a> &emsp;
                        <a style="color: #ccc">
                            @if($da->status==1)
                              Chờ xác nhận
                            @endif</a>
                    </td>
                </tr>
            @empty
                <div style="padding-left: 30px">Không có kết quả</div>
            @endforelse


        </table>

    </div>
        <div class="col-sm-1"></div>
@endsection