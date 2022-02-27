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
    $product_selling = $this->CustomerModel->product_selling();
    $product_new  = $this->CustomerModel->product_new();
    $category_item =  $this->CustomerModel->category_item();
    $category = $this->CustomerModel->get_category();
    $sum  = $this->CustomerModel->sum_type();
  //  $tongsotrang = $this->CustomerModel->total_page($id);
    return  $this->view('frontend.customer.index', [
      'category' =>  $category,
      'sum'      => $sum,
      'categories_item' => $category_item,
      'product_new' => $product_new,
     // 'tongsotrang' => $tongsotrang
    ]);
  }
  public function sweater()
  {
    $id = $_POST['id'];
    // trang nhận đc vd : trang 3,  trang 4
    //$start = $_POST['start'];
    // danh sách sp ở trang 3 , trang 4
    $product_type = $this->CustomerModel->type_item($id);
    // tính tổng số trang
    $tongsotrang_id = $this->CustomerModel->total_page($id);
    return $this->view('frontend.customer.type_item', [
      'product_type' => $product_type,
     'tongsotrang_id' => $tongsotrang_id
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
    $price_choose = $this->CustomerModel->show_pro_price($price);
    return $this->view(
      'frontend.customer.featured__item',
      [
        'datas' => $price_choose
      ]
    );
  }
<<<<<<< Updated upstream
  public function phantrang()
  {
    if(isset($_POST['sotrang']))
    {
    
    }else 
    {

    }
=======
  public function page_num()
  {
    $id_loaihang = $_POST['id_loaihang'];
    $page_num = $this->CustomerModel->page_num($id_loaihang);
    return $this->view(
      'frontend.customer.type_item',
      [
        'tongsotrang' => $page_num
      ]
    );
>>>>>>> Stashed changes
  }

 
}
