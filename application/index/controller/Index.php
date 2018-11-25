<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
    	echo "您好： " . cookie('user_name') . ', <a href="' . url('login/loginout') . '">退出</a><br/>';
    	echo "【" . cookie('city') . "天气预报】<br/>";
    	echo "2018年11月24日 21时发布<br/><br/>实时天气<br/>晴 -10至10℃ 南风4级<br/><br/>温馨提示：天气寒冷，多穿衣服<br/><br/>明天<br/>晴 -10至10℃ 南风4级<br/><br/>后天<br/>晴 -10至10℃ 南风4级<br/><br/>";
    }   
}