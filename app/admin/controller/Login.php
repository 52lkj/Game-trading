<?php

namespace app\admin\controller;

use app\BaseController;
use app\common\model\mysql\Adminuser;
use think\facade\View;
use think\helper\Str;

class Login extends BaseController{
	public function index(){
		return View::fetch();
	}
	public function md5(){
		//admin admin
		echo md5("admin_yx_abc");
	}
	public function check(){
		if (!$this->request->isPost()){
			return show(name:"status.error",message:"请求方式错误");

		}
		//参数校验：1、原生方式 2、TP6验证方式

		$username =$this->request->param("username","","trim");
		$password = $this->request->param("password","","trim");
		$captcha = $this->request->param("captcha","","trim");
		if (empty($username) ||empty($password)||empty($captcha)){
			return show(name:"status.error",message:"参数不能为空");
		}
		//校验验证码
		if (!captcha_check($captcha)){
			return show(name:"status.error",message:"验证码不正确");

		}
		try {
			$adminuserobj = new Adminuser();
			$adminuser = $adminuserobj->getdminserAUByUsername($username);

			if (empty($adminuser) || $adminuser->status != config("status.mysql.table_normal")) {
				return show(name: "status.error", message: "不存在该用户");
			}
			$adminuser->$adminuser->toArray();

			//判断密码是否正确
			if ($adminuser['password'] != md5($password . "yx_adc")) {
				return show(name: "status.error", message: "密码错误");
			}

			//需要记录信息到MySQL表中
			$updateData = [
				"last_login_time" => time(),
				"last_login_ip" => request()->ip(),
				"update_time"=>time(),
			];
			$res = $adminuserobj->updateById($adminuser['id'], $updateData);
			if (empty($res)) {
				return show(name: "status.success", message: "登录失败");
			}
		}catch (\Exception $e){



			//todo 记录日志$e->getMessage();
			return show(name: "status.success", message: "内部异常，登录失败");
		}

		//记录session
		session(config("admin.session_admin"),$adminuser);
		return show(name:"status.success",message:"登录成功");
	}
}