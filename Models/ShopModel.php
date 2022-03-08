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
    // [hân trang ]
    public function allSanPham($id, $tranghientai,$order_by)
    {
        if($order_by=="" || $order_by == "0" )
        {
            $w_order = "order by IDSanPham";
        }else 
        {
            $w_order  = "order by DonGiaBan " . $order_by;
        }
        $limit = 12;
        $start = ($tranghientai - 1) * $limit;
        // return $this->getAll(self::SANPHAM);
        if ($id == 0) {
            $sql = "SELECT * from Sanpham as sp ,loaihang as lh ,nhacungcap as ncc
            Where sp.IDNhaCungCap = ncc.IdNhaCungCap and 
            sp.Idloaihang = lh.idloaihang $w_order limit $start,$limit";
        } else {
            $sql = "SELECT * from Sanpham as sp ,loaihang as lh ,nhacungcap as ncc
            Where sp.IDNhaCungCap = ncc.IdNhaCungCap and 
            sp.Idloaihang = lh.idloaihang and sp.Idloaihang = $id $w_order limit $start,$limit";
        }
        
        $query = $this->query($sql);
        $ar = [];
        while ($row =  mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
      
        return $ar;
    }
    //đếm số trang hiện có 
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
    public function product_new($order,$start,$limit)
    {
        
        $sql = "select  * from sanpham SP order by $order DESC limit $start,$limit";
        $query = $this->query($sql);
        $ar = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($ar, $row);
        }
        return $ar;
    }
    // đếm  sản phẩm theo lọc giá
    public function count_pro($id)
    {
        if($id==0)
        {
            $sql = "select count(IDSanPham) as allsp from sanpham ";          
        }
       else 
       {
        $sql = "select count(IDSanPham) as allsp from sanpham where IDLoaiHang = $id  ";
       }
        $query = $this->query($sql);
        return mysqli_fetch_assoc($query)['allsp'];

    }
    public function count_pro_between($id,$price_min,$price_max)
    {
        if($id==0)
        {
            $sql = "select count(IDSanPham) as allsp from sanpham where DonGiaBan between $price_min and $price_max";          
        }
       else 
       {
        $sql = "select count(IDSanPham) as allsp from sanpham where IDLoaiHang = $id and DonGiaBan between $price_min and $price_max ";
       }
        $query = $this->query($sql);
      
        return mysqli_fetch_assoc($query)['allsp'];

    }
    //sap xep giam dan theo gia 
    public function sort_price_decrease()
    {
        $sql = "select * from sanpham order by DonGiaBan DESC ";
        $query  = $this->query($sql);
        $ar = [];
        while($row = mysqli_fetch_assoc($query))
        {
            array_push($ar, $row);
        }
        return $ar ;
    }
    //loc sản phẩm theo thanh kéo 
    public function fillter_product($price_min,$price_max,$IDLoaiHang,$Tranghientai,$order_by)
    {
        if($order_by=="" ||$order_by=="0")
        {
            $w_order = "order by IDSanPham ";
        }else 
        {
            $w_order = "order by DonGiaBan " . $order_by;
        }
        $limit = 6  ; 
        $start = ($Tranghientai -1 ) * $limit;
        if($IDLoaiHang==0)
        {
            $sql = "select * from sanpham  where DonGiaBan BETWEEN $price_min and $price_max $w_order limit $start,$limit";
        }
        else 
        {
            $sql = "select * from sanpham  where IDLoaiHang = $IDLoaiHang and (DonGiaBan BETWEEN $price_min and $price_max) $w_order limit $start,$limit";
        }
        $query  = $this->query($sql);
        $ar = [];
        while($row = mysqli_fetch_assoc($query))
        {
            array_push($ar, $row);
        }
        return $ar ;
        
    }
    public function total_page_by_price($IDLoaiHang,$price_max,$price_min)
    {
        if ($IDLoaiHang == '0') {
            $sql = "SELECT count(IDSanPham) as SLSP from SanPham where DonGiaBan between $price_min and $price_max";

        } else {
            $sql = "SELECT count(IDSanPham) as SLSP from sanpham SP ,loaihang LH 
                where SP.IDLoaiHang = LH.IDLoaiHang and LH.IDLoaiHang = $IDLoaiHang and DonGiaBan between $price_min and $price_max";
        }
        $query = $this->query($sql);
        // tổng số sản phẩm của loại hàng
        $tongsosp = mysqli_fetch_assoc($query)['SLSP'];
        // tổng số trang = tổng số sản phẩm / số sp 1 trang
        $tongsotrang = ceil($tongsosp / 6);
        return $tongsotrang;
    }
   PUBLIC function sort_by_DESC($IDLoaiHang,$price_min,$price_max,$Tranghientai)
   {
       $sql = "select * from sanpham order by DonGiaBan DESC ";
       $query  = $this->query($sql);
       $ar = [];
       while($row = mysqli_fetch_assoc($query))
       {
           array_push($ar, $row);
       }
       return $ar ;
   }
   PUBLIC function sort_by_ASC($IDLoaiHang,$price_min,$price_max,$Tranghientai)
   {
       $sql = "select * from sanpham order by DonGiaBan ASC ";
       $query  = $this->query($sql);
       $ar = [];
       while($row = mysqli_fetch_assoc($query))
       {
           array_push($ar, $row);
       }
       return $ar ;
   }
}
