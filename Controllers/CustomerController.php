<?php 
class CusTomerController extends BaseController{
    public function __construct()
    {
      $this-> loadModel('CustomerModel');
      $this->CustomerModel = new CustomerModel;
    }
    public function index(){
      $product_selling = $this->CustomerModel->product_selling();
      $product_new  =$this->CustomerModel->product_new();
      $category_item =  $this->CustomerModel->category_item();
      $category = $this ->CustomerModel ->get_category();
      $sum  = $this->CustomerModel -> sum_type();
      return  $this-> view('frontend.customer.index',[
          'category' =>  $category,
          'sum'      => $sum,
          'categories_item' => $category_item,
          'product_new' => $product_new
       ]);
    }
   public function sweater()
   {
    $id = $_POST['id'];
     $product_type = $this->CustomerModel-> type_item($id);
    return $this->view('frontend.customer.type_item',[
      'product_type' => $product_type
    ]);
   }
  
    

}
?>