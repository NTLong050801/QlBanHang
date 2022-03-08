<?php
class ShopController extends BaseController
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
    $id = 0;
    //  $IDLoaiHang = $_POST['IDLoaiHang'];
    $get_category = $this->CustomerModel->get_category();
    $top_sanpham = $this->ShopModel->top_sanpham();
    $total_page = $this->CustomerModel->total_page($id);
    $product_new  = $this->ShopModel->product_new('IDSanPham', 0, 3);
    $page_product  = $this->ShopModel->product_new('IDSanPham', 3, 3); // trang sản phẩm mới nhất 
    $allNhaCungCap = $this->AdminModel->allNhaCungCap();
    // $count_pro  = $this->ShopModel->count_product($IDLoaiHang);
    return $this->view("frontend.customer.shop", [
      "get_category" => $get_category,
      "top_sanpham"  => $top_sanpham,
      "product_new"  => $product_new,
      "page_product" => $page_product,
      "allNhaCungCap" => $allNhaCungCap,
      // "count_pro"       =>  $count_pro,
    ]);
  }
  public function shop_item()
  {
    // $price_max = $_POST['price_max'];
    // $price_min = $_POST['price_min'];
    if (isset($_POST['order_by'])) {
      $sort_by = $_POST['order_by'];
    } else {
      $sort_by = "";
    }
    $IDLoaiHang = $_POST['IDLoaiHang'];
    $Tranghientai = $_POST['Tranghientai'];
    $categories_item = $this->ShopModel->allSanPham($IDLoaiHang, $Tranghientai, $sort_by);
    $total_page = $this->ShopModel->total_page($IDLoaiHang);
    return $this->view("frontend.customer.shop_item", [
      "categories_item" => $categories_item,
      "total_page"      => $total_page,
      "IDLoaiHang"      => $IDLoaiHang,
      "Tranghientai"    => $Tranghientai,
    ]);
  }
  public function count_product()
  {
    $IDLoaiHang  = $_POST['IDLoaiHang'];
    if (isset($_POST['price_max'])) {
      $price_max = $_POST['price_max'];
      $price_min = $_POST['price_min'];
      $count_pro_between = $this->ShopModel->count_pro_between($IDLoaiHang, $price_min, $price_max);
      echo $count_pro_between;
    } else {
      $count_pro =  $this->ShopModel->count_pro($IDLoaiHang);
      echo $count_pro;
    }
  }
  public function search_by_price()
  {
    $IDLoaiHang = $_POST['IDLoaiHang'];
    $price_max = $_POST['price_max'];
    $price_min = $_POST['price_min'];
    $Tranghientai = $_POST['Tranghientai'];
    if (isset($_POST['order_by'])) {
      $order_by = $_POST['order_by'];
    } else {
      $order_by = "";
    }
    $fillter_product = $this->ShopModel->fillter_product($price_min, $price_max, $IDLoaiHang, $Tranghientai, $order_by); //loc san pham theo gia 
    $total_page_by_id = $this->ShopModel->total_page_by_price($IDLoaiHang, $price_max, $price_min);

    return $this->view("frontend.customer.shop_item", [
      "categories_item" => $fillter_product,
      "total_page"      => $total_page_by_id,
      "IDLoaiHang"      => $IDLoaiHang,
      "Tranghientai"    => $Tranghientai,
      "price_min"       => $price_min,

    ]);
    // print_r($total_page_by_id);
  }
}
