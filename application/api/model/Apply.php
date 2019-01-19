<?php 
namespace app\api\model;

use think\Model;
use think\Db;

class Apply extends Model
{
    public function saveForm($application_info)
    {
        if(Db::name('application_form') -> insert($application_info)){
          return 'success';
        }else{
          return 'fail';
        }
    }
}