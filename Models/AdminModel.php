<?php
class AdminModel extends BaseModel
{
    const LOAIHANG = 'loaihang';
    const NHACUNGCAP = "nhacungcap";
    const SANPHAM = "sanpham";
    const CTYGIAOHANG = "ctygiaohang";
    const NHANVIEN = "nhanvien";
    public function allmathang()
    {

        return $this->getAll(self::LOAIHANG);
    }

    public function allNhaCungCap()
    {
        return $this->getAll(self::NHACUNGCAP);
    }

    public function allctygiaohang()
    {
        return $this->getAll(self::CTYGIAOHANG);
    }
    public function allnhanvien()
    {
        return $this->getAll(self::NHANVIEN);
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

    public function totalSP_NCC()
    {
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
    public function add_all($table, $ar)
    {
        return $this->add($table, $ar);
    }

    //Xóa loại hàng theo id
    public function delete_all($table, $ar)
    {
        return $this->delete($table, $ar);
    }

    // tìm kiếm loại hàng theo id
    // public function findByID($table, $ar)
    // {
    //     return $this->find($table, $ar);
    // }
    public function update_all($table, $ar, $ar_id)
    {
        return $this->update($table, $ar, $ar_id);
    }
}
