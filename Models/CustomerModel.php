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

    public function type_item($id)
    {
        if ($id == 0) {
            $sql  = "select * from sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang  ";
        } else {
            $sql  = "select * from sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id";
        }

        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    //lấy ra sản phẩm mới thêm
    public function product_new()
    {
        $sql = "select  * from sanpham SP order by SP.IDSanPham DESC limit 0,3";
        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    public function product_selling()
    {
        $sql = "select * from sanpham SP , sp_donhang SPDH where SP.IDSanPham = SPDH.IDSanPham 
        and (select count(IDSanPham) from sp_donhang group by IDSanPham) = (select max(count(IDSanPham)) from sp_donhang group by IDSanPham )";
    }
}
