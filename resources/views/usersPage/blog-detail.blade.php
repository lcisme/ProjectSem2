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
    <main>
        <!-- <div class="fixed-blog-bg" style="background-image: url('');"> -->
        <section class="background-grey-1 padding-tb-25px text-grey-4">
            <div class="container">
                <h6 class="font-weight-300 float-md-left padding-tb-10px">BLOG CHI TIẾT</h6>
                <ol class="breadcrumb z-index-2 position-relative no-background padding-tb-10px padding-lr-0px  margin-0px float-md-right">
                    <div class="d-inline-block pd-right-10px"><a href="">Home</a></div>
                    <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Blog</div>
                    <div class="d-inline-block pd-right-10px"><i class="fas fa-chevron-right opacity-0p5 pd-right-10px"></i>Blog Detail</div>
                </ol>
                <div class="clearfix"></div>
            </div>
        </section>
        <!-- </div> -->
        <!-- // -->
        <div class="container dbg-lightgrey padding-tb-40px">
            <div class="row">
                <!-- cot noi dung ben trai -->
                <div class="col-lg-8 col-md-8">
                    <div class="theiaStickySidebar">
                        <div class="blog-entry dbackground-white border-1 border-grey-1 margin-bottom-35px">
                            <img src="../uploads/baovevoi.jpg" alt="Image" style="height: auto;" class="responsiveImg"/>
                            <!-- noidung ne -->
                            <div class="padding-30px">
                                <!-- phan thong tin duoi img -->
                                <div class="meta">
                                <span class="margin-right-20px dtext-extra-small">
                                    By:
                                    <a href="#" class="dtext-main-color">admin</a>
                                </span>
                                    <span class="margin-right-20px dtext-extra-small">
                                    Date:
                                    <a href="#" class="dtext-main-color">2020-12-12</a>
                                </span>
                                    <span class="dtext-extra-small">
                                    Tag:
                                    <a href="#" class="dtext-main-color ">Du Lich</a>
                                </span>
                                </div>
                                <!-- tieu de cua noi dung -->
                                <h1 class="d-block  text-capitalize text-large text-dark font-weight-700 margin-bottom-10px">
                                    “Du lịch đúng cách”- giải pháp giúp bảo vệ những chú voi cuối cùng trên trái đất                            </h1>
                                <!-- noidung -->
                                <p><strong><em>Du lịch dần trở th&agrave;nh một phần kh&ocirc;ng thể thiếu trong cuộc sống của ch&uacute;ng ta khi đ&acirc;y l&agrave; một trong những c&aacute;ch hữu hiệu nhất để gi&uacute;p ch&uacute;ng ta thư gi&atilde;n, qu&ecirc;n đi những bộn bề của cuộc sống. Hơn hết, du lịch c&ograve;n l&yacute; th&uacute; hơn khi ch&uacute;ng ta được ồ &agrave; trước bao cảnh sắc thi&ecirc;n nhi&ecirc;n, được tiếp cận những b&agrave;i học về văn h&oacute;a, l&agrave;m quen với nhiều người bạn mới v&agrave; quan trọng nhất l&agrave; kh&aacute;m ph&aacute; được bản th&acirc;n m&igrave;nh. Tuy nhi&ecirc;n, đại dương sẽ kh&ocirc;ng m&atilde;i xanh, c&aacute;nh rừng sẽ kh&ocirc;ng m&atilde;i x&ograve;e b&oacute;ng m&aacute;t, n&uacute;i lửa sẽ kh&ocirc;ng m&atilde;i ngủ y&ecirc;n v&agrave; c&aacute;c lo&agrave;i động vật hoang d&atilde;, đặc biệt l&agrave; lo&agrave;i voi sẽ m&atilde;i kh&ocirc;ng c&ograve;n để tạo nguồn cảm hứng nếu du lịch kh&ocirc;ng đi đ&ocirc;i với bảo tồn.&nbsp;</em></strong></p>

                                <p>Nh&acirc;n ng&agrave;y Thế Giới Bảo Tồn Voi, Traveloka Xperience xin gửi tới c&aacute;c bạn những th&ocirc;ng tin l&yacute; th&uacute; về voi v&agrave; t&igrave;nh trạng bảo tồn của ch&uacute;ng trong tự nhi&ecirc;n.&nbsp; Trong qu&aacute; tr&igrave;nh đi du lịch, bạn chỉ v&ocirc; t&igrave;nh mua một chiếc nhẫn ng&agrave; voi để cầu may, một đ&ocirc;i b&ocirc;ng tai l&agrave;m qu&agrave;, hay chiếc v&ograve;ng cổ từ ng&agrave; voi mang &yacute; nghĩa &ldquo;quyền lực&rdquo; l&agrave; &iacute;t nhất một c&aacute; thể voi ở đ&acirc;u đ&oacute; tr&ecirc;n h&agrave;nh tinh m&atilde;i ra đi. Tưởng như v&ocirc; can, nhưng việc sử dụng, mua qu&agrave; tặng bằng ng&agrave; voi của bạn kh&ocirc;ng chỉ tr&aacute;i ph&aacute;p luật m&agrave; c&ograve;n đẩy việc săn bắn voi ở c&aacute;c c&aacute;nh rừng ch&acirc;u Phi xa x&ocirc;i v&agrave; vận chuyển tr&aacute;i ph&eacute;p về Việt Nam để chế t&aacute;c th&agrave;nh nhẫn, th&agrave;nh v&ograve;ng tay v&ograve;ng cổ. Du lịch sinh th&aacute;i xem th&uacute; ở ch&acirc;u Phi l&agrave; nguồn sống của h&agrave;ng triệu người d&acirc;n, voi bị bắn để lấy ng&agrave; đồng nghĩa với việc rất nhiều gia đ&igrave;nh ở ch&acirc;u Phi mất đi nguồn sống từ du lịch xem voi.</p>

                                <p style="text-align:center"><img alt="Giảm cầu ngà voi WWF" src="https://blog.traveloka.com/vn/wp-content/uploads/sites/9/2020/08/leo-nui-chua-chan-gia-lao-16-640x480.jpg" style="height:480px; width:640px" /></p>

                                <p style="text-align:center">H&atilde;y du lịch đ&uacute;ng c&aacute;ch để thi&ecirc;n nhi&ecirc;n m&atilde;i xanh. @Traveloka Golocal</p>

                                <h2>Bảo vệ động vật &ndash; kh&ocirc;ng chỉ l&agrave; &ldquo;Chăm s&oacute;c v&agrave; y&ecirc;u thương!&rdquo;</h2>

                                <p>Đ&atilde; kh&ocirc;ng &iacute;t bạn th&iacute;ch đến T&acirc;y Nguy&ecirc;n để được tận mắt ngắm voi, th&iacute;ch th&uacute; với m&agrave;n cưỡi voi băng rừng, lội qua d&ograve;ng s&ocirc;ng Serepok h&ugrave;ng vĩ nhưng khi nh&igrave;n thấy đ&ocirc;i mắt buồn thiu hay th&acirc;n x&aacute;c mệt mỏi của những ch&uacute; voi th&igrave; đều quyết định chỉ nh&igrave;n từ xa chứ nhất định kh&ocirc;ng cưỡi để giảm &aacute;p lực cho ch&uacute;ng. Nhiều bạn cũng th&iacute;ch th&uacute; khi đi&nbsp;<a href="https://www.traveloka.com/vi-vn/activities/vietnam/product/free-meal-voucher-vinpearl-safari-phu-quoc-tickets-2000684220699?utm_id=I4LCJ5oK&amp;utm_source=blog.traveloka.com&amp;utm_medium=referral&amp;utm_campaign=HYG334-VN-AC-OM-BLOG-Wwf-Vinpearl_Safari_&amp;utm_term=DLDCGPGBVNCVCCTTD-SND-anchortext" rel="noopener" target="_blank">Vinpearl Safari Ph&uacute; Quốc</a>&nbsp;hay&nbsp;<a href="https://www.traveloka.com/vi-vn/activities/vietnam/product/special-promo-zoodoo-dalat-tickets-easy-access-2001455035254?utm_id=I4LCJ5oK&amp;utm_source=blog.traveloka.com&amp;utm_medium=referral&amp;utm_campaign=HYG334-VN-AC-OM-BLOG-Wwf-Zoodoo&amp;utm_term=DLDCGPGBVNCVCCTTD-SND-anchortext" rel="noopener" target="_blank">Sở th&uacute; Zoodoo Đ&agrave; Lạt</a>, được thoải m&aacute;i vui đ&ugrave;a v&agrave; y&ecirc;n t&acirc;m hơn khi biết ch&uacute;ng được chăm s&oacute;c cẩn thận theo quy tr&igrave;nh chuẩn như thế n&agrave;o. B&ecirc;n cạnh đ&oacute;, Việt Nam cũng c&oacute; nhiều m&ocirc; h&igrave;nh du lịch kết hợp với bảo tồn thi&ecirc;n nhi&ecirc;n v&agrave; gi&aacute;o dục c&aacute;c bạn trẻ về tự nhi&ecirc;n v&agrave; động vật hoang d&atilde; như c&aacute;c Kỳ Trại thi&ecirc;n nhi&ecirc;n Gaia, đưa bạn đến c&aacute;c Khu dự trữ Sinh Quyển thế giới Cần Giờ hay Khu bảo tồn c&aacute;c Vườn Quốc gia. Mỗi người đều đang c&oacute; &yacute; thức bảo vệ m&ocirc;i trường nhưng b&ecirc;n cạnh đ&oacute;, c&oacute; những việc ch&uacute;ng ta v&ocirc; &yacute; l&agrave;m khi đi du lịch như mua một chiếc nhẫn l&ocirc;ng đu&ocirc;i voi để cầu may hay chiếc v&ograve;ng cổ từ ng&agrave; voi mang &yacute; nghĩa &ldquo;quyền lực&rdquo; cũng đang v&ocirc; t&igrave;nh hủy hoại đ&agrave;n voi!</p>

                                <p><img alt="" src="https://blog.traveloka.com/vn/wp-content/uploads/sites/9/2020/08/cover-wwf-1-edit-640x407.jpg" style="height:407px; width:640px" /></p>

                                <p>Voi l&agrave; một lo&agrave;i động vật th&ocirc;ng minh v&agrave; gi&agrave;u cảm x&uacute;c. Ch&uacute;ng c&oacute; tập t&iacute;nh x&atilde; hội cao &ndash; gắn kết s&acirc;u sắc, th&acirc;n t&igrave;nh với đồng loại. Voi biết y&ecirc;u thương, che chở, giận dữ v&agrave; nhớ l&acirc;u. Cũng như ch&uacute;ng ta cần sống trong gia đ&igrave;nh, voi cần sống theo đ&agrave;n, thường l&agrave; một gia đ&igrave;nh với 3 thế hệ &ndash; voi b&agrave;, voi mẹ v&agrave; voi con. Cổ s&uacute;y cho việc sử dụng v&agrave; mua b&aacute;n c&aacute;c sản phẩm ng&agrave; voi l&agrave; ch&uacute;ng ta đang đẩy voi đến cảnh tan đ&agrave;n, đến bờ vực tuyệt chủng.</p>

                                <p>Việt Nam đ&atilde; từng l&agrave; nước c&oacute; nhiều đ&agrave;n voi lớn. Trong v&ograve;ng 40 năm qua, quần thể voi hoang d&atilde; của Việt Nam đ&atilde; suy giảm tr&ecirc;n 90%, từ hơn 1500 c&aacute; thể, giờ chỉ c&ograve;n gần 100 c&aacute; thể. C&ograve;n ở Ch&acirc;u Phi, từ hơn một triệu c&aacute; thể v&agrave;o thập kỷ 80, hiện chỉ c&ograve;n hơn 400 ng&agrave;n c&aacute; thể. Một trong những nguy&ecirc;n nh&acirc;n ch&iacute;nh dẫn tới c&aacute;c quần thể voi hoang d&atilde; tr&ecirc;n to&agrave;n thế giới suy giảm nghi&ecirc;m trọng l&agrave; do voi bị săn bắn để lấy ng&agrave;.</p>

                                <p>Việt Nam ng&agrave;y c&agrave;ng trở th&agrave;nh thị trường trung chuyển v&agrave; sử dụng tr&aacute;i ph&eacute;p ng&agrave; voi từ ch&acirc;u Phi với khối lượng lớn. Ước t&iacute;nh mỗi năm, những c&aacute;nh rừng ch&acirc;u Phi mất đi khoảng 23.000 c&aacute; thể voi do bị săn bắn để lấy ng&agrave; nhằm thỏa m&atilde;n nhu cầu của c&aacute;c thị trường ch&acirc;u &Aacute;, trong đ&oacute; c&oacute; Trung Quốc, Th&aacute;i Lan v&agrave; Việt Nam.&nbsp;</p>

                                <p><img alt="Giảm cầu ngà voi - WWF" src="https://blog.traveloka.com/vn/wp-content/uploads/sites/9/2020/08/FbInsTwitter-640x453.jpg" style="height:453px; width:640px" /></p>

                                <p style="text-align:center">Những m&oacute;n trang sức &ldquo;đẹp như v&agrave;ng trắng&rdquo; m&agrave; mọi người &ldquo;v&ocirc; t&igrave;nh&rdquo; th&iacute;ch! @FbInsTwitter</p>

                                <p>Một h&agrave;nh động nhỏ sẽ tạo ra những &yacute; nghĩa lớn &ndash; Du lịch đ&uacute;ng c&aacute;ch sẽ gi&uacute;p ch&uacute;ng ta bảo vệ được nhiều hơn những g&igrave; ch&uacute;ng ta nghĩ. Đ&acirc;u ai muốn v&agrave;i năm sau quay lại địa điểm du lịch m&igrave;nh y&ecirc;u th&iacute;ch lại phải đau l&ograve;ng khi thấy ch&uacute;ng đang bị hủy hoại dần do ảnh hưởng của biến đổi kh&iacute; hậu, quay lại Bu&ocirc;n Đ&ocirc;n hay Hồ Lak m&agrave; kh&ocirc;ng c&ograve;n thấy b&oacute;ng d&aacute;ng của những ch&uacute; voi hiền l&agrave;nh m&agrave; nguy&ecirc;n nh&acirc;n lại từ ch&iacute;nh t&aacute;c động v&ocirc; &yacute; từ con người. C&ugrave;ng&nbsp;<strong>Traveloka Xperience&nbsp;</strong>v&agrave;&nbsp;<strong>WWF-Việt Nam</strong>&nbsp;chia sẻ th&ocirc;ng điệp n&oacute;i KH&Ocirc;NG với việc mua c&aacute;c sản phẩm từ voi để gi&uacute;p &ldquo;Giảm cầu ng&agrave; voi&rdquo; &ndash; bảo vệ cuộc sống của lo&agrave;i voi v&agrave; chung tay n&acirc;ng cao &yacute; thức sống xanh khi đi du lịch.&nbsp;</p>

                                <blockquote>
                                    <p>N&oacute;i kh&ocirc;ng với ng&agrave; voi, cứu biết bao gia đ&igrave;nh.</p>
                                </blockquote>

                                <table>
                                    <tbody>
                                    <tr>
                                        <td><strong>Những th&ocirc;ng tin bạn cần biết:</strong>

                                            <ul>
                                                <li>Theo tổ chức FATF, một tổ chức li&ecirc;n ch&iacute;nh phủ chuy&ecirc;n theo d&otilde;i vấn đề rửa tiền, nạn bu&ocirc;n b&aacute;n động vật hoang d&atilde; tr&aacute;i ph&eacute;p, trong đ&oacute; c&oacute; ng&agrave; voi, l&agrave; mối đe dọa to&agrave;n cầu, c&oacute; li&ecirc;n quan đến c&aacute;c tội phạm c&oacute; tổ chức kh&aacute;c như khủng bố, bu&ocirc;n ma t&uacute;y v&agrave; bu&ocirc;n b&aacute;n vũ kh&iacute;. Loại h&igrave;nh bu&ocirc;n b&aacute;n bất hợp ph&aacute;p n&agrave;y ước t&iacute;nh c&oacute; doanh thu l&ecirc;n tới 23 tỷ USD mỗi năm.</li>
                                                <li>Luật ph&aacute;p Việt Nam quy định voi l&agrave; lo&agrave;i được bảo vệ nghi&ecirc;m ngặt. Mọi h&agrave;nh vi bu&ocirc;n b&aacute;n, vận chuyển, t&agrave;ng trữ, chế t&aacute;c, quảng c&aacute;o c&aacute;c sản phẩm từ voi, đặc biệt l&agrave; ng&agrave; voi đều vi phạm ph&aacute;p luật. Theo quy định của Bộ luật H&igrave;nh sự năm 2015 v&agrave; sửa đổi năm 2017, c&aacute;c vi phạm tr&ecirc;n c&oacute; thể bị xử t&ugrave; đến 15 năm v&agrave; phạt tiền đến 15 tỷ đồng.</li>
                                                <li>Đặc biệt, sự l&acirc;y truyền c&aacute;c bệnh từ động vật hoang d&atilde; sang người trong đ&oacute; c&oacute; COVID-19 đ&atilde; th&uacute;c giục mạnh mẽ c&aacute;c ch&iacute;nh phủ mạnh tay chấm dứt nạn bu&ocirc;n b&aacute;n động vật hoang d&atilde; tr&aacute;i ph&eacute;p. Mới đ&acirc;y thủ tướng Nguyễn Xu&acirc;n Ph&uacute;c đ&atilde; ra chỉ thị số 29/2020/TTg ng&agrave;y 23/7 ki&ecirc;n quyết dẹp bỏ c&aacute;c chợ, tụ điểm mua, b&aacute;n động vật hoang d&atilde; tr&aacute;i ph&aacute;p luật v&agrave; c&oacute; chế t&agrave;i xử phạt việc ti&ecirc;u thụ tr&aacute;i ph&aacute;p luật động vật hoang d&atilde;. Thủ Tướng c&ograve;n y&ecirc;u cầu c&aacute;c bộ ng&agrave;nh phối hợp tốt hơn để xử l&yacute; c&aacute;c vấn đề bu&ocirc;n b&aacute;n tr&aacute;i ph&eacute;p ng&agrave; voi, sừng t&ecirc; gi&aacute;c, thắt chặt việc g&acirc;y nu&ocirc;i động vật hoang d&atilde; v&igrave; mục đ&iacute;ch thương mại; nghi&ecirc;m cấm c&aacute;n bộ nh&agrave; nước v&agrave; th&acirc;n nh&acirc;n của họ tham gia v&agrave;o mua, b&aacute;n, vận chuyển, t&agrave;ng trữ, quảng c&aacute;o, chế biến c&aacute;c sản phẩm động vật hoang d&atilde; tr&aacute;i ph&eacute;p.</li>
                                                <li>Xem th&ecirc;m th&ocirc;ng tin tại&nbsp;<strong><a href="https://bit.ly/Noi-Khong-Voi-Nga-Voi-WWF" rel="noopener" target="_blank">Đ&Acirc;Y</a></strong>.&nbsp;</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- tac gia  -->
                        <!-- box3 -->
                        <!-- box4 -->
                        <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                            <h4 class="table-title margin-bottom-30px" id="l-box-binhluan">
                                <span>1 Bình luận</span>

                                <div class="binhluan" id="binhluan">
                                    <div class="hinh">
                                        <img src="../uploads/avatar.png" alt="">
                                    </div>
                                    <div class="noidungbinhluan">
                                        <div class="tenKH"></div>
                                        <div class="noidung">sdfsdf</div>
                                        <div class="l-bt">
                                            <div class="like">Like</div>
                                            <div class="traloi">Phản hồi</div>
                                            <div class="thoigian">2021-05-09 22:46:34</div>
                                        </div>
                                    </div>
                                </div>
                            </h4>
                            <h4 class="table-title margin-bottom-30px" id="l-box-binhluan-display">

                            </h4>
                            <!-- nguoibl -->
                        </div>
                        <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                            <h4 class="table-title margin-bottom-30px">
                                <span>Thêm bình luận</span>
                            </h4>
                            <!-- form -->
                            <form method="post" id="form_cmt">
                                <div class="form-row fz15px font-weight-700 ">
                                    <div class="form-group col-md-6">
                                        <label for="inputName"></label>
                                        <input type="hidden" class="form-control" id="idus" name="idus" placeholder="Nhập tên" value=" <br/>
                                        <b>Notice</b>:  Undefined variable: userr in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\blogdetail.php</b> on line <b>93</b><br/>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputName"></label>
                                        <input type="hidden" class="form-control" id="idbaiviet" name="idbaiviet" placeholder="Nhập tên" value="53">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="content">Bình luận:</label>
                                        <textarea class="form-control" name="content" id="content" spellcheck="false" placeholder="Bình luận" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <a href="?act=login" class="btn btn-info">Đăng Nhập</a>
                                    </div>
                                </div>
                                <span id="comment_message"></span>
                                <br>
                                <div id="display_comment"></div>
                        </div>
                        </form>
                        </h4>
                    </div>
                    <div class="background-white border-1 border-grey-1 margin-bottom-35px padding-30px">
                        <h4 class="table-title margin-bottom-30px">
                            <span>Bài viết liên quan</span>
                        </h4>
                        <div class="row">

                            <div class="col-lg-6">
                                <div class="blog-entry background-white border-grey-1 margin-bottom-35px">
                                    <a href="/site/?act=dtBlog&idbl=44&iddm=2">
                                        <div class="img-in" style="background-image: url('../uploads/dalat-blog.jpg');">
                                        </div>
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
                                <a href="/site/?act=dtBlog&idbl=53&iddm=2">
                                    <div class="img-in" style="background-image: url('../uploads/baovevoi.jpg');"></div>
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

                </div>
            </div>
        </div>
        <!-- cot email ben phai -->
        <div class="col-lg-4 col-md-8 sticky-content div-right-inblogdt">
            <div class="theiaStickySidebar">
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
                        <li><a href="<br />
