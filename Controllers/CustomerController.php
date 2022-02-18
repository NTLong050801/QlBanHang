<?php 
class CusTomerController extends BaseController{
  public function __construct()
  {
      $this->loadModel('CustomerModel');
      $this->CustomerModel = new CustomerModel();
  }
    public function index(){
      $getAllLoaiHang = $this -> CustomerModel->getAllLoaiHang();
      $getAllSP = $this -> CustomerModel -> getAllSP();
      if(isset($_POST['id'])){
        $id = $_POST['id'];
        $nameColID = $_POST['nameCOlID'];
        $getSPbyLH = $this -> CustomerModel -> getSPLH($id, $nameColID);
        return $this-> view('frontend.customer.index',
                          ['getAllLoaiHang' => $getAllLoaiHang,
                          'getAllSP' => $getAllSP, 'getSPbyLH' => $getSPbyLH]);
      }
      else{
        return $this-> view('frontend.customer.index',
                          ['getAllLoaiHang' => $getAllLoaiHang,
                          'getAllSP' => $getAllSP]);
      }
   
    }

    public function getAllLoaiHang(){
      $getAllLoaiHang = $this -> CustomerModel->getAllLoaiHang();
      // return $this-> view('frontend.customer.index',['getAllLoaiHang' => $getAllLoaiHang]);
      echo "<pre>";
      print_r($getAllLoaiHang);
      echo "</pre>";
    }

    public function getAllSP(){
        $getAllSP = $this -> CustomerModel -> getAllSP();
        echo "<pre>";
        print_r($getAllSP);
        echo "</pre>";
        // return $this -> view('frontend.customer.index', ['getAllSP' => $getAllSP]);
    }


}
