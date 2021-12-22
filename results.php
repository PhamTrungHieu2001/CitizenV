<!DOCTYPE html>
<html>
  
<head>
    <title>Form Results</title>
</head>
  
<body>
        <?php
  
        $conn = mysqli_connect("localhost", "root", "", "citizenv");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect.". mysqli_connect_error());
        }

        // Taking all 10 values from the form data(input)
        $cccd = $_REQUEST['cccd'];
        $hoten = $_REQUEST['hoten'];
        $ngaysinh = $_REQUEST['ngaysinh'];
        $gioitinh = $_REQUEST['gioitinh'];
        $quequan = $_REQUEST['quequan'];
        $diachithuongtru = $_REQUEST['diachithuongtru'];
        $diachitamtru = $_REQUEST['diachitamtru'];
        $tongiao = $_REQUEST['tongiao'];
        $vanhoa = $_REQUEST['vanhoa'];
        $nghenghiep = $_REQUEST['nghenghiep'];
          
        // Performing insert query execution
        $sql = "INSERT INTO form_results  VALUES ('$cccd', '$hoten', '$ngaysinh', '$gioitinh', '$quequan', '$diachithuongtru', '$diachitamtru', '$tongiao', '$vanhoa', '$nghenghiep')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully.";

            echo nl2br("$cccd, $hoten, $ngaysinh, $gioitinh, $quequan, $diachithuongtru, $diachitamtru, $tongiao, $vanhoa, $nghenghiep");
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
</body>
  
</html>