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
    
    public function delete($table, $ar)
  {
    foreach($ar as $key => $val){
      $where = $key.'='."'$val'"  ;
    }
    $sql = "DELETE from $table where $where";
    $query = $this->query($sql);
    //  echo $sql;
    if ($query) {
      echo 'Xóa thành công';
    } else {
      echo 'Xóa thất bại';
    }
  }

  public function find($table,$ar)
  {
    foreach($ar as $key => $val){
      $where = $key.'='."'$val'"  ;
    }
    $sql = "SELECT * from $table where $where";
    $query = $this->query($sql);
    $ar = [];
    while ($row =  mysqli_fetch_assoc($query)) {
      array_push($ar, $row);
    }
    return $ar;
  }

  public function update($table,$ar,$ar_id){
    $new_ar = [];
    foreach($ar as $key => $val){
      array_push($new_ar,$key.'='."'$val'")  ;

    }
    $new_ar = implode(',',$new_ar);
    foreach($ar_id as $key => $val){
      $where = $key.'='."'$val'"  ;
    }
    $sql = "UPDATE $table set $new_ar where $where ";
    //echo $sql;
    $query = $this->query($sql);
    if ($query) {
      echo 'Update thành công';
    } else {
      echo 'Update thất bại';
    }
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

    public function findByID($table, $id, $nameColID){
        $sql = "SELECT * FROM $table where $nameColID = '$id'";
        $query = $this -> query($sql);
        $ar = [];
        while($row = mysqli_fetch_assoc($query)){
          array_push($ar,$row);
        }
        return $ar;
    }

    public function query($sql)
    {
      return mysqli_query($this->connect,$sql);
    }

}
