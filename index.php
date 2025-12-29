<?php
include "header.html";
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOTA - Dịch vụ Digital Marketing</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
    /* --- Hero Section --- */
    .hero-section {
        padding: 100px 0;
        background-color: #fff;
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
    }

    .hero-section::before {
        content: "";
        position: absolute;
        width: 800px;
        height: 800px;
        top: -200px;
        right: -200px;
        background: repeating-radial-gradient(circle, transparent, transparent 40px, rgba(255, 204, 51, 0.03) 41px, rgba(255, 204, 51, 0.03) 42px);
        z-index: 1;
    }

    .content-box {
        position: relative;
        z-index: 5;
    }

    .hero-subtitle {
        color: #0066cc;
        font-weight: 700;
        letter-spacing: 3px;
        margin-bottom: 20px;
        font-size: 14px;
        display: inline-block;
        border-left: 3px solid #ffcc33;
        padding-left: 10px;
        text-transform: uppercase;
    }

    .hero-title {
        font-family: 'Montserrat', sans-serif;
        color: #333;
        font-size: 52px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 25px;
    }

    .hero-title span {
        color: #ffcc33;
    }

    .hero-description {
        color: #666;
        font-size: 18px;
        margin-bottom: 40px;
        line-height: 1.8;
        border-left: 1px solid #eee;
        padding-left: 20px;
        max-width: 600px;
    }

    .hero-buttons {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .btn-consult {
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: white !important;
        padding: 15px 35px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        box-shadow: 0 10px 20px rgba(0, 123, 255, 0.2);
        transition: 0.3s;
    }

    .btn-consult:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(0, 123, 255, 0.3);
    }

    .btn-more {
        padding: 10px 0;
        color: #333 !important;
        font-weight: 700;
        text-decoration: none;
        border-bottom: 2px solid #ffcc33;
        transition: 0.3s;
    }

    /* --- Partner Section --- */
    .tm_partner_section {
        padding: 50px 0;
        background-color: #fff;
        border-top: 1px solid #f8f8f8;
    }

    .customer-trust-badge {
        border-left: 4px solid #ffcc33;
        padding-left: 15px;
    }

    .customer-trust-badge .count {
        display: block;
        font-size: 26px;
        font-weight: 800;
        color: #333;
        line-height: 1;
    }

    .customer-trust-badge .text {
        font-size: 14px;
        color: #666;
        font-weight: 500;
    }

    /* Khung chứa cho mỗi item logo */
    .customer-logos .item {
        display: flex;
        justify-content: center;
        /* Căn giữa ngang */
        align-items: center;
        /* Căn giữa dọc */
        height: 100px;
        /* Chiều cao khung cố định cho tất cả */
        padding: 10px;
        background: #fff;
    }

    /* Ép các ảnh cùng kích thước */
    .customer-logos .item img {
        max-width: 140px !important;
        /* Độ rộng tối đa của logo */
        max-height: 60px !important;
        /* Độ cao tối đa của logo */
        width: auto !important;
        /* Giữ nguyên tỉ lệ ảnh */
        height: auto !important;
        /* Giữ nguyên tỉ lệ ảnh */
        object-fit: contain;
        /* Đảm bảo ảnh nằm gọn trong khung, không bị méo */
        filter: grayscale(100%);
        /* (Tùy chọn) Chuyển về màu xám cho chuyên nghiệp */
        opacity: 0.6;
        transition: all 0.3s ease;
    }

    /* Hiệu ứng khi rê chuột vào */
    .customer-logos .item img:hover {
        filter: grayscale(0%);
        opacity: 1;
        transform: scale(1.05);
        /* Phóng nhẹ khi hover */
    }

    /* --- Abstract Shape Decor --- */
    .abstract-shape {
        width: 380px;
        height: 380px;
        background: linear-gradient(45deg, #fff9e6, #fff);
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        box-shadow: 0 20px 50px rgba(255, 204, 51, 0.15);
        display: flex;
        justify-content: center;
        align-items: center;
        animation: morphing 10s infinite alternate;
    }

    .floating-icon {
        font-size: 100px;
        color: #ffcc33;
        filter: drop-shadow(0 15px 15px rgba(0, 102, 204, 0.2));
        animation: float 3s ease-in-out infinite;
    }

    @keyframes morphing {
        0% {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        100% {
            border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%;
        }
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-25px);
        }
    }

    @media (max-width: 991px) {
        .hero-section {
            text-align: center;
        }

        .hero-description {
            margin: 0 auto 30px auto;
            border: none;
            padding: 0;
        }

        .hero-buttons {
            justify-content: center;
        }

        .customer-trust-badge {
            margin-bottom: 30px;
            text-align: center;
            border: none;
            padding: 0;
        }
    }

    @keyframes floatIcon {

        0%,
        100% {
            transform: translateY(0) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(8deg);
            /* Nghiêng nhẹ tạo cảm giác linh hoạt */
        }
    }

    /* --- About Section --- */
    .tm_about {
        padding: 80px 0;
        background-color: #fff;
    }

    /* Căn giữa nội dung theo chiều dọc */
    .tm_about .row {
        display: flex;
        align-items: center;
    }

    /* Cột bên trái: Nội dung */
    .tm_about_left h3 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 800;
        color: #333;
        font-size: 36px;
        margin-bottom: 25px;
        position: relative;
        display: inline-block;
    }

    /* Đường gạch chân trang trí dưới tiêu đề */
    .tm_about_left h3::after {
        content: "";
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background-color: #ffcc33;
        border-radius: 2px;
    }

    .tm_about_left p {
        font-size: 17px;
        line-height: 1.8;
        color: #666;
        margin-bottom: 35px;
        text-align: justify;
    }

    /* Nút tư vấn */
    .tm_about_left .xemthem_tm a {
        background: linear-gradient(135deg, #007bff, #0056b3);
        color: #fff !important;
        padding: 14px 35px;
        border-radius: 50px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 10px 20px rgba(0, 123, 255, 0.2);
        transition: all 0.3s ease;
    }

    .tm_about_left .xemthem_tm a:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 25px rgba(0, 123, 255, 0.3);
    }

    /* Cột bên phải: Hình ảnh */
    .tm_about_right {
        text-align: center;
    }

    .tm_about_right img {
        max-width: 100%;
        height: auto;
        /* Hiệu ứng trôi nhẹ cho ảnh minh họa */
        animation: floatImage 4s ease-in-out infinite;
        filter: drop-shadow(0 20px 30px rgba(0, 0, 0, 0.1));
    }

    /* Hiệu ứng chuyển động cho ảnh */
    @keyframes floatImage {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    /* Responsive cho Mobile */
    @media (max-width: 768px) {
        .tm_about {
            padding: 50px 0;
        }

        .tm_about .row {
            flex-direction: column-reverse;
        }

        /* Đưa chữ lên trên ảnh khi ở mobile */
        .tm_about_left {
            text-align: center;
            margin-top: 40px;
        }

        .tm_about_left h3::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .tm_about_right img {
            max-width: 80%;
        }
    }

    .fixwidth {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    /* --- Hero Graphics Custom --- */
    .hero-image-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 450px;
        position: relative;
    }

    .marketing-graphics {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Khối nền mờ ảo */
    .bg-blob {
        position: absolute;
        width: 350px;
        height: 350px;
        background: radial-gradient(circle, rgba(255, 204, 51, 0.15) 0%, transparent 70%);
        filter: blur(20px);
        z-index: 1;
        animation: morphShape 8s infinite alternate;
    }

    /* Icon trung tâm */
    .main-graphic {
        font-size: 120px;
        color: #ffcc33;
        z-index: 5;
        filter: drop-shadow(0 10px 20px rgba(255, 204, 51, 0.3));
        animation: floatCenter 3s ease-in-out infinite;
    }

    /* Các icon vệ tinh Marketing */
    .satellite {
        position: absolute;
        background: #fff;
        width: 70px;
        height: 70px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        z-index: 6;
        color: #0066cc;
        font-size: 28px;
    }

    .icon-1 {
        top: 15%;
        right: 10%;
        animation: orbit 6s infinite linear;
    }

    .icon-2 {
        bottom: 20%;
        left: 5%;
        animation: orbit 8s infinite linear reverse;
    }

    .icon-3 {
        top: 10%;
        left: 15%;
        animation: floatCenter 4s ease-in-out infinite;
    }

    /* --- Hiệu ứng Animation --- */
    @keyframes morphShape {
        0% {
            border-radius: 40% 60% 60% 40% / 40% 40% 60% 60%;
            transform: scale(1);
        }

        100% {
            border-radius: 60% 40% 40% 60% / 60% 60% 40% 40%;
            transform: scale(1.1);
        }
    }

    @keyframes floatCenter {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }
    }

    @keyframes orbit {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }

        50% {
            transform: translate(15px, 15px);
        }

        100% {
            transform: translate(0, 0) rotate(0deg);
        }
    }
    </style>
