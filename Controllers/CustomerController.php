<?php 
class CusTomerController extends BaseController{
    
    public function index(){
      // $this->loadModel('CustomerModel');
       $this-> view('frontend.customer.index',[]);

    }
}
?>