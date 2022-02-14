<?php
class BaseModel extends Database
{
    public function __construct()
    {
        $this->connect =$this->connect();
    }
    public function _query($sql)
    {
      return mysqli_query($this->connect,$sql);
    }


}
?>