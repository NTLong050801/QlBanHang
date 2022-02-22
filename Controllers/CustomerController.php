<?php
class CusTomerController extends BaseController
{
  public function __construct()
  {
    $this->loadModel('CustomerModel');
    $this->CustomerModel = new CustomerModel();
  }
  public function index()
  {
    $getAllLoaiHang = $this->CustomerModel->getAllLoaiHang();
    $getAllSP = $this->CustomerModel->getAllSP();
    return $this->view(
      'frontend.customer.index',
      [
        'getAllLoaiHang' => $getAllLoaiHang,
        'getAllSP' => $getAllSP
      ]
    );
  }

  public function getAllLoaiHang()
  {
    $getAllLoaiHang = $this->CustomerModel->getAllLoaiHang();
    // return $this-> view('frontend.customer.index',['getAllLoaiHang' => $getAllLoaiHang]);
    echo "<pre>";
    print_r($getAllLoaiHang);
    echo "</pre>";
  }

  public function getAllSP()
  {
    $getAllSP = $this->CustomerModel->getAllSP();
    // return $this -> view('frontend.customer.index', ['getAllSP' => $getAllSP]);
  }

  public function getSPLH()
  {
    $idLH = $_POST['idLH'];
    if($idLH == 0){
      $getAllSP = $this->CustomerModel->getAllSP();
      return $this->view(
        'frontend.customer.product_action',
        ['getProducts' => $getAllSP]
      );
    }
    else{
      $getSPbyLH = $this->CustomerModel->getSPbyLH($idLH);
      return $this->view(
        'frontend.customer.product_action',
        ['getProducts' => $getSPbyLH]
      );
    }
  }

  public function search(){
      // $keySearch = $_POST['keySearch'];
      $keySearch = "hood";
      $listSP = $this->CustomerModel->search($keySearch);
      return $this->view(
        'frontend.customer.product_action', ['getProducts' => $listSP]
      );
  }
}
?>