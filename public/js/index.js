
$(document).ready(function () {
    load()
    function load() {
        $.ajax({
            url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=allmathang",
            success: function (dt) {
                $('.main-content').html(dt)
            }
        })
    }
    function msg(dt) {
        $('#msg').modal('show');
        $('#text_msg').html(dt)
        setTimeout(function () {
            $('#msg').modal('hide');
        }, 3000)
    }
    $(document).on('click', '#btn_add_LH', function () {
        //alert('123')
        $('#Modal_add_LH').modal('show')
        $('#btn_add_suc').click(function () {
            TenLoaiHang = $('#TenTheLoai').val();
            MoTa = $('#MoTa').val();

            $.ajax({
                url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=addloaihang",
                method: "POST",
                data: {
                    TenLoaiHang: TenLoaiHang,
                    MoTa: MoTa
                },
                success: function (dt) {
                    $('#Modal_add_LH').modal('hide')
                    load();
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
            $('#btn_delete_err').css("display","block")
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
                    url: "http://localhost:88/QLbanhang/index.php?controller=admin&action=deleteloaihang",
                    method: "POST",
                    data: {
                        id: id
                    },
                    success: function (dt) {
                        $('#confirm').modal('hide')
                        load();
                        msg(dt);
                    }
                })
            })
        }
    })

    $(document).on('click','.update',function(){
        $('#Modal_update_LH').modal('show')
        id = $(this).attr('id');
        // alert(id);
        $.ajax({
            url:"http://localhost:88/QLbanhang/index.php?controller=admin&action=findloaihang",
            method : "POST",
            data:{
                id: id
            },
            //  dataType: "json",
            success : function(dt){
                array.forEach(element => {
                    console.log(dt)
                });
                
                
                // $('#TenTheLoai_new').val(dt[1]);
                // $('#MoTa_new').val(dt[2]);
                
            }
        })
    })


})