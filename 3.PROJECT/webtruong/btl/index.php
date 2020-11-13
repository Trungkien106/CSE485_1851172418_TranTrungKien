<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php")
?>
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
    <link rel="stylesheet" href="css/style.css">
    <title>Diễn đàn</title>
</head>

<body>
   
    <?php include("app/includes/header.php");?>

    <!-- Page Wrapper-->
    <div class="page-wrapper">
        <!-- Post Slider-->
        <div class="post-slider">
            <h1 class="slider-title">Diễn đàn khoa công nghệ thông tin</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="images/cse-tlu-nara.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php"></a></h4>
                        <i class="far fa-user">Khoa công nghệ thông tin</i>
                        &nbsp;
                        
                    </div>
                </div>

                <div class="post">
                    <img src="images/cse-tlu-nara.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php"></a></h4>
                        <i class="far fa-user">Khoa công nghệ thông tin</i>
                        &nbsp;
                        
                    </div>
                </div>

                <div class="post">
                    <img src="images/cse-tlu-nara.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php"></a></h4>
                        <i class="far fa-user">Khoa công nghệ thông tin</i>
                        &nbsp;
                        
                    </div>
                </div>

                <div class="post">
                    <img src="images/cse-tlu-nara.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php"></a></h4>
                        <i class="far fa-user">Khoa công nghệ thông tin</i>
                        &nbsp;
                        
                    </div>
                </div>

                <div class="post">
                    <img src="images/cse-tlu-nara.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php"></a></h4>
                        <i class="far fa-user">Khoa công nghệ thông tin</i>
                        &nbsp;
                        
                    </div>
                </div>
            </div>

        </div>  
        <!-- // Post Slider-->

        <!-- Content-->
        <div class="content clearfix">
            <!-- Main content-->
            <div class="main-content">
                <h1 class="recent-post-title">Bài viết gần đây</h1>

            <div class="post clearfix">
                <img src="images/dauhoi_223261296.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.php">10 sai lầm của sinh viên năm nhất</a></h2>
                    <i class="far fa-user">Khoa công nghệ thông</i>
                    &nbsp;
                    <i class="far calendar">Oct 20, 2020</i>
                    <p class="preview-text">
                        10 sai lầm của sinh viên năm nhất   
                    </p>
                    <a href="single.php" class="btn read-more">Trả lời</a>
                </div>
            </div>   
            <div class="post clearfix">
                <img src="images/dauhoi_223261296.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.php">Sinh viên mới vào học năm nhất có cần mua máy tính không ạ?</a></h2>
                    <i class="far fa-user">Khoa công nghệ thông tin</i>
                    &nbsp;
                    <i class="far calendar">Oct 20, 2020</i>
                    <p class="preview-text">
                        
                    </p>
                    <a href="single.php" class="btn read-more">Trả lời</a>
                </div>
            </div>   
            <div class="post clearfix">
                <img src="images/dauhoi_223261296.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.php">Đăng kí vào học ngành CNTT, chương trình Việt Nhật thì thủ tục như thế nào?</a></h2>
                    <i class="far fa-user">Khoa công nghệ thông</i>
                    &nbsp;
                    <i class="far calendar">Oct 20, 2020</i>
                    <p class="preview-text">
                       
                    </p>
                    <a href="single.php" class="btn read-more">Trả lời</a>
                </div>
            </div>   
            <div class="post clearfix">
                <img src="images/dauhoi_223261296.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.php">Điểm sàn tuyển sinh năm nay của Khoa là bao nhiêu?</a></h2>
                    <i class="far fa-user">Khoa công nghệ thông</i>
                    &nbsp;
                    <i class="far calendar">Oct 20, 2020</i>
                    <p class="preview-text">
                        
                    </p>
                    <a href="single.php" class="btn read-more">Trả lời</a>
                </div>
            </div>   
            <div class="post clearfix">
                <img src="images/dauhoi_223261296.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.php">Chương trình học của Khoa như thế nào</a></h2>
                    <i class="far fa-user">Khoa công nghệ thông</i>
                    &nbsp;
                    <i class="far calendar">Oct 20, 2020</i>
                    <p class="preview-text">
                        
                    </p>
                    <a href="single.php" class="btn read-more">Trả lời</a>
                </div>
            </div>   

        </div>
            <!--// Maine content-->
            <div class="sidebar">


                <div class="section search">
                    <h2 class="section-title">Tìm kiếm</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Tìm kiếm...">
                    </form>
                </div>
    
                
                <div class="section topics">
                    <h2 class="section-title">Chuyên mục</h2>
                    <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                        <li><a href="<?php echo $topic['name']; ?>">CSE Forum</a></li>
                    <?php endforeach; ?> 
                        
                        <li><a href="#">Tin tức - Thông báo</a></li>
                        <li><a href="#">Tư vấn tuyển sinh</a></li>
                        <li><a href="#">Đào tạo - Hướng nghiệp </a></li>
                       
                    </ul>
                </div>
            </div>
 

    </div>
        <!-- // Content-->
    </div>
    <!-- // Page Wrapper -->

    <!-- footer-->
    <?php include("app/includes/footer.php");?>
    <!-- //footer-->


    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!-- Slick carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- Custom Script -->
    <script src="js/scripts.js"></script>
</body>