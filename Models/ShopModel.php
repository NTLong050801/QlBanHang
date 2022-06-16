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
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    public function allSanPham($id, $tranghientai, $orderby)
    {
        $limit = 12;
        $start = ($tranghientai - 1) * $limit;
        if ($orderby == '' || $orderby == 'None') {
            $w_orderby = '';
        } else {
            $w_orderby = 'order by dongiaban ' . $orderby;
        }

        // return $this->getAll(self::SANPHAM);
        if ($id == 0) {
            $sql = "SELECT * from Sanpham as sp ,loaihang as lh ,nhacungcap as ncc
                Where sp.IDNhaCungCap = ncc.IdNhaCungCap and 
                sp.Idloaihang = lh.idloaihang $w_orderby limit $start,$limit";
        } else {
            $sql = "SELECT * from Sanpham as sp ,loaihang as lh ,nhacungcap as ncc
            Where sp.IDNhaCungCap = ncc.IdNhaCungCap and 
            sp.Idloaihang = lh.idloaihang and sp.Idloaihang = $id $w_orderby limit $start,$limit";
        }
        // echo $sql;
        $query = $this->query($sql);
        $ar = [];
        while ($row =  mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }

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
        $tongsotrang = ceil($tongsosp / 12);
        return $tongsotrang;
    }

    //tổng trang nhà cung cấp
    public function total_page_ncc($id)
    {
        $sql = "SELECT count(IDSanPham) as SLSP from sanpham SP ,NhaCungCap ncc 
                where ncc.IDNhaCungCap = sp.IDNhaCungCap and sp.IDNhaCungCap = $id";
        //echo $sql;
        $query = $this->query($sql);
        // tổng số sản phẩm của loại hàng
        $tongsosp = mysqli_fetch_assoc($query)['SLSP'];

        // tổng số trang = tổng số sản phẩm / số sp 1 trang
        $tongsotrang = ceil($tongsosp / 6);
        return $tongsotrang;
    }

    public function count_product($id, $price_min, $price_max)
    {

        if ($id == 0 && $price_min == '') {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham";
        }
        if ($id == 0 && $price_min != '') {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham where DonGiaBan between $price_min and $price_max";
        }
        if ($id != 0 && $price_min == '') {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham where IDLoaiHang = $id";
        }
        if ($id != 0 && $price_min != '') {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham where IDLoaiHang = $id
            and DonGiaBan between $price_min and $price_max";
        }

        $query = $this->query($sql);
        return
            mysqli_fetch_assoc($query)['SLSP'];
    }

    public function count_product_ncc($IDNCC)
    {
        $sql = "SELECT count(IDSanPham) as SLSP from sanpham where IDNhaCungCap = $IDNCC";
        $query = $this->query($sql);
        return
            mysqli_fetch_assoc($query)['SLSP'];
    }
    public function search_by_price($price_min, $price_max, $IDLoaiHang, $page, $orderby)
    {
        $limit = 6;
        $start = ($page - 1) * $limit;
        if ($orderby == '' || $orderby == 'None') {
            $w_orderby = '';
        } else {
            $w_orderby = 'order by dongiaban ' . $orderby;
        }
        if ($IDLoaiHang == 0) {
            $sql = "SELECT * from sanpham where 
            DonGiaBan between $price_min and $price_max  $w_orderby limit $start,$limit";
        } else {
            $sql = "SELECT * from sanpham where IDLoaiHang = $IDLoaiHang 
            and DonGiaBan between $price_min and $price_max  $w_orderby limit $start,$limit";
        }
        //echo $sql;
        $query = $this->query($sql);

        $ar = [];
        while ($row =  mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    public function total_page_price($price_min, $price_max, $IDLoaiHang)
    {
        if ($IDLoaiHang == '0') {
            $sql = "SELECT count(IDSanPham) as SLSP from SanPham where DonGiaBan between $price_min and $price_max";
        } else {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham SP ,loaihang LH 
            where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $IDLoaiHang and  DonGiaBan between $price_min and $price_max";
        }
        $query = $this->query($sql);
        // tổng số sản phẩm của loại hàng
        $tongsosp = mysqli_fetch_assoc($query)['SLSP'];
        // tổng số trang = tổng số sản phẩm / số sp 1 trang
        $tongsotrang = ceil($tongsosp / 6);
        return $tongsotrang;
    }
    public function product_new($limit)
    {

        $sql = "select  * from sanpham SP order by IDSanPham DESC limit $limit,3";
        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    public function all_ncc($IDNCC, $tranghientai, $orderby)
    {
        $limit = 6;
        $start = ($tranghientai - 1) * $limit;
        if ($orderby == '' || $orderby == 'None') {
            $w_orderby = '';
        } else {
            $w_orderby = 'order by dongiaban ' . $orderby;
        }
        $sql = "SELECT * from Sanpham as sp ,loaihang as lh ,nhacungcap as ncc
                Where sp.IDNhaCungCap = ncc.IdNhaCungCap and 
                sp.Idloaihang = lh.idloaihang and sp.IDNhaCungCap = $IDNCC  $w_orderby limit $start,$limit";
        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
}
