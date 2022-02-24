<br>
<br>
<h4>Số loại hàng hiện có : <?= $total ?></h4>
<br>
<button class="btn btn-success" id="btn_add_LH">Thêm loại hàng</button>
<br>
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col" style="width:10%">STT</th>
            <th scope="col" style="width:35%">Tên Loại hàng</th>
            <th scope="col" style="width:40%">Mô Tả</th>
            <th scope="col" style="width:25%">Số SP</th>
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
                    <span style="cursor: pointer;" class="show_sp_lh" TenLoaiHang = "<?= $data['TenLoaiHang'] ?>" idLH="<?= $data['IDLoaiHang'] ?>" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
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
