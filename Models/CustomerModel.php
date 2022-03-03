<?php

    class CustomerModel extends BaseModel{
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
        public function getSPbyLH($id){
            $sql = "SELECT * FROM sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$id'";
            $query = $this -> query($sql);
            $ar = [];
            while($row = mysqli_fetch_assoc($query)){
              array_push($ar,$row);
            }
            return $ar;
        }
        public function search($keySearch){
            $sql = "SELECT * FROM sanpham where TenSP like '%$keySearch%'";
            $query = $this -> query($sql);
            $ar = [];
            while($row = mysqli_fetch_assoc($query)){
                array_push($ar, $row);
            }
            return $ar;
        }
        public function changePrice($idLH, $maxPrice){
            if($idLH == 0){
                $sql = "SELECT * FROM sanpham where DonGiaBan between '0' and '$maxPrice'";
                $query = $this -> query($sql);
                $ar = [];
                while($row = mysqli_fetch_assoc($query)){
                    array_push($ar, $row);
                }
                return $ar;
            }
            else{
                $sql = "SELECT * FROM sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$idLH' and SP.DonGiaBan between '0' and '$maxPrice'";
                $query = $this -> query($sql);
                $ar = [];
                while($row = mysqli_fetch_assoc($query)){
                    array_push($ar, $row);
                }
                return $ar;
            }
         
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

        public function getProductByPages($idLH, $current_page, $step){
            if($idLH == 0){
                $sql = "SELECT * FROM sanpham group by IDSanPham limit $current_page, $step";
                $query = $this -> query($sql);
                $ar = [];
                while($row = mysqli_fetch_assoc($query)){
                    array_push($ar, $row);
                }
                return $ar;
            }
            else{
                $sql = "SELECT * FROM sanpham SP ,loaihang LH 
                        where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = '$idLH'
                        group by SP.IDSanPham limit $current_page, $step";
                $query = $this -> query($sql);
                $ar = [];
                while($row = mysqli_fetch_assoc($query)){
                    array_push($ar, $row);
                }
                return $ar;
            }
        }
    }


?>