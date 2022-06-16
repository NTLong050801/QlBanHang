<?php 
class LoginModel extends BaseModel {
    public function checkEmail($email){
        $sql = "SELECT * from KhachHang where email like '$email'";
        $query = $this-> query($sql);
        if(mysqli_num_rows($query)>0){
            return false;
        }else{
            return true;
        }
    }
    public function checkLogin($email,$pass){
        $sql = "SELECT * from KhachHang where email like '$email'";
        $query = $this-> query($sql);
        if(mysqli_num_rows($query)>0){
            while($row = mysqli_fetch_assoc($query)){
                $pass_hash = $row['password'];
                if(password_verify($pass, $pass_hash)){
                    $_SESSION['IDKhachHang'] = $row['IDKhachHang'];
                    return true;
                }else{
                    return false;
                }
            }
        }else{
            return false;
        }


    }
}