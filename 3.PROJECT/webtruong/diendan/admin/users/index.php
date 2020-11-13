<?php include("../../path.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/f3a95a8473.js" crossorigin="anonymous"></script> 
    <!-- Font google -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Quản lý người dùng</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?> 

    <!-- Admin Page Wrapper-->
    <div class="admin-wrapper">
       
        <!-- Left Sidebar-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
        <!-- // Left Sidebar-->

        <!-- Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-big">Thêm người dùng</a>
                <a href="index.php" class="btn btn-big">Quản lý người dùng</a>
            </div>

            <div class="content">
                <h2 class="page-title">Quản lý người dùng</h2>
                <table>
                    <thead>
                        <th>STT</th>
                        <th>Tên người dùng</th>
                    
                        <th colspan="2">Hoạt động</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hoàng</td>
                            
                            <td><a href="edit.php" class="edit">Sửa</a></td>
                            <td><a href="#" class="delete">Xoá</a></td>
                            
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Đỗ</td>
                            
                            <td><a href="edit.php" class="edit">Sửa</a></td>
                            <td><a href="#" class="delete">Xoá</a></td>
                            
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <!-- // Admin Content-->

    </div>
    <!-- // Page Wrapper -->

    


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>
</body>