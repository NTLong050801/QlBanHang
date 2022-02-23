$(document).ready(function () {
   // types = ""
   vals = 5
   $(document).on('click', '#btn_add_ncc', function () {
      // alert('123');
      $('#Modal_add_ncc').modal('show')
      // load(types)
   })
   $(document).on('click', '#btn_add_ncc_succ', function () {
      TenNCC = $('#TenNCC').val();
      DiaChi = $('#DiaChi').val();
      SoDienThoai = $('#SoDienThoai').val();
      Website = $('#Website').val();
      $.ajax({
         url: "http://localhost/clothes/index.php?controller=admin&action=addncc",
         method: "POST",
         data: {
            TenNCC: TenNCC,
            DiaChi: DiaChi,
            SoDienThoai: SoDienThoai,
            Website: Website
         },
         success: function (dt) {
            $('#Modal_add_ncc').modal('hide')
            msg(dt);
            load(types)
         }
      })
   })
   $(document).on('click', '.delete_ncc', function () {
      id = $(this).attr('id');
      slsp_ncc = parseInt($(this).attr('SLSP_NCC'));
      $('#confirm').modal('show')
      if (slsp_ncc > 0) {
         $('#time_out').html(vals)
         $('#btn_delete_err').css("display", "block")
         $('#cancel_delete').css("display", "none")
         $('#btn_delete_succees').css("display", "none")
         $('#text_confirm').html('Chỉ có thể xóa loại hàng có SLSP = 0')
         $('#btn_delete_err').click(function () {
            $('#confirm').modal('hide')
         })

         var time_out = setInterval(function () {

            vals = vals - 1;
            if (vals > 0) {
               $('#time_out').html(vals)
               // console.log(val)
            } else {

               clearInterval(time_out);
               $('#confirm').modal('hide')
               vals = 5
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
               url: "http://localhost/clothes/index.php?controller=admin&action=deletencc",
               method: "POST",
               data: {
                  id: id
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

   $(document).on('click', '.update_ncc', function () {
      $('#Modal_update_ncc').modal('show')
      id = $(this).attr('id');
        // alert(id);
        $.ajax({
            url: "http://localhost/clothes/index.php?controller=admin&action=findncc",
            method: "POST",
            data: {
                id: id
            },
            dataType: "json",
            success: function (dt) {
                // console.log(dt[0]['TenLoaiHang'])
                $('#btn_update_ncc_succes').attr("idncc",dt[0]['IDNhaCungCap'])
                $('#TenCty_new').val(dt[0]['TenCongTy'])
                $('#DiaChi_new').val(dt[0]['DiaChi']);
                $('#SDT_new').val(dt[0]['SoDienThoai']);
                $('#Website_new').val(dt[0]['Website']);
            }
        })
   })

   $(document).on('click', '#btn_update_ncc_succes', function () {
      id = $(this).attr('idncc');
      TenCty_new = $('#TenCty_new').val();
      DiaChi_new = $('#DiaChi_new').val();
      SDT_new = $('#SDT_new').val();
      Website_new = $('#Website_new').val();
      $.ajax({
          url:"http://localhost/clothes/index.php?controller=admin&action=updatencc",
          method : "POST",
          data:{
              id: id,
              TenCty_new : TenCty_new,
              DiaChi_new : DiaChi_new,
              SDT_new : SDT_new,
              Website_new : Website_new
          },
          success : function(dt){
              msg(dt);
              console.log(dt)
              load(types)
              $('#Modal_update_ncc').modal('hide')
          }
      })
  })

})