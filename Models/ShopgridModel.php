<?php
 class ShopgridModel extends BaseModel{
    CONST LOAIHANG = 'loaihang';
    CONST SANPHAM = 'sanpham';
    public function getAllLoaiHang(){
        return $this -> getAll(self::LOAIHANG);
    }

    public function getALLSP(){
        return $this -> getAll(self::SANPHAM);
    }

    public function getSPLH($id, $nameColID){
        return $this -> findByID(self::LOAIHANG, $id, $nameColID);
    }
    public function spBanChay($limit){
        $sql = "SELECT * FROM sanpham order by SoLuongBan desc limit $limit";
        $query = $this-> query($sql);
        $ar = [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($ar, $row);
        }
        return $ar;
    }
}
?>