
$(document).ready(function () {
   types = "LoaiHang"
    $('.nav-item').click(function(){
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
                url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=add_all",
                method: "POST",
                data: {
                    TenLoaiHang: TenLoaiHang,
                    MoTa: MoTa,
                    types : types
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
        val = 5;
        id = $(this).attr('id')
        $('#confirm').modal('show')
        slsp = parseInt($(this).attr('SLSP'));
        if (slsp > 0) {
            $('#time_out').html(val)
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
                    val = 5
                    // console.log(val)

                }

            }, 1000)
        } else {
            $('#text_confirm').html('Bạn chắc chắn muốn xóa thể loại này ?');
            $('#btn_delete_err').css("display", "none")
            $('#cancel_delete').css("display", "block")
            $('#btn_delete_succees').css("display", "block")
            $('#btn_delete_succees').click(function () {
                $.ajax({
                    url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=delete_all",
                    method: "POST",
                    data: {
                        IDLoaiHang: id,
                        types : types
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
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=findByID",
            method: "POST",
            data: {
                IDLoaiHang: id,
                types:types
               
            },
            dataType: "json",
            success: function (dt) {
                // console.log(dt[0]['TenLoaiHang'])
                $('#btn_update_succes').attr("idlh",dt[0]['IDLoaiHang'])
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
            url:"http://localhost:88/QLbanhang/index.php?controller=admin&action=update_all",
            method : "POST",
            data:{
                IDLoaiHang: id,
                TenLoaiHang : TenTheLoai_new,
                MoTa : MoTa_new,
                types: types
            },
            success : function(dt){
                msg(dt);
                load(types)
                $('#Modal_update_LH').modal('hide')
            }
        })
    })



})