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
    echo "<pre>";
    print_r($getAllSP);
    echo "</pre>";
    // return $this -> view('frontend.customer.index', ['getAllSP' => $getAllSP]);
  }

  public function getSPLH()
  {
    $idLH = $_POST['idLH'];
    $getSPbyLH = $this->CustomerModel->getSPbyLH($idLH);
    return $this->view(
      'frontend.customer.product_action',
      ['getSPbyLH' => $getSPbyLH]
    );
  }
}
