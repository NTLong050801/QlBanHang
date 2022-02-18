<?php 
class CusTomerController extends BaseController{
  public function __construct()
  {
      $this->loadModel('CustomerModel');
      $this->CustomerModel = new CustomerModel();
  }
    public function index(){
      $id = $_POST['id'];
      $nameColID = $_POST['nameCOlID'];
      $getAllLoaiHang = $this -> CustomerModel->getAllLoaiHang();
      $getAllSP = $this -> CustomerModel -> getAllSP();
      $getSPbyLH = $this -> CustomerModel -> getSPLH($id, $nameColID);
      return $this-> view('frontend.customer.index',
                          ['getAllLoaiHang' => $getAllLoaiHang,
                          'getAllSP' => $getAllSP]);
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
?>