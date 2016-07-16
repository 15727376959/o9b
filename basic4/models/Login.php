<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "www_login".
 *
 * @property integer $id
 * @property string $name
 * @property string $pwd
 */
class Login extends \yii\db\ActiveRecord
{
    //双表联查
    public function getAccount(){
        return $this->hasMany(Account::className(),['uid'=>'id']);
    }





}
