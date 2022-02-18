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
    }


?>