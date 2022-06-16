<?php

class DetailsController extends BaseController
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
    }

    public function index()
    {
        if (isset($_GET['IDSP'])) {

            $IDSP = $_GET['IDSP'];
            $data_SP = $this->AdminModel->findByID("SanPham", [
                "IDSanPham" => $IDSP,
            ]);
            $IDLH = $data_SP[0]['IDLoaiHang'];
            $IDNCC= $data_SP[0]['IDNhaCungCap'];
            $get_category = $this->CustomerModel->get_category();
            $data_lh = $this->AdminModel->findByID(
                "LoaiHang",
                [
                    "IDLoaiHang" => $IDLH,
                ]
            );
            //SẢN phẩm cùng idlh
            $SPTT = $this-> AdminModel -> type_item_canvans([
                "IDLoaiHang" => $IDLH
            ],4);
            // sp cùng id ncc
            $SPNCC = $this-> AdminModel -> type_item_canvans([
                "IDNhaCungCap" => $IDNCC
            ],4);
            //sản phẩm ngẫu nhiene
            $SPNN = $this-> AdminModel -> type_item_canvans(0,4);
            return $this->view(
                "frontend.customer.details",
                [
                    'get_categories' => $get_category,
                    "data_sp" => $data_SP,
                    "data_lh" => $data_lh,
                    "SPTTS" => $SPTT,
                    'SPNCCS' => $SPNCC,
                    'SPNNS' => $SPNN
                ]
            );
        } else {
            return  header("Location: ".self::URL."controller=shop");
        }
    }
}
