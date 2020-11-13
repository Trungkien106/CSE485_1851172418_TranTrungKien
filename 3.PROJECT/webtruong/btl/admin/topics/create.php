<?php include("../../path.php") ?>
<?php include (ROOT_PATH . "/app/controllers/topics.php"); ?>
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
    <title>Tạo chủ đề</title>
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
                <a href="create.php" class="btn btn-big">Thêm chủ đề</a>
                <a href="index.php" class="btn btn-big">Quản lý </a>
            </div>

            <div class="content">
                <h2 class="page-title">Thêm chủ đề</h2>
                
                <form action="create.php" method="post">
                    <div>
                        <label>Tên</label>
                        <input type="text" name="name"  class="text-input">
                    </div>
                    <div>
                        <label>Mô tả</label>
                        <textarea name="description" id="body" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="add-topic" class="btn btn-big">Thêm chủ đề </button>
                    </div>
                </form>

            </div>
        </div>
        <!-- // Admin Content-->

    </div>
    <!-- // Page Wrapper -->

    


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>
</body>