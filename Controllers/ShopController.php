<?php
class ShopController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('ShopModel');
        $this->ShopModel = new ShopModel;
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel;
        $this->loadModel('AdminModel');
        $this->AdminModel = new AdminModel;
    }

    public function index()
    {

        $get_category = $this->CustomerModel->get_category();
        $top_sanpham = $this->ShopModel->top_sanpham();
        $product_new = $this->ShopModel->product_new(0);
        $product_new_two = $this->ShopModel->product_new(3);
        $allncc = $this->AdminModel->allNhaCungCap();
        return $this->view("frontend.customer.shop",[
            "get_category" => $get_category,
            "top_sanpham"  => $top_sanpham,
            "product_news" => $product_new,
            "product_new_twos" => $product_new_two,
            "allnccs" => $allncc,
        ]);
    }
    // click loại hàng
    public function get_item()
    {
        if (isset($_POST['IDLH'])) {
            $idlh = $_POST['IDLH'];
        } else {
            $idlh = 0;
        }
        if (isset($_POST['page'])) {
            $tranghientai = $_POST['page'];
        } else {
            $tranghientai = 1;
        }
        if (isset($_POST['orderby'])) {
            $orderby = $_POST['orderby'];
        } else {
            $orderby = '';
        }
        $allSanPham = $this->ShopModel->allSanPham($idlh, $tranghientai, $orderby);
        $total_page = $this->ShopModel->total_page($idlh);
        return $this->view("frontend.customer.shop_item", [
            'allSanPham'   => $allSanPham,
            'total_page' => $total_page,
            'tranghientai' => $tranghientai,
            'IDLH' => $idlh

        ]);
    }
    // đếm sản phẩm
    public function count_product()
    {
        $IDLoaiHang = $_POST['IDLoaiHang'];
        if (isset($_POST['price_min'])&& $_POST['price_min'] !='') {
            $price_min = $_POST['price_min'];
            $price_max = $_POST['price_max'];
            echo $this->ShopModel->count_product($IDLoaiHang, $price_min, $price_max);
        } else if (isset($_POST['IDNCC'])) {
            echo $this->ShopModel->count_product_ncc($_POST['IDNCC']);
        } else {
            echo $this->ShopModel->count_product($IDLoaiHang, '', '');
        }
    }
    //click lọc giá (loại hàng)
    public function search_by_price()
    {
        $price_min = $_POST['price_min'];
        $price_max = $_POST['price_max'];
        $IDLoaiHang = $_POST['IDLoaiHang'];
        $page = $_POST['page'];
        if (isset($_POST['orderby'])) {
            $orderby = $_POST['orderby'];
        } else {
            $orderby = '';
        }
        $data = $this->ShopModel->search_by_price($price_min, $price_max, $IDLoaiHang, $page, $orderby);
        $total_page = $this->ShopModel->total_page_price($price_min, $price_max, $IDLoaiHang);
        // print_r($data);
        return $this->view("frontend.customer.shop_item", [
            'allSanPham'   => $data,
            'total_page' => $total_page,
            'tranghientai' => $page,
            'IDLH' => $IDLoaiHang,
            'price_min' => $price_min,
            'price_max' => $price_max

        ]);
    }

    //click ncc
    public function all_ncc()
    {
        $IDNCC = $_POST['IDNCC'];
        if (isset($_POST['page'])) {
            $tranghientai = $_POST['page'];
        } else {
            $tranghientai = 1;
        }
        if (isset($_POST['orderby'])) {
            $orderby = $_POST['orderby'];
        } else {
            $orderby = '';
        }
        $ncc_data = $this->ShopModel->all_ncc($IDNCC, $tranghientai, $orderby);
        $total_page = $this->ShopModel->total_page_ncc($IDNCC);
        return $this->view("frontend.customer.shop_item", [
            'allSanPham'   => $ncc_data,
            'total_page' => $total_page,
            'tranghientai' => $tranghientai,
            'IDNCC' => $IDNCC
        ]);
    }
}
