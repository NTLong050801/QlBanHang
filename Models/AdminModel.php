<?php
class AdminModel extends BaseModel
{
    const LOAIHANG = 'loaihang';
    public function allmathang()
    {

        return $this->getAll(self::LOAIHANG);
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
    // add loại hàng 
    public function addloaihang($data){
        return $this-> add(self::LOAIHANG,$data);
    }
    //Xóa loại hàng theo id
    public function deleteloaihang($col,$id){
        return $this-> delete(self::LOAIHANG,$col,$id);
    }

    // tìm kiếm loại hàng theo id
    public function findloaihang($col,$id){
        return $this-> findByID(self::LOAIHANG,$col,$id);
    }

}
