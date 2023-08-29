<?php
    /**
     * Template Name: home
     */

    get_header();
?>

<!-- ===============Main============== -->
<main>
    <!-- topbannerWordpress -->
    <section class="container-fluid topbannerWordpress">
        <div class="content container">
            <p class="desc">Server Service</p>
            <p class="title">Cloud Server</p>
            <ul>
                <li class="desc">Cam kết online 99.9%</li>
                <li class="desc">Cam kết hiệu năng (IOPs)</li>
                <li class="desc">100% phần mềm có bản quyền</li>
            </ul>
            <!-- buttons -->
            <div class="buttons">
                <a class="btnLinux myBtn">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Linux.svg" alt="Linux"
                        class="logo" />
                    Sever Linux
                    <span class="buttonQuestion"
                        data-text="Bạn nên chọn Linux nếu bạn sử dụng mã nguồn mở như PHP, Python…"
                        data-position="top"></span>
                </a>
                <a class="btnWindows myBtn buttonIsActive">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/windows.svg" alt="Windows"
                        class="logo" />
                    Sever Windows
                    <span class="buttonQuestion" data-text="Bạn nên chọn Windows nếu bạn sử dụng mã nguồn ASP, ASP.NET"
                        data-position="top"></span>
                </a>
            </div>
        </div>
        <div class="half-left"></div>
        <div class="half-right"></div>
    </section>
    <!-- iconIntro -->
    <section class="iconIntro">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/saoluu.svg" alt=""
                        class="icon" />
                    <p class="desc">
                        Miễn phí dịch vụ sao lưu dữ liệu <br />
                        độc lập sao lưu website
                    </p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/antoan.svg" alt=""
                        class="icon" />
                    <p class="desc">An toàn và bảo mật cao</p>
                </div>
                <div class="col-sm-4 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/IP.svg" alt="" class="icon" />
                    <p class="desc">
                        Miễn phí một địa chỉ IP <br />
                        (public IP)
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- cloud-sever -->
    <section id="cloudSever" class="cloud-sever container-fluid">
        <div class="text-intro">
            <strong>Ưu đãi 15%</strong>
            <p>và hoàn thêm 100k khi đăng ký từ 1 năm trở lên.</p>
            <a href="https://www.matbao.net/tin-tuc/khuyen-mai-dang-ky-hom-nay-xi-truoc-uu-dai-134380.html?utm_source=landingpage&utm_medium=marcom&utm_campaign=ctkmecomservert5"
                target="_blank">Tìm hiểu ngay</a>
        </div>

        <div class="container">
            <div class="row mt-5">
                <!-- item 1 -->
                <?php
// Get terms from the "CS Window" and "Mac" taxonomies
// $cs_window_terms = get_terms(array(
//     'taxonomy' => 'category-product', // Replace with your actual taxonomy name
//     'hide_empty' => false,
// ));

// print_r(($cs_window_terms));
$args = array(
	'post_type'  => 'product-matbao',
    'post_status' => 'publish',
    'numberposts' => -1,
    'orderby' => 'ID',
    'order' => "ASC"
);
$postslist = get_posts( $args );
// foreach ($postslist as $post) {
//     echo $post->ID . "<br>";
// }

foreach ($postslist as $post) { ?>
                <div class="col-xl-3 col-lg-4 col-sm-6 mb-5">
                    <div class="myCard">
                        <div class="boxNameCloud">
                            <p class="nameCloud"><?php echo get_field('name', $post) ?></p>
                            <span class="buttonQuestion"
                                data-text="Quà tặng - trang bị sự riêng tư và sao lưu dự phòng trị giá 2.484.000 đ/năm, bao gồm:
    
                                    - IP riêng (2.160.000 đ/năm)
                                    
                                    - Gói Web backup 1Gb cùng thời gian đăng ký với gói Cloud server trị giá 324.000 đ/năm. Bạn chỉ trả phần chênh lệch nếu gói Web backup có thời gian lớn hơn gói Cloud server. Chúng tôi sẽ tự động cập nhật trong giỏ hàng giúp bạn."
                                data-position="bottom"></span>
                        </div>
                        <div class="boxCost">
                            <p class="cost"><?php echo get_field('price', $post) ?></p>
                            <p class="currency"><?php echo get_field('currency', $post) ?></p>
                        </div>
                        <div class="btnBuy myBtn"><?php echo get_field('buy_btn', $post) ?></div>
                        <div class="descArea">
                            <div class="toggleArea">
                                <div class="switchBox">
                                    <input type="checkbox" name="" id="switchId_1" class="switch" />
                                    <label for="switchId_1" class="sub-switch"></label>
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" style="
                                                    margin-right: 10px;
                                                    margin-top: -65px;
                                                " viewBox="0 0 41 60">
                                        <defs></defs>
                                        <polygon class="cos-1"
                                            points="13.75 0 0 35.03 11.5 35.03 5.25 60 41 25.04 23.25 25.04 35.25 0 13.75 0"
                                            fill="#c1bfbf"></polygon>
                                    </svg>

                                    <!-- buttonQuestion -->
                                    <span class="buttonQuestion"
                                        data-text="Ổ cứng SSD cho hiệu suất (max IOPs) cao gấp 10 lần so với HDD."
                                        data-position="top" style="
                                                    display: inline-block;
                                                    transform: translateY(-70%);
                                                "></span>
                                </div>
                            </div>
                            <?php echo get_field('cloud_storage', $post) ?>
                        </div>
                    </div>
                </div> <?php
    // echo "ID: " . $post->ID . "<br>";
    // echo "Author: " . $post->post_author . "<br>";
    // echo "Post Date: " . $post->post_date . "<br>";
    // echo "Post Title: " . $post->post_title . "<br>";
    // echo "Post Excerpt: " . $post->post_excerpt . "<br>";
    // echo "Post Status: " . $post->post_status . "<br>";
    // ... continue for other properties
    // echo "<br><br>"; // Add line breaks for better readability
    // echo get_field('price',$post) . "<br>";
    
}

