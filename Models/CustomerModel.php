<?php
class CustomerModel extends BaseModel
{
    const LOAIHANG = "loaihang";
    public function index()
    {
        echo __METHOD__;
    }
    public function get_category()
    {
        return $this->getAll(self::LOAIHANG);
    }
    public function sum_type()
    {
        $colum =  [
            'IDLoaiHang'
        ];
        return $this->count($colum, self::LOAIHANG);
    }
    public function category_item()
    {
        $category_item = [
            'clothes'
        ];
        return $this->categories_item();
    }

    public function get_featured_item($id)
    {
        // id = 0 là all
        if ($id == '0') {
            $sql = "SELECT * from LoaiHang as Lh ,SanPham as SP where LH.IDLoaiHang = SP.IDLoaiHang";
        } else {
            $sql = "SELECT * from LoaiHang as Lh ,SanPham as SP where LH.IDLoaiHang = SP.IDLoaiHang and LH.IDLoaiHang = $id ";
        }
        $qr =  $this->query($sql);
        // echo $sql;
        $ar = [];
        while ($row =  mysqli_fetch_assoc($qr)) {
            array_push($ar, $row);
        }
          return $ar;
    }
}
