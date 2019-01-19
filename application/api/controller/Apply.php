<?php
namespace app\api\controller;

use think\Controller;

class Apply extends Controller
{
  	public function test(){
    	$param = input('post.');
        
        $postdata = [
              'type'=> $param['type'],
              'usr_name' => $param['usr_name'],
              'usr_number' => $param['usr_number'],
              'department' => $param['major'],
              'usr_phone' => $param['usr_phone'],
              'car_number' => $param['car_number'],
              'car_owner' => $param['car_owner'],
              'car_card' => '测试',
              'usr_card' => '测试',
              'note' => $param['note'],
        ];
        $model = model('app\api\model\Apply');
        $ret = $model->saveForm($postdata);
        return json($postdata);
      
    }
    public function save($postdata)
    {
        $postdata = [
            'usr_name' => '路人甲',
            'usr_number' => '1902230057',
            'department' => '软微测试部',
            'usr_phone' =>'153476482564',
            'car_number' => '京X XXXXXXX',
            'car_owner' => '路人甲',
			'car_card' => '行驶证图片存放路径',
			'usr_card' => '驾驶证图片存放路径',
			'note' => '测试API',
        ];
        $model = model('app\api\model\Apply');
        $ret = $model->saveForm($postdata);
        $data = [
            'result' => $ret,
            'postdata' => $postdata,
        ];
        return json($data);
    }
}