<b>Warning</b>:  Use of undefined constant SITE - assumed 'SITE' (this will throw an Error in a future version of PHP) in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\blogdetail.php</b> on line <b>178</b><br />
SITE?act=blog&iddm=1">Ăn Ngon
                            </a></li>
                    </ul>
                    <ul>
                        <li><a href="<br />
<b>Warning</b>:  Use of undefined constant SITE - assumed 'SITE' (this will throw an Error in a future version of PHP) in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\blogdetail.php</b> on line <b>178</b><br />
SITE?act=blog&iddm=2">Du Lịch</a></li>
                    </ul>
                    <ul>
                        <li><a href="<br />
<b>Warning</b>:  Use of undefined constant SITE - assumed 'SITE' (this will throw an Error in a future version of PHP) in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\blogdetail.php</b> on line <b>178</b><br />
SITE?act=blog&iddm=3">Đi máy bay</a></li>
                    </ul>
                    <ul>
                        <li><a href="<br />
<b>Warning</b>:  Use of undefined constant SITE - assumed 'SITE' (this will throw an Error in a future version of PHP) in <b>E:\xampp\htdocs\ban-ve-may-bay\site\views\blogdetail.php</b> on line <b>178</b><br />
SITE?act=blog&iddm=6">Đặt Vé Như Thế Nào</a></li>
                    </ul>
                </div>
                <div class="widget">
                    <h4 class="widget-title clearfix">
                        <span>Top blog</span>
                    </h4>
                    <ul class="last-posts">
                        <li class="h-75px">
                            <a href="/site/?act=dtBlog&idbl=44&iddm=2" class="float-left margin-right-15px d-block w-80px">
                                <img src="../uploads/dalat-blog.jpg" alt="">
                            </a>
                            <a href="/site/?act=dtBlog&idbl=44&iddm=2" class="d-block text-uppercase l-fontz-nor text-dark font-weight-600">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    Cái lãng mạn của mùa Đông trên cánh đồng cỏ tuyết và đồi mây Đà Lạt                            </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                            <a href="#" class="cl-blackgr">admin</a>
                        </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                            2020-12-10                        </span>
                    </ul>
                    <ul class="last-posts">
                        <li class="h-75px">
                            <a href="/site/?act=dtBlog&idbl=45&iddm=1" class="float-left margin-right-15px d-block w-80px">
                                <img src="../uploads/sapa-blog.jpg" alt="">
                            </a>
                            <a href="/site/?act=dtBlog&idbl=45&iddm=1" class="d-block text-uppercase l-fontz-nor text-dark font-weight-600">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    Review Sapa: Lịch trình cho những ai lần đầu đến thành phố trong sương                            </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                            <a href="#" class="cl-blackgr">admin</a>
                        </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                            2020-11-20                        </span>
                    </ul>
                    <ul class="last-posts">
                        <li class="h-75px">
                            <a href="/site/?act=dtBlog&idbl=52&iddm=1" class="float-left margin-right-15px d-block w-80px">
                                <img src="../uploads/ha-giang-mua-nuoc-do-9.jpg" alt="">
                            </a>
                            <a href="/site/?act=dtBlog&idbl=52&iddm=1" class="d-block text-uppercase l-fontz-nor text-dark font-weight-600">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    Lên Hà Giang, nghe người Mèo kể chuyện mùa nước đổ                            </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                            <a href="#" class="cl-blackgr">admin</a>
                        </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                            2020-11-20                        </span>
                    </ul>
                    <ul class="last-posts">
                        <li class="h-75px">
                            <a href="/site/?act=dtBlog&idbl=53&iddm=2" class="float-left margin-right-15px d-block w-80px">
                                <img src="../uploads/baovevoi.jpg" alt="">
                            </a>
                            <a href="/site/?act=dtBlog&idbl=53&iddm=2" class="d-block text-uppercase l-fontz-nor text-dark font-weight-600">
                                <p class="webkit-line-clam blog-line-2-clamp fz_8vw mr-0px">
                                    “Du lịch đúng cách”- giải pháp giúp bảo vệ những chú voi cuối cùng trên trái đất                            </p>
                            </a>
                            <span class="text-extra-small cl-blackgr float-left mr-top-3px">Tác giả :
                            <a href="#" class="cl-blackgr">admin</a>
                        </span>
                            <span class="text-extra-small cl-blackgr margin-right-20px float-right mr-top-3px">
                            2020-12-12                        </span>
                    </ul>
                </div>
            </div>
        </div>
        </div>

        </div>
        </div>
    </main>
@endsection
