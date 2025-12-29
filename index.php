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
        padding: 85px 0 0 1px;
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
        --color-brand: #a6ff00;
        /* Màu xanh neon trong ảnh */
        --color-black: #000000;
        --color-white: #ffffff;
        --container-m: 1280px;
    }

    .u--rel {
        position: relative;
    }

    .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 2rem;
        padding-left: 2rem;
    }

    .container.is--m {
        max-width: var(--container-m);
    }

    .full-video {
        /* background: #0b0b0b; */
        padding: 4vw 0;
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
        background-image: repeating-linear-gradient(to right,
                rgba(255, 255, 255, 0.9) 0px,
                rgba(255, 255, 255, 0.9) 1px,
                transparent 1px,
                transparent 14px);
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
        top: 40px;
        /* Đẩy toàn bộ cụm chữ xuống dưới dải ticks 20px */
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
        bottom: 0;
        /* Gắn vào đáy của dải ticks */
        left: 0px;
        top: -40px;
        width: 1.5px;
        height: 35px;
        /* Độ cao vạch dài để nhô hẳn lên trên dải vạch nhỏ */
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

    /* -------------------------section------------------------------  */
    /* --- Info Grid Section (Updated to 3 Columns) --- */
    .info-grid {
        background-color: #0b0b0b;
        color: #fff;
        padding: 120px 0;
        /* Tăng khoảng cách trên dưới */
        font-family: 'Montserrat', sans-serif;
    }

    .info-grid .container {
        max-width: 1400px;
        /* Container rộng hơn theo file mẫu */
        margin: 0 auto;
        padding: 0 3rem;
    }

    /* Tiêu đề giới thiệu lớn */
    .info-grid__intro {
        margin-bottom: 80px;
        max-width: 900px;
    }

    .info-grid__intro h2 {
        font-size: 2.5rem;
        line-height: 1.3;
        font-weight: 500;
    }

    .u--color-electric {
        color: #a3e635;
        filter: drop-shadow(0 0 5px rgba(163, 230, 53, 0.4));
        /* Màu xanh Neon đặc trưng */
    }

    .info-grid__main {
        display: grid;
        /* THAY ĐỔI TẠI ĐÂY: Chuyển từ 2 thành 3 cột */
        grid-template-columns: repeat(3, 1fr);
        gap: 50px 30px;
        /* Khoảng cách giữa các cột và hàng */
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 60px;
        text-align: justify;
    }

    .info-grid__main-item {
        padding: 40px 30px 40px 0;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        display: flex;
        flex-direction: column;
        /* Icon nằm trên tiêu đề hoặc đổi thành Row nếu muốn ngang hàng */
        gap: 15px;
    }

    /* Hiệu ứng khi hover vào ô: Icon sẽ sáng hơn */
    .info-grid__main-item:hover .u--color-electric {
        color: #fff;
        transform: scale(1.1);
        transition: 0.3s ease;
    }

    /* Số thứ tự 01, 02... */
    .info-grid__item-nr {
        font-size: 20px;
        /* Kích thước icon vừa vặn */
        margin-bottom: 5px;
        /* Khoảng cách nhỏ với tiêu đề */
        display: flex;
    }

    .p-l {
        font-size: 1.25rem;
    }

    .u--opacity-40 {
        opacity: 0.4;
    }

    .u--fw-medium {
        font-weight: 600;
    }

    .info-grid__item-col h3 {
        font-size: 1.25rem;
        margin-bottom: 12px;
        font-weight: 600;
        line-height: 1.4;
    }

    .info-grid__item-col p {
        color: rgba(255, 255, 255, 0.5);
        /* Chữ mô tả mờ để làm nổi bật tiêu đề */
        line-height: 1.6;
        font-size: 0.95rem;
    }

    /* --- Responsive linh hoạt --- */
    @media (max-width: 1024px) {

        /* Trên máy tính bảng lớn: Chuyển về 2 cột */
        .info-grid__main {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {

        /* Trên điện thoại: Chuyển về 1 cột */
        .info-grid__main {
            grid-template-columns: 1fr;
        }

        .info-grid__intro h2 {
            font-size: 1.8rem;
        }
    }

    /* -----------------------------Giá---------------------------- */
    .u--rel {
        position: relative;
    }

    .is--m {
        max-width: 1400px;
        margin-left: auto !important;
        margin-right: auto !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Căn giữa các thành phần con bên trong */
        text-align: center;
    }

    /* --- Dòng chứa nút bấm Toggle --- */
    .pricing-home__button-row {
        width: 100%;
        display: flex;
        justify-content: center;
        /* Căn giữa ngang */
        margin-bottom: 50px;
    }

    .button-row {
        display: flex;
        gap: 8px;
        /* background: rgba(255, 255, 255, 0.05); */
        /* Nền mờ cho dải nút */
        padding: 6px;
        /* border-radius: 100px; */
        position: relative;
    }

    /* --- Style nút bấm Osmo Style --- */
    .button {
        position: relative;
        padding: 12px 24px;
        border-radius: 100px;
        border: none;
        cursor: pointer;
        background: transparent;
        overflow: hidden;
        /* Để ẩn nhãn khi trượt */
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .button-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        transition: opacity 0.3s ease;
    }

    /* Màu sắc nút theo trạng thái */
    [data-wf--button-theme--variant="purple"] {
        background-color: #8b5cf6;
    }

    [data-wf--button-theme--variant="neutral-600"] {
        background-color: #262626;
    }

    /* Hiệu ứng trượt nhãn chữ (Label Slide) */
    .button-label__wrap {
        position: relative;
        z-index: 1;
        height: 20px;
        overflow: hidden;
    }

    .button-label {
        display: block;
        line-height: 20px;
        font-weight: 700;
        font-size: 0.85rem;
        color: #fff;
        transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    }

    /* Khi di chuột vào nút, chữ trượt lên */
    .button:hover .button-label {
        transform: translateY(-100%);
    }

    /* --- Mũi tên và chữ vẽ tay (Scribble) --- */
    .pricing-home__scribble {
        position: absolute;
        right: -70px;
        /* Đẩy ra ngoài dải nút */
        top: -10px;
        color: #a3e635;
        /* Màu xanh neon */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .flick-group__scribble-arrow {
        width: 36px;
        height: 50px;
        transform: rotate(40deg);
    }

    .scribble {
        font-family: 'Courier New', Courier, monospace;
        font-size: 0.85rem;
        font-style: italic;
        line-height: 1.1;
        margin-top: 4px;
        text-align: center;
    }

    /* --- Tiêu đề Pricing (Individuals/Teams) --- */
    .pricing-home__title-row {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        /* Căn giữa tiêu đề */
        justify-content: center;
        margin-bottom: 80px;
    }

    .pricing-home__title-el {
        display: flex;
        justify-content: center;
        /* Căn giữa chữ Pricing for và Individuals/Teams */
        align-items: baseline;
        gap: 15px;
    }

    .h-ml {
        font-family: 'Montserrat', sans-serif;
        font-size: 3.5rem;
        font-weight: 800;
        color: #ffffff;
        margin: 0;
        letter-spacing: -2px;
    }

    .pricing-home__title-sub {
        position: relative;
        height: 4.5rem;
        /* Khớp với line-height của h-ml */
        overflow: hidden;
        color: #a3e635;
        display: flex;
        flex-direction: column;
        /* Xếp dọc để trượt */
        align-items: flex-start;
    }

    .pricing-home__title-p {
        margin-top: 15px;
        opacity: 0.5;
        font-size: 1.1rem;
    }

    /* --- Responsive --- */
    @media (max-width: 768px) {
        .h-ml {
            font-size: 2.2rem;
        }

        .pricing-home__scribble {
            display: none;
        }

        /* Ẩn scribble trên mobile cho gọn */
        .pricing-home__button-row {
            padding-top: 60px;
        }
    }

    /* --- Pricing Section Container --- */
    .pricing-cards {
        /* padding: 80px 0; */
        /* background-color: #0b0b0b; */
        color: #fff;
        font-family: 'Montserrat', sans-serif;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .pricing-cards__wrap {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        /* Giữ 3 cột */
        gap: 30px;
        width: 100%;
        justify-content: center;
        /* Căn giữa các ô trong grid */
    }

    /* --- Card Base Style --- */
    .pricing-card {
        background: #161616;
        border-radius: 2.5rem;
        /* Bo góc cực lớn */
        padding: 40px;
        position: relative;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
        overflow: hidden;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        border-color: rgba(255, 255, 255, 0.15);
    }

    /* --- Variants --- */
    .pricing-card.is--purple {
        background: #1c142e;
        /* Tím mờ đặc trưng */
        border-color: rgba(139, 92, 246, 0.3);
    }

    .pricing-card.is--gray {
        background: #1a1a1a;
    }

    /* --- Pricing Elements --- */
    .pricing-card__title {
        font-size: 2.2rem;
        font-weight: 800;
        margin: 20px 0;
        color: #fff;
    }

    .pricing-card__price-h {
        font-size: 2.8rem;
        font-weight: 800;
        color: #fff;
        margin: 0;
    }

    .eyebrow {
        font-size: 0.7rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: rgba(255, 255, 255, 0.4);
        font-weight: 700;
    }

    /* --- Buttons & Tags inside Cards --- */
    .tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 16px;
        border-radius: 100px;
        background: rgba(255, 255, 255, 0.05);
        position: relative;
        border: none;
        cursor: pointer;
        overflow: hidden;
    }

    /* Button variants */
    [data-wf--button-theme--variant="neutral-800"] {
        background-color: #262626;
    }

    [data-wf--button-theme--variant="purple"] {
        background-color: #8b5cf6;
    }

    [data-wf--button-theme--variant="dark-10"] {
        background-color: rgba(255, 255, 255, 0.1);
    }

    [data-wf--button-theme--variant="electric"] {
        background-color: #a3e635;
        color: #000;
    }

    [data-wf--button-theme--variant="neutral-200"] {
        background-color: #e5e5e5;
        color: #000;
    }

    /* Call to Action Button */
    .button.w-inline-block {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 18px 30px;
        border-radius: 100px;
        background: #fff;
        color: #000;
        text-decoration: none !important;
        font-weight: 700;
        margin-top: 30px;
        position: relative;
        overflow: hidden;
    }

    .button:hover .button-label {
        transform: translateY(-100%);
    }

    .button-label__wrap {
        position: relative;
        z-index: 1;
        height: 20px;
        overflow: hidden;
    }

    .button-label {
        display: block;
        height: 20px;
        line-height: 20px;
        transition: transform 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    }

    /* --- Benefit List --- */
    .pricing-benefits__wrap ul {
        list-style: none;
        padding: 0;
        margin: 25px 0;
    }

    .pricing-benefit {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
    }

    .pricing-benefit__tag {
        background: rgba(163, 230, 53, 0.1);
        color: #a3e635;
        padding: 4px 10px;
        border-radius: 6px;
        font-weight: 800;
        font-size: 0.8rem;
    }

    /* --- Scribbles inside Cards --- */
    .pricing-card__scribble {
        position: absolute;
        top: 20px;
        right: 20px;
        transform: rotate(5deg);
    }

    /* --- Responsive --- */
    @media (max-width: 1024px) {
        .pricing-cards__wrap {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .pricing-cards__wrap {
            grid-template-columns: 1fr;
        }

        .pricing-card {
            padding: 30px;
        }
    }

    /* Mặc định ẩn các thẻ Team */
    [data-pricing-card="team"] {
        display: none !important;
    }

    /* Khi trạng thái là Team thì hiện thẻ Team, ẩn thẻ Solo */
    body.show-teams [data-pricing-card="team"] {
        display: flex !important;
    }

    body.show-teams [data-pricing-card="solo"] {
        display: none !important;
    }

    /* Style để người dùng biết tiêu đề có thể bấm được */
    /* Style cho các thẻ h2 bên trong */
    .pricing-home__title-sub h2 {
        margin: 0;
        line-height: 4.5rem;
        transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1), opacity 0.4s ease;
        cursor: pointer;
        white-space: nowrap;
    }

    /* Trạng thái khi hiển thị Teams: Đẩy cả khối lên trên */
    body.show-teams .pricing-home__title-sub h2 {
        transform: translateY(-100%);
    }

    /* Hiệu ứng làm mờ cho chữ không được chọn */
    .pricing-home__title-sub h2.is--inactive {
        opacity: 0.2;
        color: #ffffff !important;
    }

    /* Responsive cho mobile */
    @media (max-width: 768px) {
        .pricing-home__title-sub {
            height: 3rem;
        }

        .pricing-home__title-sub h2 {
            line-height: 3rem;
        }
    }

    /* Làm mờ tiêu đề không được chọn */
    .pricing-home__title-sub h2.is--inactive {
        opacity: 0.2;
        color: #ffffff !important;
    }

    /* Trường hợp chỉ có 1 hoặc 2 thẻ Team (để không bị lệch trái) */
    body.show-teams .pricing-cards__wrap {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    body.show-teams .pricing-card {
        width: calc(33.33% - 30px);
        /* Đảm bảo kích thước card team bằng card solo */
        min-width: 550px;
    }

    /* --- Responsive căn giữa cho Mobile --- */
    @media (max-width: 768px) {
        .pricing-home__title-el {
            flex-direction: column;
            align-items: center;
        }

        .pricing-cards__wrap {
            grid-template-columns: 1fr;
        }

        body.show-teams .pricing-card {
            width: 100%;
        }
    }

    .pricing-card__cta {
        padding: 55px 0 40px 0;
    }

    p {
        margin-bottom: 0 !important;

    }

    /* Khung chứa danh sách */
    .benefits-collapse {
        max-height: 250px;
        /* Chiều cao khi thu gọn (khoảng 5-6 mục) */
        overflow: hidden;
        position: relative;
        transition: max-height 0.4s ease;
    }

    /* Hiệu ứng mờ dần lớp dưới cùng khi đang thu gọn */
    .benefits-collapse::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.9));
        /* Đổi màu rgba cho khớp với nền thẻ */
        pointer-events: none;
        transition: opacity 0.3s;
    }

    /* Khi đã mở rộng thì bỏ hiệu ứng mờ và giới hạn chiều cao */
    .benefits-collapse.is-expanded {
        max-height: 1500px;
        /* Đủ lớn để hiện hết 19 mục */
    }

    .benefits-collapse.is-expanded::after {
        opacity: 0;
    }

    /* Nút bấm Xem thêm */
    .view-more-container {
        text-align: center;
        margin-top: 10px;
    }

    .view-more-btn {
        background: none;
        border: 1px solid #444;
        color: #fff;
        padding: 6px 15px;
        border-radius: 20px;
        font-size: 12px;
        cursor: pointer;
        transition: 0.3s;
    }

    .view-more-btn:hover {
        background: #fff;
        color: #000;
    }

    /* 1. Trạng thái mặc định: Thu gọn và ẩn phần thừa */
    .pricing-card__cta-p {
        max-height: 250px;
        /* Chiều cao này hiện khoảng 5-6 dòng. Bạn có thể tăng giảm tùy ý */
        overflow: hidden;
        position: relative;
        transition: max-height 0.5s ease;
        /* Tạo hiệu ứng mượt khi mở ra */
    }

    /* 2. Tạo lớp phủ mờ ở cuối để báo hiệu còn nội dung (chỉ hiện khi chưa mở rộng) */
    .pricing-card__cta-p:not(.is--expanded)::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 60px;
        /* background: linear-gradient(transparent, rgba(0,0,0,0.9)); Đổi màu cho khớp nền thẻ của bạn */
        pointer-events: none;
    }

    /* 3. Trạng thái khi bấm nút: Xổ hết ra */
    .pricing-card__cta-p.is--expanded {
        max-height: 2000px;
        /* Cho phép giãn ra hết cỡ danh sách */
    }

    /* Trạng thái mặc định của các nút */
    .button-row .button {
        transition: background-color 0.4s ease, opacity 0.4s ease;
        background-color: #1a1a1a !important;
        /* Màu đen mặc định */
        opacity: 0.6;
    }

    /* 2. Khi nút có class is--active (được chọn): Đổi sang màu tím #8b5cf6 và rõ nét */
    .button-row .button.is--active {
        background-color: #8b5cf6 !important;
        opacity: 1;
    }

    /* 3. Vô hiệu hóa các lớp màu nền inline (neutral-600, purple) để ưu tiên màu từ class is--active */
    .button-row .button .button-bg {
        display: none !important;
    }

    .button-row .button.is--active .button-bg {
        display: none;
    }

    /* Màu cho nút Individuals khi Active (Màu tím) */
    .button-row .button[data-pricing-button="solo"].active {
        opacity: 1;
        background-color: #8b5cf6 !important;
    }

    /* Màu cho nút Teams khi Active (Màu xám đậm/Neutral) */
    .button-row .button[data-pricing-button="team"].active {
        opacity: 1;
        background-color: #262626 !important;
    }

    /* Hiệu ứng trượt tiêu đề như đã làm */
    .pricing-home__title-sub {
        position: relative;
        height: 4.5rem;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .pricing-home__title-sub h2 {
        margin: 0;
        line-height: 4.5rem;
        transition: transform 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    }

    body.show-teams .pricing-home__title-sub h2 {
        transform: translateY(-100%);
    }

    .p-m {
        color: #ffffffff;

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

        <section class="full-video">
            <div class="container">
                <div class="full-video__wrap">

                    <div class="custom-player__media">
                        <div id="youtube-player"></div>

                        <div class="video-overlay" onclick="togglePlay()"></div>

                        <div class="custom-player__float">
                            <div class="webcam__wrap">
                                <div class="webcam__sound" id="mute-button" onclick="toggleMute()"
                                    style="cursor: pointer;">
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
        <!-- lợi ích -->
        <section data-theme-section="dark" class="info-grid">
            <div class="container is--m is--md-m">
                <div class="info-grid__main">
                    <div class="info-grid__main-item">
                        <div class="info-grid__item-nr">
                            <i class="fa-solid fa-bolt-lightning u--color-electric"></i>
                        </div>
                        <div class="info-grid__item-col">
                            <h3 class="p-l u--fw-medium">Tối ưu hóa</h3>
                            <p class="p-m">Giúp doanh nghiệp tiết kiệm thời gian, nguồn lực. An tâm tập trung vào các
                                nhiệm vụ chuyên môn, quan trọng khác.</p>
                        </div>
                    </div>

                    <div class="info-grid__main-item">
                        <div class="info-grid__item-nr">
                            <i class="fa-solid fa-sliders u--color-electric"></i>
                        </div>
                        <div class="info-grid__item-col">
                            <h3 class="p-l u--fw-medium">Năng lực quản lý</h3>
                            <p class="p-m">Khả năng vận hành giải pháp chuyên nghiệp. Đáp ứng yêu cầu đa dạng của thị
                                trường.</p>
                        </div>
                    </div>

                    <div class="info-grid__main-item">
                        <div class="info-grid__item-nr">
                            <i class="fa-solid fa-shield-halved u--color-electric"></i>
                        </div>
                        <div class="info-grid__item-col">
                            <h3 class="p-l u--fw-medium">Uy tín thương hiệu</h3>
                            <p class="p-m">15+ năm cung cấp giải pháp giúp doanh nghiệp xây dựng và phát triển thương
                                hiệu bền vững.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="pricing-section" style="background: #0b0b0b; width: 100%; overflow: hidden;">
        <div class="container is--m u--rel">
            <div class="pricing-home__button-row">
                <div class="u--rel">
                    <div class="button-row"><button data-button-rotate="" data-shape="round" data-pricing-button="solo"
                            data-responsive="" data-size="" data-theme="" data-button-rotate-hover="" class="button"
                            fdprocessedid="ndowpml" style="--y: 3160%;">
                            <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                            <div class="button-label__wrap">
                                <div class="button-label"><span>For Individuals</span></div>
                                <div aria-hidden="true" class="button-label"><span aria-hidden="true">For
                                        Individuals</span></div>
                                <div aria-hidden="true" class="button-label"><span>For Individuals</span></div>
                            </div>
                        </button><button data-button-rotate="" data-shape="" data-pricing-button="team"
                            data-responsive="" data-size="" data-theme="" data-button-rotate-hover="" class="button"
                            fdprocessedid="p8hwip" style="--y: 2080%;">
                            <div data-wf--button-theme--variant="neutral-600" class="button-bg"></div>
                            <div class="button-label__wrap">
                                <div class="button-label"><span>For Teams</span></div>
                                <div aria-hidden="true" class="button-label"><span aria-hidden="true">For
                                        Teams</span></div>
                                <div aria-hidden="true" class="button-label"><span>For Teams</span></div>
                            </div>
                        </button></div>
                    <div class="pricing-home__scribble"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                            viewBox="0 0 31 32" fill="none" class="flick-group__scribble-arrow">
                            <path
                                d="M0 30.7837L1.24998 30.9926L1.62857 31.5964C1.45886 29.6382 4.50712 28.7243 5.21208 26.864C5.42421 26.3027 4.76822 26.208 4.56913 26.3843C4.52018 26.4267 4.33089 27.1121 3.92945 27.5331C3.58351 27.8921 2.02674 29.6284 1.63183 29.3151C2.1377 24.2498 3.34526 19.6056 5.93335 15.1964C11.2009 6.21156 20.7308 1.28669 30.9689 0.457718C15.8484 -0.181961 2.73822 12.5268 1.29894 27.3569C0.443859 27.0142 1.35769 24.2368 0 24.4228L0 30.7804L0 30.7837Z"
                                fill="currentColor"></path>
                        </svg>
                        <p class="scribble">Save 20%<br>per user</p>
                    </div>
                </div>
            </div>
            <div class="pricing-home__title-row">
                <div class="pricing-home__title-el">
                    <h2 class="h-ml">Pricing for</h2>
                    <div class="pricing-home__title-sub">
                        <h2 class="h-ml" id="trigger-solo">Individuals</h2>
                        <h2 class="h-ml is--inactive" id="trigger-team">Teams</h2>
                    </div>
                </div>
                <div class="pricing-home__title-p">
                    <p class="p-m">Choose the plan that fits you best.</p>
                </div>
            </div>
        </div>
        <div class="container u--rel is--m">
            <div class="pricing-cards">
                <div class="pricing-cards__wrap">
                    <div data-pricing-state="quarterly" data-pricing-card="solo"
                        data-wf--pricing-card-member--variant="base" class="pricing-card">
                        <div class="pricing-card__inner">
                            <div data-shape="" data-theme="" class="tag">
                                <div data-wf--button-theme--variant="neutral-800" class="button-bg"></div><span
                                    class="eyebrow is--relative">One user</span>
                            </div>
                            <div class="pricing-card__title-row">
                                <h3 class="pricing-card__title">GÓI STARTER</h3>
                                <div class="pricing-card__price-row">
                                    <div class="pricing-card__price">
                                        <div class="pricing-card__price-w">
                                            <p class="">Dành cho danh nghiệm nhỏ hoặc Startup</p>
                                            <p class="pricing-card__price-h">30 TRIỆU</p>
                                        </div><span class="eyebrow">per month</span>
                                    </div>
                                    <!-- <div class="button-row align--end"><button data-shape="round" data-button-rotate=""
                                        data-pricing-card-toggle="" data-theme="" data-button-rotate-hover=""
                                        class="tag" fdprocessedid="73ivi9" style="--y: 2080%;">
                                        <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                                        <span class="eyebrow tag-label">Quarterly</span>
                                        <div class="button-label__wrap"><span
                                                class="button-label eyebrow">Quarterly</span><span aria-hidden="true"
                                                class="button-label eyebrow">Quarterly</span>
                                        </div>
                                    </button><button data-shape="" data-button-rotate="" data-pricing-card-toggle=""
                                        data-theme="" data-button-rotate-hover="" class="tag" fdprocessedid="bs81l"
                                        style="--y: 1900%;">
                                        <div data-wf--button-theme--variant="dark-10" class="button-bg"></div>
                                        <span class="eyebrow tag-label">Annually</span>
                                        <div class="button-label__wrap"><span
                                                class="button-label eyebrow">Annually</span><span aria-hidden="true"
                                                class="button-label eyebrow">Annually</span>
                                        </div>
                                    </button>
                                </div> -->
                                </div>
                            </div>
                            <div class="pricing-card__cta-row">
                                <!-- <div class="pricing-card__divider">
                                <div class="tag-row">
                                    <div class="button-row">
                                        <div data-shape="" data-theme="" class="tag">
                                            <div data-wf--button-theme--variant="dark-10" class="button-bg">
                                            </div><span class="eyebrow is--relative">our</span>
                                        </div>
                                        <div data-shape="round" data-theme="" class="tag">
                                            <div data-wf--button-theme--variant="dark-10" class="button-bg">
                                            </div><span class="eyebrow is--relative">base plan</span>
                                        </div>
                                    </div>
                                    <div class="tag-row__line"></div>
                                </div>
                            </div> -->
                                <div class="pricing-card__cta">
                                    <div class="pricing-card__cta-p">
                                        <ul>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">01</div>
                                                <p class="p-m">Thành lập công ty</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">02</div>
                                                <p class="p-m">Triển khai Zalo OA</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">03</div>
                                                <p class="p-m">Thiết kế Google Maps</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">04</div>
                                                <p class="p-m">Kiểm toán thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">05</div>
                                                <p class="p-m">Nghiên cứu 4Cs</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">06</div>
                                                <p class="p-m">Chiến lược thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">07</div>
                                                <p class="p-m">Thiết kế Logo</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">08</div>
                                                <p class="p-m">Thiết kế nhận diện</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">09</div>
                                                <p class="p-m">Website thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">10</div>
                                                <p class="p-m">Nguyên tắc thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">11</div>
                                                <p class="p-m">Kế hoạch Branded SEO</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">12</div>
                                                <p class="p-m">Kế hoạch Social & Ra mắt</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">13</div>
                                                <p class="p-m">Quản trị Website & Social</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">14</div>
                                                <p class="p-m">Trò chơi xã hội mini</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">15</div>
                                                <p class="p-m">Dựng khuyến mãi doanh nghiệp</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">16</div>
                                                <p class="p-m">Đội tiếp thị ô tô</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">17</div>
                                                <p class="p-m">Quảng cáo ngoài trời & Báo chí</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">17</div>
                                                <p class="p-m">Nhận diện sự kiện </p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">17</div>
                                                <p class="p-m">Nhận diện điểm bán</p>
                                            </li>
                                        </ul>
                                    </div><a data-button-rotate-hover="" class="button w-inline-block" data-size="full"
                                        data-theme="" href="https://www.osmo.supply/plans/subscription" data-barba-p=""
                                        data-button-rotate="" data-responsive="" data-outseta-type="" data-shape=""
                                        style="--y: 9480%;">
                                        <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                                        <div class="button-label__wrap">
                                            <div class="button-label"><span>Become a member</span></div>
                                            <div aria-hidden="true" class="button-label"><span>Become a
                                                    member</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pricing-card__list-row">
                                <div class="pricing-benefits__wrap">
                                    <h4 class="p-l">Benefits:</h4>
                                    <!-- <ul>
                                    <li class="pricing-benefit">
                                        <div data-resources-total="" class="pricing-benefit__tag p-r">137</div>
                                        <p class="p-m">Vault resources, and always growing</p>
                                    </li>
                                </ul> -->
                                </div><a data-underline-link="alt" href="https://www.osmo.supply/plans"
                                    class="underline-link is--alt">View all benefits</a>
                            </div>
                        </div>
                    </div>
                    <div data-pricing-card="solo" class="pricing-card is--purple">
                        <div class="pricing-card__inner">
                            <div data-shape="" data-theme="" class="tag">
                                <div data-wf--button-theme--variant="neutral-800" class="button-bg"></div><span
                                    class="eyebrow is--relative">One user</span>
                            </div>
                            <div class="pricing-card__title-row">
                                <h3 class="pricing-card__title">Lifetime</h3>
                                <div class="pricing-card__price-row">
                                    <div class="pricing-card__price">
                                        <p class="pricing-card__price-h">€599 EUR</p><span class="eyebrow">one
                                            time</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pricing-card__cta-row">
                                <div data-hover="" data-modal-trigger="lifetime" class="pricing-card__divider">
                                    <div class="tag-row">
                                        <div class="button-row">
                                            <div data-shape="" data-theme="" class="tag">
                                                <div data-wf--button-theme--variant="electric" class="button-bg">
                                                </div><span class="eyebrow is--relative">Bonus:</span>
                                            </div>
                                            <div data-shape="round" data-theme="" class="tag">
                                                <div data-wf--button-theme--variant="electric" class="button-bg">
                                                </div><span class="eyebrow is--relative">a copy of this
                                                    website</span>
                                            </div><button data-shape="round" data-theme="" data-button-rotate-hover=""
                                                class="tag" fdprocessedid="w6yos1">
                                                <div data-wf--button-theme--variant="electric" class="button-bg">
                                                </div><span class="eyebrow tag-label">?</span>
                                                <div class="button-label__wrap"><span
                                                        class="button-label eyebrow">?</span><span aria-hidden="true"
                                                        class="button-label eyebrow">?</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="tag-row__line"></div>
                                    </div>
                                </div>
                                <div class="pricing-card__cta">
                                    <div class="pricing-card__cta-p">
                                        <p class="p-m">Join once, stay part of the community forever. All future
                                            resources and updates included.</p>
                                    </div><a data-button-rotate-hover="" class="button w-inline-block" data-size="full"
                                        data-theme="" href="https://www.osmo.supply/plans/lifetime" data-barba-p=""
                                        data-button-rotate="" data-responsive="" data-outseta-type="" data-shape=""
                                        style="--y: 10000%;">
                                        <div data-wf--button-theme--variant="neutral-800" class="button-bg"></div>
                                        <div class="button-label__wrap">
                                            <div class="button-label" style=""><span>Become a Lifetime member</span>
                                            </div>
                                            <div aria-hidden="true" class="button-label" style=""><span>Become a
                                                    Lifetime member</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="pricing-card__list-row">
                                <div class="pricing-benefits__wrap">
                                    <h4 class="p-l">Benefits:</h4>
                                    <ul>
                                        <li class="pricing-benefit">
                                            <div data-resources-total="" class="pricing-benefit__tag p-r">137</div>
                                            <p class="p-m">Vault resources, and always growing</p>
                                        </li>
                                    </ul>
                                </div><a data-underline-link="alt" href="https://www.osmo.supply/plans"
                                    class="underline-link is--alt">View all benefits</a>
                            </div>
                        </div>
                        <div class="pricing-card__scribble">
                            <p class="scribble">Pay Once,<br>Use Forever</p>
                        </div>
                    </div>
                    <div data-pricing-state="quarterly" data-pricing-card="team"
                        data-wf--pricing-card-team--variant="base" class="pricing-card is--gray">
                        <div class="pricing-card__inner">
                            <div data-shape="" data-theme="" class="tag">
                                <div data-wf--button-theme--variant="light-10" class="button-bg"></div><span
                                    class="eyebrow is--relative">Multiple users</span>
                            </div>
                            <div class="pricing-card__title-row">
                                <h3 class="pricing-card__title">GÓI ENTERPRISE </h3>
                                <div class="pricing-card__price-row">
                                    <div class="pricing-card__price">
                                        <div class="pricing-card__price-w">
                                            <p class="">Dành cho danh nghiệp lớn, tập đoàn đa ngành</p>
                                            <p class="pricing-card__price-h">200 TRIỆU</p>
                                        </div><span class="eyebrow">per month, per user</span>
                                    </div>
                                    <!-- <div class="button-row align--end"><button data-shape="round" data-button-rotate=""
                                            data-pricing-card-toggle="" data-theme="" data-button-rotate-hover=""
                                            class="tag" fdprocessedid="tqkrjv" style="--y: 2080%;">
                                            <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                                            <span class="eyebrow tag-label">quarterly</span>
                                            <div class="button-label__wrap"><span
                                                    class="button-label eyebrow">quarterly</span><span
                                                    aria-hidden="true" class="button-label eyebrow">quarterly</span>
                                            </div>
                                        </button><button data-shape="" data-button-rotate="" data-pricing-card-toggle=""
                                            data-theme="" data-button-rotate-hover="" class="tag" fdprocessedid="pgqzi9"
                                            style="--y: 1900%;">
                                            <div data-wf--button-theme--variant="light-10" class="button-bg"></div>
                                            <span class="eyebrow tag-label">annually</span>
                                            <div class="button-label__wrap"><span
                                                    class="button-label eyebrow">annually</span><span aria-hidden="true"
                                                    class="button-label eyebrow">annually</span>
                                            </div>
                                        </button></div> -->
                                </div>
                            </div>
                            <div class="pricing-card__cta-row">
                                <div class="pricing-card__divider">
                                    <div class="tag-row">
                                        <div class="button-row"></div>
                                        <div class="tag-row__line"></div>
                                    </div>
                                </div>
                                <div class="pricing-card__cta">

                                    <div class="pricing-card__cta-p" id="sota-benefits-container">
                                        <ul id="sota-benefits-list">
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">01</div>
                                                <p class="p-m">Thành lập công ty</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">02</div>
                                                <p class="p-m">Triển khai Zalo OA</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">03</div>
                                                <p class="p-m">Thiết kế Google Maps</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">04</div>
                                                <p class="p-m">Kiểm toán thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">05</div>
                                                <p class="p-m">Nghiên cứu 4Cs</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">06</div>
                                                <p class="p-m">Chiến lược thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">07</div>
                                                <p class="p-m">Thiết kế Logo</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">08</div>
                                                <p class="p-m">Thiết kế nhận diện</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">09</div>
                                                <p class="p-m">Website thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">10</div>
                                                <p class="p-m">Nguyên tắc thương hiệu</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">11</div>
                                                <p class="p-m">Kế hoạch Branded SEO</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">12</div>
                                                <p class="p-m">Kế hoạch Social & Ra mắt</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">13</div>
                                                <p class="p-m">Quản trị Website & Social</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">14</div>
                                                <p class="p-m">Trò chơi xã hội mini</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">15</div>
                                                <p class="p-m">Dựng khuyến mãi doanh nghiệp</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">16</div>
                                                <p class="p-m">Đội tiếp thị ô tô</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">17</div>
                                                <p class="p-m">Quảng cáo ngoài trời & Báo chí</p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">17</div>
                                                <p class="p-m">Nhận diện sự kiện </p>
                                            </li>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">17</div>
                                                <p class="p-m">Nhận diện điểm bán</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="view-more-container">
                                        <button id="toggle-benefits-btn" class="view-more-btn"
                                            onclick="toggleSotaBenefits()">
                                            <span>Xem thêm</span>
                                        </button>
                                    </div>
                                    <a data-button-rotate-hover="" class="button w-inline-block" data-size="full"
                                        data-theme="" href="https://www.osmo.supply/plans/team-subscription"
                                        data-barba-p="" data-button-rotate="" data-responsive="" data-outseta-type=""
                                        data-shape="" style="--y: 10000%;">
                                        <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                                        <div class="button-label__wrap">
                                            <div class="button-label"><span>Tư vấn ngay</span></div>
                                            <div aria-hidden="true" class="button-label"><span>Tư vấn ngay</span></div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-home__button-row"><a data-button-rotate-hover="" class="button w-inline-block"
                    data-size="" data-theme="" href="https://www.osmo.supply/plans" data-barba-p=""
                    data-button-rotate="" data-responsive="" data-outseta-type="" data-shape="" style="--y: 3520%;">
                    <div data-wf--button-theme--variant="neutral-200" class="button-bg"></div>
                    <div class="button-label__wrap">
                        <div class="button-label"><span>View full pricing</span></div>
                        <div aria-hidden="true" class="button-label"><span>View full pricing</span></div>
                    </div>
                </a></div>
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
            var width = rect.width; // Tổng chiều rộng thanh

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
    document.addEventListener('DOMContentLoaded', function() {
        const btnSolo = document.querySelector('[data-pricing-button="solo"]');
        const btnTeam = document.querySelector('[data-pricing-button="team"]');
        const triggerSolo = document.getElementById('trigger-solo');
        const triggerTeam = document.getElementById('trigger-team');

        // Mặc định ban đầu chọn Individuals
        if (btnSolo) btnSolo.classList.add('is--active');

        function updatePricingUI(isTeam) {
            if (isTeam) {
                // Chuyển sang Teams
                document.body.classList.add('show-teams');
                btnTeam.classList.add('is--active'); // Teams màu tím
                btnSolo.classList.remove('is--active'); // Individuals quay về màu đen

                triggerSolo.classList.add('is--inactive');
                triggerTeam.classList.remove('is--inactive');
            } else {
                // Quay lại Individuals
                document.body.classList.remove('show-teams');
                btnSolo.classList.add('is--active'); // Individuals màu tím
                btnTeam.classList.remove('is--active'); // Teams quay về màu đen

                triggerSolo.classList.remove('is--inactive');
                triggerTeam.classList.add('is--inactive');
            }
        }

        // Gán sự kiện click
        if (btnSolo) btnSolo.addEventListener('click', () => updatePricingUI(false));
        if (btnTeam) btnTeam.addEventListener('click', () => updatePricingUI(true));
        if (triggerSolo) triggerSolo.addEventListener('click', () => updatePricingUI(false));
        if (triggerTeam) triggerTeam.addEventListener('click', () => updatePricingUI(true));
    });

    function toggleSotaBenefits() {
        // Tìm khung chứa danh sách thông qua ID bạn đã đặt
        const container = document.getElementById('sota-benefits-container');
        const btnSpan = document.querySelector('#toggle-benefits-btn span');

        // Kiểm tra và bật/tắt class
        if (container.classList.contains('is--expanded')) {
            container.classList.remove('is--expanded');
            btnSpan.innerText = "Xem thêm";

            // Cuộn nhẹ lên đầu để người dùng không bị lạc sau khi thu gọn
            container.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        } else {
            container.classList.add('is--expanded');
            btnSpan.innerText = "Thu gọn";
        }
    }
    </script>
</body>

</html>