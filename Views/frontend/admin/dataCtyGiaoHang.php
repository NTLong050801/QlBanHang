<br>
<br>
<button class="btn btn-success" id="btn_add_ctygh">Thêm công ty</button>
<br>
<br>
<!-- Example single danger button -->
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col"> STT</th>
            <th scope="col">Tên Công Ty</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Số điện thoại</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($datas as $data) {
        ?>
            <tr>
                <th scope="row"><?= $i ?></th>
                <td><?= $data['TenCongTy'] ?></td>
                <td><?= $data['SoDienThoai'] ?></td>
                <td><?= $data['DiaChi'] ?></td>

                <td><button class="btn btn-warning update_ctygh" id="<?= $data['IDCty'] ?>">Sửa</button></td>
                <td><button class="btn btn-danger delete_ctygh" id="<?= $data['IDCty'] ?>">Xóa</button></td>
            </tr>
        <?php
            $i++;
        }
        ?>


    </tbody>
</table>
<div class="modal fade" id="Modal_add_ctygh" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="myForm_add_ctgh" method="POST" enctype="multipart/form-data">
                <input type="text" value="" hidden name="IDCty" id="IDCty">
                <div class="modal-header">
                    <h5 class="modal-title" id="Modaltt">Thêm Công ty giao hàng</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên Công Ty</label>
                        <input require type="text" class="form-control" name="TenCongTy" id="TenCongTy" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số Điện Thoại</label>
                        <input require type="text" class="form-control" name="SoDienThoai" id="SoDienThoai" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                        <input require type="text" class="form-control" name="Diachi" id="DiaChi" aria-describedby="emailHelp">
                    </div>
                    <input type="text" hidden value="CtyGiaohang" name="types">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btn_add_ctgh_succ">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
</div>