@extends('master')
@section('content')
    <main>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
        <div class="_1WxWzVAvniTHHjC7dhoJJG" data-reactid="30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row pageMargin" data-reactid="35">
                            <!-- react-empty: 36 -->
                            <div class="boxContentLeft col-md-9">
                                <div class="white-box row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <h1>Quản lý tài khoản</h1></div><br>
                                        <div data-reactid="50"></div>
                                        <div class="_1Xxc1lotHxJaz_2EttIbaU hidden-xs" data-reactid="51">
                                            <div class="_3koXJCkMo96Va7IafPEleg pull-left" data-reactid="52">
                                                @if(empty($datauser->img))
                                                    <img class="pull-left" src="source/image/avatar/aq.png" width="80px" height="80px">
                                                @endif
                                                @if($datauser->img)
                                                <img class="pull-left" src="source/image/avatar/{{$datauser->img}} " width="80px" height="80px">
                                                    @endif
                                            </div>
                                            <div class="_25H1ekVUjqjsYJSnHq6sTf pull-left">

                                                <div><span>&emsp;&emsp; {{$datauser->name}} </span></div>
                                                <span data-reactid="60"><a href="/showprofile">Xem thông tin của bạn</a></span></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div data-reactid="63">
                                            <div class="row relativeBox" data-reactid="64">
                                                <div class="_3F9hPtMjdXdMaR83ewg822">
                                                    <ul class="_1u8NAUHia4-dT1Gln1dAw9 nav nav-tabs" id="adTabBar">
                                                        <li>
                                                            <a href="#">
                                                                CHỜ XÁC NHẬN
                                                            </a>

                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                               ĐÃ MUA
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                ĐÃ HỦY
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="clearfix" data-reactid="85"></div>
                                                </div>
                                                <div data-reactid="86"></div>
                                                <div data-reactid="87"></div>
                                            </div>
                                            <div data-reactid="88"></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </main>
@endsection
