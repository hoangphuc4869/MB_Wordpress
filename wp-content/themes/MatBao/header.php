<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mắt Bảo</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
    <!-- Reset CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/reset.css" />
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/responsive.css" />
</head>

<body>
    <!-- ===============Header============== -->
    <header>
        <!-- bannerTop -->
        <section class="bannerTop">
            <div class="slide">
                <div class="slickSlide">
                    <div class="bannerDesk" style="
                                background: url(`./assets/img/background-vpbankmb-top-banner-mbn-pc.png`)
                                    no-repeat;
                                background-size: cover;
                            "></div>
                    <a href="https://vpbank.matbao.net/?utm_source=matbao&utm_medium=click&utm_campaign=vpbank-matbao"
                        class="bannercell" style="
                                background: url(`./assets/img/bannertop-vpBank.png`)
                                    center no-repeat;
                            "></a>
                </div>
                <div class="slickSlide">
                    <div class="bannerDesk" style="
                                background: url(./assets/img/202305_ctkmserverecom_topbanner_PC_Background.png)
                                    no-repeat;
                                background-size: cover;
                            "></div>
                    <a href="https://vpbank.matbao.net/?utm_source=matbao&utm_medium=click&utm_campaign=vpbank-matbao"
                        class="bannercell" style="
                                background: url(./assets/img/202305_ctkmserverecom_topbanner_PC_Contents.png)
                                    center no-repeat;
                            "></a>
                </div>
                <div class="slickSlide">
                    <div class="bannerDesk" style="
                                background: none 0% 0% / auto repeat scroll
                                    padding-box border-box rgb(6, 84, 218);
                            "></div>
                    <a href="https://mifi.vn/phan-mem-hoa-don-dien-tu-mien-phi/" class="bannercell" style="
                                background: url(./assets/img/Tang_goi_Mifi_khoi_nghiep_topbanner_PC.png)
                                    center no-repeat;
                            "></a>
                </div>
            </div>
        </section>

        <!-- settings-header -->
        <div class="container-fluid borderForSettingsHeader">
            <div class="container">
                <div class="settings-header">
                    <div class="images">
                        <a href="/index.html"
                            title="Thuê Cloud Server Linux, Windows, Chỗ Mua VPS Chất Lượng Giá Tốt"><img
                                src="<?php bloginfo('template_directory')?>/assets/img/logo-matbao-net.svg"
                                alt="logo-matbao" class="logo" /></a>
                        <a href="https://www.matbao.net/mat-bao-top-100-global.html?utm_source=logoTop100&utm_medium=marcom&utm_campaign=Top100"
                            class="changeLogo"></a>
                    </div>
                    <div class="settings">
                        <!-- choose-language -->
                        <div class="chooseLanguage">
                            <!-- language now -->
                            <div class="languageNow">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/vietnam-flag-png-large.png"
                                    alt="flag" class="countryFlag" />
                                <p class="nameCountry">Vietnamese</p>
                            </div>
                            <!-- language list -->
                            <ul class="languageList">
                                <li class="VN countryItem">
                                    <img src="<?php bloginfo('template_directory')?>/assets/img/vietnam-flag-png-large.png"
                                        alt="flag" class="countryFlag" />
                                    <p class="nameCountry">Vietnamese</p>
                                </li>
                                <li class="EN countryItem">
                                    <img src="<?php bloginfo('template_directory')?>/assets/img/united-kingdom-flag-png-large.png"
                                        alt="flag" class="countryFlag" />
                                    <p class="nameCountry">English</p>
                                </li>
                            </ul>
                        </div>
                        <!-- assitsstant -->
                        <div class="boxAsitsstant">
                            <a href="https://chrome.google.com/webstore/detail/mat-bao-company/eccdnkekcnnnlipheicaldlogfnccfoc"
                                class="assitsstant">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/icon-matbao-top.svg"
                                    alt="icon" class="icon" />
                                <span>Trợ lý mắt bảo</span>
                            </a>
                            <span class="buttonQuestion"
                                data-text="Trợ lý Mắt Bão là tiện ích chạy trực tiếp trên trình duyệt Chrome giúp gợi ý & tìm kiếm nhanh các dịch vụ tốt nhất tại Mắt Bão, phù hợp với nhu cầu của bạn. 
                                    Cách sử dụng: Khi bạn tìm kiếm dịch vụ tiện ích Trợ lý Mắt Bão sẽ tự động gợi ý các dịch vụ phù hợp mà không cần phải thực hiện thêm các thao tác sau đó."
                                data-position="bottom"></span>
                        </div>

                        <!-- supports -->
                        <a href="https://wiki.matbao.net/" class="supports">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/Hotro.svg" alt="icon"
                                class="iconSupports" />
                            Hỗ trợ
                        </a>
                        <!-- login -->
                        <a href="#!" class="assitsstant login">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/Dangnhap .svg" alt="icon"
                                class="icon" />
                            <span>Đăng Nhập</span>
                            <span class="buttonQuestion" data-text="Thành viên Mắt Bão được hưởng quyền lợi LỚN! 
                                
                                • Tích lũy điểm đổi quà tặng
                                • Hoàn tiền khuyến mãi
                                • Ưu đãi cho thành viên" data-position="bottom"></span>
                        </a>
                        <!-- Buy -->
                        <a href="#!" class="buy">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/cart.svg" alt="cart"
                                class="iconBuy" />
                        </a>
                    </div>
                    <!-- btnOpenSettings -->
                    <buttons class="btnOpenSettings"><i class="fa-solid fa-bars"></i></buttons>
                    <div class="settingsMb">
                        <!-- closeArea -->
                        <button class="closeBtn">
                            <i class="fa-regular fa-circle-xmark"></i>
                        </button>
                        <ul class="navMb">
                            <li class="item">
                                WordPress
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">WordPress Hosting v4</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Tối ưu WordPress</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">WordPress Ecom</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">WP Helper Plugin</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item">
                                Hosting & Sever
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">Cloud Hosting</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Cloud Sever</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">WordPress Hosting v4</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item">
                                Email
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">Email Pro V3</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Email4B V2</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">SAP v2 - Bảo vệ email</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Email 365</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item">
                                Tên Miền
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">Đăng ký tên miền</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Tên miền .VN</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Bảng giá tên miền</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Kiểm tra tên miền mới</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Bảo mật danh tính</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item">
                                Bảo Mật
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">Chữ ký số</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Bảo mật SSL</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">SAP v2 - Bảo vệ email</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Công cụ kiểm tra SSL</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item">
                                Microsoft & Google
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">Microsoft 365</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Google Workspace</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="item">
                                Khuyến Mãi
                                <buttons class="seeMore"><i class="fa-solid fa-chevron-down"></i></buttons>
                                <ul class="sub-menu-mb hidden">
                                    <li class="itemSubz">
                                        <a href="">Khuyến mãi dịch vụ</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Ưu đãi thẻ thành viên</a>
                                    </li>
                                    <li class="itemSubz">
                                        <a href="">Tích điểm đổi quà</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu -->
        <div class="container-fluid dinhvi">
            <div class="container">
                <div class="menu">
                    <!-- item 1 WordPress -->
                    <div class="menu-item">
                        <span class="title">WordPress</span>
                        <div class="sub-menu row">
                            <!-- card-item 1 -->
                            <a href="https://www.matbao.net/hosting/cloud-wordpress-hosting.html"
                                class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/WP.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">
                                    WordPress Hosting v4
                                </p>
                                <p class="desc">Chuyên biệt và tuyệt vời</p>
                                <img src="<?php bloginfo('template_directory')?>/assets/img/best-2020.svg" alt=""
                                    class="underlineImg" />
                            </a>
                            <!-- card-item 2 -->
                            <a href="https://www.matbao.net/hosting/giai-phap-toi-uu-wordpress.html"
                                class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/WP_Ecom3.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Tối ưu WordPress</p>
                                <p class="desc">
                                    Chuẩn SEO, bảo mật, nhanh xé gió
                                </p>
                            </a>
                            <!-- card-item 3 -->
                            <a href="https://www.matbao.net/hosting/wordpress-ecom-hosting.html"
                                class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/WP_Ecom2.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">WordPress Ecom</p>
                                <p class="desc">
                                    Tối ưu cho trang <br />
                                    Thương mại điện từ
                                </p>
                            </a>
                            <!-- card-item 4 -->
                            <div class="cardItem otherList col-sm-3">
                                <p class="titleCard">
                                    Các Dịch Vụ Liên Quan:
                                </p>
                                <ul>
                                    <a href="https://www.matbao.net/hosting/wp-helper-plugin.html">
                                        <li>WP Helper Plugin</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- item 2 Hosting and sever -->
                    <div class="menu-item">
                        <span class="title">Hosting & Sever</span>
                        <div class="sub-menu row">
                            <!-- card-item 1   -->
                            <a href="https://www.matbao.net/hosting/cloud-hosting.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/cloud-02.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Cloud Hosting</p>
                                <p class="desc">
                                    Hosting chất lượng cao <br />
                                    cho website ổn định
                                </p>
                            </a>
                            <!-- card-item 2  -->
                            <a href="https://www.matbao.net/server/cloud-server.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/server.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Cloud Sever</p>
                                <p class="desc">
                                    Hạ tầng ổn định với <br />
                                    công nghệ ảo hoá tiên tiến
                                </p>
                            </a>
                            <!-- card-item 3 -->
                            <a href="https://www.matbao.net/hosting/cloud-wordpress-hosting.html"
                                class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/WP.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">
                                    WordPress Hosting V4
                                </p>
                                <p class="desc">Chuyên biệt và tuyệt vời</p>
                            </a>
                            <!-- card-item 4 -->
                            <div class="cardItem otherList col-sm-3">
                                <p class="titleCard">
                                    Các Dịch Vụ Liên Quan:
                                </p>
                                <ul>
                                    <a href="https://www.matbao.net/may-chu/giai-phap-di-chuyen-du-lieu-website.html">
                                        <li>Dịch vụ di chuyển dữ liệu</li>
                                    </a>
                                    <a href="https://www.matbao.net/may-chu/dich-vu-quan-tri-may-chu.html">
                                        <li>Dịch vụ quản trị máy chủ</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- item 3 Email -->
                    <div class="menu-item">
                        <span class="title">Email</span>
                        <div class="sub-menu row">
                            <!-- card-item 1 -->
                            <a href="https://www.matbao.net/email.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/emailpro.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Email Pro v3</p>
                                <p class="desc">
                                    Email chuyên nghiệp theo <br />
                                    tên miền riêng cho Doanh <br />
                                    nghiệp nhỏ
                                </p>
                                <img src="<?php bloginfo('template_directory')?>/assets/img/best-2020.svg" alt=""
                                    class="underlineImg" />
                            </a>
                            <!-- card-item 2 -->
                            <a href="https://www.matbao.net/email4b.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/E4B.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Email4B v2</p>
                                <p class="desc">
                                    Email chuyên nghiệp dành cho <br />
                                    doanh nghiệp vừa và nhỏ
                                </p>
                            </a>
                            <!-- card-item 3 -->
                            <a href="https://www.matbao.net/sap.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/SAP.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">
                                    SAP v2 - Bảo vệ email
                                </p>
                                <p class="desc">
                                    Dịch vụ bảo vệ email <br />
                                    được Microsoft khuyến nghị
                                </p>
                            </a>
                            <!-- card-item 4 -->
                            <div class="cardItem otherList col-sm-3">
                                <p class="titleCard">
                                    Các Dịch Vụ Liên Quan:
                                </p>
                                <ul>
                                    <a href="https://www.matbao.net/email-365.html">
                                        <li>Email 365</li>
                                    </a>
                                    <a href="https://www.matbao.net/google-workspace.html">
                                        <li class="PositonNew">
                                            Gmail cho doanh nghiệp
                                        </li>
                                        <span class="new newCustomPosition">New</span>
                                    </a>
                                    <a href="https://www.matbao.net/canvato-bang-gia-chu-ky-email.html">
                                        <li>Canvato - Chữ ký email</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- item 4 Tên miền -->
                    <div class="menu-item">
                        <span class="title">Tên Miền</span>
                        <div class="sub-menu row">
                            <!-- card-item 1 -->
                            <a href="https://www.matbao.net/ten-mien/dang-ky-ten-mien.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/internet.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Đăng ký tên miền</p>
                                <p class="desc">
                                    Xây dựng thương hiệu <br />
                                    doanh nghiệp trên internet
                                </p>
                                <img src="<?php bloginfo('template_directory')?>/assets/img/best-2020.svg" alt=""
                                    class="underlineImg" />
                            </a>
                            <!-- card-item 2 -->
                            <a href="https://www.matbao.net/ten-mien/.vn.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/logo_vn_2022.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Tên miền .VN</p>
                                <p class="desc">
                                    Tên miền quốc gia Việt Nam <br />
                                    được pháp luật bảo vệ
                                </p>
                            </a>
                            <!-- card-item 3 -->
                            <a href="https://www.matbao.net/ten-mien/bang-gia-ten-mien.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/tag-copy.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Bảng giá tên miền</p>
                                <p class="desc">
                                    Hơn 500 đuôi tên miền với mức giá<br />
                                    tối ưu
                                </p>
                            </a>
                            <!-- card-item 4 -->
                            <div class="cardItem otherList col-sm-3">
                                <p class="titleCard">
                                    Các Dịch Vụ Liên Quan:
                                </p>
                                <ul>
                                    <a href="https://www.matbao.net/dnssec.html">
                                        <li>DNSSEC</li>
                                    </a>
                                    <a href="https://www.matbao.net/ten-mien/dang-ky-ten-mien-moi.html">
                                        <li>Kiểm tra tên miền mới</li>
                                    </a>
                                    <a
                                        href="https://www.matbao.net/ten-mien/bao-ve-ten-mien-tuyet-doi-cap-cao-nhat.html">
                                        <li>
                                            Bảo vệ tên miền cao cấp nhất
                                        </li>
                                    </a>
                                    <a href="https://www.matbao.net/ten-mien/chuyen-nhuong-ten-mien.html">
                                        <li>Chuyển nhượng tên miền</li>
                                    </a>
                                    <a href="https://www.matbao.net/bao-mat-thong-tin-chu-the.html">
                                        <li>Bảo mật danh tính</li>
                                    </a>
                                    <a href="https://www.matbao.net/ten-mien/chuyen-doi-nha-cung-cap.html">
                                        <li>Chuyển tên miền về Mắt Bão</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- item 5 Bảo mật -->
                    <div class="menu-item">
                        <span class="title">Bảo Mật</span>
                        <span class="new">New</span>
                        <div class="sub-menu row">
                            <!-- card-item 1 -->
                            <a href="https://www.matbao.net/chu-ky-so-mat-bao-ca.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/MBCA.svg" alt=""
                                    class="logo" />
                                <p class="titleCard newChuKySo">
                                    Chữ ký số
                                    <span class="new newPositonChuKySo">New</span>
                                </p>
                                <p class="desc">
                                    Chữ ký số MatBao-CA đảm bảo giá trị pháp
                                    lý của văn bản và tài liệu khi giao dịch
                                    điện tử
                                </p>
                            </a>
                            <!-- card-item 2 -->
                            <a href="https://www.matbao.net/bao-mat-website/chung-chi-ssl.html"
                                class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/SSL.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Bảo mật SSL</p>
                                <p class="desc">
                                    Bảo mật thông tin trên web <br />
                                    để khách hàng yên tâm mua sắm
                                </p>
                            </a>
                            <!-- card-item 3 -->
                            <a href="https://www.matbao.net/sap.html" class="cardItem col-sm-3">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/SAP.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">
                                    SAP v2 - Bảo vệ email
                                </p>
                                <p class="desc">
                                    Dịch vụ bảo vệ email<br />
                                    được Microsoft khuyến nghị
                                </p>
                            </a>
                            <!-- card-item 4 -->
                            <div class="cardItem otherList col-sm-3">
                                <p class="titleCard">
                                    Các Dịch Vụ Liên Quan:
                                </p>
                                <ul>
                                    <a
                                        href="https://www.matbao.net/ten-mien/bao-ve-ten-mien-tuyet-doi-cap-cao-nhat.html">
                                        <li>Bảo vệ tên miền</li>
                                    </a>
                                    <a href="https://www.matbao.net/bao-mat/cong-cu-kiem-tra-ssl.html">
                                        <li>Công cụ kiểm tra SSL</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- item 6 Microsoft and google -->
                    <div class="menu-item">
                        <span class="title">Microsoft & Google</span>
                        <div class="sub-menu row">
                            <!-- card-item 1 -->
                            <a href="https://www.matbao.net/office-365.html" class="cardItem col-sm-4">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/O365.svg" alt=""
                                    class="logo logoShadow" />
                                <p class="titleCard">Microsoft 365</p>
                                <p class="desc">
                                    Bộ công cụ làm việc từ xa <br />
                                    bởi Microsoft
                                </p>
                            </a>
                            <!-- card-item 2 -->
                            <a href="https://www.matbao.net/google-workspace.html" class="cardItem col-sm-4">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/GW.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Google Workspace</p>
                                <p class="desc">
                                    Bộ công cụ làm việc từ xa <br />
                                    bởi Google
                                </p>
                            </a>
                        </div>
                    </div>

                    <!-- item 7 Khuyến mãi -->
                    <div class="menu-item">
                        <span class="title">Khuyến Mãi</span>
                        <span class="new">New</span>
                        <div class="sub-menu row">
                            <!-- card-item 1 -->
                            <a href="https://www.matbao.net/khuyen-mai/thong-tin-khuyen-mai-tong-hop.html"
                                class="cardItem col-sm-4">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/khuyenmai.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">Khuyến mãi dịch vụ</p>
                                <p class="desc">
                                    Đừng bỏ lỡ cơ hội trải nghiệm dịch vụ
                                    <br />
                                    tại Mắt Bão với chi phí cực kỳ ưu đãi
                                </p>
                            </a>
                            <!-- card-item 2 -->
                            <a href="https://www.matbao.net/uu-dai/hang-the-thanh-vien.html" class="cardItem col-sm-4">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/thethanhvien.svg" alt=""
                                    class="logo" />
                                <p class="titleCard">
                                    Ưu đãi thẻ thành viên
                                </p>
                                <p class="desc">
                                    Nâng hạng để được hoàn tiền <br />
                                    và thêm nhiều ưu đãi
                                </p>
                            </a>
                            <!-- card-item 3 -->
                            <a href="https://www.matbao.net/uu-dai/tich-diem-doi-qua.html" class="cardItem col-sm-4">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/doiqua.svg" alt=""
                                    class="logo" />
                                <p class="titleCard newDoiQua">
                                    Tích điểm đổi quà
                                    <span class="new newPositonDoiQua">New</span>
                                </p>
                                <p class="desc">
                                    Mua càng nhiều, càng thêm quà tặng
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>