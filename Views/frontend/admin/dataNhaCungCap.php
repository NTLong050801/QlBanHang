<br>
<br>
<button class="btn btn-success" id="btn_add_ncc">Thêm nhà cung cấp</button>
<br>
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col" style="width:5%">STT</th>
            <th scope="col" style="width:25%">Tên Cty</th>
            <th scope="col" style="width:20%">Địa chỉ</th>
            <th scope="col" style="width:15%">Số DT</th>
            <th scope="col" style="width:15%">Website</th>
            <th scope="col" style="width:15%">Số SP</th>
            <th scope="col" style="width:10%">Sửa</th>
            <th scope="col" style="width:10%">Xóa</th>
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
                <td><?= $data['Diachi'] ?></td>
                <td><?= $data['SoDienThoai'] ?></td>
                <td><?= $data['Website'] ?></td>
                <td><?= $data['SLSP'] ?></td>
                <td><button class="btn btn-warning update_ncc" id="<?= $data['IDNhaCungCap'] ?>">Sửa</button></td>
                <td><button class="btn btn-danger delete_ncc" SLSP_NCC ="<?= $data['SLSP']?>"  id="<?= $data['IDNhaCungCap'] ?>">Xóa</button></td>
            </tr>
        <?php
            $i++;
        }
        ?>


    </tbody>
</table>
<!-- modal add nhà cung cấp -->
<div class="modal fade" id="Modal_add_ncc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm nhà cung cấp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên Nhà Cung Cấp</label>
                        <input require type="text" class="form-control" id="TenNCC" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa Chỉ</label>
                        <input require type="text" class="form-control" id="DiaChi" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số Điện Thoại</label>
                        <input require type="text" class="form-control" id="SoDienThoai" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Website</label>
                        <input require type="text" class="form-control" id="Website" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btn_add_ncc_succ">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div> -->
<!-- modal update loai hang -->
<div class="modal fade" id="Modal_update_ncc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên Công Ty</label>
                        <input require type="text" class="form-control" id="TenCty_new" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa Chỉ</label>
                        <input require type="text" class="form-control" id="DiaChi_new" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số Điện Thoại</label>
                        <input require type="text" class="form-control" id="SDT_new" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Website</label>
                        <input require type="text" class="form-control" id="Website_new" aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btn_update_ncc_succes" idncc="" >Sửa</button>
                </div>
            </form>
        </div>
    </div>
</div>