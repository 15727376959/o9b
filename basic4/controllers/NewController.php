<?php

namespace app\controllers;
use yii\web\Controller;
use yii\data\Pagination;

use app\models\Type;//加载分类的model

use app\models\Book;
use yii\web\UploadedFile;


header("content-type:text/html;charset=utf-8");
class NewController extends Controller
{
    //公共部分
    public $enableCsrfValidation = false;
    public $layout = "menu.php";

    /*
     * 新闻添加分类
     * */
    public function actionType()
    {
        return $this->render('type');
    }

    /*
     * 添加分类接受数据
     * */
    public function actionType_add()
    {
        $type_name = \Yii::$app->request->post('type_name');
        $result = Type::find()->where(['type_name' => $type_name])->one();
        if ($result) {
            echo 1;
        } else {
            $result = new type();
            $result->type_name = $type_name;
            $res = $result->save();
            if ($res) {
                echo 2;
            } else {
                echo 3;
            }
        }

    }


    /*
     * 新闻封面加载
     * */
    public function actionAdd(){

        if(\Yii::$app->request->post()) {


            $img = UploadedFile::getInstanceByName('book_photo');//接受图片
            //路径创建文件夹
            $dir = 'uploads/';
            if (!is_dir($dir)) {
                mkdir($dir);
            };
            $a = $img->name; //文件名绝对路径
            $img_type = time() . substr($a, strrpos($a, "."));
            $name = $dir . $img_type;
            $status = $img->saveAs($name, true); //保存文件
            if ($status) {
                $book = new Book();//实例化model层
                $book->book_photo = $name;
                $book->attributes = \Yii::$app->request->post();
                if ($book->insert()) {
                    return $this->redirect(array('/new/list'));
                }else{
                    if($book->getErrors()){
                        $result['list'] = Type::find()->asArray()->all();
                        $result['error'] = $book->getErrors();
                        return $this->render('index', $result);
                    }else{
                        return $this->redirect(array('/new/list'));
                    }
                }
            } else {
                echo "失败";
            }
        }else{
            $result['list'] = Type::find()->asArray()->all();
            return $this->render('index', $result);
        }

    }
    /*
     * 第一种两联查新闻展示

    * */
//    public function actionList(){
//        $arr=Book::find()->joinWith("type")->asArray()->all();
//        print_r($arr);die;
//        return $this->render('list',['arr'=>$arr]);
//    }

    public function actionList(){
        $pro = new Book();
        $s= $pro->proContentPagination(2);

        return $this->render('list', [
            'arr' => $s['arr'],
            'pagination' => $s['pagination'],
        ]);

    }







} ?>