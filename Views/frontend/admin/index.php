<title>Trang chủ</title>
<?php
include('./public/Chung/header.php');
// include('./Core/Database.php');
// include('./ham.php')
?>
<body>
    
</body>
<div id="wrapper">

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
<div id="liveAlertPlaceholder"></div>
<div class="position-fixed bottom-0 end-0 p-3 " style="z-index: 11">
    <div id="liveToast" class="toast align-items-center text-white bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <strong class="me-auto">Thông báo</strong>
            <small>Just now</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="d-flex">
            <div class="toast-body">
            </div>
            <!-- <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button> -->
        </div>
    </div>
</div>
</body>
<?php
include('./public/Chung/footer.php');
?>
<script src="http://localhost:88/QLBanHang/public/js/admin/chung.js"></script>
<script src="http://localhost:88/QLBanHang/public/js/admin/index.js"></script>
<script src="http://localhost:88/QLBanHang/public/js/admin/ncc.js"></script>
<script src="http://localhost:88/QLBanHang/public/js/admin/sp.js"></script>
<script src="http://localhost:88/QLBanHang/public/js/admin/ctygh.js"></script>
<script src="http://localhost:88/QLBanHang/public/js/admin/nv.js"></script>