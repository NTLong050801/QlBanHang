$(document).on('click', '#btn_add_sp', function () {
    $('#modalAddSP').modal('show')
    $('#modalTitle').html('Thêm sản phẩm')
    $('#btn_add_sp_suc').html('Thêm sản phẩm')
    $('#btn_add_sp_suc').click(function () {
        form = new FormData(myform_adds)
        $.ajax({
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=add_all",
            method: "POST",
            data: form,
            mimeType: "multipart/form-data",
            processData: false,
            contentType: false,
            success: function (dt) {
                msg(dt)
                load(types)
                $('#modalAddSP').modal('hide')
            }
        })
    })
})
// types = 'sanpham';

$(document).on('click', '.delete_sp', function () {
    $('#confirm').modal('show');

    id = $(this).attr('id');
    $('#text_confirm').html('Bạn chắc chắn muốn xóa sản phẩm này ?');
    $('#btn_delete_err').css("display", "none")
    $('#cancel_delete').css("display", "block")
    $('#btn_delete_succees').css("display", "block")
    $('#btn_delete_succees').click(function () {
        $.ajax({
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=delete_all",
            method: "POST",
            data: {
                IDSanPham: id,
                types: types
            },
            success: function (dt) {
                msg(dt)
                load(types)
                $('#confirm').modal('hide');
            }
        })
    })

})
$(document).on('click', '.update_sp', function () {
    $('#modalAddSP').modal('show')
    id = $(this).attr('id');
    $('#modalTitle').html('Sửa sản phẩm')
    $('#btn_add_sp_suc').html('Sửa sản phẩm')
    // alert(id);
    $.ajax({
        url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=findByID",
        method: "POST",
        data: {
            IDSanPham: id,
            types: types
        },
        dataType: "json",
        success: function (dt) {
            // console.log(dt[0]['TenLoaiHang'])
            // $('#btn_update_succes').attr("idlh",dt[0]['IDLoaiHang'])
            // $('#TenTheLoai_new').val(dt[0]['TenLoaiHang'])
            console.log(dt)
            $('#IDSanPham').attr('value',dt[0]['IDSanPham']);
            $('#TenSP').val(dt[0]['TenSP']);
            $('#IDLoaiHang').val(dt[0]['IDLoaiHang']);
            $('#IDNhaCungCap').val(dt[0]['IDNhaCungCap']);
            $('#DonGiaNhap').val(dt[0]['DonGiaNhap']);
            $('#DonGiaBan').val(dt[0]['DonGiaBan']);
            $('#SoLuongCon').val(dt[0]['SoLuongCon']);
            $('#MoTaSP').val(dt[0]['MoTaSP']);
            // console.log(dt)
        }
    })
    $('#btn_add_sp_suc').click(function () {
        form = new FormData(myform_adds)
        $.ajax({
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=update_all",
            method: "POST",
            data: form,
            mimeType: "multipart/form-data",
            processData: false,
            contentType: false,
            success: function (dt) {
                 msg(dt)
                 load(types)
                 $('#modalAddSP').modal('hide')
                
            }
        })
    })
})

