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
        $spBanChay = $this->ShopgridModel->spBanChay($limit);


        return $this->view(
            'frontend.customer.shopGrid',
            [
                'getAllLoaiHang' => $getAllLoaiHang,
                'spBanChay' => $spBanChay,
            ]
        );
    }
    public function getAllSPshop()
    {
        $limitSP = 9;
        $sortBy = $_POST['sortBy'];
        $idLH = $_POST['idLH'];
        $slSP = $this->CustomerModel->countProduct($idLH);
        $soTrang = ceil($slSP / 4);
        $getAllSPshop = $this->ShopgridModel->getAllSPshop($sortBy, $limitSP);
        // echo "<pre>";
        // print_r($getAllSPshop);
        // echo "</pre>";
        return $this->view(
            'frontend.customer.shopGrid_action',
            [
                'getAllSPshop' => $getAllSPshop,
                'soTrang' => $soTrang,

            ]
        );
    }

}
