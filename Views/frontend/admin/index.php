<title>Trang chủ</title>
<?php
include('./public/Chung/header.php');
include('./Core/Database.php');
// include('./ham.php')
?>
<div id="wrapper" style="overflow: scroll;height:100%">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <h2>Khách</h2>
            </li>
            <li id="true" class="nav-item" chose="LoaiHang"> <a href="#"><i class="fa fa-home"></i>Loại hàng</a> </li>
            <li id="true" class="nav-item" chose="NhaCungCap"> <a href="#"><i class="fa fa-home"></i>Nhà cung cấp</a> </li>
            <li id="true" class="nav-item" chose="SanPham"> <a href="#"><i class="fa fa-home"></i>Sản Phẩm</a> </li>

        </ul>
    </div>
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fas fa-bars"></i></a>
                            <form class="d-flex" style="margin-left: 30%;" onsubmit="return false;">
                                <input require id="search_ip" class="form-control me-2" type="text" placeholder="Nhập tên sách" aria-label="Search">
                                <!-- <input type="text" id="search_ip"> -->
                                <button id="btn_search" class="btn btn-outline-success" type="button">Tìm</button>
                                <!-- <button type="submit" hidden></button> -->
                                <div id="list_sach" style="z-index: 4;">

                                </div>
                            </form>
                            <form class="d-flex">
                                <a id="profile_tch" href="#" class="navbar-brand">Tài khoản</a>
                                <a href="../Login/logout.php" class="navbar-brand">Đăng xuất</a>
                            </form>
                        </div>
                    </nav>
                    <!-- bắt  đầu  content -->
                    <div class="container main-content">
                        

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
include('./public/Chung/footer.php');
?>
<script src="http://localhost:88/QLbanhang/public/js/admin/index.js"></script>
<script src="http://localhost:88/QLbanhang/public/js/admin/ncc.js"></script>
<script src="http://localhost:88/QLbanhang/public/js/admin/sp.js"></script>

