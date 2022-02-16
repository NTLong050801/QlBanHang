<?php
class BaseModel extends Database
{
    public function __construct()
    {
        $this->connect =$this->connect();
    }

    //lấy hết data từ table
    public function getAll($table){
      $sql = "SELECT * from $table";
      $query = $this-> query($sql);
      $ar = [];
      while($row=  mysqli_fetch_assoc($query)){
        array_push($ar,$row);
      }
      return $ar;
    }

    // đếm số bản ghi trong table
    public function count($column,$table){
      $column = array_values($column)[0];
       $sql = "SELECT count($column) as IDLoaiHang  from $table";
       $query = $this->query($sql);
       return mysqli_fetch_assoc($query)['IDLoaiHang'];
    }
    //thêm bản ghi vào bảng
    public function add($table,$data){
      $column = implode(',',array_keys($data));
      $vals = array_values($data);
      $arr_vals = [];
      foreach($vals as $val){
        array_push($arr_vals,"'${val}'");
      }
      $str_val = implode(',',$arr_vals);

      $sql = "INSERT INTO $table($column) values ($str_val)";
       $query = $this->query($sql);
      // echo $sql;
      if($query){
        echo 'Thêm thành công';
      }else{
        echo 'Thêm thất bại';
      }
    }
    // lấy 1 sản phẩm của mỗi loại hàng 
    public function categories_item()
    {
      $sql = "select TenSP from  sanpham SP,loaihang LH where SP.IDLoaiHang = LH.IDLoaiHang GROUP BY TenSP";
      $query = $this->query($sql);
      $ar = [];
      while ($row =  mysqli_fetch_assoc($query))
      {
        array_push($ar,$row);
      }
      return $ar;
    }
    public function query($sql)
    {
      return mysqli_query($this->connect,$sql);
    }




}
