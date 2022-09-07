@extends("user-layout")
@section("main")
    <div class="l-bt-fixed-to-top" id="bt-to-top">
        <div class="bt-icon"><i class="fab fa-telegram-plane"></i> TOP</div>
    </div>
    <header>
        <div class="background-blue-color pd-tb-2px">
            <div class="container">
                <div class="row">
                    <div class="col-sm d-none d-sm-block text-white line_h_28">MỘT PHÚT LÀ XONG</div>
                    <div class="col-sm">
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <li class="list-inline-item"><a class="facebook text-white" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="youtube text-white" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="linkedin text-white" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="google text-white" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="twitter text-white" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a class="rss text-white" href="#"><i class="fas fa-rss" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm d-none d-sm-block line_h_28">
                        <ul class="float-right margin-0px text-white mr-0">
                            <li class="list-inline-item  padding-right-10px"><a class="text-white" href="?act=showhs"><i class="fa fa-user-circle-o"></i> anhduoc123</a></li>
                            <li class="list-inline-item"><a class="text-white" href="?act=user&logout=1"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a></li>                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                        <!-- <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a> -->
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9 col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="/site/index.php">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="/site/?act=timve" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="">
                                        CHECK IN ONLINE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=khuyenmai">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=contact">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=blog">BÀI VIẾT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pd-r-0" style="padding-right: 0px;" href="/site/?act=about">VỀ CHÚNG TÔI</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header-output-fixed" id="l-menu-fixed">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                        <!-- <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a> -->
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9  col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="/site/index.php">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="/site/?act=timve" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="">
                                        CHECK IN ONLINE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=khuyenmai">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=contact">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="/site/?act=blog">BÀI VIẾT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pd-r-0"href="/site/?act=about">VỀ CHÚNG TÔI</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle fz-12vw" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="?act=showhs">anhduoc123</a>
                                        <a class="dropdown-item" href="?act=user&logout=1">Đăng xuất</a>                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="padding-tb-40px background-light-grey">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="p-2 flight-post background-white border-bottom-1 border-grey-1 with-hover box-shadow-hover margin-bottom-40px">
                        <div class="bg-white border border-grey-1 padding-30px margin-tb-30px">
                            <div class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">
                                Thông tin vé
                            </div>
                            <form method="post" role="form" action="{{"/usersPage/contract/"}}">
                            @csrf
                            <div class="form-row mt-3">
                                <div style="display: none" class="form-group col-md-6">
                                    <label for="">Chuyến bay</label>
                                    <input type="text"  value="{{$idchuyenbay}}" name="idchuyenbay" class="form-control" id="idchuyenbay" placeholder="">
                                    @error("idchuyenbay")
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="pdt10px">
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-6">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text"  name="sdt"  class="form-control" id="sdt" placeholder="">
                                        @error("sdt")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
{{--                                <div style="display: none"  class="form-group col-md-6">--}}
{{--                                        <label for="">Ngày đặt vé</label>--}}
{{--                                        <input type="datetime-local" style="display: none" name="ngaydatve" placeholder="">--}}
{{--                                        @error("ngaydatve")--}}
{{--                                        <p class="text-danger">{{$message}}</p>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                <div style="display: none"  class="form-group col-md-6">--}}
{{--                                    <label for="">Trạng thái</label>--}}
{{--                                    <input type="text" style="display: none" name="trangthai" placeholder="">--}}
{{--                                    @error("trangthai")--}}
{{--                                    <p class="text-danger">{{$message}}</p>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Số ghế thường: {{$ghethuong}}</label>
                                        <input type="text" style="display: none" name="ghethuong" value="{{$ghethuong}}" class="form-control" id="ghethuong" placeholder="">
                                        @error("ghethuong")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Số ghế vip: {{$ghevip}}</label>
                                        <input type="text" style="display: none" name="ghevip" value="{{$ghevip}}" class="form-control" id="ghevip" placeholder="">
                                        @error("ghevip")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Thời gian đi: {{$ngaydi}}</label>
                                        @error("ghethuong")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Thời gian đến: {{$ngayden}}</label>
                                        @error("ghevip")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Nơi đi: {{$noidi->thanhpho}}</label>
                                        <input type="text" style="display: none" name="" value="{{$noidi->idsanbay}}" class="form-control" id="" placeholder="Enter Deposite">
                                        @error("Total")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Nơi đến: {{$noiden->thanhpho}}</label>
                                        <input type="text" style="display: none" name="" value="{{$noiden->idsanbay}}" class="form-control" id="" placeholder="Enter Deposite">
                                        @error("Total")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="">Total: {{$total}}</label>
                                        <input type="text" style="display: none" name="tongtien" value="{{$total}}" class="form-control" id="examplename" placeholder="Enter Deposite">
                                        @error("Total")
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <a href="{{url("/usersPage/index")}}" class="btn-sm btn-lg text-dark text-center uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Về trang chủ</a>
                                <button type="submit" class="btn-sm btn-lg  background-main-color text-white text-center text-uppercase rounded-0 padding-tb-10px padding-lr-30px">Xác nhận</button>
                            </div>
                            </form>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
