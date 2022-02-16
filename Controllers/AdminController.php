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

    public function allmathang(){
        // $data = $this ->AdminModel -> allmathang();
        $total = $this-> AdminModel -> totalmathang();
        $totalSP_LH = $this->AdminModel ->totalSP_LH();
        return $this->view('frontend.admin.dataloaihang',[
            'datas'=> $totalSP_LH,
            'total' => $total
        ]);
        // return $total;
    }

    public function addloaihang(){
        $data = [
            'TenLoaiHang' => $_POST['TenLoaiHang'],
            'MoTa' => $_POST['MoTa']
        ];

       return $this -> AdminModel ->addloaihang($data);
    }

    public function deleteloaihang(){
        $id =  $_POST['id'];
        $col = ['IDLoaiHang'];
        return $this-> AdminModel-> deleteloaihang($col,$id);
        
    }

    public function findloaihang(){
        $id = $_POST['id'];
        $col = ['IDLoaiHang'];
        $datas = $this-> AdminModel -> findloaihang($col,$id);
        // $data = array_values($datas);
         print_r($datas) ;
        //echo json_encode($datas) ;
        // echo '123';
    }
}

?>