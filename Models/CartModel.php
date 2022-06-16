<?php 
class CartModel extends BaseModel {
    public function addCart($IDKhachHang,$IDSP,$Soluong){
        $sql_checkCart = "SELECT * from GioHang where IDKhachHang = $IDKhachHang and IDSanPham = $IDSP ";
        $query = $this-> query($sql_checkCart);
        if(mysqli_num_rows($query)>0){
            $sql = "UPDATE giohang set SoLuong = $Soluong where IDKhachHang = $IDKhachHang and IDSanPham = $IDSP ";
        }else{
            $sql = "INSERT INTO giohang Values ($IDKhachHang,$IDSP,$Soluong)";

        }
        $query1 = $this-> query($sql);
        if($query1){
            echo "Thêm thành công";
        }else{
            echo "Thêm thất bại";
        }
    }
}