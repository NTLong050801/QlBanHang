
$(document).ready(function () {
    types = "LoaiHang"
    $('.nav-item').click(function () {
        types = $(this).attr('chose');
        // function load()
        // alert(types)
        load(types)
    })
    load(types)

    $(document).on('click', '#btn_add_LH', function () {
        //alert('123')
        $('#Modal_add_LH').modal('show')
        $('#btn_add_suc').click(function () {
            TenLoaiHang = $('#TenTheLoai').val();
            MoTa = $('#MoTa').val();

            $.ajax({
                url: url+"controller=admin&action=add_all",
                method: "POST",
                data: {
                    TenLoaiHang: TenLoaiHang,
                    MoTa: MoTa,
                    types: types
                },
                success: function (dt) {
                    $('#Modal_add_LH').modal('hide')
                    load(types);
                    msg(dt);
                }
            })
        })
    })

    $(document).on('click', '.delete', function () {
        // alert('123')

        id = $(this).attr('id')
        $('#confirm').modal('show')
        slsp = parseInt($(this).attr('SLSP'));
        if (slsp > 0) {
            val = 5;
            $('#time_out').html(val)
            // $('#time_out').html('5')
            $('#btn_delete_err').css("display", "block")
            $('#cancel_delete').css("display", "none")
            $('#btn_delete_succees').css("display", "none")
            $('#text_confirm').html('Chỉ có thể xóa loại hàng có SLSP = 0')
            $('#btn_delete_err').click(function () {
                $('#confirm').modal('hide')
            })

            var time_out = setInterval(function () {
                val = val - 1;
                if (val > 0) {
                    $('#time_out').html(val)
                    // console.log(val)
                } else {

                    clearInterval(time_out);
                    $('#confirm').modal('hide')
                }
            }, 1000)
        } else {
            $('#text_confirm').html('Bạn chắc chắn muốn xóa thể loại này ?');
            $('#btn_delete_err').css("display", "none")
            $('#cancel_delete').css("display", "block")
            $('#btn_delete_succees').css("display", "block")
            $('#btn_delete_succees').click(function () {
                $.ajax({
                    url: url+"controller=admin&action=delete_all",
                    method: "POST",
                    data: {
                        IDLoaiHang: id,
                        types: types
                    },
                    success: function (dt) {
                        $('#confirm').modal('hide')
                        load(types);
                        msg(dt);
                    }
                })
            })
        }
    })

    $(document).on('click', '.update', function () {
        $('#Modal_update_LH').modal('show')
        id = $(this).attr('id');
        // alert(id);
        $.ajax({
            url: url+"controller=admin&action=findByID",
            method: "POST",
            data: {
                IDLoaiHang: id,
                types: types

            },
            dataType: "json",
            success: function (dt) {
                // console.log(dt[0]['TenLoaiHang'])
                $('#btn_update_succes').attr("idlh", dt[0]['IDLoaiHang'])
                $('#TenTheLoai_new').val(dt[0]['TenLoaiHang'])
                $('#MoTa_new').val(dt[0]['MoTa']);
            }
        })
    })
    $(document).on('click', '#btn_update_succes', function () {
        id = $(this).attr('idlh');
        TenTheLoai_new = $('#TenTheLoai_new').val();
        MoTa_new = $('#MoTa_new').val();
        $.ajax({
            url: url+"controller=admin&action=update_all",
            method: "POST",
            data: {
                IDLoaiHang: id,
                TenLoaiHang: TenTheLoai_new,
                MoTa: MoTa_new,
                types: types
            },
            success: function (dt) {
                msg(dt);
                load(types)
                $('#Modal_update_LH').modal('hide')
            }
        })
    })


})
function getAllSpByLh(id){
    $.ajax({
        url: url+"controller=admin&action=data_canvas",
        method: "POST",
        data: {
            IDLoaiHang: id
        },
        success: function (dt) {
            $('#data_canvas').html(dt)
        }
    })
}
$(document).on('click', '.show_sp_lh', function show_cavans() {
    id = $(this).attr('idLH');
    TenLoaiHang = $(this).attr('TenLoaiHang');
    $('#offcanvasRightLabel').html(TenLoaiHang)
    getAllSpByLh(id)
    
})
$(document).on('click', '.detail_sp', function () {
    IDSanPham = $(this).attr('idsp')
    // alert(IDSanPham)
    $('#offcanvasRight').offcanvas('hide');
    types = "SanPham"

    $.ajax({
        url: url+"controller=admin&action=all" + types + "",
        method: "POST",
        data: {
            IDSanPham: IDSanPham
        },
        success: function (dt) {

            $('.main-content').html(dt)
            $('html, body').animate({
                scrollTop: $('#tbl').offset().top
            }, 1000);
            setInterval(function () {
                if ($('#tbl').hasClass('table-primary')) {
                    $('#tbl').removeClass("table-primary")
                    $('#tbl').addClass("table-danger")

                } else {
                    $('#tbl').removeClass("table-danger")
                    $('#tbl').addClass("table-primary")
                }
                $('#tbl').css("margin-bottom", "20px")
                $('#tbl').css("margin-top", "20px")

            }, 500)
            // $('.offcanvas-backdrop').each(function () {
            //     $(this).removeClass('show')
            // })

        }
    })
})

$(document).on('click', '.lamsau', function () {
    load_toast('Chức năng này đang được nhà phát triển thiết kế !')
    // alert('123')
})
spam = 1;

$(document).on('click', '#order_sp', function () {
    spam++;
    orderby = $(this).attr('order')
    if (spam < 5) {
        $.ajax({
            url: url+"controller=admin&action=all" + types + "",
            method: "POST",
            data: {
                order: orderby,
            },
            success: function (dt) {
                $('.main-content').html(dt)

                if (orderby == 'DESC') {
                    load_toast('Đã sắp xếp loại hàng với SLSP từ lớn đến nhỏ !')
                    $('#order_sp').attr('order', "ASC")
                } else {
                    load_toast('Đã sắp xếp loại hàng với SLSP từ nhỏ đến lớn!')
                    $('#order_sp').attr('order', "DESC")
                }
            }
        })
    } else {
        msg("Vui lòng không spam !!!!!!")
    }
    // alert(orderby)
    setInterval(function () {
        spam = 1
    }, 5000)
})


