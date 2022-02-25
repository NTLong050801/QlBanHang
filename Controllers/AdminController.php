<?php
class AdminController extends BaseController
{

    public function __construct()
    {
        $this->loadModel('AdminModel');
        $this->AdminModel = new AdminModel;
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel;
    }

    public function index()
    {

        return $this->view('frontend.admin.index');
    }

    public function allLoaiHang()
    {
        // $data = $this ->AdminModel -> allmathang();
        $total = $this->AdminModel->totalmathang();
        $totalSP_LH = $this->AdminModel->totalSP_LH();
        return $this->view('frontend.admin.dataloaihang', [
            'datas' => $totalSP_LH,
            'total' => $total
        ]);
        // return $total;
    }

    public function allNhaCungCap()
    {
        $data = $this->AdminModel->totalSP_NCC();
        return $this->view('frontend.admin.dataNhaCungCap', [
            'datas' => $data,
        ]);
    }

    public function allsanpham()
    {
        if(isset($_POST['IDSanPham'])){
            $IDSanPham = $_POST['IDSanPham'];
        }else{
            $IDSanPham = 0;
        }
        $data = $this->AdminModel->allSanPham();
        $loaihangs =  $this->AdminModel->allmathang();
        $nccs = $this->AdminModel->allNhaCungCap();
        return $this->view('frontend.admin.dataSanPham', [
            'datas' => $data,
            'loaihangs' => $loaihangs,
            'nccs' => $nccs,
            'IDSanPham' => $IDSanPham
        ]);
        // echo $IDSanPham;
    }

    public function allctygiaohang()
    {
        $data = $this->AdminModel->allctygiaohang();
        return $this->view('frontend.admin.dataCtyGiaoHang', [
            'datas' => $data,
        ]);
    }

    public function allnhanvien()
    {
        $data = $this->AdminModel->allnhanvien();
        return $this->view('frontend.admin.dataNhanVien', [
            'datas' => $data,
        ]);
    }


    public function add_all()
    {
        $ar = $_POST;

        if (isset($_FILES['img']['name'])) {
            $anhchinh = $_FILES['img']['name'];
            $tempname = $_FILES["img"]["tmp_name"];
            $folder = $_SERVER['DOCUMENT_ROOT'] . "/QLBanHang/public/img/product/" . $anhchinh;
            move_uploaded_file($tempname, $folder);
            $ar['img'] = $anhchinh;
            $ar['types'] = 'sanpham';
        }
        $table = array_pop($ar);
        return $this->AdminModel->add_all($table, $ar);
        print_r($ar);
    }
    public function delete_all()
    {
        $ar = $_POST;
        // print_r($ar);
        $table = array_pop($ar);
        return $this->AdminModel->delete_all($table, $ar);
    }

    public function findByID()
    {
        $ar = $_POST;
        $table = array_pop($ar);
        $datas = $this->AdminModel->findByID($table, $ar);
        // $data = array_values($datas);
        // print_r($datas) ;
        echo json_encode($datas);
        // echo '123';
    }

    public function update_all()
    {
        $ar = $_POST;

        if (isset($_FILES['img']['name'])) {
            $anhchinh = $_FILES['img']['name'];
            $tempname = $_FILES["img"]["tmp_name"];
            $folder = $_SERVER['DOCUMENT_ROOT'] . "/QLBanHang/public/img/product/" . $anhchinh;
            move_uploaded_file($tempname, $folder);
            $ar['img'] = $anhchinh;
            $ar['types'] = 'sanpham';
        }
        $table = array_pop($ar);
        $id = reset($ar);
        $key = array_keys($ar)[0];
        $ar_id = [
            $key => $id
        ];
        //   print_r($ar_id);
        return $this->AdminModel->update_all($table, $ar, $ar_id);
        //  print_r($ar);
    }

    public function data_canvas()
    {
        $id = $_POST['IDLoaiHang'];
        $product_type = $this->CustomerModel->type_item_canvans($id);
        return $this->view('frontend.admin.data_canvas', [
            'product_types' => $product_type
        ]);
        // echo '<pre>';
        // print_r($product_type);
    }
}
