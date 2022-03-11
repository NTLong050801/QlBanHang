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
    public function getAllSPshop($sortBy,$limitSP){
        $ar = [];
        if($sortBy == 0){
            $sql = "SELECT * FROM sanpham order by IDSanPham limit $limitSP";
            $query = $this-> query($sql);
            while($row = mysqli_fetch_assoc($query)){
                array_push($ar, $row);
            }
        }
        if($sortBy == 1){
            $sql = "SELECT * FROM sanpham order by DonGiaBan desc limit $limitSP";
            $query = $this-> query($sql);
            while($row = mysqli_fetch_assoc($query)){
                array_push($ar, $row);
            }
        }
        if($sortBy == 2){
            $sql = "SELECT * FROM sanpham order by DonGiaBan asc limit $limitSP";
            $query = $this-> query($sql);
            while($row = mysqli_fetch_assoc($query)){
                array_push($ar, $row);
            }
        }
        return $ar;
    }

    public function countProduct($idLH){
        if($idLH == 0){
            $sql = "SELECT count(IDSanPham) as slSP from sanpham";
            $query = $this -> query($sql);
            $row = mysqli_fetch_assoc($query)['slSP'];
            return $row;
        }
        else{
            $sql = "SELECT count(IDSanPham) as slSP FROM sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$idLH'";
            $query = $this -> query($sql);
            $row = mysqli_fetch_assoc($query)['slSP'];
            return $row;
        }
    }
}
?>