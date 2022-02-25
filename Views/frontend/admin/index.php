<title>Trang chủ</title>
<?php
include('./public/Chung/header.php');
// include('./Core/Database.php');
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
            <li id="true" class="nav-item" chose="CtyGiaoHang"> <a href="#"><i class="fa fa-home"></i>Công Ty Giao Hàng</a> </li>
            <li id="true" class="nav-item" chose="NhanVien"> <a href="#"><i class="fa fa-home"></i>Nhân Viên</a> </li>

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
                            <!-- <form class="d-flex" style="margin-left: 30%;" onsubmit="return false;" hidden>
                                <input require id="search_ip" class="form-control me-2" type="text" placeholder="Nhập tên sách" aria-label="Search">

                                <button id="btn_search" class="btn btn-outline-success" type="button">Tìm</button>

                                <div id="list_sach" style="z-index: 4;">

                                </div>
                            </form> -->
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
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #dc5435;color:#fff;text-align: center;border-radius: 20px;">

            <div class="modal-body">
                <h4 id="text_confirm"></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="btn_delete_err">OK (<span id="time_out">5</span>)</button>
                <button type="button" class="btn btn-secondary" id="cancel_delete" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-primary" id="btn_delete_succees">Xóa</button>
            </div>
        </div>

    </div>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel" style="margin-left: 40%;">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" id="data_canvas" style="text-align: center;">
    
  </div>
</div>
<div id="a"></div>
<?php
include('./public/Chung/footer.php');
?>
<script src="http://localhost/QlBanHang/public/js/admin/chung.js"></script>
<script src="http://localhost/QlBanHang/public/js/admin/index.js"></script>
<script src="http://localhost/QlBanHang/public/js/admin/ncc.js"></script>
<script src="http://localhost/QlBanHang/public/js/admin/sp.js"></script>
<script src="http://localhost/QlBanHang/public/js/admin/ctygh.js"></script>
<script src="http://localhost/QlBanHang/public/js/admin/nv.js"></script>