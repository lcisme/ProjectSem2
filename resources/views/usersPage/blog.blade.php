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
    <main>
        <div class="fixed-blog-bg"></div>
        <nav class="bg-color-grey pd-tb-30px ps-relative cl-grey1">
            <div class="container">
                <div class="fz-12vw d-inline-block padding-tb-7px">
                    BLOG            </div>
                <div class="float-right">
                    <div class="d-inline-block pd-right-10px"><a href="#">Home</a></div>
                    <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Blog</div>
                </div>
            </div>
        </nav>
        <div class="padding-tb-40px background-light-grey" style="transform: none;">
            <div class="container" style="transform: none;">
                <div class="row" style="transform: none;">
                    <!-- noidung1 -->
                    <div class="col-lg-8 col-md-8 l-box-blog-left">
                        <div class="">
                            <div class="row">
                                <!-- noi dung ne may cha -->

                                <div class="col-lg-6">
                                    <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                                        <a href="#">
                                            <div class="img-in" style="background-image: url('../uploads/baovevoi.jpg');">
                                        </a>
                                    </div>
                                    <!-- oadd -->
                                    <div class="pd-20-30-40-30  ">
                                        <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="/site/?act=dtBlog&idbl=53&iddm=2" >
                                            “Du lịch đúng cách”- giải pháp giúp bảo vệ những chú voi cuối cùng trên trái đất                                    </a>
                                        <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                            <p class="webkit-line-clam blog-line-5-clamp l-mota-blog">Du lịch dần trở thành một phần không thể thiếu trong cuộc sống của chúng ta khi đây là một trong những cách hữu hiệu nhất để giúp chúng ta thư giãn, quên đi những bộn bề của cuộc sống. Hơn hết, du lịch còn lý thú hơn khi chúng ta được ồ à trước bao cảnh sắc thiên nhiên, được tiếp cận những bài học về văn hóa, làm quen với nhiều người bạn mới và quan trọng nhất là khám phá được bản thân mình. Tuy nhiên, đại dương sẽ không mãi xanh, cánh rừng sẽ không mãi xòe bóng mát, núi lửa sẽ không mãi ngủ yên và các loài động vật hoang dã, đặc biệt là loài voi sẽ mãi không còn để tạo nguồn cảm hứng nếu du lịch không đi đôi với bảo tồn.</p>
                                        </div>
                                        <div class="meta">
                                        <span class="text-extra-small float-left">Tag :
                                            <a href="#" class="text-main-color">Du Lich</a>
                                        </span>
                                            <span class="text-extra-small cl-blackgr float-right">Tác giả :
                                            <a href="#" class="cl-blackgr">admin</a>
                                        </span>
                                            <span class="text-extra-small cl-blackgr margin-right-20px float-right">
                                            2020-12-12                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                                    <a href="#">
                                        <div class="img-in" style="background-image: url('../uploads/cam-nang-du-lich-phu-quoc-cover.jpg');">
                                    </a>
                                </div>
                                <!-- oadd -->
                                <div class="pd-20-30-40-30  ">
                                    <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="/site/?act=dtBlog&idbl=54&iddm=2" >
                                        Cẩm nang du lịch Phú Quốc cho chuyến nghỉ dưỡng tuyệt vời tại đảo thiên đường                                    </a>
                                    <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                        <p class="webkit-line-clam blog-line-5-clamp l-mota-blog">Được mệnh danh là “thiên đường rực nắng”, đảo Phú Quốc quyến rũ không chỉ bởi cảnh sắc nên thơ, mà còn bởi những điều bí ẩn vẫn chờ bao người khám phá. Phú Quốc nhất định sẽ là chốn tuyệt vời để đặt chân cho một chuyến nghỉ dưỡng hoành tráng! Để chuyến đi của bạn thêm nhiều lựa chọn, cũng như để tiết kiệm thời gian sắp xếp lịch trình thì dưới đây, Traveloka sẽ mang đến cho bạn cẩm nang du lịch Phú Quốc trọn bộ ăn chơi vui ngập trời. Hãy ghi chú ngay nhé!</p>
                                    </div>
                                    <div class="meta">
                                        <span class="text-extra-small float-left">Tag :
                                            <a href="#" class="text-main-color">Cẩm Nang Du Lịch</a>
                                        </span>
                                        <span class="text-extra-small cl-blackgr float-right">Tác giả :
                                            <a href="#" class="cl-blackgr">admin</a>
                                        </span>
                                        <span class="text-extra-small cl-blackgr margin-right-20px float-right">
                                            2020-12-12                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                                <a href="#">
                                    <div class="img-in" style="background-image: url('../uploads/kinh-nghiem-di-vung-tau-nam-2020-cover.jpg');">
                                </a>
                            </div>
                            <!-- oadd -->
                            <div class="pd-20-30-40-30  ">
                                <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="/site/?act=dtBlog&idbl=55&iddm=2" >
                                    Ăn ngon, ở mát, chụp hình đẹp ở Vũng Tàu với bộ kinh nghiệm đi Vũng Tàu năm 2020                                    </a>
                                <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                    <p class="webkit-line-clam blog-line-5-clamp l-mota-blog">“Quá xá” gần Sài Gòn, nhiều quán ăn ngon, có biển xanh cát trắng nhiều địa điểm đẹp, Vũng Tàu sẽ mãi là địa điểm du lịch top đầu trong lòng nhiều bạn trẻ lẫn gia đình Việt Nam. Năm 2020 chắc chắn Vũng Tàu vẫn sẽ đón nhiều bạn quay lại vui chơi. Còn bạn có dự định đến Vũng Tàu trong năm nay không? Nếu có thì hãy đọc hết kinh nghiệm đi Vũng Tàu này của Traveloka nhé!</p>
                                </div>
                                <div class="meta">
                                        <span class="text-extra-small float-left">Tag :
                                            <a href="#" class="text-main-color">Cẩm Nang Du Lịch</a>
                                        </span>
                                    <span class="text-extra-small cl-blackgr float-right">Tác giả :
                                            <a href="#" class="cl-blackgr">admin</a>
                                        </span>
                                    <span class="text-extra-small cl-blackgr margin-right-20px float-right">
                                            2020-12-12                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                            <a href="#">
                                <div class="img-in" style="background-image: url('../uploads/kinh-nghiem-du-lich-nha-trang-cover-2.jpg');">
                            </a>
                        </div>
                        <!-- oadd -->
                        <div class="pd-20-30-40-30  ">
                            <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="/site/?act=dtBlog&idbl=56&iddm=2" >
                                Tổng Hợp những kinh nghiệm khám phá Nha Trang từ A - Z tự túc cho các tín đồ “cuồng đi”                                    </a>
                            <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                                <p class="webkit-line-clam blog-line-5-clamp l-mota-blog">Nha Trang được coi là một địa điểm khá thú vị cho dân du lịch, bởi thành phố này là một trong những nơi “hiếm có khó tìm” khi có cả cát trắng, biển xanh, nắng vàng và núi non trùng điệp nữa. Để có thể khám phá tất tần tật chốn thiên đường này, bạn cần có một bộ các kinh nghiệm du lịch Nha Trang đúng không nào? Hãy để Travelz chia sẻ bộ bí kíp đó ngay cho bạn nhé!</p>
                            </div>
                            <div class="meta">
                                        <span class="text-extra-small float-left">Tag :
                                            <a href="#" class="text-main-color">Cẩm Nang Du Lịch</a>
                                        </span>
                                <span class="text-extra-small cl-blackgr float-right">Tác giả :
                                            <a href="#" class="cl-blackgr">admin</a>
                                        </span>
                                <span class="text-extra-small cl-blackgr margin-right-20px float-right">
                                            2020-12-12                                        </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                        <a href="#">
                            <div class="img-in" style="background-image: url('../uploads/dalat-blog.jpg');">
                        </a>
                    </div>
                    <!-- oadd -->
                    <div class="pd-20-30-40-30  ">
                        <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="/site/?act=dtBlog&idbl=44&iddm=2" >
                            Cái lãng mạn của mùa Đông trên cánh đồng cỏ tuyết và đồi mây Đà Lạt                                    </a>
                        <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                            <p class="webkit-line-clam blog-line-5-clamp l-mota-blog">Đồi cỏ hồng Đà Lạt nằm bên cạnh Khu du lịch Thung lũng vàng, từ cổng Khu du lịch bên tay phải có một lối mòn nhỏ đi vô chừng 2-3 km sẽ thấy triền đồi đầy cỏ hồng. Thời điểm cỏ hồng mọc dày: giữa tháng 11 đến cuối tháng 12. Thời điểm ngắm đẹp nhất: 5 giờ sáng cho đến khi mặt trời mọc. Ngoài ra vẫn còn một triền đồi đầy cỏ hồng rất quen thuộc ở khu vực cây thông cô đơn nhưng phải đến tầm cuối tháng 11 mới bắt đầu rực rỡ hơn.</p>
                        </div>
                        <div class="meta">
                                        <span class="text-extra-small float-left">Tag :
                                            <a href="#" class="text-main-color">Du Lich</a>
                                        </span>
                            <span class="text-extra-small cl-blackgr float-right">Tác giả :
                                            <a href="#" class="cl-blackgr">admin</a>
                                        </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right">
                                            2020-12-10                                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                    <a href="#">
                        <div class="img-in" style="background-image: url('../uploads/sapa-blog.jpg');">
                    </a>
                </div>
                <!-- oadd -->
                <div class="pd-20-30-40-30  ">
                    <a class="d-block  text-capitalize fz-2vw line-height-35px text-dark font-weight-700 margin-bottom-10px" href="/site/?act=dtBlog&idbl=45&iddm=1" >
                        Review Sapa: Lịch trình cho những ai lần đầu đến thành phố trong sương                                    </a>
                    <div class="d-block text-up-small text-grey-2 margin-bottom-15px">
                        <p class="webkit-line-clam blog-line-5-clamp l-mota-blog">Người ta nói Sapa là “đại công trường” quả không sai, nếu lỡ đặt chân xuống “mặt đất” thì xung quanh là những tiếng búa khoan đinh tai nhức óc chẳng ngừng. Những ngày ở đây trong chuyến du lịch Sapa tự túc, mình thường trốn “trên mây”, nghĩa là leo lên tầng thượng khách sạn hoặc trốn vào những quán cà phê dưới bản làng, nơi sương phủ trắng xoá và lạnh tái tê người, chỉ ở đó mới thấu được cái tên thuở nào – Thành phố trong sương.</p>
                    </div>
                    <div class="meta">
                                        <span class="text-extra-small float-left">Tag :
                                            <a href="#" class="text-main-color">Du Lich</a>
                                        </span>
                        <span class="text-extra-small cl-blackgr float-right">Tác giả :
                                            <a href="#" class="cl-blackgr">admin</a>
                                        </span>
                        <span class="text-extra-small cl-blackgr margin-right-20px float-right">
                                            2020-11-20                                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- page links -->
        <ul>
        </ul>
        <nav aria-label="...">
            <ul class="pagination">
                <li class='page-item disabled'><a class='page-link' href='#'>Previous</a></li><li class='page-item active'><span class='page-link'>1<span class='sr-only'>(current)</span></span></li><li class='page-item'><a class='page-link' href='/site/?act=blog&page_num=2'>2</a></li><li class='page-item'><a class='page-link' href='/site/?act=blog&page_num=3'>3</a></li><li class='page-item'><a class='page-link' href='/site/?act=blog&page_num=2'>Next</a></li>                        </ul>
        </nav>
        </div>
        </div>
        <!-- noidung2 -->
        <div class="col-lg-4 col-md-4 sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
            <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                <div class="widget">
                    <!-- tieu de -->
                    <h4 class="widget-title clearfix">
                        <span>Email</span>
                    </h4>
                    <!-- mieu ta -->
                    <p>Hãy cho chúng tôi email hoặc số điện thoại để nhận được những thông tin và sự kiện du lịch đặc biệt trên thế giới.
                        Hãy để chúng tôi giúp bạn!
                    </p>
                    <!-- input -->
                    <input class="form-control rounded-0" type="text" placeholder="Điền email hoặc số điện thoại">
                    <a href="#" class="btn text-white text-uppercase text-small btn-block margin-top-15px background-grey-3 rounded-0 border-0">Gửi thông tin!</a>
                </div>
                <div class="widget widget_categories">
                    <h4 class="widget-title clearfix">
                        <span>Thư mục</span>
                    </h4>
                    <ul>
                        <li><a href="#">Ăn Ngon</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Du Lịch</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Đi máy bay</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Đặt Vé Như Thế Nào</a></li>
                    </ul>
                </div>
                <div class="widget widget_categories">
                    <h4 class="widget-title clearfix">
                        <span>Hình ảnh</span>
                    </h4>
                    <div class="row">
                        <!-- anh1 -->
                        <div class="col-6 margin-bottom-20px">
                            <a href="#"><img class="wh2" src="{{asset('assets/img/dl1.jpg')}}"></a>
                        </div>
                        <!-- anh2 -->
                        <div class="col-6 margin-bottom-20px">
                            <a href="#"><img class="wh2" src="{{asset('assets/img/dl2.jpg')}}"></a>
                        </div>
                        <!-- amh3 -->
                        <div class="col-6 margin-bottom-20px">
                            <a href="#"><img class="wh2" src="{{asset('assets/img/dl3.jpg')}}"></a>
                        </div>
                        <!-- anh4 -->
                        <div class="col-6 margin-bottom-20px">
                            <a href="#"><img class="wh2" src="{{asset('assets/img/dl4.jpg')}}"></a>
                        </div>
                    </div>
                </div>
                <div class="widget">
                    <h4 class="widget-title clearfix">
                        <span>Bài hay</span>
                    </h4>
                    <ul class="last-posts">
                        <li>
                            <a href="#" class="float-left margin-right-15px d-block width-60px">
                                <img src="../uploads/dalat-blog.jpg" alt="">
                            </a>
                            <a href="#" class="d-block  text-uppercase l-fontz-nor text-dark font-weight-700">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    Cái lãng mạn của mùa Đông trên cánh đồng cỏ tuyết và đồi mây Đà Lạt                                    </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                                    <a href="#" class="cl-blackgr">admin</a>
                                </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                                    2020-12-10                                </span>
                    </ul>
                    <ul class="last-posts">
                        <li>
                            <a href="#" class="float-left margin-right-15px d-block width-60px">
                                <img src="../uploads/sapa-blog.jpg" alt="">
                            </a>
                            <a href="#" class="d-block  text-uppercase l-fontz-nor text-dark font-weight-700">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    Review Sapa: Lịch trình cho những ai lần đầu đến thành phố trong sương                                    </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                                    <a href="#" class="cl-blackgr">admin</a>
                                </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                                    2020-11-20                                </span>
                    </ul>
                    <ul class="last-posts">
                        <li>
                            <a href="#" class="float-left margin-right-15px d-block width-60px">
                                <img src="../uploads/ha-giang-mua-nuoc-do-9.jpg" alt="">
                            </a>
                            <a href="#" class="d-block  text-uppercase l-fontz-nor text-dark font-weight-700">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    Lên Hà Giang, nghe người Mèo kể chuyện mùa nước đổ                                    </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                                    <a href="#" class="cl-blackgr">admin</a>
                                </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                                    2020-11-20                                </span>
                    </ul>
                    <ul class="last-posts">
                        <li>
                            <a href="#" class="float-left margin-right-15px d-block width-60px">
                                <img src="../uploads/baovevoi.jpg" alt="">
                            </a>
                            <a href="#" class="d-block  text-uppercase l-fontz-nor text-dark font-weight-700">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    “Du lịch đúng cách”- giải pháp giúp bảo vệ những chú voi cuối cùng trên trái đất                                    </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                                    <a href="#" class="cl-blackgr">admin</a>
                                </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                                    2020-12-12                                </span>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
    </main>
@endsection
