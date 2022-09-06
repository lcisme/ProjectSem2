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
                            <li class="list-inline-item  padding-right-10px"><a class="text-white" href="?act=signup"><i class="fa fa-lock padding-right-5px"></i> Đăng Ký</a></li>
                            <li class="list-inline-item"><a class="text-white" href="?act=login"><i class="fa fa-user-plus padding-right-5px"></i> Đăng Nhập</a></li>                        </ul>
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
                                        <a class="dropdown-item" href="?act=signup">Đăng ký</a>
                                        <a class="dropdown-item" href="?act=login">Đăng nhập</a>                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <link rel="stylesheet" href="{{asset('assets/css/long/chonghe.css')}}"><script src='{{asset('assets/jquery/showghetg.js')}}'></script>
    <main class="">
        <div class="l-bt_next_fixed">
            <a href=""><i class="fas fa-arrow-circle-right" id="tieptucthuonggia"></i></a>
        </div>
        <div class="l-bt_close" id="huyghe">
            <a ><i class="fa fa-close"></i></a>
        </div>
        <div class="text-center">
            <div class="row w-100 mr-0 pd-tb-100px background-cl-3">
                <div class="l-canh-trai l-position-absolute"></div>
                <div class="l-ghe-may-bay">
                    <div class="title cl-te-black fa-w-12 fz-12vw fw-700 opacity-0p7">Tùy Chọn Chổ Ngồi</div>
                    <div class="l-chu-thich">
                        <div class="row">
                            <input type="hidden" id="idcb" value="80">
                            <div class="l-box-room-bg-none">
                                <div class="l-color-thuong-gia l-css-box-color d-inline-block"></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Thương gia trống</div>
                            </div>
                            <div class="l-box-room-bg-none mr-0">
                                <div class="l-color-pho-thong l-css-box-color d-inline-block"></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Phổ thông trống</div>
                            </div>
                            <div class="l-box-room-bg-none">
                                <div class="l-color-da-chon l-css-box-color d-inline-block"></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã chọn</div>
                            </div>
                            <div class="l-box-room-bg-none mr-0">
                                <div class="l-color-co-nguoi-dat l-css-box-color d-inline-block "></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã có người</div>
                            </div>
                        </div>
                    </div>
                    <div class="l-chu-thich-fixed">
                        <div class="row">
                            <div class="l-box-room-bg-none">
                                <div class="l-color-thuong-gia l-css-box-color d-inline-block"></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Thương gia trống</div>
                            </div>
                            <div class="l-box-room-bg-none mr-0">
                                <div class="l-color-pho-thong l-css-box-color d-inline-block"></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Hạng Phổ thông trống</div>
                            </div>
                            <div class="l-box-room-bg-none">
                                <div class="l-color-da-chon l-css-box-color d-inline-block"></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã chọn</div>
                            </div>
                            <div class="l-box-room-bg-none mr-0">
                                <div class="l-color-co-nguoi-dat l-css-box-color d-inline-block "></div>
                                <div class="l-noi-dung-chuthich d-inline-block l-w-70pt l-mr-l-3pt fz-1p1vw">Đã có người</div>
                            </div>
                        </div>
                    </div>
                    <div class="l-thuonggia text-center">
                        <div class="l-loi-thoat">
                            <div class="row">
                                <div class="l-box-room l-wc-trenmaybay">
                                    <i class="fas fa-restroom"></i>
                                </div>
                                <div class="l-box-room l-wc-trenmaybay mr-0">
                                    <i class="fas fa-restroom"></i>
                                </div>
                                <div class="l-loi-thoat-left">
                                    <p><i class="fas fa-caret-left"></i> LỐI THOÁT HIỂM</p>
                                </div>
                                <div class="l-loi-thoat-right">
                                    <p>LỐI <i class="fas fa-caret-right"></i> THOÁT HIỂM </p>
                                </div>
                            </div>
                        </div>
                        <div id="ghetg">
                            <div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >1</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large  mr-right-10pt">2</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >3</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >4</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >5</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large  mr-right-10pt">6</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >7</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >8</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >9</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large l-ghe-active mr-right-10pt">10</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large l-ghe-active" >11</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large l-ghe-active" >12</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >13</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large  mr-right-10pt">14</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >15</div><div class="l-ghe-thuonggia l-div-hover d-inline-block s-large " >16</div>
                        </div>
                    </div>
                    <div class="l-loi-thoat">
                        <div class="row">
                            <div class="l-loi-thoat-left"><i class="fas fa-caret-left"></i> LỐI THOÁT HIỂM</div>
                            <div class="l-loi-thoat-right">
                                <p>LỐI <i class="fas fa-caret-right"></i> THOÁT HIỂM </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-canh-phai l-position-absolute"></div>
            </div>
        </div>
        </div>
        </div>
    </main>
@endsection
