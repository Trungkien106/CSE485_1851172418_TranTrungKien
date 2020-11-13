<header>
        <a href="index.php" class="logo">
            <h1 class="logo-text"><span>CSE</span>.TLU</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="index.php">Trang chủ</a>   </li>
            
            <li>
                <a href="#">Bảng điều khiển</a>
                <ul>
                    <li><a href="admin/topics/create.php">Tạo chủ đề</a></li>
                    <li><a href="admin/users/index.php">Thành viên</a></li>
                    <li><a href="admin/posts/create.php">Tạo bài viết</a></li> 
                </ul>
            </li>
            
           <!-- <?php if(isset($_SESSION['id']));  ?> -->
            <li>
                <a href="#">
                    <i ></i>
                    Tài khoản
                    <i class="fa fa-chevron-down" ></i>
                </a>
                <ul>
                    <li><a href="register.php">Đăng kí</a></li>
                    <li><a href="login.php">Đăng nhập</a></li>
                    <li><a href="#" class="logout">Đăng xuất</a></li> 
                </ul>
            </li>
          
        </ul>
    </header>