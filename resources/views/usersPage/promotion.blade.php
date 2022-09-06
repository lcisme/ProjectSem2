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
    <nav class="bg-color-grey pd-tb-30px ps-relative cl-grey1">
        <div class="container">
            <div class="fz-12vw d-inline-block padding-tb-7px">Danh Sách Chuyến Bay</div>
            <div class="float-right">
                <div class="d-inline-block pd-right-10px"><a href="">Home</a></div>
                <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Khuyến Mãi</div>
            </div>
        </div>
    </nav>
    <main class="padding-20px background-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 box-left margin-0px">
                    <div class="background-white pd-35px pd-top-25px border-grey1">
                        <div class="title-box-left color_main fz-12vw font-weight-bold text-center pd-bot-20px"><span>KHỨ HỒI</span></div>
                        <div class="form-ground">
                            <div>Từ</div>
                            <select name="" id="select_awe_1" class="selectawe" data-callback="my_callback_tu" data-placeholder="Từ">
                                <br />
                                <b>Notice</b>:  Undefined variable: showAllSanBay in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>20</b><br />
                                <br />
                                <b>Warning</b>:  Invalid argument supplied for foreach() in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>20</b><br />
                            </select>
                        </div>
                        <div class="form-ground">
                            <div>Đến</div>
                            <select name="" id="select_awe_2" class="selectawe" data-callback="my_callback_den" data-placeholder="Đến">
                                <br />
                                <b>Notice</b>:  Undefined variable: showAllSanBay in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>31</b><br />
                                <br />
                                <b>Warning</b>:  Invalid argument supplied for foreach() in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>31</b><br />
                            </select>
                        </div>
                        <div class="form-ground">
                            <div>Hạng ghế</div>
                            <select name="" id="select_awe_tren-2" class="selectawe l-sl-option-tren" data-callback="my_callback_2" data-placeholder="Phổ Thông">
                                <option value="1"><i class="fas fa-fighter-jet" selected></i>Phổ thông</option>
                                <option value="2"><i class="fas fa-fighter-jet"></i>Thương gia</option>
                            </select>
                        </div>
                        <div class="form-ground">
                            <!-- Loại -->
                            <input type="hidden"  id="select_awe_tren-1" value="1">
                            <!-- người lớn  -->
                            <input type="hidden" id="nguoilon" value="1">
                            <input type="hidden" id="betren2" value="0">
                            <input type="hidden" id="beduoi2" value="0">
                        </div>
                        <div class="form-ground">
                            <div>Ngày Đi</div>
                            <input type="text" name="khuhoi_ngaydi" class="l-input l-date placeholder-icon" id="khuhoi_ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                        </div>
                        <div class="form-ground">
                            <div>Ngày về</div>
                            <input type="text" name="khuhoi_ngayve" class="l-input l-date placeholder-icon" id="khuhoi_ngayve" placeholder="&#xf073; Ngày Về" style="font-family:Arial, FontAwesome">
                        </div>
                        <button type="submit" id="l-bt-searchkh" class="mt-3 W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>
                    </div>
                    <div class="background-white pd-35px pd-top-25px border-grey1 mr-top-30px">
                        <div class="title-box-left color_main fz-12vw font-weight-bold text-center pd-bot-20px"><span>MỘT CHIỀU</span></div>
                        <div class="form-ground">
                            <div>Từ</div>
                            <select name="" id="select_awe_1_motchieu" class="selectawe" data-callback="my_callback_tu" data-placeholder="Từ">
                                <br />
                                <b>Notice</b>:  Undefined variable: showAllSanBay in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>69</b><br />
                                <br />
                                <b>Warning</b>:  Invalid argument supplied for foreach() in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>69</b><br />
                            </select>
                        </div>
                        <div class="form-ground">
                            <div>Đến</div>
                            <select name="" id="select_awe_2_motchieu" class="selectawe" data-callback="my_callback_den" data-placeholder="Đến">
                                <br />
                                <b>Notice</b>:  Undefined variable: showAllSanBay in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>80</b><br />
                                <br />
                                <b>Warning</b>:  Invalid argument supplied for foreach() in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\dsvekhuyenmai.php</b> on line <b>80</b><br />
                            </select>
                        </div>
                        <div class="form-ground">
                            <div>Hạng ghế</div>
                            <select name="" id="select_awe_tren-2" class="selectawe l-sl-option-tren" data-callback="my_callback_2" data-placeholder="Phổ Thông">
                                <option value="1"><i class="fas fa-fighter-jet" selected></i>Phổ thông</option>
                                <option value="2"><i class="fas fa-fighter-jet"></i>Thương gia</option>
                            </select>
                        </div>
                        <div class="form-ground">
                            <!-- Loại(khứ hồi, một chiều) -->
                            <input type="hidden"  id="select_awe_tren-1" value="0">
                            <!-- người lớn  -->
                            <input type="hidden" id="nguoilon" value="1">
                            <input type="hidden" id="betren2" value="0">
                            <input type="hidden" id="beduoi2" value="0">
                        </div>
                        <div class="form-ground">
                            <div>Ngày Đi</div>
                            <input type="text" name="motchieu-ngaydi" class="l-input l-date placeholder-icon" id="motchieu-ngaydi" placeholder="&#xf073; Ngày đi" style="font-family:Arial, FontAwesome">
                        </div>
                        <button  id="l-bt-searchmc" type="submit" class="mt-3 W-100 broder-none border-radius-2 pd-t-5px text-uppercase bg-cl-main cl-white fz-1vw font-weight-600"><i class="fas fa-search fz-0p9vw"></i>TÌM KIẾM</button>
                    </div>
                </div>
                <div class="box-right">

                    <div class="row box_ve mr-bot-40px background-white mr-0px">
                        <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                            <div class="hotel-img position-relative line-height-150px">
                                <img src="{{asset('assets/img/pacific.png')}}" alt="">
                                <div class="hover-option background-main-color opacity-6">
                                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-grey1 pd-0px">
                            <div class="pd-10px">
                                <div class="l-w-tenduong">
                                    <a href="#" class="text-dark mr-lr-15px">
                                        <span class="mr-right-30px">  Từ: Đắk Lắk </span>
                                        Đến:  Hồ Chí Minh
                                    </a>
                                </div>
                                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(80);">Đặt Ngay</a>
                                <div class="date mr-lr-15px">
                                    <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                        <i class="fa fa-chevron-up mr-right-5px"></i>
                                        Giờ đi:
                                        <span class="text-third-color mr-right-5px">20:45:00</span>
                                    </a>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="cl-te-grey fz-0p7rem">
                                            <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giờ đến:
                                            <span class="text-third-color mr-right-5px">22:45:00</span> </a>
                                    </small>
                                </div>
                                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                    <a class="text-medi padding-right-5px mr-4"><span class="mr-1 color_red">TG: </span class="text-line-through">700.000 <span class="mr-1">VNĐ</span></a>
                                    <a class="text-medi padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red">560.000</span><span class="mr-1"> VNĐ</span></a>

                                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-04</i>
                                </div>
                                <!-- <div class="text-uppercase  mr-15px">
                                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> 20</strong>VNĐ
                                </div>                  -->
                            </div>
                        </div>
                    </div>

                    <div class="row box_ve mr-bot-40px background-white mr-0px">
                        <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                            <div class="hotel-img position-relative line-height-150px">
                                <img src="{{asset('assets/img/pacific.png')}}" alt="">
                                <div class="hover-option background-main-color opacity-6">
                                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-grey1 pd-0px">
                            <div class="pd-10px">
                                <div class="l-w-tenduong">
                                    <a href="#" class="text-dark mr-lr-15px">
                                        <span class="mr-right-30px">  Từ: Gia Lai </span>
                                        Đến: Thanh Hóa
                                    </a>
                                </div>
                                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(83);">Đặt Ngay</a>
                                <div class="date mr-lr-15px">
                                    <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                        <i class="fa fa-chevron-up mr-right-5px"></i>
                                        Giờ đi:
                                        <span class="text-third-color mr-right-5px">00:00:00</span>
                                    </a>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="cl-te-grey fz-0p7rem">
                                            <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giờ đến:
                                            <span class="text-third-color mr-right-5px">05:00:00</span> </a>
                                    </small>
                                </div>
                                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                    <a class="text-medi padding-right-5px mr-4"><span class="mr-1 color_red">TG: </span class="text-line-through">2.100.000 <span class="mr-1">VNĐ</span></a>
                                    <a class="text-medi padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red">1.470.000</span><span class="mr-1"> VNĐ</span></a>

                                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-06</i>
                                </div>
                                <!-- <div class="text-uppercase  mr-15px">
                                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> 30</strong>VNĐ
                                </div>                  -->
                            </div>
                        </div>
                    </div>

                    <div class="row box_ve mr-bot-40px background-white mr-0px">
                        <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                            <div class="hotel-img position-relative line-height-150px">
                                <img src="{{asset('assets/img/vietjet.png')}}" alt="">
                                <div class="hover-option background-main-color opacity-6">
                                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-grey1 pd-0px">
                            <div class="pd-10px">
                                <div class="l-w-tenduong">
                                    <a href="#" class="text-dark mr-lr-15px">
                                        <span class="mr-right-30px">  Từ:  Hồ Chí Minh </span>
                                        Đến: Quảng Bình
                                    </a>
                                </div>
                                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(84);">Đặt Ngay</a>
                                <div class="date mr-lr-15px">
                                    <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                        <i class="fa fa-chevron-up mr-right-5px"></i>
                                        Giờ đi:
                                        <span class="text-third-color mr-right-5px">00:00:30</span>
                                    </a>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="cl-te-grey fz-0p7rem">
                                            <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giờ đến:
                                            <span class="text-third-color mr-right-5px">03:30:00</span> </a>
                                    </small>
                                </div>
                                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                    <a class="text-medi padding-right-5px mr-4"><span class="mr-1 color_red">TG: </span class="text-line-through">1.300.000 <span class="mr-1">VNĐ</span></a>
                                    <a class="text-medi padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red">1.170.000</span><span class="mr-1"> VNĐ</span></a>

                                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-06</i>
                                </div>
                                <!-- <div class="text-uppercase  mr-15px">
                                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> 10</strong>VNĐ
                                </div>                  -->
                            </div>
                        </div>
                    </div>

                    <div class="row box_ve mr-bot-40px background-white mr-0px">
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
                                <div class="l-w-tenduong">
                                    <a href="#" class="text-dark mr-lr-15px">
                                        <span class="mr-right-30px">  Từ: Cần Thơ </span>
                                        Đến: Hà Nội
                                    </a>
                                </div>
                                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(85);">Đặt Ngay</a>
                                <div class="date mr-lr-15px">
                                    <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                        <i class="fa fa-chevron-up mr-right-5px"></i>
                                        Giờ đi:
                                        <span class="text-third-color mr-right-5px">08:09:40</span>
                                    </a>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="cl-te-grey fz-0p7rem">
                                            <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giờ đến:
                                            <span class="text-third-color mr-right-5px">13:08:40</span> </a>
                                    </small>
                                </div>
                                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                    <a class="text-medi padding-right-5px mr-4"><span class="mr-1 color_red">TG: </span class="text-line-through">1.500.000 <span class="mr-1">VNĐ</span></a>
                                    <a class="text-medi padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red">1.350.000</span><span class="mr-1"> VNĐ</span></a>

                                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-06</i>
                                </div>
                                <!-- <div class="text-uppercase  mr-15px">
                                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> 10</strong>VNĐ
                                </div>                  -->
                            </div>
                        </div>
                    </div>

                    <div class="row box_ve mr-bot-40px background-white mr-0px">
                        <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                            <div class="hotel-img position-relative line-height-150px">
                                <img src="{{asset('assets/img/vietjet.png')}}" alt="">
                                <div class="hover-option background-main-color opacity-6">
                                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-grey1 pd-0px">
                            <div class="pd-10px">
                                <div class="l-w-tenduong">
                                    <a href="#" class="text-dark mr-lr-15px">
                                        <span class="mr-right-30px">  Từ: Đắk Lắk </span>
                                        Đến:  Hồ Chí Minh
                                    </a>
                                </div>
                                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(86);">Đặt Ngay</a>
                                <div class="date mr-lr-15px">
                                    <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                        <i class="fa fa-chevron-up mr-right-5px"></i>
                                        Giờ đi:
                                        <span class="text-third-color mr-right-5px">01:45:00</span>
                                    </a>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="cl-te-grey fz-0p7rem">
                                            <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giờ đến:
                                            <span class="text-third-color mr-right-5px">01:45:00</span> </a>
                                    </small>
                                </div>
                                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                    <a class="text-medi padding-right-5px mr-4"><span class="mr-1 color_red">TG: </span class="text-line-through">250.000 <span class="mr-1">VNĐ</span></a>
                                    <a class="text-medi padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red">125.000</span><span class="mr-1"> VNĐ</span></a>

                                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-07</i>
                                </div>
                                <!-- <div class="text-uppercase  mr-15px">
                                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> 50</strong>VNĐ
                                </div>                  -->
                            </div>
                        </div>
                    </div>

                    <div class="row box_ve mr-bot-40px background-white mr-0px">
                        <div class="col-lg-4 bg-grey-2 text-center d-flex align-content-center flex-wrap justify-content-center">
                            <div class="hotel-img position-relative line-height-150px">
                                <img src="{{asset('assets/img/vietjet.png')}}" alt="">
                                <div class="hover-option background-main-color opacity-6">
                                    <h3 class="text-center text-white padding-top-n-25 "></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 border-grey1 pd-0px">
                            <div class="pd-10px">
                                <div class="l-w-tenduong">
                                    <a href="#" class="text-dark mr-lr-15px">
                                        <span class="mr-right-30px">  Từ:  Hồ Chí Minh </span>
                                        Đến: Quảng Bình
                                    </a>
                                </div>
                                <a href="#" class="bt-booking float-lg-right btn-sm btn-lg text-center text-uppercase" onclick="chonVe(87);">Đặt Ngay</a>
                                <div class="date mr-lr-15px">
                                    <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                        <i class="fa fa-chevron-up mr-right-5px"></i>
                                        Giờ đi:
                                        <span class="text-third-color mr-right-5px">06:51:00</span>
                                    </a>
                                    <small class="text-uppercase text-extra-small">
                                        <a href="#" class="cl-te-grey fz-0p7rem">
                                            <i class="fa fa-chevron-down mr-right-5px"></i>
                                            Giờ đến:
                                            <span class="text-third-color mr-right-5px">07:57:00</span> </a>
                                    </small>
                                </div>
                                <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                    <a class="text-medi padding-right-5px mr-4"><span class="mr-1 color_red">TG: </span class="text-line-through">1.500.000 <span class="mr-1">VNĐ</span></a>
                                    <a class="text-medi padding-right-5px"><span class="mr-1">Giảm Còn:</span><span class="color_red">1.350.000</span><span class="mr-1"> VNĐ</span></a>

                                    <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-07</i>
                                </div>
                                <!-- <div class="text-uppercase  mr-15px">
                                    <strong class="text-medium text-third-color padding-right-5px font-weight-bold"><span class="mr-1" style="color: black;">Giảm Giá:</span> 10</strong>VNĐ
                                </div>                  -->
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="loaighe" value="2">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class='page-item disabled'><a class='page-link' href=''>Previous</a></li><li class='page-item active'><span class='page-link'>1<span class='sr-only'>(current)</span></span></li><li class='page-item'><a class='page-link' href='/site/?act=khuyenmai&page_num=2'>2</a></li><li class='page-item'><a class='page-link' href='/site/?act=khuyenmai&page_num=3'>3</a></li><li class='page-item'><a class='page-link' href='/site/?act=khuyenmai&page_num=2'>Next</a></li>            </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
@endsection
