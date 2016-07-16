<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "www_account".
 *
 * @property integer $aid
 * @property integer $mid
 * @property integer $uid
 * @property string $aname
 * @property string $account
 * @property string $appid
 * @property string $appsecret
 * @property string $atoken
 * @property string $atok
 * @property string $aurl
 */
class Account extends \yii\db\ActiveRecord
{
    //双表联查
    public function getLogin(){
        return $this->hasOne(Login::className(),['id'=>'uid']);
    }
}
