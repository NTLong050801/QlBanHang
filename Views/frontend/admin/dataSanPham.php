<br>
<br>
<button class="btn btn-success" id="btn_add_sp">Thêm sản phẩm</button>
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col"> STT</th>
            <th scope="col">Tên SP</th>
            <th scope="col">Tên NCC</th>
            <th scope="col">Tên Loại Hàng</th>
            <th scope="col">Đơn giá nhập</th>
            <th scope="col">Đơn giá bán</th>
            <th scope="col">Số lượng còn</th>
            <th scope="col">Mô Tả</th>
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
                <td><?= $data['TenSP'] ?></td>
                <td><?= $data['TenCongTy'] ?></td>
                <td><?= $data['TenLoaiHang'] ?></td>
                <td><?= $data['DonGiaNhap'] ?></td>
                <td><?= $data['DonGiaBan'] ?></td>
                <td><?= $data['SoLuongCon'] ?></td>
                <td><?= $data['MoTaSP'] ?></td>
                <td><button class="btn btn-warning update_ncc" id="<?= $data['IDSanPham'] ?>">Sửa</button></td>
                <td><button class="btn btn-danger delete_ncc" id="<?= $data['IDSanPham'] ?>">Xóa</button></td>
            </tr>
        <?php
            $i++;
        }
        ?>


    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="modalAddSP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data" id="myform_adds" name="myform_adds">
                    <div class="col-6" style="float: left;">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên SP</label>
                            <input require type="text" class="form-control" name="TenSP" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên Loại Hàng</label>
                            <br>
                            <select name="IDLoaiHang">
                                <?php
                                foreach ($loaihangs as $loaihang) {
                                ?>
                                    <option value="<?= $loaihang['IDLoaiHang'] ?>"><?= $loaihang['TenLoaiHang'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên NCC</label>
                            <br>
                            <select name="IDNhaCungCap">
                                <?php
                                foreach ($nccs as $ncc) {
                                ?>
                                    <option value="<?= $ncc['IDNhaCungCap'] ?>"><?= $ncc['TenCongTy'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Đơn giá nhập</label>
                            <input require type="number" class="form-control" name="DonGiaNhap" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Đơn giá bán</label>
                            <input require type="number" class="form-control" name="DonGiaBan" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="col-6" style="float: left;">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Số lượng còn</label>
                            <input require type="number" class="form-control" name="SoLuongCon" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea require class="form-control" placeholder="Leave a comment here" name="MoTaSP" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Mô tả</label>
                            </div>
                        </div>
                        <br>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ảnh</label>
                            <input require type="file" class="form-control" name="img" aria-describedby="emailHelp">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="btn_add_sp_suc">Thêm Sản Phẩm</button>
            </div>
        </div>
    </div>
</div>