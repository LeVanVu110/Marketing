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


    /* --- The Vault Section --- */
    .vault-section {
        background-color: #111;
        /* Nền đen sâu cực kỳ sang trọng */
        padding: 120px 0;
        text-align: center;
        position: relative;
        overflow: hidden;
        color: #fff;
    }

    /* Hiệu ứng đồng hồ/vòng tròn mờ phía sau chữ */
    .vault-section::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 500px;
        height: 500px;
        border: 1px dashed rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        z-index: 1;
    }

    .vault-content {
        position: relative;
        z-index: 2;
    }

    .vault-title {
        font-family: 'Montserrat', sans-serif;
        font-size: 100px;
        /* Chữ cực lớn */
        font-weight: 700;
        margin-bottom: 20px;
        letter-spacing: -2px;
    }

    .vault-subtitle {
        font-size: 24px;
        color: rgba(255, 255, 255, 0.8);
        font-weight: 400;
        margin-bottom: 30px;
    }

    /* Chữ ký "With Ilja van Eck" hoặc "Sota Marketing" với mũi tên */
    .vault-signature {
        font-family: 'Courier New', Courier, monospace;
        /* Font kiểu viết tay/máy tính cũ */
        color: #a3e635;
        /* Màu xanh lá neon làm điểm nhấn */
        font-size: 18px;
        font-style: italic;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .vault-signature svg {
        width: 40px;
        fill: none;
        stroke: #a3e635;
        stroke-width: 2;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .vault-title {
            font-size: 60px;
        }

        .vault-subtitle {
            font-size: 18px;
        }
    }

    /* video  */
    /* --- CSS Giao diện Video Osmo Style --- */
    :root {
        --color-neon-green: #a3e635;
        /* Màu xanh đặc trưng của The Vault */
        --color-purple: #8b5cf6;
    }

    .full-video {
        background: #0b0b0b;
        padding: 10vw 0;
        color: #fff;
        font-family: 'Montserrat', sans-serif;
    }

    /* Container bọc ngoài Video */
    .full-video__wrap {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        border-radius: 1.5rem;
        background: #161616;
        box-shadow: 0 40px 100px rgba(0, 0, 0, 0.8);
    }

    /* Khu vực Video chính */
    .custom-player__media {
        position: relative;
        width: 100%;
        border-radius: 20px;
        aspect-ratio: 16/9;
        overflow: visible;
        /* Giữ tỷ lệ chuẩn video */
        /* Không để overflow: hidden ở đây nếu muốn webcam lấn ra ngoài */
    }

    .custom-player__video {
        display: block;
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    /* --- Webcam của Ilja (Vòng tròn bên trái) --- */
    .custom-player__float {
        position: absolute;
        /* Vị trí góc dưới bên trái */
        bottom: 50%;
        left: -70px;
        /* Đẩy lấn ra ngoài lề trái giống trang mẫu */
        z-index: 100;
        /* Luôn nằm trên cùng */
        width: 120px;
        /* Kích thước vòng tròn */
        height: 120px;
    }

    .custom-player__float {
        z-index: 1000 !important;
        /* Đẩy toàn bộ cụm webcam lên trên cùng */
    }

    .webcam__sound {
        cursor: pointer !important;
        pointer-events: auto !important;
        /* Cho phép nhận sự kiện click */
        transition: transform 0.2s ease;
    }

    .webcam__sound:hover {
        transform: scale(1.1);
        /* Hiệu ứng phóng to khi rê chuột */
    }

    .webcam__wrap {
        width: 120%;
        height: 120%;
        border-radius: 50%;
        /* Biến thành hình tròn */
        border: 4px solid #8b5cf6;
        /* Viền tím Osmo */
        /* overflow: hidden; */
        position: relative;
        background: #000;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        /* Hiệu ứng xoay nhẹ cho tự nhiên */
        transform: rotate(-5deg);
        padding: 16px;
    }

    /* Khung chứa ảnh/video bên trong */
    .webcam__video {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        /* Bo tròn chính lớp này */
        overflow: hidden;
        /* Cắt ảnh ở đây */
        position: relative;
        z-index: 1;
        /* Nằm dưới nút loa */
    }

    .cover-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Video bên trong webcam tròn */
    .cover-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Nút loa nhỏ trên webcam */
    .webcam__sound {
        position: absolute;
        top: -3%;
        left: -10%;
        width: 44px;
        height: 44px;
        background: var(--color-neon-green);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000;
        z-index: 101;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* --- Interface Điều khiển --- */
    /* --- Giao diện Timeline chuẩn Osmo --- */
    .custom-player__interface {
        background: #0b0b0b;
        padding: 3rem 4rem;
        color: #fff;
        position: relative;
    }

    .custom-player__ticks-progress {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0%; 
    background-image: repeating-linear-gradient(
        to right,
        rgba(255, 255, 255, 0.9) 0px,
        rgba(255, 255, 255, 0.9) 1px,
        transparent 1px,
        transparent 14px
    );
    z-index: 2;
    transition: width 0.1s linear;
}

    .custom-player__interface-bottom {
        display: flex;
        flex-direction: column;
        /* Đổi sang chiều dọc để các thành phần xếp chồng đúng lớp */
        gap: 1.5rem;
    }

    /* Khối bao quanh thanh ticks và markers */
    .custom-player__timeline-wrap {
        width: 100%;
        position: relative;
        padding: 60px 0 20px 0;
        /* Khoảng trống cho vạch dài nhô lên */
    }

    /* Các vạch kẻ nhỏ (Ticks) */
    .custom-player__ticks {
        width: 100%;
        height: 14px;
        position: relative;
        /* Các vạch mặc định màu tối */
        background-image: repeating-linear-gradient(to right,
                rgba(255, 255, 255, 0.15) 0px,
                rgba(255, 255, 255, 0.15) 1px,
                transparent 1px,
                transparent 14px);
border: none;
    }

    

    /* Thanh progress bar xanh neon nằm đè lên đường kẻ ngang */
    .custom-player__timeline-bar {
        position: absolute;
        bottom: -1px;
        left: 0;
        width: 100%;
        height: 3px;
        z-index: 10;
        pointer-events: none;
    }

    /* Thời gian tổng ở góc phải */
    .custom-player__time {
        position: absolute;
        right: 1rem;
        top: 3.5rem;
        font-size: 14px;
        font-weight: 700;
    }

    .custom-player__timeline-progress {
        height: 100%;
        background: #a3e635;
        /* Xanh Neon chuẩn Osmo */
        box-shadow: 0 0 15px rgba(163, 230, 53, 0.5);
        width: 0%;
    }

    /* Định vị Marker bằng Absolute % để khớp thời gian */
    .custom-player__markers {
    position: absolute;
    top:40px; /* Đẩy toàn bộ cụm chữ xuống dưới dải ticks 20px */
    left: 0;
    width: 100%;
    height: auto;
}

    .custom-player__marker {
    position: absolute;
    top: 0;
    transform: translateX(-50%);
    text-align: left;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

    /* Tọa độ Marker khớp theo ảnh bạn gửi */
    .custom-player__marker:nth-child(1) {
        left: 0%;
        transform: none;
    }

    .custom-player__marker:nth-child(2) {
        left: 19%;
    }

    .custom-player__marker:nth-child(3) {
        left: 45%;
    }

    .custom-player__marker:nth-child(4) {
        left: 78%;
    }

    /* Style cho mốc thời gian (Số 00:00) */
    .timestamp__span {
        font-size: 10px;
        color: #666;
        display: block;
    }

    .custom-player__marker-p {
        font-size: 13px;
        color: #fff;
        margin-top: 4px;
        white-space: nowrap;
    }

    /* Nút Play/Pause nhỏ bên trái */
    .custom-player__toggle-playpause {
        position: absolute;
        left: 1rem;
        top: 3.5rem;
        background: rgba(255, 255, 255, 0.1);
        padding: 4px 10px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 700;
        cursor: pointer;
        text-transform: uppercase;
        z-index: 20;
    }

    #youtube-player {
        width: 100%;
        height: 100%;
        /* pointer-events: none; */
        /* Không cho click trực tiếp vào YouTube */
    }

    /* Lớp phủ trong suốt để xử lý sự kiện click của riêng bạn */
    .video-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 5;
        cursor: pointer;
        background: rgba(0, 0, 0, 0);
        /* Mặc định trong suốt */
        transition: background 0.3s ease;
        /* Hiệu ứng chuyển màu mượt */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .video-overlay::after {
        content: "\f04b";
        /* Icon Play của FontAwesome */
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        font-size: 50px;
        color: white;
        opacity: 0;
        transition: 0.3s;
    }

    /* Khi video dừng, hiện icon Play */
    .vault-section.is-paused .video-overlay::after {
        opacity: 1;
    }

    .video-overlay.is-paused::after {
        content: "\f04b";
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        font-size: 50px;
        color: white;
    }

    /* Vạch kẻ dọc dài tại mỗi Marker */
    .marker-line {
    position: absolute;
    bottom: 0; /* Gắn vào đáy của dải ticks */
    left: 0px;
    top: -40px;
    width: 1.5px;
    height: 35px; /* Độ cao vạch dài để nhô hẳn lên trên dải vạch nhỏ */
    background-color: rgba(255, 255, 255, 0.15); 
    z-index: 5;
    transform: translateY(0);
}

    /* Đảm bảo marker đầu tiên không bị lệch */
    .custom-player__marker:first-child .marker-line {
        left: 0;
        top: -43px;
    }

    .custom-player__marker:first-child {
        transform: none;
    }

    /* Hiệu ứng khi video chạy qua Marker: Vạch kẻ sẽ sáng hơn hoặc đổi màu */
    .custom-player__marker.is-active .marker-line {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
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
    <section class="vault-section">
        <div class="container">
            <div class="vault-content">
                <h2 class="vault-title">The Vault</h2>
                <p class="vault-subtitle">Take a peek inside our Vault of resources</p>

                <div class="vault-signature">
                    With Sota Marketing
                    <svg viewBox="0 0 50 20">
                        <path d="M5,15 Q25,5 45,15" stroke-linecap="round" />
                        <path d="M40,10 L45,15 L40,20" stroke-linecap="round" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="full-video">
        <div class="container">
            <div class="full-video__wrap">

                <div class="custom-player__media">
                    <div id="youtube-player"></div>

                    <div class="video-overlay" onclick="togglePlay()"></div>

                    <div class="custom-player__float">
                        <div class="webcam__wrap">
                            <div class="webcam__sound" id="mute-button" onclick="toggleMute()" style="cursor: pointer;">
                                <i class="fa-solid fa-volume-xmark" id="mute-icon"></i>
                            </div>

                            <div class="webcam__video">
                                <img src="./Dịch vụ total marketing_files/e369dc177d4658d809739f82ddd00a12.jpg"
                                    class="cover-image">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="custom-player__interface">
                    <div class="custom-player__toggle-playpause" onclick="togglePlay()">
                        <span id="play-status">PAUSE</span>
                    </div>

                    <div class="custom-player__interface-bottom">
                        <div class="custom-player__timeline-wrap">
                            <div class="custom-player__ticks" onclick="seekVideo(event)">
                                <div id="ticks-progress" class="custom-player__ticks-progress"></div>

                                <div class="custom-player__markers">
                                    <div class="custom-player__marker" style="left: 0%;">
                                        <span class="marker-line"></span>
                                        <span class="timestamp__span">00:00</span>
                                        <p class="custom-player__marker-p">Intro</p>
                                    </div>
                                    <div class="custom-player__marker" style="left: 25%;">
                                        <span class="marker-line"></span>
                                        <span class="timestamp__span">00:30</span>
                                        <p class="custom-player__marker-p">QUY TRÌNH</p>
                                    </div>
                                    <div class="custom-player__marker" style="left: 43%;">
                                        <span class="marker-line"></span>
                                        <span class="timestamp__span">00:54</span>
                                        <p class="custom-player__marker-p">THƯƠNG HIỆU</p>
                                    </div>
                                    <div class="custom-player__marker" style="left: 67%;">
                                        <span class="marker-line"></span>
                                        <span class="timestamp__span">01:27</span>
                                        <p class="custom-player__marker-p">TRUYỀN THÔNG</p>
                                    </div>
                                    
                                    <div class="custom-player__marker" style="left: 103%;">
                                        <span class="marker-line"></span>
                                        <span class="timestamp__span">02:20</span>
                                        <p class="custom-player__marker-p">ĐA KẾT</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="custom-player__time">
                        <span id="current-time-display">00:00</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    var player;

    function onYouTubeIframeAPIReady() {
        player = new YT.Player('youtube-player', {
            videoId: 'x-DtjQjo-X8',
            playerVars: {
                'autoplay': 1,
                'mute': 1, // BẮT BUỘC có cái này thì autoplay mới chạy được
                'controls': 0,
                'disablekb': 1,
                'modestbranding': 1,
                'rel': 0,
                'showinfo': 0,
                'iv_load_policy': 3,
                'autohide': 1
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // Thêm sự kiện click cho các marker sau khi player đã sẵn sàng
    function setupMarkerClicks() {
        const markers = document.querySelectorAll('.custom-player__marker');

        markers.forEach(marker => {
            marker.style.cursor = 'pointer';
            marker.addEventListener('click', function() {
                const timeText = this.querySelector('.timestamp__span').innerText;
                const timeParts = timeText.split(':');
                const seconds = parseInt(timeParts[0]) * 60 + parseInt(timeParts[1]);

                if (player && typeof player.seekTo === 'function') {
                    player.seekTo(seconds, true);
                    player.playVideo();
                }
            });
        });
    }

    // Hàm format thời gian từ giây sang mm:ss
    function formatTime(time) {
        time = Math.round(time);
        var minutes = Math.floor(time / 60);
        var seconds = time - minutes * 60;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        return minutes + ":" + seconds;
    }
    function seekVideo(event) {
    if (player && typeof player.getDuration === 'function') {
        // 1. Lấy thẻ chứa vạch kẻ
        var ticksContainer = document.querySelector('.custom-player__ticks');
        
        // 2. Tính toán vị trí click chuột so với chiều rộng của thanh ticks
        var rect = ticksContainer.getBoundingClientRect();
        var x = event.clientX - rect.left; // Vị trí click theo trục X
        var width = rect.width;            // Tổng chiều rộng thanh
        
        // 3. Tính tỷ lệ phần trăm (từ 0 đến 1)
        var percentage = x / width;
        
        // 4. Tính số giây tương ứng trong video
        var duration = player.getDuration();
        var seekToTime = duration * percentage;
        
        // 5. Điều hướng video YouTube đến thời gian đó
        player.seekTo(seekToTime, true);
        
        // Tự động phát nếu đang bị pause (tùy chọn)
        player.playVideo();
    }
}

    function onPlayerReady(event) {
        setupMarkerClicks();
    setInterval(function() {
        if (player && typeof player.getCurrentTime === 'function') {
            var duration = player.getDuration();
            var currentTime = player.getCurrentTime();
            
            if (duration > 0) {
                var progress = (currentTime / duration) * 100;
                
                // 1. Làm các vạch kẻ nhỏ sáng lên
                document.getElementById('ticks-progress').style.width = progress + "%";
                
                // 2. Cập nhật số thời gian
                document.getElementById('current-time-display').innerText = formatTime(currentTime);

                // 3. Kiểm tra và làm sáng vạch dọc dài của Marker
                const markers = document.querySelectorAll('.custom-player__marker');
                markers.forEach(m => {
                    const timeParts = m.querySelector('.timestamp__span').innerText.split(':');
                    const markerSecs = parseInt(timeParts[0]) * 60 + parseInt(timeParts[1]);
                    
                    if (currentTime >= markerSecs) {
                        m.classList.add('is-active'); // CSS sẽ làm vạch này trắng sáng
                    } else {
                        m.classList.remove('is-active');
                    }
                });
            }
        }
    }, 100);
}

    function updateMarkerUI(currentTime) {
        const markers = document.querySelectorAll('.custom-player__marker');
        markers.forEach(marker => {
            const timeText = marker.querySelector('.timestamp__span').innerText;
            const timeParts = timeText.split(':');
            const markerSeconds = parseInt(timeParts[0]) * 60 + parseInt(timeParts[1]);
            const line = marker.querySelector('.marker-line');

            // Nếu video đã chạy qua mốc này, đổi vạch dọc sang màu neon
            if (currentTime >= markerSeconds) {
                line.style.backgroundColor = "#a3e635";
                line.style.boxShadow = "0 0 10px #a3e635";
            } else {
                line.style.backgroundColor = "rgba(255, 255, 255, 0.8)";
                line.style.boxShadow = "none";
            }
        });
    }

    function onPlayerStateChange(event) {
        var statusLabel = document.getElementById('play-status');
        if (event.data == YT.PlayerState.PLAYING) {
            statusLabel.innerText = "PAUSE";
        } else {
            statusLabel.innerText = "PLAY";
        }
    }

    function toggleMute() {
        if (player) {
            var icon = document.getElementById('mute-icon');
            if (player.isMuted()) {
                player.unMute();
                // Đổi icon sang Loa bật
                icon.classList.remove('fa-volume-xmark');
                icon.classList.add('fa-volume-high');
                // Thay đổi màu nền nút nếu muốn
                document.getElementById('mute-button').style.background = "#a3e635";
            } else {
                player.mute();
                // Đổi icon sang Loa tắt
                icon.classList.remove('fa-volume-high');
                icon.classList.add('fa-volume-xmark');
            }
        }
    }

    function togglePlay() {
        if (!player) return;
        var state = player.getPlayerState();
        if (state == YT.PlayerState.PLAYING) {
            player.pauseVideo();
        } else {
            player.playVideo();
        }
    }
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