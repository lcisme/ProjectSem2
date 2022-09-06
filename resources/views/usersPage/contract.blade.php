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

                        <!-- chuyến về -->
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
                                    <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:Đắk Lắk </span>Đến: Hồ Chí Minh  </a></h3>
                                    <div class="date mr-lr-15px">
                                        <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                            <i class="fa fa-chevron-up mr-right-5px"></i>
                                            Giờ đi:
                                            <span class="text-third-color mr-right-5px">00:45:00</span>
                                        </a>
                                        <small class="text-uppercase text-extra-small">
                                            <a href="#" class="cl-te-grey fz-0p7rem">
                                                <i class="fa fa-chevron-down mr-right-5px"></i>
                                                Giở đến:
                                                <span class="text-third-color mr-right-5px">02:45:00</span> </a>
                                        </small>
                                    </div>
                                    <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                        <strong class="text-medium text-third-color padding-right-5px mr-4"> 700.000 <span >VNĐ</span></strong>
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-08 </i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- chuyến về -->
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
                                    <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:Đắk Lắk </span>Đến: Hồ Chí Minh  </a></h3>
                                    <div class="date mr-lr-15px">
                                        <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                            <i class="fa fa-chevron-up mr-right-5px"></i>
                                            Giờ đi:
                                            <span class="text-third-color mr-right-5px">00:45:00</span>
                                        </a>
                                        <small class="text-uppercase text-extra-small">
                                            <a href="#" class="cl-te-grey fz-0p7rem">
                                                <i class="fa fa-chevron-down mr-right-5px"></i>
                                                Giở đến:
                                                <span class="text-third-color mr-right-5px">02:45:00</span> </a>
                                        </small>
                                    </div>
                                    <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                        <strong class="text-medium text-third-color padding-right-5px mr-4"> 700.000 <span >VNĐ</span></strong>
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-08 </i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- chuyến về -->
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
                                    <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:Đắk Lắk </span>Đến: Hồ Chí Minh  </a></h3>
                                    <div class="date mr-lr-15px">
                                        <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                            <i class="fa fa-chevron-up mr-right-5px"></i>
                                            Giờ đi:
                                            <span class="text-third-color mr-right-5px">00:45:00</span>
                                        </a>
                                        <small class="text-uppercase text-extra-small">
                                            <a href="#" class="cl-te-grey fz-0p7rem">
                                                <i class="fa fa-chevron-down mr-right-5px"></i>
                                                Giở đến:
                                                <span class="text-third-color mr-right-5px">02:45:00</span> </a>
                                        </small>
                                    </div>
                                    <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                        <strong class="text-medium text-third-color padding-right-5px mr-4"> 700.000 <span >VNĐ</span></strong>
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-08 </i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- chuyến về -->
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
                                    <h3 class="text-uppercase font-family-poppins col-6 d-inline-block fz-1rem pd-top-13px"><a href="#" class="text-dark"><span class="mr-right-30px">  Từ:Đắk Lắk </span>Đến: Hồ Chí Minh  </a></h3>
                                    <div class="date mr-lr-15px">
                                        <a href="#" class="cl-te-grey text-uppercase fz-0p7rem">
                                            <i class="fa fa-chevron-up mr-right-5px"></i>
                                            Giờ đi:
                                            <span class="text-third-color mr-right-5px">00:45:00</span>
                                        </a>
                                        <small class="text-uppercase text-extra-small">
                                            <a href="#" class="cl-te-grey fz-0p7rem">
                                                <i class="fa fa-chevron-down mr-right-5px"></i>
                                                Giở đến:
                                                <span class="text-third-color mr-right-5px">02:45:00</span> </a>
                                        </small>
                                    </div>
                                    <div class="text-uppercase border-top-grey-1 pd-top-10 mr-15px">
                                        <strong class="text-medium text-third-color padding-right-5px mr-4"> 700.000 <span >VNĐ</span></strong>
                                        <i class="d-block padding-tb-8px text-grey-2 float-lg-right"><span class="mr-right-30px">Ngày đi</span> 2021-06-08 </i>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <h3 class="text-right">Tổng tiền: <span class="text-third-color">2.800.000 Đ</span> </h3>
                        <div class="bg-white border border-grey-1 padding-30px margin-tb-30px">
                            <div class="text-uppercase text-medium font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px">
                                Nhập thông tin đặt vé:
                            </div>

                            <div class="pdt10px">

                                <div class="form-row mt-3">
                                    <div class="form-group col-md-12">
                                        <label class="text-uppercase text-medium  text-third-color font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px" for="name">Khách Hàng: 1</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Họ Và Tên:</label>
                                        <input type="text" class="form-control hotenkh" id="name" name="hoten" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Giới Tính</label>
                                        <select class="form-control w-100 gioitinh" name="gioitinh" id="">
                                            <option value="" selected>Chọn</option>
                                            <option value="0">Nam</option>
                                            <option value="1" >Nữ</option>
                                            <option value="2" >Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text" class="form-control dienthoai" name="sodienthoai" id="sdt" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">CMND/Passport</label>
                                        <input type="text" class="form-control cmnd" name="cmnd" id="diachi" placeholder="273122123">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">Gmail</label>
                                        <input type="text" class="form-control gmail" name="gmail" id="gmail" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-12">
                                        <label class="text-uppercase text-medium  text-third-color font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px" for="name">Khách Hàng: 2</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Họ Và Tên:</label>
                                        <input type="text" class="form-control hotenkh" id="name" name="hoten" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Giới Tính</label>
                                        <select class="form-control w-100 gioitinh" name="gioitinh" id="">
                                            <option value="" selected>Chọn</option>
                                            <option value="0">Nam</option>
                                            <option value="1" >Nữ</option>
                                            <option value="2" >Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text" class="form-control dienthoai" name="sodienthoai" id="sdt" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">CMND/Passport</label>
                                        <input type="text" class="form-control cmnd" name="cmnd" id="diachi" placeholder="273122123">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">Gmail</label>
                                        <input type="text" class="form-control gmail" name="gmail" id="gmail" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-12">
                                        <label class="text-uppercase text-medium  text-third-color font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px" for="name">Khách Hàng: 3</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Họ Và Tên:</label>
                                        <input type="text" class="form-control hotenkh" id="name" name="hoten" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Giới Tính</label>
                                        <select class="form-control w-100 gioitinh" name="gioitinh" id="">
                                            <option value="" selected>Chọn</option>
                                            <option value="0">Nam</option>
                                            <option value="1" >Nữ</option>
                                            <option value="2" >Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text" class="form-control dienthoai" name="sodienthoai" id="sdt" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">CMND/Passport</label>
                                        <input type="text" class="form-control cmnd" name="cmnd" id="diachi" placeholder="273122123">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">Gmail</label>
                                        <input type="text" class="form-control gmail" name="gmail" id="gmail" placeholder="">
                                    </div>
                                </div>
                                <div class="form-row mt-3">
                                    <div class="form-group col-md-12">
                                        <label class="text-uppercase text-medium  text-third-color font-weight-700 border-bottom-1 border-second-color  padding-bottom-8px" for="name">Khách Hàng: 4</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Họ Và Tên:</label>
                                        <input type="text" class="form-control hotenkh" id="name" name="hoten" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Giới Tính</label>
                                        <select class="form-control w-100 gioitinh" name="gioitinh" id="">
                                            <option value="" selected>Chọn</option>
                                            <option value="0">Nam</option>
                                            <option value="1" >Nữ</option>
                                            <option value="2" >Khác</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="sdt">Số điện thoại:</label>
                                        <input type="text" class="form-control dienthoai" name="sodienthoai" id="sdt" placeholder="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">CMND/Passport</label>
                                        <input type="text" class="form-control cmnd" name="cmnd" id="diachi" placeholder="273122123">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="diachi">Gmail</label>
                                        <input type="text" class="form-control gmail" name="gmail" id="gmail" placeholder="">
                                    </div>
                                </div>
                                <a href="/site/index.php" class="btn-sm btn-lg text-dark text-center uppercase rounded-0 padding-tb-10px padding-lr-30px background-grey-1 margin-right-20px">Về trang chủ</a>
                                <button id="themhd" name="them" class="btn-sm btn-lg  background-main-color text-white text-center text-uppercase rounded-0 padding-tb-10px padding-lr-30px"><a >Đặt vé </a></button>
                            </div>

                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
