<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "form2");
    if (isset($_POST['dangky'])) {
        $email = "";
        $matkhau = "";
        $xacnhanmk = "";
        $ten = "";
        $hovatendem = "";
        $gioitinh = "";
        $tentruong = "";
        $chuyennganh = "";
        $thang = "";
        $nam = "";
        $diemtb = "";
        $nganhhoc = "";
        $quocgia = "";
        $tinh_tp = "";
        $vitri = "";

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['matkhau'])) {
            $matkhau = $_POST['matkhau'];
        }
        if (isset($_POST['xacnhanmk'])) {
            $xacnhanmk = $_POST['xacnhanmk'];
        }
        if (isset($_POST['ten'])) {
            $ten = $_POST['ten'];
        }
        if (isset($_POST['hovatendem'])) {
            $hovatendem = $_POST['hovatendem'];
        }
        if (isset($_POST['gioitinh'])) {
            $gioitinh = $_POST['gioitinh'];
        }
        if (isset($_POST['tentruong'])) {
            $tentruong = $_POST['tentruong'];
        }
        if (isset($_POST['chuyennganh'])) {
            $chuyennganh = $_POST['chuyennganh'];
        }
        if (isset($_POST['thang'])) {
            $thang = $_POST['thang'];
        }
        if (isset($_POST['nam'])) {
            $nam  = $_POST['nam'];
        }
        $namtotnghiep = $thang . "/" . $nam;
        if (isset($_POST['diemtb'])) {
            $diemtb = $_POST['diemtb'];
        }
        if (isset($_POST['nganhhoc'])) {
            $nganhhoc = $_POST['nganhhoc'];
        }
        if (isset($_POST['quocgia'])) {
            $quocgia = $_POST['quocgia'];
        }
        if (isset($_POST['tinh_tp'])) {
            $tinh_tp = $_POST['tinh_tp'];
        }
        if (isset($_POST['vitri'])) {
            $vitri = $_POST['vitri'];
        }
        $sql = "INSERT INTO form2( email, matkhau, xacnhanmk, ten, hovatendem, gioitinh, tentruong, chuyennganh, namtotnghiep, diemtb, nganhhoc, quocgia, tinh_tp, vitri) VALUES 
        ('$email',
        '$matkhau',
        '$xacnhanmk',
        '$ten',
        '$hovatendem',
        '$gioitinh',
        '$tentruong',
        '$chuyennganh',
        '$namtotnghiep',
        '$diemtb',
        '$nganhhoc',
        '$quocgia',
        '$tinh_tp',
        '$vitri')";
        $result = mysqli_query($conn,$sql);
    }
    ?>
    <h1 style="text-align:center;">Hãy gia nhập university network của chúng tôi ngay hôm nay </h1>
    <form action="" method="POST">
        <table style="margin-left:600px;">
            <tr>
                <td class="td">email</td>
                <td class="input">
                    <input type="text" name="email" style="width: 250px;"><br>
                    <a href="" style="color:black;">Kiểm tra sự tồn tại của email</a>
                </td>
            </tr>
            <tr>
                <td class="td">mật khẩu</td>
                <td class="input"><input type="text" name="matkhau" style="width: 250px;"></td>
            </tr>
            <tr>
                <td class="td">xác nhận mật khẩu</td>
                <td class="input">
                    <input type="text" name="xacnhanmk" style="width: 250px;"> <br>
                    <input type="checkbox" name="thuctap" value="abc">Bạn đã thực tập hoặc kết thúc kỳ thực tập
                </td>
            </tr>
            <tr>
                <td class="td">Tên</td>
                <td class="input"><input type="text" name="ten" style="width: 250px;"></td>
            </tr>
            <tr>
                <td class="td"> Họ và tên đệm</td>
                <td class="input"><input type="text" name="hovatendem" style="width: 250px;"></td>
            </tr>
            <tr>
                <td class="td">Giới tính</td>
                <td class="input"><input type="radio" name="gioitinh" value="nam">Nam<input type="radio" name="gioitinh" value="nu">Nữ</td>
            </tr>
            <tr>
                <td class="td">Tên trường học:</td>
                <td class="input"><select name="tentruong">
                        <option value="CongNghe">Trường đại học Công Nghệ</option>
                        <option value="BachKhoa">Trường đại học Bách Khoa</option>
                        <option value="XayDung">Trường đại học Xây Dựng</option>
                        <option value="TuNhien">Trường đại học Khoa Học Tự Nhiên</option>
                    </select></td>
            </tr>
            <tr>
                <td class="td">Chuyên ngành đào tạo:</td>
                <td class="input"><select name="chuyennganh">
                        <option value="CNPM">Công nghệ phần mềm</option>
                        <option value="MVTT">Mạng và truyền thông</option>
                        <option value="HTTT">Hệ thống thông tin</option>
                        <option value="KTMT">Kỹ thuật máy tính</option>
                    </select></td>
            </tr>
            <td class="td">Năm tốt nghiệp:</td>
            <td class="input"><select name="thang">
                    <option value="1">Tháng 1 </option>
                    <option value="2">Tháng 2</option>
                    <option value="3">Tháng 3</option>
                    <option value="4">Tháng 4</option>
                    <option value="5">Tháng 5</option>
                    <option value="6">Tháng 6</option>
                    <option value="7">Tháng 7</option>
                    <option value="8">Tháng 8</option>
                    <option value="9">Tháng 9</option>
                    <option value="10">Tháng 10</option>
                    <option value="11">Tháng 11</option>
                    <option value="12">Tháng 12</option>
                </select>
                <select name="nam">
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                </select>
            </td>
            </tr>
            <tr>
                <td class="td">Điểm trung bình:</td>
                <td class="input"><select name="diemtb">
                        <option value="<5">
                            <5</option>
                        <option value="5.1-6.4">5.1-6.4</option>
                        <option value="6.5-6.9">6.5-6.9</option>
                        <option value="7.0-7.9">7.0-7.9</option>
                        <option value="8.0-8.9">8.0-8.9</option>
                        <option value="9.0-10">9.0-10</option>
                    </select></td>
            </tr>
            <tr>
                <td class="td">ngành học:</td>
                <td class="input"><select name="nganhhoc">
                        <option value="CNPM">Công nghệ phần mềm</option>
                        <option value="MVTT">Mạng và truyền thông</option>
                        <option value="HTTT">Hệ thống thông tin</option>
                        <option value="KTMT">Kỹ thuật máy tính</option>
                    </select></td>
            </tr>
            <tr>
                <td class="td">Quốc gia</td>
                <td class="input"><select name="quocgia">
                        <option value="VietNam">Việt Nam</option>
                        <option value="NhatBan">Nhật Bản</option>
                        <option value="HanQuoc">Hàn Quốc</option>
                        <option value="TrungQuoc">Trung Quốc</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="td">Tỉnh/Thành phố:</td>
                <td class="input"><select name="tinh_tp">
                        <option value="HaNoi">Hà Nội</option>
                        <option value="HoChiMinh">TP. Hồ Chí Minh</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="td">Vị trí mong muốn</td>
                <td class="input"><input type="text" name="vitri" tyle="width: 250px;"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" name="dangky" value="Đăng ký ngay"></td>
            </tr>
        </table>
    </form>
    <style>
        .td {
            width: 150px;
            text-align: left;
        }

        .input {
            height: 50px;
        }
    </style>
</body>

</html>