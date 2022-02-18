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
    
    }


?>