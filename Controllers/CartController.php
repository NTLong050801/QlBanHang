<?php

class CartController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('ShopModel');
        $this->ShopModel = new ShopModel;
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel;
        $this->loadModel('AdminModel');
        $this->AdminModel = new AdminModel;
        $this->loadModel('DetailsModel');
        $this->DetailsModel = new DetailsModel;
        $this->loadModel('CartModel');
        $this->CartModel = new CartModel;
    }

    public function checkLogin(){
      if(isset($_SESSION['login'])){
         echo 'true';
      }else{
        echo 'false';
      }
    }
    public function addCart(){
      // $data = $_GET;
      // print_r($data);
      $IDSP = $_GET['IDSP'];
      $this-> CartModel-> addCart($_SESSION['IDKhachHang'],$IDSP,1);
    }
    
    
}
