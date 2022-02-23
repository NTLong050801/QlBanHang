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

    public function type_item($id,$start)
    {
        if ($id == 0) {
            $sql  = "select * from sanpham SP order by IDLoaiHang ASC limit $start,2";
        } else {
            $sql  = "select * from sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id 
            order by IDSanPham ASC limit $start,2 ";
        }

        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }

    public function type_item_canvans($id)
    {
        if ($id == 0) {
            $sql  = "select * from sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang  ";
        } else {
            $sql  = "select * from sanpham SP ,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id ";
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
    public function search($val)
    {
        $sql = "select * from  sanpham SP where TenSP like '%$val%'";
        $query = $this->query($sql);
        if(mysqli_num_rows($query)>0)
        {
            $ar  = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($ar, $row);
            }
            return $ar;
        }else
        {
            echo "Quần áo đâu rồi !!!";
        }
     
    }
    public function show_pro_price($price)
    {
        $sql = "SELECT * FROM  sanpham where DonGiaBan between 0 and $price";
        $query = $this->query($sql);
        $ar = [];
        while($row = mysqli_fetch_assoc($query))
        {
            array_push($ar,$row);
        }
         return $ar ;
    }
    public function total_page($id){
        if($id == '0'){
            $sql = "SELECT count(IDSanPham) as SLSP from SanPham";
        }else{
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham SP ,loaihang LH 
            where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id";
        }
        $query = $this-> query($sql);
        // tổng số sản phẩm của loại hàng
        $tongsosp = mysqli_fetch_assoc($query)['SLSP'];
        // tổng số trang = tổng số sản phẩm / số sp 1 trang
        $tongsotrang = ceil($tongsosp/2);
        return $tongsotrang;
    }
}