?>



            </div>
            <div class="serviceNote">
                <p class="firstNote">
                    Ghi chú: Giá chưa bao gồm thuế VAT
                </p>
                <p class="secondNote">
                    <strong>* Ghi chú:</strong> Doanh nghiệp cần tài
                    nguyên server cao hơn, vui lòng liên hệ bộ phận Tư
                    vấn Dịch vụ để tư vấn thêm.
                </p>
            </div>
        </div>
    </section>
    <!-- formAdvise -->
    <section class="formAdvise">
        <div class="container boxFormAdvise">
            <div class="half-left">
                <div class="title">Nhận tư vấn & ưu đãi</div>
                <p class="desc">
                    Vui lòng bổ sung thông tin để chúng tôi hiểu rõ hơn
                    về nhu cầu <br />
                    của bạn
                </p>
                <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/tuvan.svg" alt="tu van"
                    class="thumb" />
            </div>
            <div class="half-right">
                <div class="formArea">
                    <p class="label">Họ & tên</p>
                    <input type="text" name="HoTen" id="textName" class="control" />
                    <p class="label">Số điện thoại</p>
                    <input type="text" name="SoDienThoai" id="textPhoneNumber" class="control" />
                    <p class="label">Email</p>
                    <input type="text" name="Email" id="textEmail" class="control" />

                    <div class="check">
                        <input type="checkbox" name="moreDisk" id="checkMoreDisk" />
                        <label for="checkMoreDisk">Tôi cần nhiều hơn 100 GB dung lượng</label>
                    </div>
                    <div class="check">
                        <input type="checkbox" name="moreDisk" id="checkMoreRAM" />
                        <label for="checkMoreRAM">Tôi cần nhiều hơn 8 GB Ram, 4 Core
                            CPU</label>
                    </div>
                    <!-- google here -->
                    <div id="captchatBaoGia" style="margin-bottom: 15px">
                        <div style="width: 304px; height: 78px">
                            <div>
                                <iframe title="reCAPTCHA"
                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lej2d4UAAAAAFca1Uglc86TI0OMrO1j8mXIhror&amp;co=aHR0cHM6Ly93d3cubWF0YmFvLm5ldDo0NDM.&amp;hl=en&amp;v=FFtxPnbuZxq6kkeHkQJR2MNQ&amp;theme=light&amp;size=normal&amp;cb=a5wo49gcq70e"
                                    width="304" height="78" role="presentation" name="a-y1hgn9m3vqm0" frameborder="0"
                                    scrolling="no"
                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                            </div>
                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                style="
                                            width: 250px;
                                            height: 40px;
                                            border: 1px solid rgb(193, 193, 193);
                                            margin: 10px 25px;
                                            padding: 0px;
                                            resize: none;
                                            display: none;
                                        "></textarea>
                        </div>
                        <iframe style="display: none"></iframe>
                    </div>
                    <!-- button summit -->
                    <button class="btnSend">Gửi thông tin</button>
                </div>
            </div>
        </div>
    </section>
    <!-- introductionPackages -->
    <section class="introductionPackages">
        <div class="container">
            <p class="title">Tất cả các gói đã bao gồm</p>
            <div class="row">
                <!-- item 1 -->
                <div class="col-lg-4 col-sm-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        Miễn phí dịch vụ sao lưu dữ liệu độc lập Sao lưu
                        Website.
                        <span class="buttonQuestion"
                            data-text="Web Backup là dịch vụ được cung cấp trên hạ tầng Amazon, bạn sẽ yên tâm hơn khi biết rằng dữ liệu luôn có bản sao và lưu trữ độc lập."
                            data-position="top" style="display: inline-block"></span>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="col-lg-4 col-sm-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        Cụm máy chủ kết nối 10 Gbps nội bộ, 1 Gbps trong
                        nước và quốc tế chia sẻ.
                    </div>
                </div>
                <!-- item 3 -->
                <div class="col-lg-4 col-sm-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        Máy chủ luôn hoạt động với thời gian Uptime lên
                        đến 99.9%.<span class="buttonQuestion"
                            data-text="Nếu chẳng may phần cứng máy chủ bị lỗi, dữ liệu sẽ được tự động di chuyển đến các máy chủ khác trong hệ thống Cloud và vẫn tiếp tục hoạt động, đảm bảo sự thông suốt."
                            data-position="top" style="display: inline-block"></span>
                    </div>
                </div>
                <!-- item 4 -->
                <div class="col-lg-4 col-sm-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        Đội ngũ hỗ trợ kỹ thuật tiêu chuẩn 525.600.<span class="buttonQuestion"
                            data-text="Mắt Bão cam kết phục vụ bằng sự hiểu biết và tận tâm. Nhân viên hỗ trợ của chúng tôi làm việc liên tục 24/7/365 để đem lại sự an tâm cho quý khách."
                            data-position="top" style="display: inline-block"></span>
                    </div>
                </div>
                <!-- item 5 -->
                <div class="col-lg-4 col-sm-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        Băng thông sử dụng không giới hạn.<span class="buttonQuestion"
                            data-text="Chúng tôi luôn tạo điều kiện tốt nhất cho quý khách hàng sử dụng dịch vụ Cloud Server với những website có nhu cầu sử dụng băng thông lớn, lượng truy cập cao để tận dụng và phát huy hết tiềm năng phục vụ cho việc kinh doanh của mình. Tuy nhiên, để đảm bảo I/O của toàn hệ thống, chúng tôi sẽ lưu ý bạn khi Cloud Server của bạn đạt ngưỡng truy suất có khả năng gây ảnh hưởng chung."
                            data-position="top" style="display: inline-block"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- yourChoose -->
    <section class="yourChoose container">
        <h2 class="title">
            Gói Cloud Hosting Windows không phù hợp với bạn?
        </h2>
        <div class="buttons">
            <button class="seeMoreCloud myBtn">
                Xem thêm Cloud Server Linux
            </button>
            <button class="seeMoreSever myBtn">
                Xem thêm Quản Trị Máy Chủ
            </button>
        </div>
    </section>
    <!-- stickyMenu -->
    <section class="stickyMenu container-fluid">
        <div class="container stickyMenuBox">
            <ul class="nav">
                <a href="#accompaniedService" class="activeStickyMenu">
                    <li class="item">Tính năng</li>
                </a>
                <a href="#serviceFeatures">
                    <li class="item">Dịch vụ đi kèm</li>
                </a>
                <a href="#featuresComparison">
                    <li class="item">Bảng so sánh</li>
                </a>
                <a href="#frequentlyQuestion">
                    <li class="item">Câu hỏi thường gặp</li>
                </a>
            </ul>
            <a href="#cloudSever" class="myBtn" style="text-decoration: none">Xem các gói</a>
        </div>
    </section>
    <!-- Accompanied Service -->
    <section id="accompaniedService" class="container-fluid">
        <div class="accompaniedServiceBox container">
            <div class="half-left">
                <h2 class="title">Công nghệ ảo hoá tối ưu</h2>
                <p class="desc">
                    Được xây dựng trên nền tảng ảo hóa đám mây theo công
                    nghệ Virtuozzo 7, Mắt Bão đã đầu tư và triển khai
                    dịch vụ Cloud Server với những cụm máy chủ cực mạnh
                    chính hãng <strong>Supermicro USA</strong>, kết hợp
                    với công nghệ lưu trữ Virtuozzo Storage sử dụng ổ
                    cứng <strong>SSD Enterprise</strong> đảm bảo lưu trữ
                    dữ liệu an toàn, tốc độ truy suất nhanh và giảm thời
                    gian downtime xuống mức thấp nhất.
                </p>
                <!-- item 1 -->
                <div class="boxItem">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">Tính sẵn sàng rất cao</div>
                </div>
                <!-- item 2 -->
                <div class="boxItem">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">Tự động nâng cấp OS</div>
                </div>
                <!-- item 3 -->
                <div class="boxItem">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        CPU intel xeon VT-x từ 8 đến 40 Core
                    </div>
                </div>
                <!-- item 4 -->
                <div class="boxItem">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/greencheck.svg" alt="check"
                        class="icon" />
                    <div class="details">
                        Chủ động thao tác sao lưu dữ liệu
                    </div>
                </div>
            </div>
            <div class="half-right">
                <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Cloudserverlinux_01_edit.svg" alt=""
                    class="thumb" />
            </div>
        </div>
    </section>
    <!-- Service Features -->
    <section id="serviceFeatures">
        <div class="container">
            <div class="h2 title">
                Cloud Server được tối ưu cho doanh nghiệp kinh doanh
                online
            </div>
            <div class="row">
                <!-- item 1 -->
                <div class="col-lg-4 col-md-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/taomaychu.svg" alt="taomaychu"
                        class="thumb" />
                    <h3 class="titleFeatures">
                        Khởi tạo máy chủ tức thì
                    </h3>
                    <p class="desc">
                        Khi nhận được yêu cầu, Mắt Bão sẽ khởi tạo trong
                        vòng 30 phút là có thể sử dụng được ngay.
                    </p>
                </div>
                <!-- item 2 -->
                <div class="col-lg-4 col-md-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/antoanbaomat.svg"
                        alt="taomaychu" class="thumb" />
                    <h3 class="titleFeatures">An toàn bảo mật cao</h3>
                    <p class="desc">
                        Hệ thống lưu trữ phân tán theo công nghệ
                        Virtuozzo Storage giúp an toàn dữ liệu. Hệ thống
                        tường lửa mạnh mẽ giúp kiểm soát và ngăn chặn
                        các truy cập trái phép.
                    </p>
                </div>
                <!-- item 3 -->
                <div class="col-lg-4 col-md-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/nangcao.svg" alt="taomaychu"
                        class="thumb" />
                    <h3 class="titleFeatures">
                        Nâng cấp trong chớp mắt
                    </h3>
                    <p class="desc">
                        Khả năng mở rộng, tùy chỉnh cấu hình Cloud
                        server (RAM, CPU, HDD) gần như ngay lập tức có
                        hiệu nghiệm mà không cần phải thao tác trực tiếp
                        trên máy chủ truyền thống.
                    </p>
                </div>
                <!-- item 4 -->
                <div class="col-lg-4 col-md-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/truycapx3.svg" alt="taomaychu"
                        class="thumb" />
                    <h3 class="titleFeatures">
                        Truy cập nhanh hơn 3 lần
                    </h3>
                    <p class="desc">
                        Máy chủ nguyên bộ cùng ổ cứng SSD + tính năng
                        SSD caching, việc truy cập website của bạn nhanh
                        hơn đến 3 lần so với thông thường.
                    </p>
                </div>
                <!-- item 5 -->
                <div class="col-lg-4 col-md-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/qoanquyenkiemsoat.svg"
                        alt="taomaychu" class="thumb" />
                    <h3 class="titleFeatures">
                        Toàn quyền kiểm soát, điều khiển từ xa và quản
                        trị máy chủ
                    </h3>
                    <p class="desc">
                        Bạn sẽ được cung cấp ngay tài khoản root access
                        (SSH/ RDP) để toàn quyền quản trị hệ thống máy
                        chủ Cloud Server của mình. Lưu ý: Nếu bạn sử
                        dụng gói Quản trị Cao cấp, Mắt Bão sẽ quan trị
                        máy chủ giúp bạn và chỉ cung cấp tài khoản
                        Reseller của Control Panel cho bạn.
                    </p>
                </div>
                <!-- item 6 -->
                <div class="col-lg-4 col-md-6 item">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/caidathedieuhanh.svg"
                        alt="taomaychu" class="thumb" />
                    <h3 class="titleFeatures">
                        Cài đặt lại hệ điều hành và hỗ trợ chuyển dữ
                        liệu đến máy chủ
                    </h3>
                    <p class="desc">
                        Nếu bạn có nhu cầu cài đặt lại hệ điều hành
                        (Reload OS) hoặc không có nhiều thời gian để
                        chuyển dữ liệu website về Cloud Server của mình,
                        hãy để chúng tôi giúp bạn thực hiện các công
                        việc này. Lưu ý: Reload OS và Chuyển dữ liệu
                        được tính phí theo bảng giá.
                    </p>
                </div>
                <!-- item 7 -->
                <div class="col-lg-4 col-md-6 item featuresHidden hidden">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/sansang.svg" alt="taomaychu"
                        class="thumb" />
                    <h3 class="titleFeatures">
                        Sẵn sàng cho nâng cấp khi nhu cầu tăng lên,
                        không cần cài đặt lại
                    </h3>
                    <p class="desc">
                        Nâng cấp ngay trong ID Portal hoặc liên hệ với
                        nhân viên kinh doanh.
                    </p>
                </div>
                <!-- item 8 -->
                <div class="col-lg-4 col-md-6 item featuresHidden hidden">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/nangcao.svg" alt="taomaychu"
                        class="thumb" />
                    <h3 class="titleFeatures">
                        Nâng cấp trong chớp mắt
                    </h3>
                    <p class="desc">
                        Khả năng mở rộng, tùy chỉnh cấu hình Cloud
                        server (RAM, CPU, HDD) gần như ngay lập tức có
                        hiệu nghiệm mà không cần phải thao tác trực tiếp
                        trên máy chủ truyền thống.
                    </p>
                </div>
            </div>
            <div class="buttons">
                <div class="btnSeeMore myBtn">Xem thêm</div>
                <a href="#cloudSever" class="btnSeePackages myBtn">Xem các gói</a>
            </div>
        </div>
    </section>
    <!-- Mat Bao Partner -->
    <section id="partner" class="container-fluid">
        <h2 class="title">Đối tác của chúng tôi</h2>
        <p class="desc">Mắt Bão sở hữu mạng lưới đối tác đầu ngành.</p>
        <div class="images">
            <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/ceph.svg" alt="" class="logo" />
            <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/virtuozzo.svg" alt="" class="logo" />
        </div>
    </section>
    <!-- Features comparison table -->
    <section id="featuresComparison">
        <div class="container">
            <h2 class="title">Bảng so sánh tính năng</h2>
            <table width="100%">
                <tbody>
                    <tr>
                        <th>
                            <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Cloudserverlinux_03_edit.svg"
                                alt="" class="imgMatBaoTable" height="250" />
                        </th>
                        <th>Cloud Sever</th>
                        <th>Sever Thông Thường</th>
                    </tr>
                    <tr>
                        <td class="bgray" colspan="3" style="font-size: 24px">
                            Lợi ích
                        </td>
                    </tr>
                    <tr>
                        <td>Bổ sung thêm CPU</td>
                        <td>
                            Bằng click chuột<span class="buttonQuestion"
                                data-text="Bổ sung CPU rất đơn giản chỉ bằng click chuột. Server không bị down-time khi nâng cấp, có thể nâng lên và hạ xuống tuỳ biến, thông số CPU sẽ thay đổi ngay. Tiết kiệm được thời gian và chi phí. Quá trình thực hiện không gặp bất kỳ rủi ro nào xảy ra."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                        <td>
                            Thủ công<span class="buttonQuestion"
                                data-text="Bạn phải mua thêm CPU với chi phí cao. Phải ngưng hoạt động của server đến hàng giờ để bảo trì nâng cấp. Tốn nhân lực thao tác, điều kiện thời gian và địa lý khi phải mang linh kiện đến Data Center thực hiện và có thể gặp rủi ro trong quá trình nâng cấp."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Bổ sung thêm Ram</td>
                        <td>
                            Bằng click chuột<span class="buttonQuestion"
                                data-text="Bổ sung RAM rất đơn giản chỉ bằng click chuột. Có thể bổ sung lên đến 64Gb RAM cho mỗi Server. Không cần phải lo lắng về khe RAM Server không bị down-time khi nâng cấp, có thể nâng lên và hạ xuống tuỳ biến, thông số RAM sẽ thay đổi ngay. Tiết kiệm được thời gian và chi phí. Quá trình thực hiện không gặp bất kỳ rủi ro nào xảy ra."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                        <td>
                            Thủ công<span class="buttonQuestion"
                                data-text="Bạn phải kiểm tra khe RAM trên main-board của Server, mua thêm RAM với chi phí cao. Buộc phải nhưng hoạt động của server đến hàng giờ để bảo trì nâng cấp. Tốn nhân lực thao tác, điều kiện thời gian và địa lý khi phải mang linh kiện đến Data Center thực hiện và có thể gặp rủi ro trong quá trình nâng cấp."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Tính liên tục</td>
                        <td>
                            Rất cao 99,9%<span class="buttonQuestion"
                                data-text="Nếu chẳng may phần cứng máy chủ bị lỗi, dữ liệu của bạn sẽ được tự động di chuyển đến các máy chủ khác trong hệ thống Cloud và vẫn tiếp tục hoạt động để đảm bảo không bị gián đoạn. Cơ chế tự phục hồi thảm hoạ chỉ trong vài phút. Dữ liệu luôn được đảm bảo backup thường xuyên."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                        <td>
                            Thấp<span class="buttonQuestion" data-position="bottom"
                                data-text="Nguy cơ rủi ro rất cao, vì dữ liệu được lưu trên máy chủ với ổ cứng vật lý. Nếu chẳng may ổ cứng bị hư hỏng, mất dữ liệu là điều không tránh khỏi. Ngoài ra, bạn phải tốn nhiều chi phí để triễn khai và theo dõi backup."
                                style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Tính mở rộng</td>
                        <td>
                            Linh hoạt<span class="buttonQuestion"
                                data-text="Có thể nâng cấp và mở rộng tài nguyên theo nhu cầu và mục đích sử dụng, kinh doanh của doanh nghiệp, công ty, khách hàng lẻ,… rất linh hoạt, đơn giản và nhanh chóng."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                        <td>
                            Hạn chế<span class="buttonQuestion"
                                data-text="Bạn phải bổ sung ổ đĩa CD/DVD vào máy chủ vật lý trước khi cài đặt Hệ điều hành hoặc có khi phải mất hàng giờ để tải về các file cài đặt dạng ISO. Sau đó, bạn phải cài đặt từng phần mềm, ứng dụng và cấu hình hệ thống để phục vụ cho nhau cầu sử dụng của bạn."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Khởi tạo</td>
                        <td>
                            Chỉ tối đa 30 phút<span class="buttonQuestion"
                                data-text="Cài đặt hoặc Reload (Cài đặt lại) Server nhanh chóng chỉ trong vòng 30 phút. Bạn có thể tuỳ chọn từ thư viện Cloud của Mắt Bão đang lưu trữ rất nhiều mẫu (Template) Server khác nhau, điều này giúp bạn không phải mất nhiều thời gian để suy nghĩ, lựa chọn Hệ điều hành và phải tốn nhiều thời gian để cài đặt các phần mềm, ứng dụng, cấu hình hệ thống,… Trong thư viện, chúng tôi hiện có rất nhiều Hệ điều hành bao gồm cả Windows và Linux."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                        <td>
                            Mất hàng giờ<span class="buttonQuestion"
                                data-text="Bạn phải bổ sung ổ đĩa CD/DVD vào máy chủ vật lý trước khi cài đặt Hệ điều hành hoặc có khi phải mất hàng giờ để tải về các file cài đặt dạng ISO. Sau đó, bạn phải cài đặt từng phần mềm, ứng dụng và cấu hình hệ thống để phục vụ cho nhau cầu sử dụng của bạn."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Công nghệ lưu trữ</td>
                        <td>
                            Virtuozzo Storage<span class="buttonQuestion"
                                data-text="Hệ thống Cloud Storage tiên tiến nhất của hãng Parallels. Nhiều máy chủ vật lý trong hệ thống Cloud là một khối duy nhất."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                        <td>
                            Raid<span class="buttonQuestion"
                                data-text="Hệ thống HDD đơn lẻ Raid 5 hoặc Raid 10 mất nhiều thời gian cài đặt và thay thế. Khi cần bảo trì, phải gián đoạn dịch vụ rất lâu để khởi tạo lại Raid."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 10px;
                                        "></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="bgray" style="font-size: 24px" colspan="3">
                            Tính năng và cấu hình
                        </td>
                    </tr>
                    <tr>
                        <td>Tính sẵn sàng</td>
                        <td>Rất cao</td>
                        <td>Bình thường</td>
                    </tr>
                    <tr>
                        <td>Hiệu năng</td>
                        <td>
                            200%<span class="buttonQuestion"
                                data-text="Dùng thêm tới 200% trong một thời gian ngắn khi hệ thống còn dư tài nguyên."
                                data-position="bottom" style="
                                            display: inline-block;
                                            margin-left: 5px;
                                        "></span>
                        </td>
                        <td>100%</td>
                    </tr>
                    <tr>
                        <td>Truy cập từ xa</td>
                        <td>Auto KVM, RDP/SSH</td>
                        <td>Auto KVM, RDP/SSH</td>
                    </tr>
                    <tr>
                        <td>Control Panel</td>
                        <td>Stop, Start, Reload, Install OS</td>
                        <td>
                            <i class="icon-cancel"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>Khả năng nâng cấp</td>
                        <td>1 Phút</td>
                        <td>Từ 4 - 48 giờ</td>
                    </tr>
                    <tr>
                        <td>Khả năng ứng cứu</td>
                        <td>Cấp tạm RAM, CPU trong 24 giờ</td>
                        <td>
                            <i class="icon-cancel"></i>
                        </td>
                    </tr>
                    <!-- collapsed table -->
                    <tr class="collapsedTable hidden">
                        <td>Nâng cấp OS</td>
                        <td>Tự động</td>
                        <td><i class="icon-cancel"></i></td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>Hệ thống lưu trữ</td>
                        <td>Cloud SAN / Distributed</td>
                        <td>Local HDD/RAID</td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>Hệ thống lưu đệm SSD (Cache)</td>
                        <td>SSD Enterprise</td>
                        <td><i class="icon-cancel"></i></td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>CPU</td>
                        <td>Intel Xeon VT-x từ 8-40 Cores</td>
                        <td>Tuỳ chọn</td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>Truy cập từ xa</td>
                        <td>Auto KVM, RDP/SSH</td>
                        <td>Auto KVM, RDP/SSH</td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>RAM</td>
                        <td>Từ 8-24 GB</td>
                        <td>Tùy chọn</td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>HDD</td>
                        <td>Tối đa 250 GB / Drive</td>
                        <td>Tùy chọn</td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>Public IP</td>
                        <td>01 Public IP</td>
                        <td>01 Public IP</td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>Công nghệ ảo hóa</td>
                        <td>CT hoặc VM</td>
                        <td><i class="icon-cancel"></i></td>
                    </tr>
                    <tr class="collapsedTable hidden">
                        <td>Sao lưu dữ liệu</td>
                        <td>Sao lưu độc lập</td>
                        <td><i class="icon-cancel"></i></td>
                    </tr>
                </tbody>
            </table>
            <div class="buttons">
                <div class="btnSeeMore myBtn">Xem thêm</div>
                <a href="#cloudSever" class="btnSeePackages myBtn">Xem các gói</a>
            </div>
        </div>
    </section>
    <!-- CommitmentToIndemnify -->
    <section class="commitmentToIndemnify">
        <div class="commitmentToIndemnifyBox container">
            <div class="half-left">
                <h2 class="title">Bồi thường bằng tài chính</h2>
                <p class="desc">
                    Với cam kết chất lượng dịch vụ (Service Level
                    Agreement – SLA) chúng tôi đảm bảo thời gian hoạt
                    động hàng tháng của dịch vụ là 99.9% và downtime tối
                    đa 43 phút.<br />
                    Nếu Thời gian hoạt động hàng tháng của dịch vụ nhỏ
                    hơn mức Cam kết Uptime, chúng tôi bồi thường theo
                    giá trị dịch vụ của tháng đó.<br />
                    Link thoả thuận sử dụng cam kết SLA:
                </p>
                <a href="https://www.matbao.net/thong-tin/thoa-thuan-su-dung-cam-ket-sla.html"
                    class="linkCommitment">https://www.matbao.net/thong-tin/thoa-thuan-su-dung-cam-ket-sla.html</a>
            </div>
            <div class="half-right">
                <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/100hailong-01.svg" alt=""
                    class="thumb" />
            </div>
        </div>
    </section>
    <!-- backHotline -->
    <section class="backHotline">
        <div class="container backHotlineBox">
            <div class="row mbRow">
                <div class="col-md-5">
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/hinh_dvu_14.png" alt=""
                        class="avatar" />
                </div>
                <div class="detailsBox col-md-5">
                    <h3 class="title">Cloud Server tại Mắt Bão</h3>
                    <p class="desc">
                        Sản phẩm được phát triển tối ưu <br />
                        Đồng hành cùng bạn trên hành trình kinh doanh
                        online
                    </p>
                    <p class="name">
                        <strong>Toàn Lê</strong> - Trưởng phòng tư vấn
                    </p>
                    <div class="myBtn">Xem các gói và giá cả</div>
                </div>
            </div>
        </div>
    </section>
    <!-- sliderEvaluate -->
    <section class="sliderEvaluate">
        <div class="container">
            <div class="titleBox">
                <h3 class="title">
                    Cloud Server giúp tối ưu & ổn định cho website của
                    doanh nghiệp
                </h3>
                <span class="buttonQuestion"
                    data-text="Chúng tôi tập hợp các đánh giá, bao gồm chấm điểm sao và ý kiến, từ khách hàng sử dụng dịch vụ tại Mắt Bão thông qua tài khoản quản lý dịch vụ tại id.matbao.net và kênh Google Business. Các đánh giá này được giữ nguyên văn của khách hàng."
                    data-position="top" style="display: inline-block"></span>
            </div>
            <p class="desc">Các đánh giá này được giữ nguyên văn</p>
            <div class="slide">
                <!-- item 1 -->
                <div class="item">
                    <div class="rating">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                    </div>
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Male.svg" alt=""
                        class="avatar" />
                    <p class="cmt">
                        Liên hệ Cty CP Mắt Bão để hỗ trợ giúp cty Khách
                        hàng gặp vấn đề dung lượng Cloud Server. Không
                        biết làm sao để gặp kỹ thuật thì gặp bạn Thảo
                        Đinh hướng dẫn cụ thể các bước.
                    </p>
                    <p class="name">Khoa Bùi Đăng</p>
                </div>
                <!-- item 2 -->
                <div class="item">
                    <div class="rating">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                    </div>
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Male.svg" alt=""
                        class="avatar" />
                    <p class="cmt">
                        Hỗ trợ rất nhanh và cụ thể. Tôi rất hài lòng
                    </p>
                    <p class="name">Công ty TNHH Tư vấn Đầu tư VLIC</p>
                </div>
                <!-- item 3 -->
                <div class="item">
                    <div class="rating">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                    </div>
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Male.svg" alt=""
                        class="avatar" />
                    <p class="cmt">
                        Tôi đã có trải nghiệm tuyệt vời với dịch vụ này.
                        Việc nhận được sự giúp đỡ nhanh chóng và thông
                        tin cụ thể đã giúp tôi giải quyết các vấn đề một
                        cách hiệu quả. Tôi cảm thấy hài lòng và tự tin
                        khi sử dụng dịch vụ này và sẽ chắc chắn tiếp tục
                        sử dụng trong tương lai.
                    </p>
                    <p class="name">Phạm Văn Khánh</p>
                </div>
                <!-- item 4 -->
                <div class="item">
                    <div class="rating">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                    </div>
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Male.svg" alt=""
                        class="avatar" />
                    <p class="cmt">Rất tốt cảm ơn!</p>
                    <p class="name">
                        Công ty TNHH Công nghệ và Truyền thông NETGO
                    </p>
                </div>
                <!-- item 5 -->
                <div class="item">
                    <div class="rating">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                        <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/star.svg" alt=""
                            class="star" />
                    </div>
                    <img src="<?php bloginfo('template_directory')?>/assets/img/imgMain/Male.svg" alt=""
                        class="avatar" />
                    <p class="cmt">
                        Cảm ơn kỹ thuật của Mắt Bão đã hỗ trợ nhiệt tình
                        và kịp thời!
                    </p>
                    <p class="name">
                        Công ty TNHH Quảng cáo và Truyền thông
                        <br />Vitutomedia
                    </p>
                </div>
            </div>
            <!-- buttons -->
            <div class="buttons">
                <button id="prev">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>
                <button id="next">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>
    <!-- Frequently Question -->
    <section id="frequentlyQuestion">
        <div class="container">
            <h2 class="title">Câu hỏi thường gặp</h2>
            <div class="boxQuestion">
                <span class="QandA"
                    data-answer="Ưu điểm của thuê Cloud Server so với thuê máy chủ VPS truyền thống?">Cloud Server
                    là gì?</span>
                <span class="QandA" data-answer="Cloud Server sở hữu nhiều tính năng nổi bật, mang lại ưu điểm vượt trội so với hệ thống server riêng:
                        - Khởi tạo máy chủ tức thì chỉ trong vòng 30 phút là có thể sử dụng cơ chế nhân bản (Replicas) đảm bảo cho Cloud Server luôn hoạt động ngay cả khi có sự cố bất ngờ xảy ra trên phần cứng của máy chủ vật lý.
                        - Khả năng mở rộng, tùy chỉnh cấu hình Cloud Server (RAM, CPU, HDD / SSD) gần như ngay lập tức có hiệu nghiệm.
                        - Hệ thống lưu trữ cao cấp với ổ cứng SSD + tính năng SSD caching, việc truy cập website của bạn nhanh hơn đến 3 lần so với thông thường.
                        Hệ thống lưu trữ phân tán theo công nghệ Virtuozzo Storage giúp an toàn dữ liệu. 
                        - Hệ thống tường lửa mạnh mẽ giúp kiểm soát và ngăn chặn các truy cập trái phép.">Ưu điểm của
                    thuê Cloud Server so với thuê máy chủ
                    VPS truyền thống?</span>
                <span class="QandA"
                    data-answer="Giá thành hợp lý, tính năng ổn định, Cloud Server mang đến cho nhiều lợi ích cho người dùng:
                        - Có thể tạo thêm nhiều site mà không tốn thêm chi phí.
                        - Dễ dàng điều khiển toàn bộ hệ thống thông qua trình duyệt web tiện lợi.
                        - Do đó với độ thực thi cao, độc lập, bảo mật, tùy chọn cấu hình và nhiều thuận lợi khác của dedicated server sẽ giúp cho mọi ứng dụng trên máy chủ của bạn hoạt động tốt.
                        - Với một máy chủ được sử dụng dành riêng cho công việc kinh doanh của bạn, bạn không bị hạn chế trong công việc của mình. Bạn có thể triển khai kinh doanh trên website của bạn liên quan đến lĩnh vực kinh doanh của mình. Bạn có thể sử dụng tất cả các quảng cáo mà bạn muốn với một máy chủ cho thuê và kiếm nhiều tiền hơn trên website của bạn.
                        - Tăng không gian lưu trữ, giải phóng băng thông đảm bảo cho một lượng lớn truy cập đồng thời.
                        - Khả năng sử dụng nhiều tài nguyên. Bạn không những có thể đặt các quảng cáo hay chương trình liên kết bán hàng bao nhiêu tùy ý trên website của bạn mà bạn còn lưu trữ chính website của mình. Điều này cũng có thể mang lại cho bạn thu nhập vượt trội.">Lợi
                    ích của việc thuê Cloud Server là gì?</span>
                <span class="QandA"
                    data-answer="Được xây dựng trên nền tảng ảo hóa đám mây theo công nghệ Virtuozzo 7, Mắt Bão đã đầu tư và triển khai dịch vụ Cloud Server với những cụm máy chủ cực mạnh chính hãng Supermicro USA, kết hợp với công nghệ lưu trữ Virtuozzo Storage sử dụng ổ cứng SSD Enterprise đảm bảo lưu trữ dữ liệu an toàn, tốc độ truy xuất nhanh và giảm thời gian downtime xuống mức thấp nhất.">Kiến
                    trúc Cloud Server của Mắt Bão là gì?</span>
                <span class="QandA"
                    data-answer="Trên một gói Cloud Server thường không giới hạn số lượng website. Tuy nhiên, tùy vào số tài nguyên cung cấp cho từng gói mà bạn cài đặt số website cho phù hợp.">Khi
                    sử dụng 1 gói cloud server tôi có thể host bao
                    nhiêu website?</span>
                <span class="QandA"
                    data-answer="Cloud Server tại Mắt Bão được tặng kèm gói sao lưu dữ liệu độc lập Web Backup. Dữ liệu của bạn luôn có một bản sao và được lưu trữ độc lập nên bạn có thể hoàn toàn yên tâm.">Nếu
                    bị mất dữ liệu thì sẽ như thế nào?</span>

                <span class="QandA" data-answer="Cloud Server Linux hỗ trợ các hệ điều hành Debian 8, CentOS 7, Ubuntu 18, Fedora 29.
                            ">Cloud Server hỗ trợ các hệ điều hành nào?</span>
            </div>
        </div>
    </section>
    <!-- HotLine Mat Bao -->
    <section class="hotlineMatbao container-fluid">
        <div class="container hotlineBox">
            <a href="tel:02836229999" class="itemInfo">
                <p class="details">Tư vấn miền nam</p>
                <p class="number">(028) 3622 999</p>
            </a>
            <a href="tel:02836229999" class="itemInfo">
                <p class="details">Tư vấn miền bắc</p>
                <p class="number">(028) 3622 9999</p>
            </a>
            <a href="tel:19001830" class="itemInfo">
                <p class="details">Support 24/7</p>
                <p class="number">1900 1830 <u>(1000 đ/phút)</u></p>
            </a>
        </div>
    </section>
</main>
<!-- ===============Footer============== -->


<?php get_footer();?>