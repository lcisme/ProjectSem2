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
                            <li class="list-inline-item  padding-right-10px"><a class="text-white" href="#"><i class="fa fa-lock padding-right-5px"></i> Đăng Ký</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><i class="fa fa-user-plus padding-right-5px"></i> Đăng Nhập</a></li>                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-output">
            <div class="container header-in">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3">
                        <a id="logo" href="#" class="d-inline-block margin-tb-10px"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9 col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="#">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="#" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="">
                                        CHECK IN ONLINE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="#">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="#">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="#">BÀI VIẾT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pd-r-0" style="padding-right: 0px;" href="#">VỀ CHÚNG TÔI</a>
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
                        <a id="logo" href="#" class="d-inline-block margin-tb-10px"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-light col-lg-9 col-md-9  col-9 aligh-items-right">
                        <div class="collapse navbar-collapse  link-padding-tb-20px dropdown-dark d-flex justify-content-end " id="navbarNav">
                            <ul class="navbar-nav W-100 d-flex justify-content-end" id="menu-main">
                                <li class="nav-item active">
                                    <a class="" href="#">HOME <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item" href="#" id="" role="button" data-toggle="" aria-haspopup="true" aria-expanded="">
                                        CHECK IN ONLINE
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="#">DÀNH CHO BẠN</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="#">LIÊN HỆ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="#">BÀI VIẾT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="pd-r-0"href="#">VỀ CHÚNG TÔI</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class=" dropdown-toggle fz-12vw" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="far fa-user-circle"></i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Đăng ký</a>
                                        <a class="dropdown-item" href="#">Đăng nhập</a>                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="long-ab-us-header-out">
        <div class="bg-black long-div-center-head"></div>
        <div class="te-center">
            <div class="ct-us">ABOUT US</div>
            <div class="cl-te-grey2">Nếu bạn gặp khó khăn hay bạn cần hỗ trợ của Travelz thì bạn hãy gọi đến số điện thoại đường dây nóng của Travelz 19001221 để nhận được hỗ trợ trực tiếp từ nhân viên tổng đài hỗ trợ cả người bán hàng và người mua 24/7.        Thời gian làm việc của hotlime tổng đài Travelz là 24/7 kể cả thứ 7, Chủ Nhật. Riêng với các ngày lễ/tết thì sẽ có lịch thông báo riêng hoặc làm việc từ 8h00 – 17h00.</div>
        </div>
        <div class="link">
            <div class="no-background padding-30px margin-0px border-top-1">
                <div class="d-inline-block"><a href="#" class="text-white">Home </a></div>
                <div class="d-inline-block"><a href="#" class="text-white">
                        <i class="fas fa-chevron-right pd-lr-10px"></i></a></div>
                <div class="d-inline-block cl-gray3"> About us</div>
            </div>
        </div>
    </div>
    <main class="">
        <div class="pd-top-100px">
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="col-lg-8">
                        <h3 class="mr-bot-20px">Đại Lý Đặt Vé Máy Bay Online</h3>
                        <p class= "cl-te-grey2 mr-bot-30px">
                            Là công ty du lịch trực tuyến hàng đầu Đông Nam Á, Travelz đáp ứng đa dạng các nhu cầu du lịch trên cùng một nền tảng, giúp khách hàng có được những chuyến du lịch tuyệt vời với người thân yêu. Travelz cung cấp dịch vụ đặt vé máy bay và dự kiến Với hơn 100 đối tác hàng không nội địa và quốc tế, Travelz mang đến hơn 200.000 chặng bay trên toàn thế giới. Ngoài ra, Travelz còn cung cấp dịch vụ hỗ trợ khách hàng 24/7 bằng tiếng địa phương.                    </p>
                        <a href="#" class="btn btn-danger mr-right-20px">Buy Now</a>
                        <a href="#" class="btn btn-warning">Contact Us</a>
                    </div>
                </div>
                <img src="{{asset('assets/img/about-img-1.jpg')}}" alt="">
            </div>
        </div>
        <div class="cl-grey background-overlay pd-tb-100px" style="background-image: url('{{asset('assets/img/page-title-1.jpg')}}');">
            <div class="container z-index-2 position-relative">
                <a href="#" class="btn btn-danger float-right">Buy Now</a>
                <h5>Cơ hội ra nước ngoài với hàng ghế thượng lưu</h5>
            </div>
        </div>
        <div class="w-100 background-light-grey">
            <div class="container pd-tb-100px">
                <div class="section-title text-center mr-bot-30px">
                    <h1 class="title fz-2vw"><span class="color_main">Our</span> Team</h1>
                    <span class="section-title-des">Đội ngủ lãnh đạo đúng đắn, đường lối sáng tạo đồng lòng là một lợi thế</span>
                </div>
                <div class="row">
                    <div class="l-box-our d-inline-block">
                        <a href="#"><img src="../uploads/DucDuy.jpg" width="100%" alt=""></a>
                        <a href="#" class="name-admin">Lê Đức Duy</a>
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="google" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="l-box-our d-inline-block">
                        <a href="#"><img src="../uploads/HoangHa.jpg" width="100%" alt=""></a>
                        <a href="#" class="name-admin">Tạ Hoàng Hà</a>
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="google" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="l-box-our d-inline-block">
                        <a href=""><img src="../uploads/PhuCuong.jpg" width="100%" alt=""></a>
                        <a href="" class="name-admin">Lê Phú Cường</a>
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="google" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </div>
                        </ul>
                    </div>
                    <div class="l-box-our d-inline-block mr-0">
                        <a href=""><img src="../uploads/avt2.jpg" width="100%" alt=""></a>
                        <a href="" class="name-admin">Phạm Đức Trung Đô</a>
                        <ul class="list-inline text-center margin-0px line_h_28 font-size mr-0">
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="youtube" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="linkedin" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="google" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                            </div>
                            <div class="div-icon">
                                <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="pd-tb-100px background-grey-1">
            <div class="container">
                <div class="section-title text-center mr-bot-30px">
                    <h1 class="title fz-2vw"><span class="color_main">Traveler </span> say</h1>
                    <span class="section-title-des">Lorem Ipsum Dolor Sit Amet, Consectetur Adipisicing Elitdunt</span>
                </div>
                <div class="row">
                    <div class="l-box-travelzsay">
                        <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-1.jpg')}}" alt=""></div>
                        <h5 class="text-medium cl-te-black text-uppercase">Rabie Elkheir</h5>
                        <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý</span></i>
                        <i class="d-block mr-tb-20px text-medium text-grey-4">Với những thứ tốt nhất có thể. Chúng tôi đưa bạn đến những nơi xa xôi trên mảnh Đất Việt này và chúng tôi cam kết. Ở đâu rẻ hơn, chúng tôi hoàn tiền </i>
                    </div>
                    <div class="l-box-travelzsay">
                        <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-2.png')}}" alt=""></div>
                        <h5 class="text-medium cl-te-black text-uppercase">Mark Zuckerberg</h5>
                        <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý</span></i>
                        <i class="d-block mr-tb-20px text-medium text-grey-4">Nếu bạn có thắc mắc về thông tin, giá vé hay bất cứ gì. Hãy liên hệ với chúng tôi ngay, chúng tôi có người giải đáp cho bạn ngay hoặc là lâu nhất là 24H. Xin cảm ơn!</i>
                    </div>
                    <div class="l-box-travelzsay mr-0">
                        <div class="float-left mr-right-20px"><img src="{{asset('assets/img/avt-3.png')}}" alt=""></div>
                        <h5 class="text-medium cl-te-black text-uppercase">Nguyên Nhất Cương</h5>
                        <i class="text-extra-small">Chức vụ: <span class="color_main">Quản lý nhân sự</span></i>
                        <i class="d-block mr-tb-20px text-medium text-grey-4">Các bạn đang tìm một công việc tốt? Làm việc văn phòng máy lạnh sẽ giúp bạn có tinh thần tốt hơn. Hãy đến với ngôi nhà chung của chúng tôi. Liên hệ 0983232323</i>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
