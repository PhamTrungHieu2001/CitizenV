<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khai báo</title>
</head>

<body>
    <center>
            <form action="results.php" method="post">
                <div id="" class="row">
                    <label for="">Số CCCD/CMND:</label>
                    <input type="number" name="cccd" required value="1">
                </div>
                <div id="" class="row">
                    <label for="">Họ tên:</label>
                    <input type="text" class="" name="hoten" required value="Nguyễn Văn A">
                </div>
                <div id="" class="row">
                    <label for="">Ngày sinh:</label>
                    <input type="date" class="" placeholder="dd/mm/yyyy" name="ngaysinh" required>
                </div>
                <div id="" class="row">
                    <label for="">Giới tính:</label>
                    <input type="radio" class="required radio" name="gioitinh" id="male" value="m"> <span id="kc">Nam</span>
                    <input type="radio" class="required radio" name="gioitinh" id="female" value="f"> <span id="kc">Nữ</span>
                </div>
                <div id="" class="row">
                    <label for="">Quê quán:</label>
                    <select name="quequan" id="">
                        <option>Hà Nội</option>
                        <option>TP HCM</option>
                        <option>Đà Nẵng</option>
                    </select>
                </div>
                <div id="" class="row">
                    <label for="">Địa chỉ thường trú:</label>
                    <input type="text" name="diachithuongtru" required value="Quận Cầu Giấy">
                </div>
                <div id="" class="row">
                    <label for="">Địa chỉ tạm trú:</label>
                    <input type="text" name="diachitamtru" required value="Quận Cầu Giấy">
                </div>
                <div id="" class="row">
                    <label for="">Tôn giáo:</label>
                    <input type="text" name="tongiao" required value="Không">
                </div>
                <div id="" class="row">
                    <label for="">Trình độ văn hóa:</label>
                    <input type="text" name="vanhoa" required value="12/12">
                </div>
                <div id="" class="row">
                    <label for="">Nghề nghiệp:</label>
                    <input type="text" name="nghenghiep" required value="sinh viên">
                </div>
                <div id="buttons-div" class="row">
                    <label for=""></label>
                    <button class="btn" type="submit">Chấp nhận</button>
                    <button class="btn" type="reset">Xóa</button>
                </div>
            </form>
        </center>
</body>

</html>