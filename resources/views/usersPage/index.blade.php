@extends("user-layout-home")
@section("main")
    <div class="l-bt-fixed-to-top" id="bt-to-top">
        <div class="bt-icon"><i class="fab fa-telegram-plane"></i> TOP</div>
    </div>
    <div class="box_header">
        <div class="baner-gb bn_copy position-relative">
            <header>
                <div class="pd-tb-2px position-relative">
                    <div class="bg-white-op"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm d-none d-sm-block text-white line_h_28">         </div>
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
                                    <li class="list-inline-item  padding-right-10px"><a class="text-white" href="{{ route('register') }}"><i class="fa fa-lock padding-right-5px"></i> Đăng Ký</a></li>
                                    <li class="list-inline-item"><a class="text-white" href="{{ route('login') }}"><i class="fa fa-user-plus padding-right-5px"></i> Đăng Nhập</a></li>                            </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-output position-relative">
                    <div class="bg-out-op"></div>
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
                                            <a class="" href="/site/?act=khuyenmai">PAYMENT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" href="/site/?act=contact">LIÊN HỆ</a>
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
                    <div class="bg-out-op-fixed"></div>
                    <div class="container header-in">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-3">
                                <a id="logo" href="index.php" class="d-inline-block margin-tb-10px"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                                <!-- <a class="mobile-toggle" href="#"><i class="fa fa-navicon"></i></a> -->
                            </div>
                            <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9  col-9 aligh-items-right">
                                <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                                    <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main-fixed">
                                        <li class="nav-item active">
                                            <a class="" href="/site/index.php">HOME <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" href="/site/?act=khuyenmai">PAYMENT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="" href="/site/?act=contact">LIÊN HỆ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="pd-r-0"href="/site/?act=about">VỀ CHÚNG TÔI</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class=" dropdown-toggle fz-12vw" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="far fa-user-circle"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                                                <a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div class="l-banner-content">
                <div class="l-tu display-inlineblock">SGN</div>
                <div class="display-inlineblock">TO</div>
                <div class="l-den display-inlineblock ">SBM</div>
                <!-- <h1 >SGN</h1> -->
            </div>
        </div>
    </div>
    <div class="background-light-grey">
        <div class="container">
            <div id="l-search-filter" class="l-search-filter">
                <div class="l-div-tren">
                    <div class="l-sel-tren">
{{--                        <select name="" id="select_awe_tren-1" class="selectawe-tren l-sl-option-tren" data-callback="my_callback_1" data-placeholder="Khứ Hồi">--}}
{{--                            <option value="1" id="khuhoi">Khứ Hồi</option>--}}
{{--                            <option value="0" id="motchieu">Một Chiều</option>--}}
{{--                        </select>--}}
                    </div>
                    <div class="l-sel-tren">
                        <select name="" id="select_awe_tren-2" class="selectawe-tren l-sl-option-tren" data-callback="my_callback_2" data-placeholder="Phổ Thông">
                            <option value="1"><i class="fas fa-fighter-jet" selected></i>Phổ thông</option>
                            <option value="2"><i class="fas fa-fighter-jet"></i>Thương gia</option>
                        </select>
                    </div>
                    <div class="l-sel-tren l-div-hangchon">
                        <div id="l_show_chon_ve">Người lớn </div>
                        <div class="l-box-qlity" id="l-box-qlity">
                            <div class="l-hang-chon">
                                <div class="l-left-hang-chon display-inlineblock">
                                    <div class="l-title-hangchon">
                                        Người Lớn
                                    </div>
                                </div>
                                <div class="l-right-hang-chon display-inlineblock">
                                    <div class="d-flex he-20px">
                                        <i class="fas fa-minus light-hight-10px l-minus" id="l-minus-nguoilon"></i>
                                        <input class="bg-none border-none input_qlity text-center" id="nguoilon" name="nguoilon" type="number" value="1" placeholder="1">
                                        <i class="fas fa-plus light-hight-10px l-plus l-plus_hover" id="l-plus-nguoilon"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="l-hang-chon">
                                <div class="l-left-hang-chon display-inlineblock">
                                    <div class="l-title-hangchon">
                                        Trẻ em (Dưới 2 tuổi ngồi cùng)
                                    </div>
                                </div>
                                <div class="l-right-hang-chon display-inlineblock">
                                    <div class="d-flex he-20px">
                                        <i class="fas fa-minus light-hight-10px l-minus" id="l-minus-beduoi2"></i>
                                        <input class="bg-none border-none input_qlity text-center" id="beduoi2" name="beduoi2" type="number" placeholder="0">
                                        <i class="fas fa-plus light-hight-10px l-plus l-plus_hover" id="l-plus-beduoi2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="l-hang-chon margin-0px">
                                <div class="l-left-hang-chon display-inlineblock">
                                    <div class="l-title-hangchon">
                                        Trẻ em (Ngồi riêng)
                                    </div>
                                </div>
                                <div class="l-right-hang-chon display-inlineblock">
                                    <div class="d-flex he-20px">
                                        <i class="fas fa-minus light-hight-10px l-minus" id="l-minus-betren2"></i>
                                        <input class="bg-none border-none input_qlity text-center" id="betren2" name="betren2" type="number" placeholder="0">
                                        <i class="fas fa-plus light-hight-10px l-plus l-plus_hover" id="l-plus-betren2"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-sel-tren">

                    </div>
                </div>
                <div class="l-div-duoi khuhoi">
                    <div class="sel">
                        <select name="" id="select_awe_1" class="selectawe" data-callback="my_callback_tu" data-placeholder="Từ">
                            <option data-id="1" value="VCA">Cần Thơ(VCA)</option><option data-id="2" value="DAD">Đà Nẵng(DAD)</option><option data-id="3" value="HPH">Hải Phòng(HPH)</option><option data-id="4" value="HAN">Hà Nội(HAN)</option><option data-id="5" value="SGN"> Hồ Chí Minh(SGN)</option><option data-id="6" value="CXR">Khánh Hòa(CXR)</option><option data-id="7" value="PQC">Kiên Giang(PQC)</option><option data-id="8" value="VII">Nghệ An(VII)</option><option data-id="9" value="HUI">Thừa Thiên – Huế(HUI)</option><option data-id="10" value="VCS">Bà Rịa-Vũng Tàu(VCS)</option><option data-id="11" value="SQH">Sơn La(SQH)</option><option data-id="12" value="UIH">Bình Định(UIH)</option><option data-id="13" value="CAH">Cà Mau(CAH)</option><option data-id="14" value="BMV">Đắk Lắk(BMV)</option><option data-id="15" value="DIN">Điện Biên(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Kiên Giang(VKG)</option><option data-id="18" value="DLI">Lâm Đồng(DLI)</option><option data-id="19" value="TBB">Phú Yên(TBB)</option><option data-id="20" value="VDH">Quảng Bình(VDH)</option><option data-id="21" value="VCL">Quảng Nam(VCL)</option><option data-id="22" value="THD">Thanh Hóa(THD)</option>                    </select>
                    </div>
                    <div class="sel">
                        <select name="" id="select_awe_2" class="selectawe" data-callback="my_callback_den" data-placeholder="Đến">
                            <option data-id="1" value="VCA">Cần Thơ(VCA)</option><option data-id="2" value="DAD">Đà Nẵng(DAD)</option><option data-id="3" value="HPH">Hải Phòng(HPH)</option><option data-id="4" value="HAN">Hà Nội(HAN)</option><option data-id="5" value="SGN"> Hồ Chí Minh(SGN)</option><option data-id="6" value="CXR">Khánh Hòa(CXR)</option><option data-id="7" value="PQC">Kiên Giang(PQC)</option><option data-id="8" value="VII">Nghệ An(VII)</option><option data-id="9" value="HUI">Thừa Thiên – Huế(HUI)</option><option data-id="10" value="VCS">Bà Rịa-Vũng Tàu(VCS)</option><option data-id="11" value="SQH">Sơn La(SQH)</option><option data-id="12" value="UIH">Bình Định(UIH)</option><option data-id="13" value="CAH">Cà Mau(CAH)</option><option data-id="14" value="BMV">Đắk Lắk(BMV)</option><option data-id="15" value="DIN">Điện Biên(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Kiên Giang(VKG)</option><option data-id="18" value="DLI">Lâm Đồng(DLI)</option><option data-id="19" value="TBB">Phú Yên(TBB)</option><option data-id="20" value="VDH">Quảng Bình(VDH)</option><option data-id="21" value="VCL">Quảng Nam(VCL)</option><option data-id="22" value="THD">Thanh Hóa(THD)</option>                    </select>
                    </div>
                    <div class="sel verticle-top">
                        <input type="text" name="khuhoi_ngaydi" class="l-input l-date placeholder-icon" id="khuhoi_ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                    </div>
                    <div class="sel verticle-top">
                        <input type="text" name="khuhoi_ngayve" class="l-input l-date placeholder-icon" id="khuhoi_ngayve" placeholder="&#xf073; Ngày Về" style="font-family:Arial, FontAwesome">
                    </div>
                    <a class="l-a-search"><button class="l-bt-search" id="l-bt-searchkh" type="button">Tìm kiếm</button></a>
                </div>
                <div class="l-div-duoi motchieu display_none ">
                    <div class="sel l-w-28pt">
                        <select name="" id="select_awe_1_motchieu" class="selectawe" data-callback="my_callback_tu_motchieu" data-placeholder="Từ">
                            <option data-id="1" value="VCA">Cần Thơ(VCA)</option><option data-id="2" value="DAD">Đà Nẵng(DAD)</option><option data-id="3" value="HPH">Hải Phòng(HPH)</option><option data-id="4" value="HAN">Hà Nội(HAN)</option><option data-id="5" value="SGN"> Hồ Chí Minh(SGN)</option><option data-id="6" value="CXR">Khánh Hòa(CXR)</option><option data-id="7" value="PQC">Kiên Giang(PQC)</option><option data-id="8" value="VII">Nghệ An(VII)</option><option data-id="9" value="HUI">Thừa Thiên – Huế(HUI)</option><option data-id="10" value="VCS">Bà Rịa-Vũng Tàu(VCS)</option><option data-id="11" value="SQH">Sơn La(SQH)</option><option data-id="12" value="UIH">Bình Định(UIH)</option><option data-id="13" value="CAH">Cà Mau(CAH)</option><option data-id="14" value="BMV">Đắk Lắk(BMV)</option><option data-id="15" value="DIN">Điện Biên(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Kiên Giang(VKG)</option><option data-id="18" value="DLI">Lâm Đồng(DLI)</option><option data-id="19" value="TBB">Phú Yên(TBB)</option><option data-id="20" value="VDH">Quảng Bình(VDH)</option><option data-id="21" value="VCL">Quảng Nam(VCL)</option><option data-id="22" value="THD">Thanh Hóa(THD)</option>                    </select>
                    </div>
                    <div class="sel l-w-28pt">
                        <select name="" id="select_awe_2_motchieu" class="selectawe" data-callback="my_callback_den_motchieu" data-placeholder="Đến?">
                            <option data-id="1" value="VCA">Cần Thơ(VCA)</option><option data-id="2" value="DAD">Đà Nẵng(DAD)</option><option data-id="3" value="HPH">Hải Phòng(HPH)</option><option data-id="4" value="HAN">Hà Nội(HAN)</option><option data-id="5" value="SGN"> Hồ Chí Minh(SGN)</option><option data-id="6" value="CXR">Khánh Hòa(CXR)</option><option data-id="7" value="PQC">Kiên Giang(PQC)</option><option data-id="8" value="VII">Nghệ An(VII)</option><option data-id="9" value="HUI">Thừa Thiên – Huế(HUI)</option><option data-id="10" value="VCS">Bà Rịa-Vũng Tàu(VCS)</option><option data-id="11" value="SQH">Sơn La(SQH)</option><option data-id="12" value="UIH">Bình Định(UIH)</option><option data-id="13" value="CAH">Cà Mau(CAH)</option><option data-id="14" value="BMV">Đắk Lắk(BMV)</option><option data-id="15" value="DIN">Điện Biên(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Kiên Giang(VKG)</option><option data-id="18" value="DLI">Lâm Đồng(DLI)</option><option data-id="19" value="TBB">Phú Yên(TBB)</option><option data-id="20" value="VDH">Quảng Bình(VDH)</option><option data-id="21" value="VCL">Quảng Nam(VCL)</option><option data-id="22" value="THD">Thanh Hóa(THD)</option>                    </select>
                    </div>
                    <div class="sel verticle-top l-w-28pt">
                        <input type="text" name="motchieu-ngaydi" class="l-input l-date placeholder-icon" id="motchieu-ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                    </div>
                    <a class="l-a-search"><button class="l-bt-search" type="button" id="l-bt-searchmc">Tìm kiếm</button></a>
                </div>
            </div>

        </div>
    </div>
    <div class="box_main background-light-grey">
        <div class="container pd-bot-100px">
            <div class="section-title-center">
                <h1 class="title fz-2vw"><span class="color_main">Ưu</span> Đãi</h1>
                <span class="section-title-des fz-1vw">Nhấp vào đăng kí để nhận nhiều thông tin ưu đãi ngay</span>
            </div>
            @foreach($chuyenbay as $item)
            <div class="mt-5 row box_ve mr-bot-40px background-white mr-0px">
                <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                    <div class="hotel-img position-relative line-height-150px">
                        <img src="{{asset('assets/img/bamboo.png')}}" alt="">
                        <div class="hover-option background-main-color opacity-6">
                            <h3 class="text-center text-white padding-top-n-25 "></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 border-grey1 pd-0px">
                    <div class="pd-10px">
                        <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:{{$item->sanbay1->thanhpho}} </span>Đến: {{$item->sanbay2->thanhpho}}  </a></h3>
                        <a href="{{url("/usersPage/contract",['idchuyenbay'=>$item->idchuyenbay])}}" class="btn btn-hoang text-white" style="margin-right: 20px">Chọn</a>
                        <div class="date mr-lr-15px">
                            <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                <i class="fa fa-chevron-up mr-right-5px"></i>
                                Ngày đi:
                                <span class="text-third-color mr-right-5px">{{$item->ngaydi}}</span>
                            </a>
                            <small class="text-uppercase text-extra-small">
                                <a href="#" class="cl-te-grey fz-0p7rem">
                                    <i class="fa fa-chevron-down mr-right-5px"></i>
                                    Ngày đến:
                                    <span class="text-third-color mr-right-5px">{{$item->ngayden}}</span> </a>
                            </small>
                        </div>
                        <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                            <strong class="text-medium text-third-color padding-right-5px mr-4">Vé Thường {{$item->giavethuong}}<span>.000 Vnđ</span></strong>
                            <strong class="text-medium text-third-color padding-right-5px mr-4">Vé Vip {{$item->giavevip}}<span>.000 Vnđ</span></strong>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
            <div class="row mr-top-8pt">
                <div class="l-box-ud">
                    <a href="/site/?act=khuyenmai">
                        <div class="l-box-ud-img">
                            <img src="{{asset('assets/img/vietject_bg.jpg')}}" alt="">
                        </div>
                        <div class="l-thongtin-ud">
                        </div>
                        <div class="l-btn-dat">
                            <div class="button-effect">
                                <a class="effect effect-5 l-hover_a_effect l-bt_bg_datngay" href="/site/?act=khuyenmai" title="dat ngay">VietJetAir</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="l-box-ud">
                    <a href="/site/?act=khuyenmai">
                        <div class="l-box-ud-img">
                            <img src="{{asset('assets/img/vietnameairline_bg.jpg')}}" alt="">
                        </div>
                        <div class="l-thongtin-ud">
                        </div>
                        <div class="l-btn-dat">
                            <div class="button-effect">
                                <a class="effect effect-5 l-hover_a_effect l-bt_bg_datngay" href="/site/?act=khuyenmai" title="dat ngay">Vietnam Airline</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="l-box-ud">
                    <a href="/site/?act=khuyenmai">
                        <div class="l-box-ud-img">
                            <img src="{{asset('assets/img/bamboairline_bg.jpg')}}" alt="">
                        </div>
                        <div class="l-thongtin-ud">
                        </div>
                        <div class="l-btn-dat">
                            <div class="button-effect">
                                <a class="effect effect-5 l-hover_a_effect l-bt_bg_datngay" href="/site/?act=khuyenmai" title="dat ngay">Bamboo Airlines</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="l-box-ud mr-0">
                    <a href="/site/?act=khuyenmai">
                        <div class="l-box-ud-img">
                            <img src="{{asset('assets/img/pacificairlines_bg.jpg')}}" alt="">
                        </div>
                        <div class="l-thongtin-ud">
                        </div>
                        <div class="l-btn-dat">
                            <div class="button-effect">
                                <a class="effect effect-5 l-hover_a_effect l-bt_bg_datngay" href="/site/?act=khuyenmai" title="dat ngay">Pacific Airlines</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row box-map">
            <!-- <div class="map pd-t-100px"> -->
            <div class="container pd-t-100px">
                <div class="row justify-content-end">
                    <div class="col-lg-8 te-al-left">
                        <div class="section-title-left mr-bot-60px">
                            <h1 class="title fz-2vw"><span class="color_main">Thành Phố</span> Lớn</h1>
                            <span class="section-title-des fz-1vw">
                  với một vài đất nước, dẫu cho nơi đây là lần đầu tiên người ta đến. </span>
                        </div>
                        <div class="row mr-top-10pt">
                            <div class="col-md-6">
                                <div class="box-city background-white border mr-bot-6pt">
                                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img
                                                src="{{asset('assets/img/citie-1.jpg')}}" alt=""></a></div>
                                    <div class="city-body">
                                        <div class="pd-14px">
                                            <!--  -->
                                            <a class="d-block text-uppercase name-city" href="#">Đà Lạt </a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span
                                                    class="text-third-color">673</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">Sức chứa: <span class="text-third-color"> 38.000</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-city background-white border mr-bot-6pt">
                                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img
                                                src="{{asset('assets/img/citie-2.jpg')}}" alt=""></a></div>
                                    <div class="city-body">
                                        <div class="pd-14px">
                                            <a class="d-block text-uppercase name-city" href="#">Hồ Chí Minh</a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span
                                                    class="text-third-color">641</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">Sức chứa:<span class="text-third-color"> 44.000</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-city background-white border mr-bot-6pt">
                                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img
                                                src="{{asset('assets/img/citie-3.jpg')}}" alt=""></a></div>
                                    <div class="city-body">
                                        <div class="pd-14px">
                                            <a class="d-block text-uppercase name-city" href="#">Hà Nội </a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span
                                                    class="text-third-color">511</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">Sức chứa:<span class="text-third-color"> 31.000</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-city background-white border mr-bot-6pt">
                                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img
                                                src="{{asset('assets/img/citie-4.jpg')}}" alt=""></a></div>
                                    <div class="city-body">
                                        <div class="pd-14px">
                                            <a class="d-block text-uppercase name-city" href="#">Đà Nẵng </a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Khách sạn: <span
                                                    class="text-third-color">1.016</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">Sức chứa:<span class="text-third-color"> 69.000</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
        <div class="background-light-grey W-100 pd-t-100px pd-bot-50px">
            <div class="container pd-bot-80px">
                <div class="row">
                    <div class="col-lg-6 te-al-left">
                        <div class="section-title-left mr-bot-70px">
                            <h1 class="title fz-2vw"><span class="color_main">Bài </span> Viết</h1>
                            <span class="section-title-des fz-1vw">Kênh tin tức về du lịch, trao đổi, chia sẻ kinh nghiệm</span>
                        </div>
                        <div class="news-cart background-white border mr-bottom-35px">
                            <div class="float-sm-left mr-right-30px box-img-news">
                                <a href="?act=dtBlog&idbl=53&iddm=2"><img
                                        class="w-100_h-100" src="../uploads/baovevoi.jpg" alt=""></a>
                            </div>
                            <div class="padding-20px h-123px">
                                <a href="?act=dtBlog&idbl=53&iddm=2"
                                   class="d-block cl-te-black fz-09 font-weight-bold mr-bot-15px opacity-0p8">“Du lịch đúng cách”- giải pháp giúp bảo vệ những chú voi cuối cùng trên trái đất</a>
                                <span class="fz-07 mr-right-30px">Tác giả : <a href="#" class="color_main">admin</a></span>
                                <span class="fz-07">Ngày :  <a href="#" class="color_main">2020-12-12</a></span>
                            </div>
                            <!-- <div class="clearfix"></div> -->
                        </div>
                        <div class="news-cart background-white border mr-bottom-35px">
                            <div class="float-sm-left mr-right-30px box-img-news">
                                <a href="?act=dtBlog&idbl=54&iddm=2"><img
                                        class="w-100_h-100" src="../uploads/cam-nang-du-lich-phu-quoc-cover.jpg" alt=""></a>
                            </div>
                            <div class="padding-20px h-123px">
                                <a href="?act=dtBlog&idbl=54&iddm=2"
                                   class="d-block cl-te-black fz-09 font-weight-bold mr-bot-15px opacity-0p8">Cẩm nang du lịch Phú Quốc cho chuyến nghỉ dưỡng tuyệt vời tại đảo thiên đường</a>
                                <span class="fz-07 mr-right-30px">Tác giả : <a href="#" class="color_main">admin</a></span>
                                <span class="fz-07">Ngày :  <a href="#" class="color_main">2020-12-12</a></span>
                            </div>
                            <!-- <div class="clearfix"></div> -->
                        </div>

                    </div>
                    <div class="col-lg-6 te-al-left">
                        <div class="section-title-left mr-bot-70px">
                            <h1 class="title fz-2vw"><span class="color_main">Khách Hàng </span> Nói Về Chúng Tôi</h1>
                            <span class="section-title-des fz-1vw">Hãy góp ý cho chúng tôi giúp chúng tôi phục vụ bạn tốt hơn</span>
                        </div>
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active background-white padding-30px border">
                                    <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-1.jpg')}}" alt=""></div>
                                    <h5 class="text-medium cl-te-black text-uppercase">Rabie Elkheir</h5>
                                    <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý</span></i>
                                    <i class="d-block mr-tb-20px text-medium text-grey-4">Travelz đưa các bạn tới khắp nơi trên Việt Nam. Với những thứ tốt nhất có thể. Chúng tôi đưa bạn đến những nơi xa xôi trên mảnh Đất Việt này và chúng tôi cam kết.
                                        Ở đâu rẻ hơn, chúng tôi hoàn tiền </i>
                                </div>
                                <div class="carousel-item background-white padding-30px border">
                                    <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-2.png')}}" alt=""></div>
                                    <h5 class="text-medium cl-te-black text-uppercase">Mark Zuckerberg</h5>
                                    <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý</span></i>
                                    <i class="d-block mr-tb-20px text-medium text-grey-4">Nếu bạn có thắc mắc về thông tin,
                                        giá vé hay bất cứ gì. Hãy liên hệ với chúng tôi ngay, chúng tôi có người giải đáp
                                        cho bạn ngay hoặc là lâu nhất là 24H. Xin cảm ơn!</i>
                                </div>
                                <div class="carousel-item background-white padding-30px border">
                                    <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-3.png')}}" alt=""></div>
                                    <h5 class="text-medium cl-te-black text-uppercase">Nguyên Nhất Cương</h5>
                                    <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý nhân sự</span></i>
                                    <i class="d-block mr-tb-20px text-medium text-grey-4">Các bạn đang tìm một công việc
                                        tốt? Làm việc văn phòng máy lạnh sẽ giúp bạn có tinh thần tốt hơn. Hãy đến với ngôi
                                        nhà chung của chúng tôi. Liên hệ 0983232323</i>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                               data-slide="prev">
                                <span class="" aria-hidden="true"><i class="fas fa-chevron-left fz-2vw"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                               data-slide="next">
                                <span class="" aria-hidden="true"><i class="fas fa-chevron-right fz-2vw"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
