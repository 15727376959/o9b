<?php

namespace app\models;

use Yii;
use yii\data\Pagination;


/**
 * This is the model class for table "www_book".
 *
 * @property integer $book_id
 * @property string $book_name
 * @property string $book_price
 * @property string $book_author
 * @property string $book_photo
 * @property string $book_desc
 * @property integer $t_id
 */
class Book extends \yii\db\ActiveRecord
{
    

    public function proContentPagination($pageSize=null)
    {
        $query = Book::find();
        $pagination = new Pagination([
            'defaultPageSize' => $pageSize,
            'totalCount' => $query->count(),
        ]);
        $proSets = $query->joinWith('type')
            ->offset($pagination->offset)
            ->limit($pagination->limit)->all();
        return array('arr'=>$proSets,'pagination'=>$pagination);
    }

    public function getType(){
        return $this->hasOne(Type::className(),['type_id'=>'t_id']);
    }




}
