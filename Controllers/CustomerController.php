<?php 
class CusTomerController extends BaseController{
    public function __construct()
    {
      $this-> loadModel('CustomerModel');
      $this->CustomerModel = new CustomerModel;
    }
    public function index(){
      $category_item =  $this->CustomerModel->category_item();
      $category = $this ->CustomerModel ->get_category();
      $sum  = $this->CustomerModel -> sum_type();
      return  $this-> view('frontend.customer.index',[
          'category' =>  $category,
          'sum'      => $sum,
          'categories_item' => $category_item
       ]);
    }
    // public function category_item()
    // {
    //   $category_item =  $this->CustomerModel->category_item();
    //   return $this-> view('frontend.customer.index',
    //   [
    //     'category_item' => $category_item
    //   ]);
    // }

    public function get_featured_item(){
      $id = $_POST['id'];

      $datas = $this->CustomerModel -> get_featured_item($id);
      return $this->view('frontend.customer.featured__item',[
        'datas'=> $datas
      ]);
      // print_r($datas);
    }
    

}
?>