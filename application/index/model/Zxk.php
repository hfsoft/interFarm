<?php
namespace application\index\model;

use think\Model;

class Zxk extends Model
{
    public  function  getData(){
        $result=$this->select();
        return json_encode($result);
    }
}
?>