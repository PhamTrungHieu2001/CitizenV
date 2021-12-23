<!DOCTYPE html>
<html>
    <head>
        <title>Tổng hợp</title>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require_once 'form_process.php'; ?>

        <?php if(isset($_SESSION['message'])): ?>

        <div class="alert alert-<?=$_SESSION['msg_type']?>">
        <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
        </div>
        <?php endif ?>
        <div class="container">
        <?php 
            $mysqli = new mysqli('localhost', 'root', '', 'citizenv') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM form_results") or die($mysqli->error);
        ?>
        <h1><a href="http://127.0.0.1:5500/home.html">Citizen V</a></h1>
        <!--Show dữ liệu-->
        <div class="justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>CCCD</th>
                        <th>Họ tên</th>
                        <th>Ngày sinh</th>
                        <th>Giới tính</th>
                        <th>Quê quán</th>
                        <th>Địa chỉ thường trú</th>
                        <th>Địa chỉ tạm trú</th>
                        <th>Tôn giáo</th>
                        <th>Văn hóa</th>
                        <th>Nghề nghiệp</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php 
                    while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['cccd'];?></td>
                        <td><?php echo $row['hoten'];?></td>
                        <td><?php echo $row['ngaysinh'];?></td>
                        <td><?php echo $row['gioitinh'];?></td>
                        <td><?php echo $row['quequan'];?></td>
                        <td><?php echo $row['diachithuongtru'];?></td>
                        <td><?php echo $row['diachitamtru'];?></td>
                        <td><?php echo $row['tongiao'];?></td>
                        <td><?php echo $row['vanhoa'];?></td>
                        <td><?php echo $row['nghenghiep'];?></td>
                        <td>
                            <a href="tonghop.php?edit=<?php echo $row['cccd']; ?>"
                            class="btn btn-info">Edit</a>
                            <a href="form_process.php?delete=<?php echo $row['cccd']; ?>"
                            class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>
        <!--Khai báo thông tin-->
        <div class="row justify-content-center">
            <form action="form_process.php" method="post">
                <div id="" class="form-group">
                    <label for="">Số CCCD/CMND:</label>
                    <input type="number" class="form-control" name="cccd" required value="<?php echo $cccd; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Họ tên:</label>
                    <input type="text" class="form-control" name="hoten" required value="<?php echo $hoten; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Ngày sinh:</label>
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" name="ngaysinh" required value="<?php echo $ngaysinh; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Giới tính:</label>
                    <input type="radio" class="form-control" name="gioitinh" id="male" value="m"> <span id="kc">Nam</span>
                    <input type="radio" class="form-control" name="gioitinh" id="female" value="f"> <span id="kc">Nữ</span>
                </div>
                <div id="" class="form-group">
                    <label for="">Quê quán:</label>
                    <select name="quequan" id="" class="form-control">
                        <option>Hà Nội</option>
                        <option>TP HCM</option>
                        <option>Đà Nẵng</option>
                    </select>
                </div>
                <div id="" class="form-group">
                    <label for="">Địa chỉ thường trú:</label>
                    <input type="text" class="form-control" name="diachithuongtru" required value="<?php echo $diachithuongtru; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Địa chỉ tạm trú:</label>
                    <input type="text" class="form-control" name="diachitamtru" required value="<?php echo $diachitamtru; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Tôn giáo:</label>
                    <input type="text" class="form-control" name="tongiao" required value="<?php echo $tongiao; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Trình độ văn hóa:</label>
                    <input type="text" class="form-control" name="vanhoa" required value="<?php echo $vanhoa; ?>">
                </div>
                <div id="" class="form-group">
                    <label for="">Nghề nghiệp:</label>
                    <input type="text" class="form-control" name="nghenghiep" required value="<?php echo $nghenghiep; ?>">
                </div>
                <?php if($update == true): ?>
                    <button class="btn btn-info" type="submit" name="update">Update</button>
                <?php else: ?>
                    <button class="btn btn-primary" type="submit" name="save">Save</button>
                <?php endif; ?>
            </form>
        </div>
        </div>
    </body>
</html>