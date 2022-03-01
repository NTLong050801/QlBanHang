<?php
class CusTomerController extends BaseController
{
  public function __construct()
  {
    $this->loadModel('CustomerModel');
    $this->CustomerModel = new CustomerModel;
  }
  public function index()
  {
    if (isset($_POST['id'])) {
      $id = $_POST['id'];
    } else {
      $id =  0;
    }
    $product_selling = $this->CustomerModel->product_new('DonGiaBan');
    $product_new  = $this->CustomerModel->product_new("IDSanPham");
    $product_sold = $this-> CustomerModel -> product_new("SoLuongBan");
    $category_item =  $this->CustomerModel->category_item();
    $category = $this->CustomerModel->get_category();
    $sum  = $this->CustomerModel->sum_type();
    // $val = '';
    $tongsotrang = $this->CustomerModel->total_page($id);
    return  $this->view('frontend.customer.index', [
      'category' =>  $category,
      'sum'      => $sum,
      'categories_item' => $category_item,
      'product_solds'=> $product_sold,
      'product_news' => $product_new,
      'tongsotrang' => $tongsotrang,
      'product_sellings' => $product_selling,
    ]);
  }
  public function sweater()
  {
    $id = $_POST['id'];
    if (isset($_POST['tranghientai'])) {
      $tranghientai = $_POST['tranghientai'];
    } else {
      $tranghientai = 1;
    }

    // trang nhận đc vd : trang 3,  trang 4
    //$start = $_POST['start'];
    // danh sách sp ở trang 3 , trang 4
    $product_type = $this->CustomerModel->type_item($id, $tranghientai);
    // tính tổng số trang
    // $val = '';
    $tongsotrang_id = $this->CustomerModel->total_page($id);
    return $this->view('frontend.customer.type_item', [
      'tranghientai' => $tranghientai,
      'product_type' => $product_type,
      'tongsotrang_id' => $tongsotrang_id,
      'IDLH' => $id
    ]);
  }
  public function search()
  {
    $val = $_POST['TenSP'];
    if(isset($_POST['tranghientai'])){
      $tranghientai = $_POST['tranghientai'];
    }else{
      $tranghientai = 1;
    }
    $search_pro = $this->CustomerModel->search($val,$tranghientai);
    $tongsotrang_id = $this->CustomerModel->total_page_search_sp($val);
    return $this->view(
      'frontend.customer.type_item',
      [
        'product_type' => $search_pro,
        'tongsotrang_id' => $tongsotrang_id,
        'tranghientai' => $tranghientai,
        'val' => $val
      ]
    );
  }
  public function show_pro_price()
  {
    if (isset($_POST['tranghientai'])) {
      $tranghientai = $_POST['tranghientai'];
    } else {
      $tranghientai = 1;
    }
    $price = $_POST['val'];
    $IDLoaiHang = $_POST['IDLoaiHang'];
    $price_choose = $this->CustomerModel->show_pro_price($price, $IDLoaiHang,$tranghientai);
    $tongsotrang_id = $this->CustomerModel->total_page_search($IDLoaiHang, $price);
    return $this->view(
      'frontend.customer.type_item',
      [
        'product_type' => $price_choose,
        'tongsotrang_id' => $tongsotrang_id,
        'tranghientai' => $tranghientai,
        'IDLH' => $IDLoaiHang,
        'price' => $price
      ]
    );
  }
}
