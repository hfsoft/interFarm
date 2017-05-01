<?php
namespace app\index\controller;

use think\Controller;

class Xiaozu extends Controller
{
    /**
     *  分组情况
     *  @作者     hexiong
     *  @生成日期   2017-04-19T00:51:00+0800
     *  @return [type]                   [description]
     */
    public function fenzu()
    {   
         
        return view("index");
    }


    /**
     *  任务列表
     *  @作者     hexiong
     *  @生成日期   2017-04-19T00:51:00+0800
     *  @return [type]                   [description]
     */
    public function renwulist()
    {   
         
        return view("renwu");
    }

    /**
     *  任务内容
     *  @作者     hexiong
     *  @生成日期   2017-04-19T01:03:29+0800
     *  @return [type]                   [description]
     */
    public function renwunr(){
            return view("renwu_detail");
    }

     
    
    
}
