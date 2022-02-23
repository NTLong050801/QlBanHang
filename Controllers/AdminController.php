<?php 
class AdminController extends BaseController{
    
    public function __construct()
    {
        $this->loadModel('AdminModel');
        $this -> AdminModel = new AdminModel;
    } 

    public function index(){
        
        return $this->view('frontend.admin.index');
    }

    public function allLoaiHang(){
        // $data = $this ->AdminModel -> allmathang();
        $total = $this-> AdminModel -> totalmathang();
        $totalSP_LH = $this->AdminModel ->totalSP_LH();
        return $this->view('frontend.admin.dataloaihang',[
            'datas'=> $totalSP_LH,
            'total' => $total
        ]);
        // return $total;
    }

    public function allNhaCungCap(){
        $data = $this-> AdminModel-> totalSP_NCC();
        return $this->view('frontend.admin.dataNhaCungCap',[
            'datas'=> $data,
        ]);
    }

    public function allsanpham(){
        $data = $this-> AdminModel-> allSanPham();
        $loaihangs =  $this-> AdminModel-> allmathang();
        $nccs = $this-> AdminModel-> allNhaCungCap();
        return $this->view('frontend.admin.dataSanPham',[
            'datas'=> $data,
            'loaihangs'=> $loaihangs,
            'nccs'=> $nccs,
        ]);
    }


    public function addloaihang(){
        $data = [
            'TenLoaiHang' => $_POST['TenLoaiHang'],
            'MoTa' => $_POST['MoTa']
        ];

       return $this -> AdminModel ->addloaihang($data);
    }

    public function addncc(){
        $data = [
            'TenCongTy' => $_POST['TenNCC'],
            'DiaChi' => $_POST['DiaChi'],
            'SoDienThoai' => $_POST['SoDienThoai'],
            'Website' => $_POST['Website']
        ];
        return $this -> AdminModel ->addncc($data);
    }
    
    public function addsp(){
        $data = $_POST;
        // $file_name = $_FILES['image']['name'];
        $anhchinh = $_FILES['img']['name'];
        if(!empty($anhchinh)){
            $tempname = $_FILES["img"]["tmp_name"];
            $folder = $_SERVER['DOCUMENT_ROOT']."/clothes/public/img/".$anhchinh;  
            move_uploaded_file($tempname, $folder);
        }
       $data['img'] = $anhchinh;
        // print_r($data) ;
        return $this -> AdminModel ->addsp($data);


    }

    public function deleteloaihang(){
        $id =  $_POST['id'];
        $col = ['IDLoaiHang'];
        return $this-> AdminModel-> deleteloaihang($col,$id);
        
    }

    public function deletencc(){
        $id = $_POST['id'];
        $col = ['IDNhaCungCap'];
        return $this-> AdminModel-> deletencc($col,$id);
    }

    public function findloaihang(){
        $id = $_POST['id'];
        $col = ['IDLoaiHang'];
        $datas = $this-> AdminModel -> findloaihang($col,$id);
        // $data = array_values($datas);
        // print_r($datas) ;
        echo json_encode($datas) ;
        // echo '123';
    }

    public function findncc(){
        $id = $_POST['id'];
        $col = ['IDNhaCungCap'];
        $datas = $this-> AdminModel -> findncc($col,$id);
        // $data = array_values($datas);
        // print_r($datas) ;
        echo json_encode($datas) ;
    }

    public function updateloaihang(){
        $id = $_POST['id'];
        $TenLoaiHang = $_POST['TenLoaiHang'];
        $MoTa = $_POST['MoTa'];
        $ar = [
            'TenLoaiHang' => $TenLoaiHang,
            'MoTa' => $MoTa
        ];
        $ar_id = [
            'IDLoaiHang' => $id
        ];
        // print_r($ar);
        return $this->AdminModel ->updateloaihang($ar,$ar_id);
    }

    public function updatencc(){
        $ar_id = 
        [
            'IDNhaCungCap' => $_POST['id']
        ];
        $ar = [
            'TenCongTy' => $_POST['TenCty_new'],
            'DiaChi' => $_POST['DiaChi_new'],
            'SoDienThoai' => $_POST['SDT_new'],
            'Website' => $_POST['Website_new'],
        ];
        return $this->AdminModel ->updatencc($ar,$ar_id);
    }


    
}
