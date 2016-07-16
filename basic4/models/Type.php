<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "www_type".
 *
 * @property integer $type_id
 * @property string $type_name
 */
class Type extends \yii\db\ActiveRecord{

    public function getBook(){
        return $this->hasMany(Book::className(),['t_id'=>'type_id']);
    }
}
