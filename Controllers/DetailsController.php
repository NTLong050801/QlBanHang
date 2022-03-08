<?php
class DetailsController extends BaseController
{
  public function __construct()
  {
    $this->loadModel('ShopModel');
    $this->ShopModel = new ShopModel;
    $this->loadModel('CustomerModel');
    $this->CustomerModel = new CustomerModel;
    $this->loadModel("AdminModel");
    $this->AdminModel = new AdminModel;
  }
  public function index()
  {
      $IDSP = $_GET['IDSP'];
      $IDLH = $_GET['IDLH'];;
      $IDNCC = $_GET['IDNCC'];
      $ar = ["IDSanPham"=>$IDSP];
      $data_product  = $this->AdminModel->  findByID("sanpham", $ar);
     return $this->view("frontend.customer.details",[
        'data_product'=> $data_product,     
    ]);
  }
}
