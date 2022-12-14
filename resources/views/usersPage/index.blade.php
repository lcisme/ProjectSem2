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
                                    <li class="list-inline-item  padding-right-10px"><a class="text-white" href="{{ route('register') }}"><i class="fa fa-lock padding-right-5px"></i> ????ng K??</a></li>
                                    <li class="list-inline-item"><a class="text-white" href="{{ route('login') }}"><i class="fa fa-user-plus padding-right-5px"></i> ????ng Nh???p</a></li>                            </ul>
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
                                            <a class="" href="/site/?act=contact">LI??N H???</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="pd-r-0" style="padding-right: 0px;" href="/site/?act=about">V??? CH??NG T??I</a>
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
                                            <a class="" href="/site/?act=contact">LI??N H???</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="pd-r-0"href="/site/?act=about">V??? CH??NG T??I</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class=" dropdown-toggle fz-12vw" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="far fa-user-circle"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('register') }}">????ng k??</a>
                                                <a class="dropdown-item" href="{{ route('login') }}">????ng nh???p</a>
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
{{--                        <select name="" id="select_awe_tren-1" class="selectawe-tren l-sl-option-tren" data-callback="my_callback_1" data-placeholder="Kh??? H???i">--}}
{{--                            <option value="1" id="khuhoi">Kh??? H???i</option>--}}
{{--                            <option value="0" id="motchieu">M???t Chi???u</option>--}}
{{--                        </select>--}}
                    </div>
                    <div class="l-sel-tren">
                        <select name="" id="select_awe_tren-2" class="selectawe-tren l-sl-option-tren" data-callback="my_callback_2" data-placeholder="Ph??? Th??ng">
                            <option value="1"><i class="fas fa-fighter-jet" selected></i>Ph??? th??ng</option>
                            <option value="2"><i class="fas fa-fighter-jet"></i>Th????ng gia</option>
                        </select>
                    </div>
                    <div class="l-sel-tren l-div-hangchon">
                        <div id="l_show_chon_ve">Ng?????i l???n </div>
                        <div class="l-box-qlity" id="l-box-qlity">
                            <div class="l-hang-chon">
                                <div class="l-left-hang-chon display-inlineblock">
                                    <div class="l-title-hangchon">
                                        Ng?????i L???n
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
                                        Tr??? em (D?????i 2 tu???i ng???i c??ng)
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
                                        Tr??? em (Ng???i ri??ng)
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
                        <select name="" id="select_awe_1" class="selectawe" data-callback="my_callback_tu" data-placeholder="T???">
                            <option data-id="1" value="VCA">C???n Th??(VCA)</option><option data-id="2" value="DAD">???? N???ng(DAD)</option><option data-id="3" value="HPH">H???i Ph??ng(HPH)</option><option data-id="4" value="HAN">H?? N???i(HAN)</option><option data-id="5" value="SGN"> H??? Ch?? Minh(SGN)</option><option data-id="6" value="CXR">Kh??nh H??a(CXR)</option><option data-id="7" value="PQC">Ki??n Giang(PQC)</option><option data-id="8" value="VII">Ngh??? An(VII)</option><option data-id="9" value="HUI">Th???a Thi??n ??? Hu???(HUI)</option><option data-id="10" value="VCS">B?? R???a-V??ng T??u(VCS)</option><option data-id="11" value="SQH">S??n La(SQH)</option><option data-id="12" value="UIH">B??nh ?????nh(UIH)</option><option data-id="13" value="CAH">C?? Mau(CAH)</option><option data-id="14" value="BMV">?????k L???k(BMV)</option><option data-id="15" value="DIN">??i???n Bi??n(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Ki??n Giang(VKG)</option><option data-id="18" value="DLI">L??m ?????ng(DLI)</option><option data-id="19" value="TBB">Ph?? Y??n(TBB)</option><option data-id="20" value="VDH">Qu???ng B??nh(VDH)</option><option data-id="21" value="VCL">Qu???ng Nam(VCL)</option><option data-id="22" value="THD">Thanh H??a(THD)</option>                    </select>
                    </div>
                    <div class="sel">
                        <select name="" id="select_awe_2" class="selectawe" data-callback="my_callback_den" data-placeholder="?????n">
                            <option data-id="1" value="VCA">C???n Th??(VCA)</option><option data-id="2" value="DAD">???? N???ng(DAD)</option><option data-id="3" value="HPH">H???i Ph??ng(HPH)</option><option data-id="4" value="HAN">H?? N???i(HAN)</option><option data-id="5" value="SGN"> H??? Ch?? Minh(SGN)</option><option data-id="6" value="CXR">Kh??nh H??a(CXR)</option><option data-id="7" value="PQC">Ki??n Giang(PQC)</option><option data-id="8" value="VII">Ngh??? An(VII)</option><option data-id="9" value="HUI">Th???a Thi??n ??? Hu???(HUI)</option><option data-id="10" value="VCS">B?? R???a-V??ng T??u(VCS)</option><option data-id="11" value="SQH">S??n La(SQH)</option><option data-id="12" value="UIH">B??nh ?????nh(UIH)</option><option data-id="13" value="CAH">C?? Mau(CAH)</option><option data-id="14" value="BMV">?????k L???k(BMV)</option><option data-id="15" value="DIN">??i???n Bi??n(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Ki??n Giang(VKG)</option><option data-id="18" value="DLI">L??m ?????ng(DLI)</option><option data-id="19" value="TBB">Ph?? Y??n(TBB)</option><option data-id="20" value="VDH">Qu???ng B??nh(VDH)</option><option data-id="21" value="VCL">Qu???ng Nam(VCL)</option><option data-id="22" value="THD">Thanh H??a(THD)</option>                    </select>
                    </div>
                    <div class="sel verticle-top">
                        <input type="text" name="khuhoi_ngaydi" class="l-input l-date placeholder-icon" id="khuhoi_ngaydi" placeholder="&#xf073; Ng??y ??i" style="font-family:Arial, FontAwesome">
                    </div>
                    <div class="sel verticle-top">
                        <input type="text" name="khuhoi_ngayve" class="l-input l-date placeholder-icon" id="khuhoi_ngayve" placeholder="&#xf073; Ng??y V???" style="font-family:Arial, FontAwesome">
                    </div>
                    <a class="l-a-search"><button class="l-bt-search" id="l-bt-searchkh" type="button">T??m ki???m</button></a>
                </div>
                <div class="l-div-duoi motchieu display_none ">
                    <div class="sel l-w-28pt">
                        <select name="" id="select_awe_1_motchieu" class="selectawe" data-callback="my_callback_tu_motchieu" data-placeholder="T???">
                            <option data-id="1" value="VCA">C???n Th??(VCA)</option><option data-id="2" value="DAD">???? N???ng(DAD)</option><option data-id="3" value="HPH">H???i Ph??ng(HPH)</option><option data-id="4" value="HAN">H?? N???i(HAN)</option><option data-id="5" value="SGN"> H??? Ch?? Minh(SGN)</option><option data-id="6" value="CXR">Kh??nh H??a(CXR)</option><option data-id="7" value="PQC">Ki??n Giang(PQC)</option><option data-id="8" value="VII">Ngh??? An(VII)</option><option data-id="9" value="HUI">Th???a Thi??n ??? Hu???(HUI)</option><option data-id="10" value="VCS">B?? R???a-V??ng T??u(VCS)</option><option data-id="11" value="SQH">S??n La(SQH)</option><option data-id="12" value="UIH">B??nh ?????nh(UIH)</option><option data-id="13" value="CAH">C?? Mau(CAH)</option><option data-id="14" value="BMV">?????k L???k(BMV)</option><option data-id="15" value="DIN">??i???n Bi??n(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Ki??n Giang(VKG)</option><option data-id="18" value="DLI">L??m ?????ng(DLI)</option><option data-id="19" value="TBB">Ph?? Y??n(TBB)</option><option data-id="20" value="VDH">Qu???ng B??nh(VDH)</option><option data-id="21" value="VCL">Qu???ng Nam(VCL)</option><option data-id="22" value="THD">Thanh H??a(THD)</option>                    </select>
                    </div>
                    <div class="sel l-w-28pt">
                        <select name="" id="select_awe_2_motchieu" class="selectawe" data-callback="my_callback_den_motchieu" data-placeholder="?????n?">
                            <option data-id="1" value="VCA">C???n Th??(VCA)</option><option data-id="2" value="DAD">???? N???ng(DAD)</option><option data-id="3" value="HPH">H???i Ph??ng(HPH)</option><option data-id="4" value="HAN">H?? N???i(HAN)</option><option data-id="5" value="SGN"> H??? Ch?? Minh(SGN)</option><option data-id="6" value="CXR">Kh??nh H??a(CXR)</option><option data-id="7" value="PQC">Ki??n Giang(PQC)</option><option data-id="8" value="VII">Ngh??? An(VII)</option><option data-id="9" value="HUI">Th???a Thi??n ??? Hu???(HUI)</option><option data-id="10" value="VCS">B?? R???a-V??ng T??u(VCS)</option><option data-id="11" value="SQH">S??n La(SQH)</option><option data-id="12" value="UIH">B??nh ?????nh(UIH)</option><option data-id="13" value="CAH">C?? Mau(CAH)</option><option data-id="14" value="BMV">?????k L???k(BMV)</option><option data-id="15" value="DIN">??i???n Bi??n(DIN)</option><option data-id="16" value="PXU">Gia Lai(PXU)</option><option data-id="17" value="VKG">Ki??n Giang(VKG)</option><option data-id="18" value="DLI">L??m ?????ng(DLI)</option><option data-id="19" value="TBB">Ph?? Y??n(TBB)</option><option data-id="20" value="VDH">Qu???ng B??nh(VDH)</option><option data-id="21" value="VCL">Qu???ng Nam(VCL)</option><option data-id="22" value="THD">Thanh H??a(THD)</option>                    </select>
                    </div>
                    <div class="sel verticle-top l-w-28pt">
                        <input type="text" name="motchieu-ngaydi" class="l-input l-date placeholder-icon" id="motchieu-ngaydi" placeholder="&#xf073; Ng??y ??i" style="font-family:Arial, FontAwesome">
                    </div>
                    <a class="l-a-search"><button class="l-bt-search" type="button" id="l-bt-searchmc">T??m ki???m</button></a>
                </div>
            </div>

        </div>
    </div>
    <div class="box_main background-light-grey">
        <div class="container pd-bot-100px">
            <div class="section-title-center">
                <h1 class="title fz-2vw"><span class="color_main">??u</span> ????i</h1>
                <span class="section-title-des fz-1vw">Nh???p v??o ????ng k?? ????? nh???n nhi???u th??ng tin ??u ????i ngay</span>
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
                        <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  T???:{{$item->sanbay1->thanhpho}} </span>?????n: {{$item->sanbay2->thanhpho}}  </a></h3>
                        <a href="{{url("/usersPage/contract",['idchuyenbay'=>$item->idchuyenbay])}}" class="btn btn-hoang text-white" style="margin-right: 20px">Ch???n</a>
                        <div class="date mr-lr-15px">
                            <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                <i class="fa fa-chevron-up mr-right-5px"></i>
                                Ng??y ??i:
                                <span class="text-third-color mr-right-5px">{{$item->ngaydi}}</span>
                            </a>
                            <small class="text-uppercase text-extra-small">
                                <a href="#" class="cl-te-grey fz-0p7rem">
                                    <i class="fa fa-chevron-down mr-right-5px"></i>
                                    Ng??y ?????n:
                                    <span class="text-third-color mr-right-5px">{{$item->ngayden}}</span> </a>
                            </small>
                        </div>
                        <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                            <strong class="text-medium text-third-color padding-right-5px mr-4">V?? Th?????ng {{$item->giavethuong}}<span>.000 Vn??</span></strong>
                            <strong class="text-medium text-third-color padding-right-5px mr-4">V?? Vip {{$item->giavevip}}<span>.000 Vn??</span></strong>
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
                            <h1 class="title fz-2vw"><span class="color_main">Th??nh Ph???</span> L???n</h1>
                            <span class="section-title-des fz-1vw">
                  v???i m???t v??i ?????t n?????c, d???u cho n??i ????y l?? l???n ?????u ti??n ng?????i ta ?????n. </span>
                        </div>
                        <div class="row mr-top-10pt">
                            <div class="col-md-6">
                                <div class="box-city background-white border mr-bot-6pt">
                                    <div class="city-img mr-right-4pt float-left box-img-hotcity"><a href="#"><img
                                                src="{{asset('assets/img/citie-1.jpg')}}" alt=""></a></div>
                                    <div class="city-body">
                                        <div class="pd-14px">
                                            <!--  -->
                                            <a class="d-block text-uppercase name-city" href="#">???? L???t </a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Kh??ch s???n: <span
                                                    class="text-third-color">673</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">S???c ch???a: <span class="text-third-color"> 38.000</span>
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
                                            <a class="d-block text-uppercase name-city" href="#">H??? Ch?? Minh</a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Kh??ch s???n: <span
                                                    class="text-third-color">641</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">S???c ch???a:<span class="text-third-color"> 44.000</span>
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
                                            <a class="d-block text-uppercase name-city" href="#">H?? N???i </a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Kh??ch s???n: <span
                                                    class="text-third-color">511</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">S???c ch???a:<span class="text-third-color"> 31.000</span>
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
                                            <a class="d-block text-uppercase name-city" href="#">???? N???ng </a>
                                            <a href="#" class="fz-07 cl-te-grey mr-10px">Kh??ch s???n: <span
                                                    class="text-third-color">1.016</span></a>
                                            <a href="#" class="fz-07 cl-te-grey">S???c ch???a:<span class="text-third-color"> 69.000</span>
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
                            <h1 class="title fz-2vw"><span class="color_main">B??i </span> Vi???t</h1>
                            <span class="section-title-des fz-1vw">K??nh tin t???c v??? du l???ch, trao ?????i, chia s??? kinh nghi???m</span>
                        </div>
                        <div class="news-cart background-white border mr-bottom-35px">
                            <div class="float-sm-left mr-right-30px box-img-news">
                                <a href="?act=dtBlog&idbl=53&iddm=2"><img
                                        class="w-100_h-100" src="../uploads/baovevoi.jpg" alt=""></a>
                            </div>
                            <div class="padding-20px h-123px">
                                <a href="?act=dtBlog&idbl=53&iddm=2"
                                   class="d-block cl-te-black fz-09 font-weight-bold mr-bot-15px opacity-0p8">???Du l???ch ????ng c??ch???- gi???i ph??p gi??p b???o v??? nh???ng ch?? voi cu???i c??ng tr??n tr??i ?????t</a>
                                <span class="fz-07 mr-right-30px">T??c gi??? : <a href="#" class="color_main">admin</a></span>
                                <span class="fz-07">Ng??y :  <a href="#" class="color_main">2020-12-12</a></span>
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
                                   class="d-block cl-te-black fz-09 font-weight-bold mr-bot-15px opacity-0p8">C???m nang du l???ch Ph?? Qu???c cho chuy???n ngh??? d?????ng tuy???t v???i t???i ?????o thi??n ???????ng</a>
                                <span class="fz-07 mr-right-30px">T??c gi??? : <a href="#" class="color_main">admin</a></span>
                                <span class="fz-07">Ng??y :  <a href="#" class="color_main">2020-12-12</a></span>
                            </div>
                            <!-- <div class="clearfix"></div> -->
                        </div>

                    </div>
                    <div class="col-lg-6 te-al-left">
                        <div class="section-title-left mr-bot-70px">
                            <h1 class="title fz-2vw"><span class="color_main">Kh??ch H??ng </span> N??i V??? Ch??ng T??i</h1>
                            <span class="section-title-des fz-1vw">H??y g??p ?? cho ch??ng t??i gi??p ch??ng t??i ph???c v??? b???n t???t h??n</span>
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
                                    <i class="text-extra-small">Ch???c v???: <span class="color_main">Qu???n l??</span></i>
                                    <i class="d-block mr-tb-20px text-medium text-grey-4">Travelz ????a c??c b???n t???i kh???p n??i tr??n Vi???t Nam. V???i nh???ng th??? t???t nh???t c?? th???. Ch??ng t??i ????a b???n ?????n nh???ng n??i xa x??i tr??n m???nh ?????t Vi???t n??y v?? ch??ng t??i cam k???t.
                                        ??? ????u r??? h??n, ch??ng t??i ho??n ti???n </i>
                                </div>
                                <div class="carousel-item background-white padding-30px border">
                                    <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-2.png')}}" alt=""></div>
                                    <h5 class="text-medium cl-te-black text-uppercase">Mark Zuckerberg</h5>
                                    <i class="text-extra-small">Ch???c v???: <span class="color_main">Qu???n l??</span></i>
                                    <i class="d-block mr-tb-20px text-medium text-grey-4">N???u b???n c?? th???c m???c v??? th??ng tin,
                                        gi?? v?? hay b???t c??? g??. H??y li??n h??? v???i ch??ng t??i ngay, ch??ng t??i c?? ng?????i gi???i ????p
                                        cho b???n ngay ho???c l?? l??u nh???t l?? 24H. Xin c???m ??n!</i>
                                </div>
                                <div class="carousel-item background-white padding-30px border">
                                    <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-3.png')}}" alt=""></div>
                                    <h5 class="text-medium cl-te-black text-uppercase">Nguy??n Nh???t C????ng</h5>
                                    <i class="text-extra-small">Ch???c v???: <span class="color_main">Qu???n l?? nh??n s???</span></i>
                                    <i class="d-block mr-tb-20px text-medium text-grey-4">C??c b???n ??ang t??m m???t c??ng vi???c
                                        t???t? L??m vi???c v??n ph??ng m??y l???nh s??? gi??p b???n c?? tinh th???n t???t h??n. H??y ?????n v???i ng??i
                                        nh?? chung c???a ch??ng t??i. Li??n h??? 0983232323</i>
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
