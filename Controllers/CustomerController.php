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
    $product_selling = $this->CustomerModel->product_selling();
    $product_new  = $this->CustomerModel->product_new();
    $category_item =  $this->CustomerModel->category_item();
    $category = $this->CustomerModel->get_category();
    $sum  = $this->CustomerModel->sum_type();
    return  $this->view('frontend.customer.index', [
      'category' =>  $category,
      'sum'      => $sum,
      'categories_item' => $category_item,
      'product_new' => $product_new
    ]);
  }
  public function sweater()
  {
    $id = $_POST['id'];
    // trang nhận đc vd : trang 3,  trang 4
    $start = $_POST['start'];
    // danh sách sp ở trang 3 , trang 4
    $product_type = $this->CustomerModel->type_item($id,$start);
    // tính tổng số trang
    $tongsotrang = $this->CustomerModel -> total_page($id);
    return $this->view('frontend.customer.type_item', [
      'product_type' => $product_type,
      'tongsotrang' => $tongsotrang
    ]);
  }
  public function search()
  {
    $ar = $_POST;
    $val = reset($ar);
    $search_pro = $this->CustomerModel->search($val);
    return $this->view(
      'frontend.customer.featured__item',
      [
        'datas' => $search_pro
      ]
    );
  }
  public function show_pro_price()
  {
    $price = $_POST['val'];
    $price_choose = $this -> CustomerModel -> show_pro_price($price);
    return $this->view(
      'frontend.customer.featured__item',
      [
        'datas' => $price_choose
      ]
    );
    
  }
}
