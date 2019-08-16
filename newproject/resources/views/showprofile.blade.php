@extends('master')
@section('content')
    <style>
        .ab{
            position: absolute;
            background: #ccc;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 0 3px 0 rgba(0,0,0,.2);
            bottom: 0;
            left: 70px;
            z-index: 2;
            line-height: 52px;
            cursor: pointer;
            text-align: center;
        }
        .ac {
            background-image: url('source/image/avatar/cam.jpg');
            background-size: 25px 20px;
            width: 25px;
            height: 20px;
            display: inline-block;
        }
    </style>
    <main>
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <form action="" method="post">
                    @csrf()
                    <div class="col-md-4">
                        @if(empty($datauser->img))
                      <div style="margin-left: 50%; margin-top: 10%"; > <img style="border-radius: 50%;" class="pull-left" src="source/image/avatar/aq.png" width="230px" height="230px"> </div>
                        <div class="ab" style="margin-left: 65%;"><i class="ac"></i></div>
                        <input type="file" name="img" id="getfile" style="display: none" accept="image/jpeg, image/png" multiple="">
                            @endif
                        @if($datauser->img)
                            <div style="margin-left: 50%; margin-top: 10%"; > <img style="border-radius: 50%;" class="pull-left" src="source/image/avatar/{{$datauser->img}}" width="230px" height="230px"> </div>
                            <div class="ab" style="margin-left: 65%;"><i class="ac"></i></div>
                            <input type="file" name="img" id="getfile" style="display: none" accept="image/jpeg, image/png" multiple="">
                            @endif
                    </div>
                    <div class="col-md-6">
                    Ngày tham gia : <input type="text" value="{{$datauser->created_at}}" readonly>  <br>
                    Họ và tên: <input type="text" class="form-control" name="name" value="{{$datauser->name}}">
                    Số điện thoại: <input type="text" class="form-control" name="phone" value="{{$datauser->phone}}">
                    Email: <input type="text" class="form-control" name="email" value="{{$datauser->email}}" readonly>
                    Địa chỉ: <input type="text" class="form-control" name="address" value="{{$datauser->address}}"><br>
                        <input type="submit" name="edit" class="btn btn-dark" value="Sửa thông tin">
                    </div>
                </form>

            </div>
            <div class="col-md-1"></div>
        </div>
    </main>

@endsection

