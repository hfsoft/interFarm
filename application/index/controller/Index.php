<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function register(){
        return view("register");
    }

    public function zhangjieceshi(){
        return view("zhangjieceshi");
    }

    /**
     *  登录
     *  @作者     hexiong
     *  @生成日期   2017-04-18T13:24:51+0800
     *  @return [type]                   [description]
     */
    public function login(){
        $yh=input('yh');
        $mima=input('mima');
        if($yh=="changna@qq.com"  and $mima=="123456"){
            return view("index");
        }else{
            $this->error('登录失败',Url('Index/index/logout'));
        }
    }

    /**
     *  课程介绍
     *  @作者     hexiong
     *  @生成日期   2017-04-14T00:00:20+0800
     *  @return [type]                   [description]
     */
    public function jieshao(){
        
        return view("jieshao");
    }

    /**
     *  教学视频
     *  @作者     hexiong
     *  @生成日期   2017-04-15T16:36:18+0800
     *  @return [type]                   [description]
     */
    public function shipin(){
        return view("shipin");
    }

    /**
     *  教学大纲
     *  @作者     hexiong
     *  @生成日期   2017-04-16T23:20:21+0800
     *  @return [type]                   [description]
     */
    public function jiaoxuedagang(){
        return view("jiaoxuedagang");
    }


    /**
     *  教学设计
     *  @作者     hexiong
     *  @生成日期   2017-04-16T23:20:21+0800
     *  @return [type]                   [description]
     */
    public function jiaoxuesheji(){
        return view("jiaoxuesheji");
    }

    /**
     *  教学设计内容
     *  @作者     hexiong
     *  @生成日期   2017-04-16T23:20:21+0800
     *  @return [type]                   [description]
     */
    public function jiaoxueshejinr(){
        $id=input("id");
        return view("index/sheji/".$id);
    }

    /**
     *  实训指导
     *  @作者     hexiong
     *  @生成日期   2017-04-16T23:20:21+0800
     *  @return [type]                   [description]
     */
    public function shixunzhidao(){
        return view("shixunzhidao");
    }



    /**
     *  实训指导内容
     *  @作者     hexiong
     *  @生成日期   2017-04-16T23:20:21+0800
     *  @return [type]                   [description]
     */
    public function shixunzhidaonr(){
        $id=input("id");
        return view("index/shixun/".$id);
    }


    /**
     *  退出
     *  @作者     hexiong
     *  @生成日期   2017-04-18T13:13:34+0800
     *  @return [type]                   [description]
     */
    public function logout(){
        return view("index/login");
    }


    
    
}
