
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
    function msg(dt){
        $('#msg').modal('show');
        $('#text_msg').html(dt)
        setTimeout(function(){
            $('#msg').modal('hide');
        },3000)
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

    $(document).on('click','.delete',function(){
        // alert('123')
        id = $(this).attr('id');
        slsp =parseInt($(this).attr('SLSP')) ;
        if(slsp > 0){
            $('#confirm').modal('show')
        } 
    })
    $('.delete').click(function(){
        alert('abc')
    })

})