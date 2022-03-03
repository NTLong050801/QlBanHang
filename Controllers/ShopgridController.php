<?php
class ShopgridController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('ShopgridModel');
        $this->ShopgridModel = new ShopgridModel();
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel();
    }
    public function index()
    {
        $limit = 5;
        $getAllLoaiHang = $this->ShopgridModel->getAllLoaiHang();
        $spBanChay = $this -> ShopgridModel -> spBanChay($limit);
        // echo "<pre>";
        // print_r($spBanChay);
        // echo "</pre>";
        return $this->view(
            'frontend.customer.shopGrid',
            [
                'getAllLoaiHang' => $getAllLoaiHang,
                'spBanChay' => $spBanChay,
            ]
        );
    }
}
