<?php
namespace app\api\controller;

use think\Controller;

class City extends Controller
{
    public function read($county_name='北京')
    {
        #var_dump($county_name);
        $model = model('app\api\model\City');
        $data = $model->getCity($county_name);
        if ($data) {
            $code = 200;
        	$weather_info = $data[0]['weather_info'];
        } else {
            $code = 404;
        	$weather_info = "获取失败";
        }
        #var_dump($data);
        $data = [
            'code' => $code,
            'city' => $county_name,
			'weather_info' => $weather_info,
        ];
        return json($data);
    }
      public function read_directly($county_name='北京')
    {
        #var_dump($county_name);
        $model = model('app\api\model\City');
        $data = $model->getCity($county_name);
        if ($data) {
            $code = 200;
        	$weather_info = $data[0]['weather_info'];
        } else {
            $code = 404;
        	$weather_info = "获取失败";
        }
        #var_dump($data);
        $data = [
            'code' => $code,
            'city' => $county_name,
			'weather_info' => $weather_info,
        ];
        return $data;
    }
  
}