</head>

<body>
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-start content-box">
                    <div class="hero-subtitle">TOTAL DIGITAL MARKETING</div>
                    <h1 class="hero-title">
                        Dịch vụ Digital Marketing<br><span>tổng thể chuyên nghiệp</span>
                    </h1>
                    <p class="hero-description">
                        Từ nghiên cứu thị trường, thiết kế chiến lược, lập kế hoạch, xây dựng tài nguyên
                        đến thực thi và tối ưu hóa hoạt động Digital Marketing.
                    </p>
                    <div class="hero-buttons">
                        <a href="#" class="btn-consult">
                            Tư vấn ngay <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#" class="btn-more">
                            Xem thêm <i class="fa-solid fa-chevron-right ms-1" style="font-size: 12px;"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-image-wrapper">
                        <div class="marketing-graphics">
                            <div class="main-graphic">
                                <i class="fa-solid fa-circle-nodes"></i>
                            </div>
                            <div class="satellite icon-1"><i class="fa-solid fa-chart-simple"></i></div>
                            <div class="satellite icon-2"><i class="fa-solid fa-magnifying-glass-chart"></i></div>
                            <div class="satellite icon-3"><i class="fa-solid fa-bullhorn"></i></div>

                            <div class="bg-blob"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tm_partner_section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="customer-trust-badge">
                        <span class="count">10.000+</span>
                        <span class="text">khách hàng<br>tin tưởng</span>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="owl-carousel owl-theme customer-logos">
                        <div class="item"><img
                                src="./Dịch vụ total marketing_files/khach-hang-cua-sao-kim-24-uni-president-84450.png"
                                alt="Sota"></div>
                        <div class="item"><img src="./Dịch vụ total marketing_files/logo-8sangbds-7313.png" alt="Sota">
                        </div>
                        <div class="item"><img src="./Dịch vụ total marketing_files/18805163-6921-6122.png" alt="Sota">
                        </div>
                        <div class="item"><img
                                src="./Dịch vụ total marketing_files/khach-hang-cua-sao-kim-32-sonha-88390.png"
                                alt="Sota"></div>
                        <div class="item"><img
                                src="./Dịch vụ total marketing_files/khach-hang-cua-sao-kim-33-tonkin-land-53900.png"
                                alt="Sota"></div>
                        <div class="item"><img src="./Dịch vụ total marketing_files/iconslogo-01-1-5088-66500.png"
                                alt="Sota"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tm_about space_bottom">
        <div class="fixwidth">
            <div class="row">
                <div class="col-md-6">
                    <div class="tm_about_left">
                        <h3>Total Marketing</h3>
                        <p>SOTA nhiều năm kinh nghiệm trong việc cung cấp dịch vụ digital marketing cho các doanh
                            nghiệp. Đội
                            ngũ của Sota gồm những chuyên gia hàng đầu trong lĩnh vực, am hiểu sâu sắc về thị trường và
                            xu hướng
                            digital marketing mới nhất. Chúng tôi mang đến hiệu quả và tăng trưởng bền vững.</p>
                        <div class="xemthem_tm">
                            <a href="https://sotagroup.vn/#" data-toggle="modal" data-target="#modal_contact">Tư vấn
                                ngay <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="tm_about_right">
                        <img src="./Dịch vụ total marketing_files/undrawallthedatarehh4w-3841.png" alt="Sotagroup.vn">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    $(document).ready(function() {
        $(".customer-logos").owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        });
    });
    </script>
</body>

</html>