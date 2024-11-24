
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f4;
        }

        /* Header */
        .header {
            background-color: #FF0000;
            padding: 10px 0;
        }

        .top-header {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            padding: 0 15px;
        }

        .logo img {
            height: 40px;
            margin-right: 20px;
        }

        .search-container {
            flex-grow: 1;
            margin: 0 20px;
            position: relative;
        }

        .search-container input {
            width: 100%;
            padding: 8px 40px 8px 15px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
        }

        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        /* Navigation */
        .main-nav {
            background: #FF0000;
            padding: 10px 0;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .nav-links {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            padding: 0 15px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: bold;
        }

        /* Breadcrumb */
        .breadcrumb {
            max-width: 1200px;
            margin: 10px auto;
            padding: 0 15px;
            font-size: 13px;
        }

        .breadcrumb a {
            color: #333;
            text-decoration: none;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 20px auto;
            display: grid;
            grid-template-columns: 45% 55%;
            gap: 30px;
            padding: 0 15px;
        }

        /* Contact Form */
        .contact-form {
            background: white;
            padding: 20px;
            border-radius: 5px;
        }

        .contact-form h2 {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        .form-group select,
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-group textarea {
            height: 100px;
            resize: none;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background: #FF0000;
            color: white;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Contact Info */
        .contact-info {
            background: white;
            padding: 20px;
            border-radius: 5px;
        }

        .contact-info h2 {
            font-size: 16px;
            margin-bottom: 15px;
            color: #333;
        }

        .contact-info p {
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 1.5;
        }

        .company-info {
            margin-top: 20px;
            background: #f8f8f8;
            padding: 15px;
            border-radius: 4px;
        }

        .company-info h3 {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .map-container {
            margin-top: 20px;
            border-radius: 5px;
            overflow: hidden;
            height: 300px;
        }

        .map-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Required field indicator */
        .required::after {
            content: " *";
            color: red;
        }

        /* Footer */
        .footer {
            background: white;
            margin-top: 40px;
            padding: 30px 0;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            padding: 0 15px;
        }

        .footer-section img {
            max-width: 100px;
            margin-bottom: 15px;
        }

        .contact-hours {
            font-size: 13px;
            color: #666;
            margin-bottom: 10px;
        }

        .hotline {
            color: #FF0000;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="breadcrumb">
        <a href="/">Trang chủ</a> / <span>Liên hệ</span>
    </div>

    <main class="main-content">
        <div class="contact-form">
            <h2>Poly Mobile Xin Hân Hạnh Được Hỗ Trợ Quý Khách</h2>
            <form>
                <div class="form-group">
                    <label>Quý khách đang quan tâm về:</label>
                    <select>
                        <option>Chọn chủ đề</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="required">Tiêu đề</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label class="required">Nội dung</label>
                    <textarea required placeholder="xin quý khách vui lòng mô tả chi tiết"></textarea>
                </div>
                <div class="form-group">
                    <label class="required">Họ và tên</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label class="required">Địa chỉ email</label>
                    <input type="email" required>
                </div>
                <div class="form-group">
                    <label class="required">Số điện thoại</label>
                    <input type="tel" required>
                </div>
                <button type="submit" class="submit-btn">GỬI LIÊN HỆ</button>
            </form>
        </div>

        <div class="contact-info">
            <h2>Thông Tin Liên Hệ Khác</h2>
            <p>Tìm siêu thị Thế Giới Di Động? Xin mời ghé thăm trang Tìm siêu thị để xem bản đồ và địa chỉ các siêu thị trên toàn quốc</p>
            <p>Báo chí, hợp tác: liên hệ vunguyentuan632@gmail.com</p>
            <p>Tổng đài tư vấn, hỗ trợ khách hàng (8:00 - 21:30): 0868647863</p>
            <p>Tổng đài khiếu nại (8:00 - 21:30): 000001234</p>
            <p>Email: vunguyentuan632@gmail.com</p>

            <div class="company-info">
                <h3>Công Ty Cổ Phần Poly Mobile</h3>
                <p>
                    Trụ sở: MWGT - Lô T2-1.2, Đường D1, Khu Công Nghệ Cao, P.Tân Phú, Quận 9, TP.HCM<br>
                    Chi nhánh: Hùng Vương Plaza Tầng 8, 126 Hùng Vương, Quận 5, TP.HCM<br>
                    Điện thoại: 0868647863<br>
                    Fax: 0868647863
                </p>
            </div>

            <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5372442454986!2d106.66924727480483!3d10.770102889378299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fb356df4801%3A0xce56ded985d3fe45!2zRGkgxJDhu5luZyBN4bu5!5e0!3m2!1svi!2s!4v1732200951385!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>
</body>
</html>