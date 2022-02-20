<?php
class AdminModel extends BaseModel
{
    const LOAIHANG = 'loaihang';
    const NHACUNGCAP = "nhacungcap";
    const SANPHAM = "sanpham";
    public function allmathang()
    {

        return $this->getAll(self::LOAIHANG);
    }

    public function allNhaCungCap(){
        return $this->getAll(self::NHACUNGCAP);
    }

    public function allSanPham(){
        // return $this->getAll(self::SANPHAM);
        $sql = "SELECT * from Sanpham as sp ,loaihang as lh ,nhacungcap as ncc
        Where sp.IDNhaCungCap = ncc.IdNhaCungCap and sp.Idloaihang = lh.idloaihang";
        $query = $this->query($sql);
        $ar = [];
        while ($row =  mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    // tổng số loại hàng hiện có
    public function totalmathang()
    {
        $col = ['IDLoaiHang'];
        return $this->count($col, self::LOAIHANG);
    }
    // Tổng số sản phẩm của mỗi loại hàng
    public function totalSP_LH()
    {
        $sql = "SELECT LoaiHang.IDLoaiHang,TenLoaiHang,loaihang.MoTa, 
        (SELECT COUNT(IDSanPham) FROM sanpham where IDLoaiHang =  LoaiHang.IDLoaiHang) as SLSP from LoaiHang";
        $query = $this->query($sql);
        $ar = [];
        while ($row =  mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }

    public function totalSP_NCC(){
        $sql = "SELECT Nhacungcap.IDNhaCungCap,TenCongTy,Diachi,SoDienThoai,Website,
        (SELECT COUNT(IDSanPham) FROM sanpham where IDNhaCungCap =  Nhacungcap.IDNhaCungCap) as SLSP from NhacungCap";
        $query = $this->query($sql);
        $ar = [];
        while ($row =  mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    // add loại hàng 
    public function addloaihang($data){
        return $this-> add(self::LOAIHANG,$data);
    }

    public function addncc($data){
        return $this-> add(self::NHACUNGCAP,$data);
    }
    
    public function addsp($data){
        return $this-> add(self::SANPHAM,$data);
    }
    //Xóa loại hàng theo id
    public function deleteloaihang($col,$id){
        return $this-> delete(self::LOAIHANG,$col,$id);
    }
    public function deletencc($col,$id){
        return $this-> delete(self::NHACUNGCAP,$col,$id);
    }

    // tìm kiếm loại hàng theo id
    public function findloaihang($col,$id){
        return $this-> findByID(self::LOAIHANG,$col,$id);
    }

    public function  findncc($col,$id){
        return $this-> findByID(self::NHACUNGCAP,$col,$id);
    }


    public function updateloaihang($ar,$id){
        return $this-> update(self::LOAIHANG,$ar,$id);
    }
    public function updatencc($ar,$id){
        return $this-> update(self::NHACUNGCAP,$ar,$id);
    }

}
