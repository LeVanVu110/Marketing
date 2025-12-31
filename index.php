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


    <style>
        /* --- Media Queries cho Hero Section --- */
        @media (max-width: 991px) {
            .hero-section {
                padding: 60px 0;
                /* Giảm padding trên mobile */
                text-align: center;
            }

            .hero-title {
                font-size: 36px;
                /* Chữ nhỏ hơn trên tablet */
                margin-bottom: 20px;
            }

            .hero-description {
                margin: 0 auto 30px auto;
                padding-left: 0;
                border-left: none;
                /* Bỏ vạch kẻ dọc khi căn giữa */
                font-size: 16px;
            }

            .hero-buttons {
                justify-content: center;
                /* Căn giữa các nút */
                flex-direction: column;
                /* Xếp chồng các nút nếu màn hình quá hẹp */
                gap: 15px;
            }

            .btn-consult {
                width: 100%;
                /* Nút bấm rộng hết cỡ trên mobile */
                max-width: 280px;
            }
        }

        @media (max-width: 767px) {
            .hero-title {
                font-size: 28px;
                /* Chữ nhỏ hơn nữa cho mobile */
            }

            .hero-subtitle {
                font-size: 12px;
                letter-spacing: 2px;
            }

            /* Thu nhỏ các icon trang trí để không chiếm quá nhiều chỗ */
            .hero-image-wrapper {
                height: 300px;
                margin-top: 40px;
            }

            .main-graphic {
                font-size: 80px;
            }

            .satellite {
                width: 50px;
                height: 50px;
                font-size: 20px;
            }

            .bg-blob {
                width: 250px;
                height: 250px;
            }
        }

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
            padding-top: 50px;
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

        /* Badge tin tưởng trên mobile */
        @media (max-width: 991px) {
            .customer-trust-badge {
                text-align: center;
                border-left: none;
                border-bottom: 2px solid #ffcc33;
                padding-left: 0;
                padding-bottom: 15px;
                margin-bottom: 30px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
        }

        /* Tăng tốc độ mượt cho Owl Carousel */
        .customer-logos .owl-stage {
            display: flex;
            align-items: center;
            /* Hiệu ứng linear giúp chạy đều không bị khựng */
            transition-timing-function: linear !important;
        }

        /* Khung chứa cho mỗi item logo */
        .customer-logos .item {
            padding: 0 20px;
            display: flex;
            justify-content: center;
            filter: grayscale(100%);
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .customer-logos .item:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* Responsive cho ảnh logo */
        .customer-logos .item img {
            max-width: 120px !important;
            height: auto !important;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .customer-logos .item img {
                max-width: 100px !important;
            }
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
            top: 110%;
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
            --padding-m: 7.5em;
            /* Khoảng cách padding */
            --gap-m: 1.5em;
            /* Khoảng cách giữa các phần tử */
            --color-neutral-800: #201d1d;
            /* Màu chữ tiêu đề */
            --sota-blue: #1e73be;
            --sota-gold: #c49533;
            --text-dark: #333;
            --text-gray: #666;
            
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

        /* Row chứa nội dung text */
        .product-slider__text-row {
            display: flex;
            flex-direction: column;
            grid-column-gap: var(--gap-m);
            grid-row-gap: var(--gap-m);
            align-items: flex-start;
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
            color: azure;
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
            transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
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
            opacity: 1;
            transform: translateY(0);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        /* Khi bị ẩn đi */
        .pricing-card.is--hidden {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            position: absolute;
            /* Đẩy ra khỏi dòng chảy để card khác nhảy vào */
            visibility: hidden;
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
            margin: 0 auto;
            /* Căn giữa thẻ khi chỉ có 1 gói */
            max-width: 600px;
            /* Giới hạn độ rộng tối đa để không bị quá to */
            width: 100%;
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
            width: 0%;
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
            /* opacity: 0.6; */
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

        /* --------------------------- các dự án --------------------------------- */
        .svg-img.is--product-slider {
            aspect-ratio: 3481/1740.5;
            pointer-events: none;
            width: 238em;
            position: absolute;
            top: 48%
        }

        /* Tiêu đề H2 (Class h-l) */
        .h-l {
            font-family: "Haffer XH", Arial, sans-serif;
            font-size: 5em;
            /* Kích thước chữ lớn */
            font-weight: 400;
            line-height: 1;
            letter-spacing: -.04em;
            margin-top: 0;
            margin-bottom: 0;
            color: var(--color-neutral-800);
        }

        /* Đoạn văn bản (Class p-l) */
        .p-l {
            font-family: "Haffer VF", Arial, sans-serif;
            font-variation-settings: "wght" 420;
            font-size: 1.1875em;
            line-height: 1.25;
            letter-spacing: -.02em;
            margin-bottom: 0;
        }

        .product-slider__inner {
            padding-top: var(--padding-m);
            padding-bottom: var(--padding-m);
            position: relative;
        }

        .h-l,
        .p-l {
            font-family: Inter, sans-serif;
            /* Hoặc Arial, sans-serif */
            width: 100%;
            font-weight: 700;
            font-size: 3rem;
        }

        .product-slider__title {
            text-align: center;
        }

        /* Layout bao quanh 2 thẻ */
        .custom-product-grid {
            display: flex;
            align-items: flex-end;
            /* Căn lề dưới để tạo cảm giác chênh lệch độ cao */
            gap: 40px;
            margin-top: 50px;
        }

        /* Thẻ số 1: Thu nhỏ 33% */
        .product-item.is-small {
            flex: 0 0 33%;
            /* Chiếm đúng 1/3 chiều rộng */
        }

        .product-item.is-small .product-card {
            transform: scale(0.8);
            /* Nếu bạn muốn nó trông nhỏ hẳn đi so với khung */
            transform-origin: bottom left;
        }

        /* Thẻ số 2: Hiện bình thường 100% */
        .product-item.is-full {
            flex: 1;
            /* Chiếm toàn bộ phần còn lại */
        }

        /* Giữ style đẹp cho Card giống Osmo */
        .product-card {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: #f4f4f4;
            transition: all 0.4s ease;
        }

        .product-card__bg img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        .product-card__content {
            padding: 24px;
        }

        /* Mobile: Trở về 100% cả 2 để dễ đọc */
        @media (max-width: 768px) {
            .custom-product-grid {
                flex-direction: column;
            }

            .product-item.is-small {
                flex: 0 0 100%;
            }

            .product-item.is-small .product-card {
                transform: scale(1);
            }
        }

        /* Layout chung */
        .osmo-grid-row {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        /* Row 2 ảnh: mỗi cái chiếm gần 50% */
        .osmo-grid-row.is-double .product-card {
            flex: 1;
        }

        /* Row 3 ảnh: mỗi cái chiếm khoảng 33% */
        .osmo-grid-row.is-triple .product-card.is-small {
            flex: 0 0 calc(33.33% - 14px);
            /* Thu nhỏ chính xác 33% */
        }

        /* Tinh chỉnh style Card để đồng bộ */
        .product-card {
            position: relative;
            background: #1a1a1a;
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            /* Hiệu ứng bay lên nhẹ khi di chuột */
        }

        .product-card__bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            aspect-ratio: 4/3;
            /* Giữ tỉ lệ ảnh đồng nhất */
        }

        .product-card__content {
            padding: 1.5rem;
            color: white;
        }

        .product-card__h.is--s {
            font-size: 1.2rem;
            /* Tiêu đề nhỏ hơn cho thẻ 33% */
        }

        .osmo-slider-container {
            width: 100%;
            overflow: hidden;
            cursor: grab;
            padding: 40px 0;
            position: relative;
        }

        .osmo-slider-track {
            display: flex;
            gap: 30px;
            width: max-content;
            /* Để GSAP có thể kéo toàn bộ dải */
            will-change: transform;
        }

        .osmo-slider-track::-webkit-scrollbar {
            display: none;
        }



        .product-card {
            /* Hiển thị 2 thẻ trên 1 hàng dựa trên container 940px (hoặc tùy chỉnh) */
            width: calc((940px - 30px) / 2);
            flex-shrink: 0;
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #eee;
            user-select: none;
        }

        /* Cho phép link hoạt động lại bên trong nội dung */
        .product-card__content {
            padding: 20px 25px;
        }

        /* TẠO HÌNH CHỮ NHẬT TO */
        .product-card__bg {
            width: 100%;
            aspect-ratio: 16 / 9;
            /* Tỉ lệ hình chữ nhật */
            overflow: hidden;
        }

        .product-card__bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            pointer-events: none;
            /* Tránh dính ảnh khi kéo */
        }

        .product-card__h {
            margin: 0;
            font-size: 1.4rem;
            color: #1a1a1a;
            font-weight: 700;
        }

        .product-card__content p {
            margin: 5px 0 0 0;
            color: #666;
            font-size: 0.9rem;
        }

        /* Khi đang kéo */
        .osmo-slider-container:active {
            cursor: grabbing;
        }

        /* Mobile */
        @media (max-width: 767px) {
            .product-card {
                width: 80vw;
                /* Hiện 1 cái rưỡi trên mobile */
            }
        }

        .product-slider__title .h-l {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 3rem;
            /* Tăng kích thước để thấy rõ hiệu ứng */
            text-transform: uppercase;
            display: inline-block;
            min-height: 1.2em;
            /* Giữ chỗ để tránh nhảy dòng khi chữ chạy */
        }

        /* -------------------------------------- reponsive video -----------------------  */
        /* --- Media Queries cho The Vault & Video Section --- */

        @media (max-width: 1200px) {
            .custom-player__float {
                left: -30px;
                /* Thu hẹp độ lấn lề trên màn hình nhỏ hơn */
                width: 100px;
                height: 100px;
            }

            .webcam__wrap {
                width: 100%;
                height: 100%;
            }
        }

        @media (max-width: 991px) {
            .vault-title {
                font-size: 80px;
            }

            .custom-player__float {
                position: relative;
                /* Đưa webcam vào trong luồng nội dung thay vì lấn lề */
                left: 0;
                bottom: 0;
                margin: -50px auto 20px auto;
                /* Nằm đè lên mép video một chút */
                width: 90px;
                height: 90px;
            }

            .custom-player__interface {
                padding: 2rem 1.5rem;
                /* Giảm padding */
            }

            .custom-player__markers {
                top: 30px;
                /* Kéo marker gần thanh ticks hơn */
            }
        }

        @media (max-width: 768px) {
            .vault-section {
                padding-top: 50px;
            }

            .vault-title {
                font-size: 50px;
                letter-spacing: -1px;
            }

            .vault-subtitle {
                font-size: 16px;
            }

            /* Ẩn các mốc thời gian chi tiết trên mobile để tránh rối mắt */
            .custom-player__marker-p {
                font-size: 10px;
                white-space: normal;
                /* Cho phép xuống dòng */
                max-width: 60px;
            }

            .timestamp__span {
                display: none;
                /* Ẩn số giây trên mobile cho gọn */
            }

            /* Điều chỉnh lại Info Grid (Lợi ích) */
            .info-grid {
                padding: 60px 0;
            }

            .info-grid__main-item {
                padding: 30px 0;
                border-right: none;
                /* Bỏ vạch kẻ dọc trên mobile */
                text-align: center;
                align-items: center;
            }

            .info-grid__item-nr {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .vault-title {
                font-size: 40px;
            }

            .custom-player__toggle-playpause {
                top: 2rem;
                font-size: 10px;
            }

            .custom-player__time {
                top: 2rem;
                font-size: 11px;
            }

            /* Trên điện thoại cực nhỏ, chỉ hiện vạch, ẩn chữ marker để tránh đè nhau */
            .custom-player__marker-p {
                display: none;
            }

            .marker-line {
                height: 20px;
                top: -25px;
            }
        }

        .marquee-wrapper {
            overflow: hidden;
            width: 100%;
            display: flex;
        }

        .marquee-content {
            display: flex;
            gap: 60px;
            /* Khoảng cách giữa các logo */
            align-items: center;
            white-space: nowrap;
        }

        .marquee-content .item {
            flex-shrink: 0;
        }

        .marquee-content img {
            height: 50px;
            /* Chỉnh độ cao logo đồng nhất */
            width: auto;
            filter: grayscale(100%);
            opacity: 0.6;
            transition: 0.3s;
        }

        .marquee-content img:hover {
            filter: grayscale(0%);
            opacity: 1;
        }

        /* ----------------------Phần 12------------------------  */
        /* --- FAQ Section --- */
        .faq {
            padding: 100px 0;
            background-color: #fff;
            color: #333;
            font-family: 'Montserrat', sans-serif;
        }

        .faq__title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }

        .faq__title .h-ml {
            font-size: 52px;
            font-weight: 800;
            line-height: 1.1;
            color: #333;
        }

        /* Scribble Decor */
        .faq__title-scribble {
            position: absolute;
            right: 0%;
            top: -20px;
            color: #f84131;
            /* Màu vàng Sota */
        }

        .faq__title-scribble .scribble {
            font-family: 'Courier New', Courier, monospace;
            font-size: 16px;
            font-style: italic;
            margin-bottom: 5px;
            font-weight: 700;
            color: #f84131;
        }

        .faq__title-scribble-arrow {
            width: 40px;
            transform: rotate(-10deg);
        }

        /* Accordion List */
        .faq__list {
            max-width: 900px;
            margin: 0 auto;
            border-bottom: 1px solid #eee;
        }

        .faq__item {
            border-top: 1px solid #eee;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .faq__item.is-active {
            background-color: #f9f9f9;
            /* Làm nổi bật mục đang mở */
        }

        .faq__item-top {
            padding: 30px 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        .faq__item-top h3 {
            font-size: 18px;
            font-weight: 700;
            margin: 0;
            transition: color 0.3s;
        }

        .faq__item-icon {
            width: 14px;
            height: 14px;
            transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            color: #0066cc;
        }

        .faq__item-icon svg {
            width: 100%;
        }

        /* Content Area */
        .faq__item-bottom {
            display: grid;
            grid-template-rows: 0fr;
            /* Mặc định ẩn hoàn toàn */
            transition: grid-template-rows 0.5s cubic-bezier(0.16, 1, 0.3, 1);
            overflow: hidden;
        }

        .faq__item-bottom-content {
            padding: 0 10px 30px 10px;
            color: #666;
            line-height: 1.8;
            font-size: 16px;
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        .faq__item.is-active .faq__item-bottom-content {
            opacity: 1;
            transform: translateY(0);
            transition-delay: 0.1s;
            /* Chờ khung mở ra rồi mới hiện chữ */
        }

        /* Active State */
        .faq__item.is-active .faq__item-top h3 {
            color: #0066cc;
        }

        .faq__item.is-active .faq__item-icon {
            transform: rotate(45deg);
            /* Xoay thành dấu X */
        }

        .faq__item.is-active .faq__item-bottom {
            grid-template-rows: 1fr;
            /* Mở rộng theo kích thước nội dung bên trong */
        }

        .faq__item-bottom-wrap {
            min-height: 0;
            /* Bắt buộc phải có để Grid animation hoạt động */
        }

        /* Mobile Responsive */
        @media (max-width: 767px) {
            .faq__title .h-ml {
                font-size: 32px;
            }

            .faq__title-scribble {
                display: none;
            }

            .faq {
                padding: 60px 0;
            }
        }

        /* --------------------------- Phần 9 -------------------  */
        .process-section {
            padding: 100px 0;
        }

        /* .container { max-width: 1100px; margin: 0 auto; padding: 0 20px; } */
        .header-title {
            text-align: center;
            color: var(--sota-blue);
            font-weight: 700;
            text-transform: uppercase;
        }

        .timeline-wrapper {
            position: relative;
        }

        /* SVG Line - Phần quan trọng nhất để nét liền đè nét đứt */
        .svg-connector {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }

        /* Đường nét đứt xám cố định bên dưới */
        #path-bg {
            stroke: var(--bg-gray);
            stroke-width: 2;
            fill: none;
            stroke-dasharray: 8 8;
        }

        /* Đường nét liền xanh chạy đè lên trên */
        #path-active {
            stroke: var(--sota-blue);
            stroke-width: 3;
            fill: none;
            stroke-linecap: round;
            /* Animation mượt khi cuộn 2 chiều */
            transition: stroke-dashoffset 0.2s ease-out;
        }

        /* Các khối nội dung */
        .timeline-item {
            width: 100%;
            display: flex;
            margin-bottom: 120px;
            position: relative;
            z-index: 2;
            /* Trạng thái mặc định: Ẩn */
            opacity: 0;
            transform: scale(0.9) translateY(40px);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        /* Trạng thái khi đường kẻ đi qua: Hiện */
        .timeline-item.is-visible {
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        .timeline-item:nth-child(odd) {
            justify-content: flex-start;
        }

        .timeline-item:nth-child(even) {
            justify-content: flex-end;
        }

        .content-card {
            width: 42%;
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border-top: 4px solid #eee;
            transition: border-color 0.5s ease;
        }

        .timeline-item.is-visible .content-card {
            border-top-color: var(--sota-blue);
        }

        .step-label {
            font-weight: bold;
            color: var(--sota-blue);
            font-size: 13px;
            display: block;
            margin-bottom: 8px;
        }

        h3 {
            margin: 0 0 12px 0;
            font-size: 19px;
            color: #222;
        }

        p {
            color: #555;
            font-size: 14.2px;
            line-height: 1.6;
            margin: 0;
        }

        @media (max-width: 768px) {
            .content-card {
                width: 90%;
                margin: 0 auto;
            }

            .svg-connector {
                display: none;
            }

            .timeline-item {
                opacity: 1;
                transform: none;
            }
        }

        /* --------------------------- phần 4 ---------------------  */
        /* Container chính thay thế cho body */
        .osmo-integration-section {
            background-color: #201D1D;
            /* Màu nền tối sâu */
            color: #ffffff;
            padding: 80px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 500px;
            position: relative;
        }

        .osmo-container {
            display: flex;
            width: 100%;
            max-width: 1350px;
            position: relative;
        }

        /* Chia cột */
        .osmo-col {
            flex: 1;
            padding: 40px 70px 0 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: left;
        }

        /* Đường kẻ dọc phân chia */
        .osmo-left {
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Vòng tròn ở giữa */
        .osmo-divider {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 44px;
            height: 44px;
            background: #111;
            border: 1px solid #333;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
            color: #666;
            font-size: 14px;
            font-weight: bold;
        }

        /* Nội dung văn bản */
        .osmo-content h2 {
            font-size: 42px;
            font-weight: 500;
            margin: 24px 0;
            letter-spacing: -1px;
        }

        .osmo-content p {
            color: #888;
            line-height: 1.5;
            max-width: 100%;
            margin: 0;
            font-size: 17px;
        }

        /* Xử lý Logo */
        .osmo-logo-main {
            height: 32px;
        }

        .osmo-logo-group {
            display: flex;
            gap: 20px;
            align-items: center;
            height: 32px;
            /* Giữ độ cao cố định để cân bằng với bên trái */
        }

        .osmo-logo-group img {
            height: 20px;
            opacity: 0.7;
            filter: grayscale(1) brightness(2);
            /* Làm logo sáng lên và tiệp màu trắng */
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .osmo-container {
                flex-direction: column;
            }

            .osmo-left {
                border-right: none;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .osmo-divider {
                /* Ẩn hoặc điều chỉnh vị trí nếu cần trên mobile */
            }
        }
        /* --- PHẦN CSS BỔ SUNG CHO RESPONSIVE --- */

@media (max-width: 991px) {
    /* Chuyển từ hàng ngang sang hàng dọc */
    .osmo-container {
        flex-direction: column;
        align-items: center;
    }

    /* Bỏ đường kẻ dọc bên phải, thêm đường kẻ ngang bên dưới để ngăn cách */
    .osmo-left {
        border-right: none;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 0 0 60px 0; /* Tạo khoảng trống để đặt nút "or" */
        margin-bottom: 40px;
    }

    .osmo-col {
        width: 100%;
        padding-right: 0 !important; /* Ghi đè padding cũ của bạn */
    }

    /* Đưa nút "or" về vị trí giữa đường kẻ ngang */
    .osmo-divider {
        left: 50%;
        top: 50%; /* Vị trí này sẽ nằm chính giữa điểm giao nhau của 2 cột */
        transform: translate(-50%, -50%);
    }

    .osmo-content h2 {
        font-size: 32px; /* Giảm kích thước chữ tiêu đề trên mobile */
    }
}

@media (max-width: 479px) {
    .osmo-content h2 {
        font-size: 28px;
    }
    
    .osmo-integration-section {
        padding: 40px 15px; /* Giảm padding ngoài cùng trên điện thoại nhỏ */
    }
}
    </style>
</head>

<body>
    <!-- ----------------------------phần 1 banner -------------------------------->
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

    <!-- ----------------------------phần 2 các hãng -------------------------------->
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
                    <div class="marquee-wrapper">
                        <div class="marquee-content customer-logos-gsap">
                            <div class="item"><img src="./Dịch vụ total marketing_files/khach-hang-cua-sao-kim-24-uni-president-84450.png" alt="Sota"></div>
                            <div class="item"><img src="./Dịch vụ total marketing_files/logo-8sangbds-7313.png" alt="Sota"></div>
                            <div class="item"><img src="./Dịch vụ total marketing_files/18805163-6921-6122.png" alt="Sota"></div>
                            <div class="item"><img src="./Dịch vụ total marketing_files/khach-hang-cua-sao-kim-32-sonha-88390.png" alt="Sota"></div>
                            <div class="item"><img src="./Dịch vụ total marketing_files/khach-hang-cua-sao-kim-33-tonkin-land-53900.png" alt="Sota"></div>
                            <div class="item"><img src="./Dịch vụ total marketing_files/iconslogo-01-1-5088-66500.png" alt="Sota"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------phần 3 total marketing-------------------------------->

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

    <!-- ----------------------------phần 4 Tại Sao nên Trển Khai digital marketing -------------------------------->
    <section class="osmo-integration-section">
        <div class="osmo-container">

            <div class="osmo-col osmo-left">
                <div class="osmo-content" style = "text-align: center;">
                    <!-- <img src="./Dịch vụ total marketing_files/logo-9949.png" alt="Webflow" class="osmo-logo-main"> -->
                    <h2>Tại sao nên triển khai digital marketing tổng thể?</h2>
                    <p>Hành trình khách hàng trong thời đại digital rất phức tạp, khách hàng có thể tìm hiểu thông tin
                        trên nhiều kênh và ra quyết định mua hàng theo các phương thức khác nhau tại thời điểm khác nhau.
                        Do đó, để Digital Marketing mang lại kết quả rõ ràng, doanh nghiệp cần hoạch định bức tranh tổng thể,
                        triển khai đa kênh đồng bộ, thiết lập dữ liệu thông suốt, kết hợp đa dạng chiến dịch và tối ưu hóa
                        từng phần dựa trên dữ liệu thực tế.</p>
                    <div class="try-vault__button-row">
                        <a data-button-rotate-hover=""
                            class="button w-inline-block" data-size="" data-theme=""
                            href="https://www.osmo.supply/try" data-barba-p="" data-button-rotate=""
                            data-responsive="" data-outseta-type="" data-shape="" style="--y: 3160%;">
                            <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                            <div class="button-label__wrap">
                                <div class="button-label"><span>Tư vấn ngay</span></div>
                                <div aria-hidden="true" class="button-label"><span>tư vấn ngay</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="osmo-divider">
                <span>or</span>
            </div>

            <div class="osmo-col osmo-right" style="margin: 0;padding: 34px;">
                <div class="osmo-content" style ="text-align: center;justify-items: anchor-center;">

                    <h2>Xây Dựng Hệ Thống Digital Marketing</h2>
                    <p>Hỗ trợ doanh nghiệp xây dựng toàn bộ hệ thống Digital Marketing, 
                        kết nối dữ liệu xuyên suốt. Từ website, các kênh social, email marketing 
                        cho tới các hệ thống hỗ trợ quản lý, tự động hóa marketing.</p>
                    <div class="button-row">
                        <a data-button-rotate-hover="" class="button w-inline-block"
                            data-size="" data-theme="" href="https://www.osmo.supply/plans" data-barba-p=""
                            data-button-rotate="" data-responsive="" data-outseta-type="" data-shape="round"
                            style="--y: 3160%;background-color: #8b5cf6 !important;">
                            <div data-wf--button-theme--variant="purple" class="button-bg"></div>
                            <div class="button-label__wrap">
                                <div class="button-label" style=""><span>Tư Vấn ngay</span></div>
                                <div aria-hidden="true" class="button-label" style=""><span>Tư Vấn ngay</span></div>
                            </div>
                        </a><a data-button-rotate-hover="" class="button w-inline-block" data-size=""
                            data-theme="" href="https://www.osmo.supply/faq" data-barba-p=""
                            data-button-rotate="" data-responsive="" data-outseta-type="" data-shape=""
                            style="--y: 1180%;background-color: #3c3c3c !important">
                            <div data-wf--button-theme--variant="neutral-200" class="button-bg"></div>
                            <div class="button-label__wrap">
                                <div class="button-label"><span>Xem Thêm</span></div>
                                <div aria-hidden="true" class="button-label"><span>Xem Thêm</span></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ----------------------------phần 5 Lợi ích sử dụng dịch vụ total marketing-------------------------------->



    <!-- ----------------------------phần 6 Video-------------------------------->

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

    <!-- ----------------------------phần 7 các gói dịch vụ------------------------------->

    <section class="pricing-section" style="background: #0b0b0b; width: 100%; overflow: hidden;padding: 40px;">
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
                                <div data-wf--button-theme--variant="neutral-800" style="top:30px;" class="button-bg"></div><span
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
                                </div>
                            </div>

                            <div class="pricing-card__cta-row">
                                <div class="pricing-card__cta">
                                    <div class="pricing-card__cta-p" id="toggleSotaBenefits_starter">
                                        <ul>
                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">01</div>
                                                <p class="p-m">Xây dựng thương hiệu</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">02</div>
                                                <p class="p-m">Tạo Google Maps</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">03</div>
                                                <p class="p-m">Thiết kế Logo</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">04</div>
                                                <p class="p-m">Thiết kế nhận diện</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">05</div>
                                                <p class="p-m">Website thương hiệu</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">06</div>
                                                <p class="p-m">Nguyên tắc thương hiệu</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">07</div>
                                                <p class="p-m">Thiết Kế Zalo OA</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">08</div>
                                                <p class="p-m">Kế hoạch Social</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">09</div>
                                                <p class="p-m">Kế hoạch Branded SEO</p>
                                            </li>

                                            <li class="pricing-benefit">
                                                <div class="pricing-benefit__tag p-r">10</div>
                                                <p class="p-m">Nghiên cứu 4Cs</p>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="view-more-container">
                                        <button id="btn_starter" class="view-more-btn"
                                            onclick="toggleSotaBenefits_starter()">
                                            <span>Xem thêm</span>
                                        </button>
                                    </div>
                                    <a data-button-rotate-hover="" class="button w-inline-block" data-size="full"
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

                        </div>
                    </div>
                    <div data-pricing-card="solo" class="pricing-card is--purple">
                        <div class="pricing-card__inner">
                            <div data-shape="" data-theme="" class="tag">
                                <div data-wf--button-theme--variant="neutral-800" style="top:30px;" class="button-bg"></div><span
                                    class="eyebrow is--relative">One user</span>
                            </div>
                            <div class="pricing-card__title-row">
                                <h3 class="pricing-card__title">Lifetime</h3>
                                <div class="pricing-card__price-row">
                                    <div class="pricing-card__price">
                                        <p class="">Dành cho doanh nghiệp SMEs & Upper SMEs</p>
                                        <p class="pricing-card__price-h">50 TRIỆU</p>
                                    </div><span class="eyebrow">per month</span>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-card__cta-row">
                            <div class="pricing-card__cta">
                                <div class="pricing-card__cta-p" id="toggleSotaBenefits_Lifetime">
                                    <ul id="sota-benefits-list">
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">01</div>
                                            <p class="p-m">Tạo Google Maps</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">02</div>
                                            <p class="p-m">Thiết kế Zalo OA</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">03</div>
                                            <p class="p-m">Nghiên cứu 4Cs</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">04</div>
                                            <p class="p-m">Chiến lược thương hiệu</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">05</div>
                                            <p class="p-m">Thiết kế Logo</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">06</div>
                                            <p class="p-m">Thiết kế nhận diện</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">07</div>
                                            <p class="p-m">Website thương hiệu</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">08</div>
                                            <p class="p-m">Nguyên tắc thương hiệu</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">09</div>
                                            <p class="p-m">Kế hoạch ra mắt</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">10</div>
                                            <p class="p-m">Kế hoạch Social</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">11</div>
                                            <p class="p-m">Kế hoạch Branded SEO</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">12</div>
                                            <p class="p-m">Quản trị website</p>
                                        </li>
                                        <li class="pricing-benefit">
                                            <div class="pricing-benefit__tag p-r">13</div>
                                            <p class="p-m">Quản trị social</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="view-more-container">
                                    <button id="btn_lifetime" class="view-more-btn"
                                        onclick="toggleSotaBenefits_Lifetime()">
                                        <span>Xem thêm</span>
                                    </button>
                                </div>
                                <a data-button-rotate-hover="" class="button w-inline-block" data-size="full"
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
        <!-- <div class="pricing-home__button-row"><a data-button-rotate-hover="" class="button w-inline-block"
                    data-size="" data-theme="" href="https://www.osmo.supply/plans" data-barba-p=""
                    data-button-rotate="" data-responsive="" data-outseta-type="" data-shape="" style="--y: 3520%;">
                    <div data-wf--button-theme--variant="neutral-200" class="button-bg"></div>
                    <div class="button-label__wrap">
                        <div class="button-label"><span>View full pricing</span></div>
                        <div aria-hidden="true" class="button-label"><span>View full pricing</span></div>
                    </div>
                </a>
            </div> -->
        </div>
    </section>

    <!-- ----------------------------phần 8 các dự án của chúng tôi-------------------------------->

    <section data-theme-section="light" class="product-slider">
        <div class="product-slider__inner">
            <div class="container">
                <div class="product-slider__text-row product-slider__title">
                    <h2 class="h-l">DỰ ÁN TIÊU BIỂU CỦA CHÚNG TÔI</h2>
                </div>

                <div class="osmo-slider-container" id="scope">
                    <div class="osmo-slider-track" id="slider">

                        <div class="product-card">
                            <div class="product-card__bg">
                                <img src="./Dịch vụ total marketing_files/trang-15-2019.png" alt="DỰ ÁN ICONS">
                            </div>
                            <div class="product-card__content">
                                <h3 class="product-card__h">DỰ ÁN ICONS</h3>
                                <p>DỰ ÁN XÂY DỰNG X GÓI TOÀN DIỆN</p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-card__bg">
                                <img src="./Dịch vụ total marketing_files/trang-13-5436.png" alt="DỰ ÁN BORIDE">
                            </div>
                            <div class="product-card__content">
                                <h3 class="product-card__h">DỰ ÁN BORIDE</h3>
                                <p>DỰ ÁN BORIDE - BÌNH DƯƠNG</p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-card__bg">
                                <img src="./Dịch vụ total marketing_files/trang-14-3290.png" alt="DỰ ÁN 1">
                            </div>
                            <div class="product-card__content">
                                <h3 class="product-card__h">DỰ ÁN 1</h3>
                                <p>DỰ ÁN VỀ GIÁO DỤC</p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-card__bg">
                                <img src="./Dịch vụ total marketing_files/trang-16-3572.png" alt="DỰ ÁN 5">
                            </div>
                            <div class="product-card__content">
                                <h3 class="product-card__h">DỰ ÁN 5</h3>
                                <p>DỰ ÁN TRUYỀN THÔNG</p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-card__bg">
                                <img src="./Dịch vụ total marketing_files/trang-17-9735.png" alt="DỰ ÁN 6">
                            </div>
                            <div class="product-card__content">
                                <h3 class="product-card__h">DỰ ÁN 6</h3>
                                <p>DỰ ÁN THƯƠNG HIỆU</p>
                            </div>
                        </div>

                        <div class="product-card">
                            <div class="product-card__bg">
                                <img src="./Dịch vụ total marketing_files/trang-18-7624.png" alt="DỰ ÁN 7">
                            </div>
                            <div class="product-card__content">
                                <h3 class="product-card__h">DỰ ÁN 7</h3>
                                <p>DỰ ÁN MARKETING</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product-slider__fade"></div>
    </section>

    <!-- ----------------------------phần 9 quy trình dịch vụ DIGITAL MARKETING-------------------------------->
    <section class="process-section">
        <div class="container">
            <h2 class="header-title">QUY TRÌNH DỊCH VỤ DIGITAL MARKETING</h2>
            <p style="margin-bottom: 80px !important;text-align: center;font-size: 16px;">
                Chúng tôi áp dụng quy trình cung cấp dịch vụ và thực thi chuyên nghiệp.</p>

            <div class="timeline-wrapper">
                <svg class="svg-connector" id="svg-root">
                    <path id="path-bg"></path>
                    <path id="path-active"></path>
                </svg>

                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 1</span>
                        <h3>TƯ VẤN & HỢP ĐỒNG</h3>
                        <p>Sota tiếp nhận yêu cầu, khám phá và tư vấn chi tiết dịch vụ Digital Marketing tổng thể. Tiến hành lập báo giá, ký kết hợp đồng triển khai.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 2</span>
                        <h3>NGHIÊN CỨU</h3>
                        <p>Nghiên cứu sâu về khách hàng mục tiêu, thương hiệu, lĩnh vực, đối thủ và mô hình kinh doanh làm cơ sở đề xuất giải pháp.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 3</span>
                        <h3>KẾ HOẠCH & CHIẾN LƯỢC</h3>
                        <p>Lên chiến lược Digital Marketing, lập kế hoạch triển khai chi tiết, cụ thể hóa các mục tiêu và tiêu chuẩn đánh giá.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 4</span>
                        <h3>KIẾN TRÚC SỐ</h3>
                        <p>Xây dựng kiến trúc hệ thống Digital Marketing. Minh họa cách hệ thống hỗ trợ chiến lược đạt mục tiêu.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 5</span>
                        <h3>PHÁT TRIỂN</h3>
                        <p>Trực tiếp thiết lập hệ thống: Website, Social, App, CRM... Tích hợp dữ liệu liên thông với hệ thống hiện có.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 6</span>
                        <h3>CHIẾN DỊCH KỸ THUẬT SỐ</h3>
                        <p>Triển khai SEO, Ads, Content Marketing, Email Marketing... theo từng giai đoạn trên các kênh chuyên nghiệp.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 7</span>
                        <h3>TỐI ƯU HÓA</h3>
                        <p>Liên tục theo dõi, thực hiện điều chỉnh các hoạt động để tối ưu hiệu quả chiến dịch.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 8</span>
                        <h3>ĐÀO TẠO & PHÂN PHỐI</h3>
                        <p>Đào tạo đội ngũ vận hành hệ thống. Bàn giao tài liệu dự án và phối hợp tất toán hợp đồng.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="content-card"><span class="step-label">BƯỚC 9</span>
                        <h3>BẢO TRÌ & MỞ RỘNG</h3>
                        <p>Duy trì hệ thống hoạt động ổn định. Tư vấn mở rộng hệ thống đáp ứng nhu cầu phát triển lâu dài.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------phần 10 cảm nhận khách hàng (trống)-------------------------------->


    <!-- ----------------------------phần 11 Kết nối ngay với chúng tôi (trống)-------------------------------->



    <!-- ----------------------------phần 12 các câu hỏi thường gặp-------------------------------->
    <section data-theme-section="light" class="faq">
        <div class="container is--s is--md-m">
            <div class="faq__title">
                <h2 class="h-ml">CÂU HỎI THƯỜNG GẶP?<br> KHI TƯ VẤN TOTAL MARKETING.</h2>
                <div class="faq__title-scribble">
                    <p class="scribble">We even answered<br>without ChatGPT ;)</p><svg
                        xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 32 32" fill="none"
                        class="faq__title-scribble-arrow">
                        <path
                            d="M0.811778 30.9739L0.611728 29.7224L0.0106334 29.3396C1.96759 29.5231 2.9029 26.4814 4.76811 25.7896C5.33095 25.5814 5.42096 26.2381 5.24333 26.4359C5.20055 26.4845 4.51387 26.669 4.09003 27.0674C3.7286 27.4109 1.98139 28.9553 2.2919 29.3524C7.36056 28.8823 12.0132 27.7076 16.4405 25.1506C25.4623 19.9466 30.4543 10.4517 31.3555 0.219667C31.8885 15.3444 19.0876 28.3645 4.24771 29.6991C4.58435 30.5566 7.36811 29.6624 7.17251 31.0187L0.815039 30.9739L0.811778 30.9739Z"
                            fill="currentColor"></path>
                    </svg>
                </div>

            </div>
            <div class="faq__wrap">
                <div data-collection-status="active" data-faq-collection="Vault" class="faq__collection w-dyn-list">
                    <div data-accordion-css-init="" data-accordion-close-siblings="true" role="list"
                        class="faq__list w-dyn-items">
                        <div data-accordion-status="not-active" role="listitem" class="faq__item w-dyn-item">
                            <div data-accordion-toggle="" class="faq__item-top" onclick="toggleFaq(this)">
                                <h3 class="p-l u--fw-medium">Phương pháp triển khai Digital Marketing tổng thể là gì?</h3>
                                <div class="faq__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                                        viewBox="0 0 13 13" fill="none" class="svg">
                                        <path
                                            d="M5.96149 12.0996V6.99217H0.839844V5.20705H5.96149V0.0996094H7.74294V5.20705H12.8398V6.99217H7.74294V12.0996H5.96149Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                            <div class="faq__item-bottom">
                                <div class="faq__item-bottom-wrap">
                                    <div class="faq__item-bottom-content">
                                        <div class="rich-text w-richtext">
                                            <p>Sota triển khai Digital Marketing theo phương pháp Data
                                                Driven (Hướng dữ liệu). Chúng tôi thực hiện Market Research và Digital
                                                Marketing Audit để đánh giá tình hình hiện tại của doanh nghiệp. Dựa trên
                                                kết quả đó, chúng tôi thiết lập chiến lược và kế hoạch digital marketing phù hợp,
                                                tích hợp các công cụ phù hợp như Al Marketing và Automation Marketing để tối ưu hóa
                                                hiệu quả thực thi. Mỗi doanh nghiệp sẽ có chiến lược, cách triển khai và phân bổ tỷ trọng khác nhau..</p>
                                            <!-- <p>You’ll find a mix of functional and creative resources: components,
                                                snippets, effects, and techniques built for designers and developers
                                                who love detail. </p>
                                            <p>Everything comes with clear documentation for both Webflow and
                                                HTML/CSS/JS. We use the best tools available on the web, like GSAP,
                                                so you can easily learn, copy, or adapt them into your own projects.
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-accordion-status="not-active" role="listitem" class="faq__item w-dyn-item">
                            <div data-accordion-toggle="" class="faq__item-top" onclick="toggleFaq(this)">
                                <h3 class="p-l u--fw-medium">Sota tập trung vào những KPIs nào??</h3>
                                <div class="faq__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                                        viewBox="0 0 13 13" fill="none" class="svg">
                                        <path
                                            d="M5.96149 12.0996V6.99217H0.839844V5.20705H5.96149V0.0996094H7.74294V5.20705H12.8398V6.99217H7.74294V12.0996H5.96149Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                            <div class="faq__item-bottom">
                                <div class="faq__item-bottom-wrap">
                                    <div class="faq__item-bottom-content">
                                        <div class="rich-text w-richtext">
                                            <!-- <p>Yes. Anything you already used in shipped projects stays fine to use.
                                                Your Vault access and updates stop when your billing period ends. We
                                                will <em>not</em> lock you into some CDN of ours to keep access!</p> -->
                                            <p>
                                                Chúng tôi sử dụng các công cụ phân tích để theo dõi các KPI quan trọng như:
                                                lượng truy cập, tỷ lệ chuyển đổi, chi phí trên mỗi khách hàng tiềm năng và ROI.
                                                Báo cáo chi tiết sẽ được gửi định kỳ để bạn có cái nhìn tổng quan về hiệu quả của
                                                chiến dịch. Tùy theo từng nhu cầu cụ thể, chúng tôi có thể đặt mục tiêu, thiết lập
                                                để tối ưu hóa các chỉ số liên quan để đạt mục tiêu đó.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-accordion-status="not-active" role="listitem" class="faq__item w-dyn-item">
                            <div data-accordion-toggle="" class="faq__item-top" onclick="toggleFaq(this)">
                                <h3 class="p-l u--fw-medium">Điểm khác biệt của Sota là gì?</h3>
                                <div class="faq__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                                        viewBox="0 0 13 13" fill="none" class="svg">
                                        <path
                                            d="M5.96149 12.0996V6.99217H0.839844V5.20705H5.96149V0.0996094H7.74294V5.20705H12.8398V6.99217H7.74294V12.0996H5.96149Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                            <div class="faq__item-bottom">
                                <div class="faq__item-bottom-wrap">
                                    <div class="faq__item-bottom-content">
                                        <div class="rich-text w-richtext">
                                            <p>
                                                Điểm mạnh của chúng tôi là cung cấp dịch vụ digital marketing
                                                tổng thể với quy trình khoa học và minh bạch. Chúng tôi tích cực
                                                trong việc ứng dụng công nghệ (đặc biệt là Al) và Automation để Scale Marketing.
                                                Điều quan trọng, dịch vụ digital marketing được vận hành bởi đội ngũ chuyên gia giàu kinh nghiệm.
                                                Chúng tôi cam kết mang lại giá trị thực sự và giải pháp tùy chỉnh cho từng doanh nghiệp.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-accordion-status="not-active" role="listitem" class="faq__item w-dyn-item">
                            <div data-accordion-toggle="" class="faq__item-top" onclick="toggleFaq(this)">
                                <h3 class="p-l u--fw-medium">Sử dụng Al và Automation vào Digital Marketing thế nào?</h3>
                                <div class="faq__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                                        viewBox="0 0 13 13" fill="none" class="svg">
                                        <path
                                            d="M5.96149 12.0996V6.99217H0.839844V5.20705H5.96149V0.0996094H7.74294V5.20705H12.8398V6.99217H7.74294V12.0996H5.96149Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                            <div class="faq__item-bottom">
                                <div class="faq__item-bottom-wrap">
                                    <div class="faq__item-bottom-content">
                                        <div class="rich-text w-richtext">
                                            <p>
                                                Chúng tôi sử dụng Al để hỗ trợ ra chuyên gia digital marketing
                                                của chúng tôi ra quyết định trong rất nhiều khía cạnh.
                                                (Quyết định cuối cùng được đảm bảo bởi chuyên gia là con người).
                                                Trong đó, chúng tôi sử dụng Al để hỗ trợ phân tích dữ liệu,
                                                dự đoán xu hướng và tối ưu hóa chiến dịch. Automation Marketing (tích hợp Al) giúp tự động hóa
                                                thông minh các hoạt động marketing, tiết kiệm thời gian và tăng hiệu quả tương tác với khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-accordion-status="not-active" role="listitem" class="faq__item w-dyn-item">
                            <div data-accordion-toggle="" class="faq__item-top" onclick="toggleFaq(this)">
                                <h3 class="p-l u--fw-medium">Chi phí dịch vụ Digital Marketing tổng thể như thế nào?</h3>
                                <div class="faq__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                                        viewBox="0 0 13 13" fill="none" class="svg">
                                        <path
                                            d="M5.96149 12.0996V6.99217H0.839844V5.20705H5.96149V0.0996094H7.74294V5.20705H12.8398V6.99217H7.74294V12.0996H5.96149Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                            <div class="faq__item-bottom">
                                <div class="faq__item-bottom-wrap">
                                    <div class="faq__item-bottom-content">
                                        <div class="rich-text w-richtext">
                                            <p>
                                                Chúng tôi cung cấp các gói dịch vụ linh hoạt, có thể điều chỉnh theo ngân sách
                                                và mục tiêu cụ thể của bạn. Chi phí dịch vụ Digital Marketing của Sota được xây dựng
                                                dựa trên tiêu chuẩn chung của ngành, đảm bảo cạnh tranh và phù hợp với nhu cầu của doanh nghiệp.
                                                Sota sẵn sàng thảo luận chi tiết để đưa ra gói giải pháp phù hợp nhất cho doanh nghiệp.
                                                Vui lòng liên hệ để được tư vấn chi tiết.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-accordion-status="not-active" role="listitem" class="faq__item w-dyn-item">
                            <div data-accordion-toggle="" class="faq__item-top" onclick="toggleFaq(this)">
                                <h3 class="p-l u--fw-medium">Sota có nhận các dịch vụ riêng lẻ về Digital Marketing không?</h3>
                                <div class="faq__item-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%"
                                        viewBox="0 0 13 13" fill="none" class="svg">
                                        <path
                                            d="M5.96149 12.0996V6.99217H0.839844V5.20705H5.96149V0.0996094H7.74294V5.20705H12.8398V6.99217H7.74294V12.0996H5.96149Z"
                                            fill="currentColor"></path>
                                    </svg></div>
                            </div>
                            <div class="faq__item-bottom">
                                <div class="faq__item-bottom-wrap">
                                    <div class="faq__item-bottom-content">
                                        <div class="rich-text w-richtext">
                                            <p>
                                                Có. Sota có cung cấp các dịch vụ nhỏ bên trong dịch vụ Digital Marketing tổng thể.
                                                Các gói dịch vụ Digital Marketing phổ biến được khách hàng lựa chọn như:
                                                Gói nghiên cứu thị trường Gói tư vấn chiến lược, lập kế hoạch Digital Marketing
                                                Gói thiết kế website Gói phát triển hệ thống Digital Gói Branded SEO Gói Social Marketing
                                                Gói Digital Ads Gói Content Marketing Gói Email Marketing Gói Automationg Marketing
                                                Ngay cả khi doanh nghiệp sử dụng các dịch vụ riêng lẻ, Sota cũng luôn tiếp cận bài toán
                                                với bức tranh tổng thể, giúp doanh nghiệp hiểu cách làm Digital Marketing hiệu quả. Sau đó,
                                                chúng tôi đề xuất các hạng mục phù hợp nhất, cùng với doanh nghiệp thống nhất và lựa chọn triển khai.
                                                Đảm bảo đáp ứng mục tiêu, tính khả thi và luôn trong phạm vi ngân sách.
                                                Vui lòng liên hệ ngay để được tư vấn và báo giá chi tiết.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </section>
    <?php
    include "footer.html";
    ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Draggable.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/InertiaPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrambleTextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

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

            const cardsSolo = document.querySelectorAll('[data-pricing-card="solo"]');
            const cardTeam = document.querySelector('[data-pricing-card="team"]');

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
                // 2. Hiệu ứng chuyển Card mượt mà bằng GSAP
                if (isTeam) {
                    // Ẩn Solo, hiện Team
                    gsap.to(cardsSolo, {
                        opacity: 0,
                        y: 20,
                        duration: 0.3,
                        onComplete: () => {
                            cardsSolo.forEach(el => el.style.display = 'none');
                            cardTeam.style.display = 'flex';
                            gsap.fromTo(cardTeam, {
                                opacity: 0,
                                y: 20
                            }, {
                                opacity: 1,
                                y: 0,
                                duration: 0.5
                            });
                        }
                    });
                } else {
                    // Ẩn Team, hiện Solo
                    gsap.to(cardTeam, {
                        opacity: 0,
                        y: 20,
                        duration: 0.3,
                        onComplete: () => {
                            cardTeam.style.display = 'none';
                            cardsSolo.forEach(el => el.style.display = 'flex');
                            gsap.fromTo(cardsSolo, {
                                opacity: 0,
                                y: 20
                            }, {
                                opacity: 1,
                                y: 0,
                                duration: 0.5,
                                stagger: 0.1
                            });
                        }
                    });
                }
            }

            // Gán sự kiện click
            if (btnSolo) btnSolo.addEventListener('click', () => updatePricingUI(false));
            if (btnTeam) btnTeam.addEventListener('click', () => updatePricingUI(true));
            if (triggerSolo) triggerSolo.addEventListener('click', () => updatePricingUI(false));
            if (triggerTeam) triggerTeam.addEventListener('click', () => updatePricingUI(true));
            // Khởi tạo mặc định
            cardTeam.style.display = 'none';
        });

        // Hàm dùng chung để tối ưu code
        function toggleBenefit(containerId, btnId) {
            const container = document.getElementById(containerId);
            const btn = document.getElementById(btnId);
            const btnSpan = btn.querySelector('span');

            if (container.classList.contains('is--expanded')) {
                container.classList.remove('is--expanded');
                btnSpan.innerText = "Xem thêm";
                container.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest'
                });
            } else {
                container.classList.add('is--expanded');
                btnSpan.innerText = "Thu gọn";
            }
        }

        // Gán sự kiện cho từng nút
        function toggleSotaBenefits_starter() {
            toggleBenefit('toggleSotaBenefits_starter', 'btn_starter');
        }

        function toggleSotaBenefits_Lifetime() {
            toggleBenefit('toggleSotaBenefits_Lifetime', 'btn_lifetime');
        }

        function toggleSotaBenefits() { // Cho gói Enterprise
            toggleBenefit('sota-benefits-container', 'toggle-benefits-btn');
        }
    </script>
    <script>
        gsap.registerPlugin(Draggable);

        const slider = document.getElementById("slider");
        const scope = document.getElementById("scope");

        // 1. Cấu hình Autoplay
        let playSpeed = 1; // Tốc độ chạy (số càng lớn chạy càng nhanh)
        let loop;

        function startAutoplay() {
            // Tính toán khoảng cách tối đa có thể kéo (chiều dài dải ảnh - chiều dài khung nhìn)
            const maxScroll = -(slider.offsetWidth - scope.offsetWidth);

            loop = gsap.to("#slider", {
                x: maxScroll,
                duration: Math.abs(maxScroll) / (50 * playSpeed), // Tính toán thời gian dựa trên độ dài
                ease: "none",
                repeat: -1, // Lặp lại vô hạn
                modifiers: {
                    x: gsap.utils.unitize(value => parseFloat(value) % maxScroll) // Giúp lặp lại mượt mà
                }
            });
        }

        // 2. Cấu hình Draggable (Kéo chuột)
        const dragInstance = Draggable.create("#slider", {
            type: "x",
            bounds: scope,
            inertia: true,
            edgeResistance: 0.5,
            onPress: function() {
                // Tạm dừng autoplay khi người dùng nhấn chuột vào
                loop.pause();
                gsap.to(".product-card", {
                    scale: 0.97,
                    duration: 0.3
                });
            },
            onDragEnd: function() {
                gsap.to(".product-card", {
                    scale: 1,
                    duration: 0.3
                });
                // Sau khi thả chuột 1 giây, tự động chạy lại
                gsap.delayedCall(1, () => {
                    // Cập nhật lại vị trí hiện tại cho loop để tránh bị nhảy ảnh
                    loop.invalidate().restart();
                });
            },
            snap: {
                x: function(endValue) {
                    const cardWidth = document.querySelector('.product-card').offsetWidth + 30;
                    return Math.round(endValue / cardWidth) * cardWidth;
                }
            }
        });

        // Chạy autoplay ngay khi tải trang
        startAutoplay();
        // Nhớ thêm thư viện ScrollTrigger
        // --- HIỆU ỨNG CHỮ CHẠY (SCRAMBLE TEXT) MIỄN PHÍ ---
        function scrambleEffect(element, newText, duration = 4.5) {
            const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789#$@&*%";
            const originalText = newText;
            let iteration = 0;

            const interval = setInterval(() => {
                element.innerText = originalText
                    .split("")
                    .map((letter, index) => {
                        if (index < iteration) {
                            return originalText[index];
                        }
                        return chars[Math.floor(Math.random() * chars.length)];
                    })
                    .join("");

                if (iteration >= originalText.length) {
                    clearInterval(interval);
                }

                iteration += originalText.length / (duration * 10);
            }, 30);
        }

        // --- KÍCH HOẠT KHI CUỘN TỚI (SCROLLTRIGGER) ---
        gsap.registerPlugin(ScrollTrigger);

        const title = document.querySelector(".product-slider__title .h-l");
        const textContent = "DỰ ÁN TIÊU BIỂU CỦA CHÚNG TÔI";

        ScrollTrigger.create({
            trigger: ".product-slider__title",
            start: "top 85%",
            onEnter: () => scrambleEffect(title, textContent),
            once: true // Chỉ chạy 1 lần khi cuộn tới
        });
        $(document).ready(function() {
            const marquee = document.querySelector('.customer-logos-gsap');

            // Nhân bản nội dung để tạo hiệu ứng lặp vô tận
            const content = marquee.innerHTML;
            marquee.innerHTML += content + content; // Nhân 3 để dải lụa đủ dài

            const totalWidth = marquee.scrollWidth / 3;

            gsap.to(".customer-logos-gsap", {
                x: -totalWidth,
                duration: 6, // Tốc độ chạy (giảm số này nếu muốn chạy nhanh hơn)
                ease: "none",
                repeat: -1,
                modifiers: {
                    x: gsap.utils.unitize(x => parseFloat(x) % totalWidth)
                }
            });
        });

        function toggleFaq(element) {
            // 1. Tìm phần tử cha .faq__item gần nhất
            const currentItem = element.closest('.faq__item');

            // 2. Kiểm tra xem nó có đang mở không
            const isActive = currentItem.classList.contains('is-active');

            // 3. (Tùy chọn) Đóng tất cả các mục khác nếu muốn hiệu ứng Accordion một mục
            document.querySelectorAll('.faq__item').forEach(item => {
                if (item !== currentItem) {
                    item.classList.remove('is-active');
                }
            });

            // 4. Toggle class cho mục hiện tại
            if (isActive) {
                currentItem.classList.remove('is-active');
            } else {
                currentItem.classList.add('is-active');
            }
        }
    </script>
    <!-- ----------------------- Phần 9 ----------------  -->
    <script>
        const svg = document.getElementById('svg-root');
        const bgPath = document.getElementById('path-bg');
        const activePath = document.getElementById('path-active');
        const items = document.querySelectorAll('.timeline-item');

        // Hàm vẽ đường uốn lượn khớp với các card
        function drawPath() {
            const containerRect = svg.parentElement.getBoundingClientRect();
            const midX = svg.clientWidth / 2;
            let d = "";

            items.forEach((item, index) => {
                const rect = item.getBoundingClientRect();
                const y = (rect.top + rect.height / 2) - containerRect.top;

                if (index === 0) {
                    d += `M ${midX} 0 L ${midX} ${y}`;
                } else {
                    const prevY = (items[index - 1].getBoundingClientRect().top + items[index - 1].getBoundingClientRect().height / 2) - containerRect.top;
                    const cpY = (prevY + y) / 2;
                    const curveX = index % 2 === 0 ? midX - 120 : midX + 120; // Hướng uốn ngược nhau
                    d += ` Q ${curveX} ${cpY} ${midX} ${y}`;
                }
            });

            bgPath.setAttribute('d', d);
            activePath.setAttribute('d', d);

            // Thiết lập dash để animation nét liền vẽ ra
            const length = activePath.getTotalLength();
            activePath.style.strokeDasharray = length;
            activePath.style.strokeDashoffset = length;
        }

        // Xử lý logic 2 chiều khi cuộn
        function handleScrollLogic() {
            const length = activePath.getTotalLength();
            // Điểm quét (Trigger) nằm ở khoảng 65% màn hình
            const scrollPoint = window.scrollY + window.innerHeight * 0.65;
            const containerTop = svg.parentElement.offsetTop;
            const containerHeight = svg.parentElement.offsetHeight;

            // Tiến trình vẽ đường màu xanh
            let progress = (scrollPoint - containerTop) / containerHeight;
            progress = Math.max(0, Math.min(1, progress));
            activePath.style.strokeDashoffset = length - (length * progress);

            // Kiểm tra từng Card: Vượt qua điểm quét thì Hiện, Ngược lại thì Ẩn
            items.forEach(item => {
                const itemMid = item.getBoundingClientRect().top + window.scrollY + (item.offsetHeight / 2);

                if (scrollPoint > itemMid) {
                    item.classList.add('is-visible');
                } else {
                    item.classList.remove('is-visible');
                }
            });
        }

        window.addEventListener('load', () => {
            drawPath();
            handleScrollLogic();
        });
        window.addEventListener('scroll', handleScrollLogic);
        window.addEventListener('resize', drawPath);
    </script>
</body>

</html>