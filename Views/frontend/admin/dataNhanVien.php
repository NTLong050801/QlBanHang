<br>
<br>
<button class="btn btn-success" id="btn_add_nv">Thêm Nhân Viên</button>
<br>
<br>
<!-- Example single danger button -->
<br>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col"> STT</th>
            <th scope="col">Họ Tên</th>
            <th scope="col">Ngày Sinh</th>
            <th scope="col">Giới tính</th>
            <th scope="col">Ngày bắt đầu làm</th>
            <th scope="col">Địa chỉ</th>
            <th scope="col">Email</th>
            <th scope="col">Số Điện Thoại</th>
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
                <td><?= $data['HoTen'] ?></td>
                <td><?= $data['NgaySinh'] ?></td>
                <td><?= $data['GioiTinh'] ?></td>
                <td><?= $data['NgayBatDauLam'] ?></td>
                <td><?= $data['DiaChi'] ?></td>
                <td><?= $data['Email'] ?></td>
                <td><?= $data['SoDienThoai'] ?></td>
                <td><button class="btn btn-warning update_nv" id="<?= $data['IDNhanVien'] ?>">Sửa</button></td>
                <td><button class="btn btn-danger delete_nv" id="<?= $data['IDNhanVien'] ?>">Xóa</button></td>
            </tr>
        <?php
            $i++;
        }
        ?>


    </tbody>
</table>
<div class="modal fade" id="Modal_add_nv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="myForm_add_nv" method="POST" enctype="multipart/form-data">
                <input type="text" value="" hidden name="IDNhanVien" id="IDNhanVien">
                <div class="modal-header">
                    <h5 class="modal-title" id="Modaltt">Thêm Nhân Viên</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Họ Tên</label>
                        <input require type="text" class="form-control" name="HoTen" id="HoTen" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngày Sinh</label>
                        <input require type="date" class="form-control" name="NgaySinh" id="NgaySinh" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Giới Tính</label>
                        <div class="form-check">
                            <input class="form-check-input GioiTinh_Nam" type="radio" name="GioiTinh" value="Nam" id="flexRadioDefault1">
                            <label class="form-check-label " for="flexRadioDefault1">
                                Nam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input GioiTinh_Nu" type="radio" name="GioiTinh" value="Nữ" id="flexRadioDefault2" >
                            <label class="form-check-label " for="flexRadioDefault2">
                                Nữ
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngày bắt đầu</label>
                        <input require type="date" class="form-control" name="NgayBatDauLam" id="NgayBatDauLam" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                        <input require type="text" class="form-control" name="DiaChi" id="DiaChi" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input require type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số Điện thoại</label>
                        <input require type="text" class="form-control" name="SoDienThoai" id="SoDienThoai" aria-describedby="emailHelp">
                    </div>
                    <input type="text" hidden value="NhanVien" name="types">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btn_add_nv_succ">Thêm mới</button>
                </div>
            </form>
        </div>
    </div>
</div>