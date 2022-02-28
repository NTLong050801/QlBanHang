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

    public function type_item($id, $tranghientai)
    {
        $limit = 4;
        $start = ($tranghientai - 1) * 4;

        if ($id == 0) {
            $sql  = "SELECT * from sanpham SP order by IDSanPham ASC Limit $start,$limit ";
        } else {
            $sql  = "SELECT * from sanpham SP ,loaihang LH 
            where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id 
            order by IDSanPham ASC limit  $start,$limit ";
        }

        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }


    //lấy ra sản phẩm mới thêm
    public function product_new($order)
    {
        
        $sql = "select  * from sanpham SP order by $order DESC limit 6";
        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }

    // public function product_sold()
    // {
    //     $sql = "select  * from sanpham SP order by IDSanPham DESC limit 3";
    //     $query = $this->query($sql);
    //     $ar = [];
    //     while ($row = mysqli_fetch_assoc($query)) {
    //         array_push($ar, $row);
    //     }
    //     return $ar;
    // }


    public function product_selling()
    {
        $sql = "select * from sanpham SP , sp_donhang SPDH where SP.IDSanPham = SPDH.IDSanPham 
        and (select count(IDSanPham) from sp_donhang group by IDSanPham) = (select max(count(IDSanPham)) from sp_donhang group by IDSanPham )";
    }
    public function search($val)
    {
        $sql = "select * from  sanpham SP where TenSP like '%$val%'";
        $query = $this->query($sql);
        if (mysqli_num_rows($query) > 0) {
            $ar  = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($ar, $row);
            }
            return $ar;
        } else {
            echo "Quần áo đâu rồi !!!";
        }
    }

    public function show_pro_price($price, $IDLoaiHang,$tranghientai)
    {
        $limit = 4;
        $start = ($tranghientai-1)*$limit;
        if ($IDLoaiHang == 0) {
            $sql = "SELECT * FROM  sanpham where DonGiaBan>=0 and DonGiaBan<= $price limit $start,$limit";
        } else {
            $sql = "SELECT * FROM  sanpham where IDLoaiHang = $IDLoaiHang and DonGiaBan>=0 and DonGiaBan<= $price limit $start,$limit";
        }
        $query = $this->query($sql);
        if (mysqli_num_rows($query) > 0) {
            $ar = [];
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($ar, $row);
            }
        } else {
            $ar = "Không có sản phẩm nào";
        }

        return $ar;
    }

    //  tính tổng trang
    public function total_page($id)
    {
        if ($id == '0') {
            $sql = "SELECT count(IDSanPham) as SLSP from SanPham";
        } else {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham SP ,loaihang LH 
                where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id";
        }
        $query = $this->query($sql);
        // tổng số sản phẩm của loại hàng
        $tongsosp = mysqli_fetch_assoc($query)['SLSP'];
        // tổng số trang = tổng số sản phẩm / số sp 1 trang
        $tongsotrang = ceil($tongsosp / 4);
        return $tongsotrang;
    }
    // tổng số trang sau khi nhấn search
    public function total_page_search($id, $val)
    {
        if ($id == '0') {
            $sql = "SELECT count(IDSanPham) as SLSP from SanPham where DonGiaBan>=0 and DonGiaBan<= $val";
        } else {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham SP ,loaihang LH 
            where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $id and DonGiaBan>=0 and DonGiaBan<= $val";
        }
        $query = $this->query($sql);
        // tổng số sản phẩm của loại hàng
        $tongsosp = mysqli_fetch_assoc($query)['SLSP'];
        // tổng số trang = tổng số sản phẩm / số sp 1 trang
        $tongsotrang = ceil($tongsosp / 4);
        return $tongsotrang;
    }
}
