<?php
namespace app\common\model\mysql;

use think\Model;
use app\BaseController;
use app\common\model\mysql\AdminUser;
use think\facade\View;

class adminuser extends Model {
	/**
	 * 根据用户名获取后端的数据
	 * getdminserAUByUsername
	 * @param $username
	 * @return adminuser|array|false|Model|null
	 * @throws \think\db\exception\DataNotFoundException
	 * @throws \think\db\exception\DbException
	 * @throws \think\db\exception\ModelNotFoundException
	 */
	public function getdminserAUByUsername($username){
		if (empty($username)){
			return false;
		}
		$where = [
			"username"=>trim($username),
		];
		$result = $this->where()->find();
		return $result;

	}

	/***
	 * 根据主键id更新数据表的数据
	 * @param $id
	 * @param $data
	 * @return false
	 */
	public function updateById($id,$data){
		$id = intval($id);
		if (empty($id) ||empty($data) ||!is_array($data)){
			return false;

		}
	}
}