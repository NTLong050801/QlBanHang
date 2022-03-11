$(document).ready(function () {
  idLH = 0;
  // current_page = 1;
  current_page = $('.page-current').attr('current_page');
  transIDLH(idLH, current_page);
  dauChamOSo(DonGiaBan);
  $(".hero__search__btnSearch").on("click", function () {
    keySearch = $(".hero__search__valSearch").val();
    $.ajax({
      url: "http://localhost/QlBanHang/?controller=customer&action=search",
      method: "POST",
      data: {
        keySearch: keySearch,
      },
      success: function (dt) {
        $(".featured__filter").html(dt);
        transIDLH(idLH, current_page);
      },
    });
  });

  $(document).on("click", ".featured__controls__LH", function () {
    idLH = $(this).attr("idLH");
    current_page = 1;
    transIDLH(idLH, current_page);
  });

  $(".section-range__range").on("input", function () {
    // $(this).trigger('change');
    maxPrice = $(this).val();
    $(".section-range__max-price").html(maxPrice + "đ");
    $.ajax({
      url: "http://localhost/QlBanHang/?controller=customer&action=changePrice",
      method: "POST",
      data: {
        maxPrice: maxPrice,
        idLH: idLH,
      },
      success: function (dt) {
        $(".featured__filter").html(dt);
        transIDLH(idLH, current_page); 
        dauChamOSo(DonGiaBan);
      },
    });
  });

  $(document).on("click", ".page-current", function(){
    idLH = $(this).attr("idLH");
    numPage = $(this).attr('cr_page');
    transIDLH(idLH, numPage);
    current_page = numPage;
    console.log(current_page);
  })

  $(document).on("click", ".page-previous", function(){
    idLH = $(this).attr("idLH");
    numPage = $(this).attr('cr_page');
    numPages = parseInt(numPage) - 1;
    // transIDLH(idLH, numPages);
     console.log(numPages);
  })

  $(document).on("click", ".page-next", function(){
    idLH = $(this).attr("idLH");
    numPage = $(this).attr('cr_page');
    numPages = parseInt(numPage) + 1;
    // transIDLH(idLH, numPages);
    console.log(numPages);
  })
});
