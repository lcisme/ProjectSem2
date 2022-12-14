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
    <div class="long-lien-he-header-out">
        <div class="bg-black long-div-center-head"></div>
        <div class="te-center">
            <div class="ct-us">LIÊN HỆ</div>
            <div class="cl-te-grey2">Nếu bạn gặp khó khăn hay bạn cần hỗ trợ của Travelz thì bạn hãy gọi đến số điện thoại đường dây nóng của Travelz 19001221 để nhận được hỗ trợ trực tiếp từ nhân viên tổng đài hỗ trợ cả người bán hàng và người mua 24/7.        Thời gian làm việc của hotlime tổng đài Travelz là 24/7 kể cả thứ 7, Chủ Nhật. Riêng với các ngày lễ/tết thì sẽ có lịch thông báo riêng hoặc làm việc từ 8h00 – 17h00.</div>
        </div>
        <div class="link">
            <div class="no-background padding-30px margin-0px border-top-1">
                <div class="d-inline-block"><a href="#" class="text-white">Home </a></div>
                <div class="d-inline-block"><a href="#" class="text-white">
                        <!-- <i class="fas fa-chevron-right pd-lr-10px"></i> Pages  -->
                        <i class="fas fa-chevron-right pd-lr-10px"></i></a></div>
                <div class="d-inline-block cl-gray3"> Contact Us</div>
            </div>
        </div>
    </div>
    <main class="">
        <section class="padding-tb-100px">
            <div class="container mr-bot-100px">
                <div class="row padding-30px mr-50px">
                    <div class="col-lg-6 col-md-6">
                        <form id="form_lienhe">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="hoten">Họ và tên</label>
                                    <input type="text" class="form-control" id="hoten" name="hoten" placeholder="Họ và tên">
                                    <div class="l-div-err color_red display-none" id="hotenerro">Vui lòng nhập họ tên <i class="fas fa-exclamation-circle"></i></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"placeholder="Email">
                                    <div class="l-div-err color_red display-none" id="emailerro">Email không đúng định dạng <i class="fas fa-exclamation-circle"></i></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="diachi">Địa chỉ</label>
                                <input type="text" class="form-control" id="diachi" name="diachi" placeholder="123 Cộng Hòa, P.11, Q.Tân Bình, Hồ Chí Minh">
                                <div class="l-div-err color_red display-none" id="diachierro">Vui lòng nhập địa chỉ <i class="fas fa-exclamation-circle"></i></div>
                            </div>
                            <div class="form-group">
                                <label for="noidung">Message</label>
                                <textarea class="form-control" name="noidung" id="noidung" rows="3"></textarea>
                                <div class="l-div-err color_red display-none" id="noidungerro">Vui lòng nhập nội dung <i class="fas fa-exclamation-circle"></i></div>
                            </div>
                            <button id="bt_lienhe" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 pd-15px">Gửi</button>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p>Với cá nhân mình thì việc liên hệ qua tổng đài là nhanh chóng được giải quyết vấn đề nhất và thường các chăm sóc viên cũng giải quyết được phần đa câu hỏi cho vấn đề của bạn. Tuy nhiên, đôi khi tổng đài bị quá tải và bạn không thể liên lạc được ngay thì bạn hãy liên hệ lại vào một thời điểm khác nhé.</p>
                        <h6>Phone :</h6>
                        <span class="d-block"><i class="fa fa-phone text-main-color margin-right-10px" aria-hidden="true"></i> +1900 232 233</span>
                        <span class="d-block"><i class="fa fa-mobile text-main-color margin-right-10px" aria-hidden="true"></i> +1900 242 244</span>
                        <h6 class="margin-top-20px">Address :</h6>
                        <span class="d-block"><i class="fa fa-map text-main-color margin-right-10px" aria-hidden="true"></i> 391A Nam Kỳ Khởi Nghĩa, Phường 14, Quận 3, Thành phố Hồ Chí Minh 700000 </span>
                        <h6 class="margin-top-20px">Email :</h6>
                        <span class="d-block"><i class="fa fa-envelope-open text-main-color margin-right-10px" aria-hidden="true"></i> travelz@gmail.com </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
