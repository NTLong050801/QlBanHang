function dauChamOSo() {
    const hashPrice = (text) => {
      let arr = text.split("").reverse();
      const newArr = [];
      arr.forEach((e, i) => {
        if (i % 3 === 0 && i !== 0) {
          newArr.push(".");
          newArr.push(e);
        } else {
          newArr.push(e);
        }
      });
      return newArr.reverse().join("");
    };
    // console.log(hashPrice("1000"));
    const arr = Array.from(document.querySelectorAll(".DonGiaBan"));
    arr.forEach((e) => {
      let number = e.textContent;
      e.textContent = hashPrice(number);
    });
  }

function transIDLH(idLH, current_page) {
    $.ajax({
      url: "http://localhost/QlBanHang/?controller=customer&action=getSPLH",
      method: "POST",
      data: {
        idLH: idLH,
        current_page: current_page
      },
      success: function (dt) {
        $(".featured__filter").html(dt);
        dauChamOSo();
      },
    });
  }
