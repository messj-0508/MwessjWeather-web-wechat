<?php
namespace app\index\controller;

use think\Controller;

class Register extends Controller
{
    public function index()
    {
    	return $this->fetch();
    } 
    public function signIn()
    {
    	$this->redirect(url('login/index'));
    }
    public function register()
    {    	
    	$param = input('post.');
    	if(empty($param['user_name'])){
    		
    		$this->error('用户名不能为空');
    	}
    	
    	if(empty($param['user_pwd'])){
    		
    		$this->error('密码不能为空');
    	}
    	$data = [		//接受传递的参数
				'user_name' => $param['user_name'],
				'user_pwd' => md5($param['user_pwd']),
			    ];
			
		/*	Db('表名') 数据库助手函数*/
			if(Db('users') -> insert($data)){		//添加数据
				return $this->success('注册成功','signIn');	//成功后跳转  signIn 界面
			}else{
				return $this->error('注册失败');
			}
    }
}