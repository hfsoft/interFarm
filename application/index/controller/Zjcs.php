<?php
namespace app\index\controller;

use think\Controller;

class Zjcs extends Controller
{
    public function nr()
    {   
        $id=input("id");
        return view("zjcs/".$id);
    }

     
    
    
}
