<?php
class LoginController extends BaseController
{

    public function __construct()
    {
        $this->loadModel('ShopModel');
        $this->ShopModel = new ShopModel;
        $this->loadModel('CustomerModel');
        $this->CustomerModel = new CustomerModel;
        $this->loadModel('AdminModel');
        $this->AdminModel = new AdminModel;
        $this->loadModel('LoginModel');
        $this->LoginModel = new LoginModel;
    }
    public function add_customer()
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo '<pre>';
        print_r($_POST);
        $msg =  $this-> AdminModel ->add_all("KhachHang",$_POST);
        $_SESSION['thongbao'] = $msg;
        header("Location:".self::URL);
        // return $msg;
        //echo $msg;
    }

    public function checkEmail()
    {
        $email = $_POST['val'];
        $msg = $this->LoginModel->checkEmail($email);
        echo  $msg;
    }
    public function checkLogin(){
        
        $email = $_POST['Email'];
        $pass = $_POST['password'];
        $check = $this-> LoginModel -> checkLogin($email,$pass);
        if($check == true){
            $_SESSION['check_login'] = $email;
            header("Location:".self::URL);
        }else{
           echo "Tài khoản mật khẩu không chính xác.";
        }
       
    }
    public function logout(){
        session_destroy();
        header("Location:".self::URL);
    }
}
