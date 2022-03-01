<?php
class ShopModel extends BaseModel
{
    const LOAIAHNG = "LOAIHANG";
    public function index()
    {
        echo __METHOD__;
    }
    public function top_sanpham()
    {
        $sql = "select * from sanpham order by sanpham.SoLuongBan DESC limit 0,5";
        $query = $this->query($sql);
        $ar=[];
        while($row = mysqli_fetch_assoc($query))
        {
            array_push($ar,$row);
        }
        return $ar;
    }
    public function allSanPham()
    {
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
    
}

?>