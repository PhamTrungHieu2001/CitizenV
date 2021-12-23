<?php

session_start(); 

$mysqli = new mysqli('localhost', 'root', '', 'citizenv') or die(mysqli_error($mysqli));
$update = false;
$id = 0;
$cccd = '';
$hoten = '';
$ngaysinh = '';
$gioitinh = '';
$quequan = '';
$diachithuongtru = '';
$diachitamtru = '';
$tongiao = '';
$vanhoa = '';
$nghenghiep = '';

if (isset($_POST['save'])){
    $cccd = $_POST['cccd'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $quequan = $_POST['quequan'];
    $diachithuongtru = $_POST['diachithuongtru'];
    $diachitamtru = $_POST['diachitamtru'];
    $tongiao = $_POST['tongiao'];
    $vanhoa = $_POST['vanhoa'];
    $nghenghiep = $_POST['nghenghiep'];

    $mysqli->query("INSERT into form_results (cccd, hoten, ngaysinh, gioitinh, quequan, diachithuongtru, diachitamtru, tongiao, vanhoa, nghenghiep) 
    VALUES('$cccd', '$hoten', '$ngaysinh', '$gioitinh', '$quequan', '$diachithuongtru', '$diachitamtru', '$tongiao', '$vanhoa', '$nghenghiep')")
    or die($mysqli->error);

    $_SESSION['messsage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: tonghop.php");
}

if(isset($_GET['delete'])) {
    $cccd = $_GET['delete'];
    $mysqli->query("DELETE FROM form_results where cccd=$cccd") or die($mysqli->error());

    $_SESSION['messsage'] = "Record has been saved!";
    $_SESSION['msg_type'] = "danger";
    
    header("location: tonghop.php");
}

if(isset($_GET['edit'])) {
    $cccd = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM form_results where cccd=$cccd") or die($mysqli->error());
    if (count(array($result))==1){
        $row = $result->fetch_array();
        $cccd = $row['cccd'];
        $hoten = $row['hoten'];
        $ngaysinh = $row['ngaysinh'];
        $gioitinh = $row['gioitinh'];
        $quequan = $row['quequan'];
        $diachithuongtru = $row['diachithuongtru'];
        $diachitamtru = $row['diachitamtru'];
        $tongiao = $row['tongiao'];
        $vanhoa = $row['vanhoa'];
        $nghenghiep = $row['nghenghiep'];
    }
}

if(isset($_POST['update'])){
    $cccd = $_POST['cccd'];
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh'];
    $quequan = $_POST['quequan'];
    $diachithuongtru = $_POST['diachithuongtru'];
    $diachitamtru = $_POST['diachitamtru'];
    $tongiao = $_POST['tongiao'];
    $vanhoa = $_POST['vanhoa'];
    $nghenghiep = $_POST['nghenghiep'];

    $mysqli->query("UPDATE form_results SET cccd='$cccd', hoten='$hoten', ngaysinh='$ngaysinh', gioitinh='$gioitinh', quequan = '$quequan', diachithuongtru='$diachithuongtru', diachitamtru='$diachitamtru', tongiao='$tongiao', vanhoa='$vanhoa', nghenghiep='$nghenghiep' where cccd=$cccd")
    or die($mysqli->error());

    $_SESSION['message'] = "Successful!";
    $_SESSION['msg_type'] = "Warning!";

    header('location: tonghop.php');
}

?>