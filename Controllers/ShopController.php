<?php
class ShopController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('ShopModel');
        $this->ShopModel = new ShopModel ; 
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel ; 
       
    }
    public function index()
    {
       $get_category= $this->CustomerModel->get_category();
       $top_sanpham = $this->ShopModel->top_sanpham();
      $allSanPham = $this->ShopModel->allSanPham();
      return $this ->view("frontend.customer.shop",[
          "get_category" => $get_category,
          "top_sanpham"  => $top_sanpham ,
          'allSanPham'   => $allSanPham ,
       ]);
    }
  
}
?>