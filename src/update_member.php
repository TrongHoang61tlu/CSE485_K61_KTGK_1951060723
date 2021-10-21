    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
    <?php 
    include("config/config.php");


    if(isset($_POST['submit'])) {
        $hovaten = $_POST['hovaten'];
        $gioitinh = $_POST['gioitinh'];
        $tuoi = $_POST['tuoi'];
        $nhommau = $_POST['nhommau'];
        $ngayhien = $_POST['ngayhien'];
        $sodienthoai = $_POST['sodienthoai']; 

        $sql_update = "UPDATE blood_donor set bd_bame = '$hovaten',bd_sex = '$gioitinh',bd_age = '$tuoi',bd_bgroup = '$nhommau' where bd_id = '$id'";
        mysqli_query($conn,$sql_update);
        header('location: index.php');
    }
?>


    <?php
        include('header.php');
    ?>
    <?php 
        include ("config/config.php");
        if(isset($_GET['bd_id'])) {
            $id = $_GET['bd_id'];

            $sql = "SELECT * FROM blood_donor WHERE bd_id = '$id'";
            $result = mysqli_query($conn, $sql);
        }
    ?>
    <div class="container">
        <h1>Sửa danh sách người hiến máu </h1>
        <?php while($row = mysqli_fetch_assoc($result)){?>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="hovaten" class="form-label">Họ và Tên</label>
                <input type="text" name="hovaten" class="form-control" id="hovaten" value="<?php echo $row['bd_name']; ?>">
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới Tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" value="<?php echo $row['bd_sex']; ?>">
            </div>
            <div class="mb-3">
                <label for="tuoi" class="form-label">Tuổi</label>
                <input type="text" name="tuoi" class="form-control" id="tuoi" value="<?php echo $row['bd_age']; ?>">
            </div>
            <div class="mb-3">
                <label for="nhommau" class="form-label">Nhóm máu</label>
                <input type="text" name="nhommau" class="form-control" id="nhommau" value="<?php echo $row['bd_bgroup']; ?>">
            </div>
            <div class="mb-3">
                <label for="ngayhien" class="form-label">Ngày hiến </label>
                <input type="text" name="ngayhien" class="form-control" id="ngayhien" value="<?php echo $row['bd_reg_date']; ?>">
            </div>

            <div class="mb-3">
                <label for="sodienthoai" class="form-label">Số điện thoại  </label>
                <input type="text" name="sodienthoai" class="form-control" id="sodienthoai" value="<?php echo $row['bd_phno']; ?>">
            </div>
            <input type="hidden" name="bd_id" class="form-control" id="bd_id" value="<?php echo $row['bd_id']; ?>">
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="submit">Lưu</button>
        </form>
        <?php } ?>
    </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
    </html>