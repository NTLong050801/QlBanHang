<br>
<br>
<h4>Số loại hàng hiện có : <?= $total ?></h4>
<br>
<button class="btn btn-success" id="btn_add_LH">Thêm loại hàng</button>
<button class="btn btn-primary lamsau" id="thongke">Thống kê đơn hàng theo loại hàng</button>
<button class="btn btn-warning lamsau" id="ghanlh">Giới hạn loại hàng</button>
<br>
<br>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col" style="width:10%">STT</th>
            <th scope="col" style="width:35%">Tên Loại hàng</th>
            <th scope="col" style="width:40%">Mô Tả</th>
            <th scope="col" style="width:25%;cursor:pointer" id="order_sp" order="DESC">Số SP</th>
            <th scope="col" style="width:25%">Sửa</th>
            <th scope="col" style="width:25%">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($datas as $data) {
        ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $data['TenLoaiHang'] ?></td>
                <td><?= $data['MoTa'] ?></td>
                <td>
                    <span style="cursor: pointer;" class="show_sp_lh" TenLoaiHang="<?= $data['TenLoaiHang'] ?>" idLH="<?= $data['IDLoaiHang'] ?>" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <?= $data['SLSP'] ?>
                    </span>
                </td>
                <td><button class="btn btn-warning update" id="<?= $data['IDLoaiHang'] ?>">Sửa</button></td>
                <td><button class="btn btn-danger delete" SLSP="<?= $data['SLSP'] ?>" id="<?= $data['IDLoaiHang'] ?>">Xóa</button></td>
            </tr>
        <?php
            $i++;
        }
        ?>


    </tbody>
</table>
<!-- modal add loại hàng -->
<div class="modal fade" id="Modal_add_LH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm loại hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên Loại Hàng</label>
                        <input require type="text" class="form-control" id="TenTheLoai" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea require class="form-control" placeholder="Leave a comment here" id="MoTa" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Mô tả</label>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btn_add_suc">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- modal update loai hang -->
<div class="modal fade" id="Modal_update_LH" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sửa Loại Hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên Loại Hàng</label>
                        <input require type="text" class="form-control" id="TenTheLoai_new" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea require class="form-control" placeholder="Leave a comment here" id="MoTa_new" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Mô tả</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btn_update_succes" idlh="">Sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>
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

