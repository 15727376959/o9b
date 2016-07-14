<?php
//将类名放入命名空间
namespace app\controllers;

//使用哪个命名空间的类

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Number;

class OfficialController extends Controller{

    //将验证数据请求关掉
    public $enableCsrfValidation = false;
    //引用公共样式
    public $layout = "common";

    //展示添加公众号的页面
    public function  actionIndex(){
        return $this->render('index');
    }
    /*
     * 添加
     */
    public function  actionAdd(){
        //接值
        $arr=\Yii::$app->request->post();
        //print_r($arr);die;
        //实例化model
        $number=new Number;
        $number->aname=$arr['aname'];
        $number->appid=$arr['appid'];
        $number->appsecret=$arr['appsecret'];
        $number->content=$arr['content'];
        $result= $number->save();
        if($result){
            return $this->redirect(array("official/list"));
        }
    }
    /*
     * 展示
     */

    public function  actionList(){
        //$arr=Number::find()->asArray()->all();
        //print_r($arr);die;
        //return $this->render('list',['arr'=>$arr]);

        $query = Number::find();
        $pagination = new Pagination([
            'defaultPageSize' =>'2',
            'totalCount' => $query->count(),
        ]);
        $arr = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('list', ['arr' => $arr, 'pagination' => $pagination,]);



    }
    /*
     * 删除
     */
    public function actionDele(){
        //接值
        $id=\Yii::$app->request->get('id');
        //print_r($id);die;
        $result=Number::deleteAll("id=$id");
        //判断结果
        if($result){
            return $this->redirect(array("official/list"));
        }else{
            echo "<script>alert('删除失败');</script>";
        }
    }
    /*
     * 修改
     */
    public function actionUpdate(){
        //接值
        $id=\Yii::$app->request->get('id');
        $arr=Number::find()->where("id=$id")->asArray()->one();
        return $this->render('update',['arr'=>$arr]);
    }
    /*
     * 修改后的数据
     */
    public function actionUpdate1(){
        $arr=\Yii::$app->request->post();
        $id=$arr['id'];
        //实例化model
        $number=Number::find()->where("id=$id")->one();
        $number->aname=$arr['aname'];
        $number->appid=$arr['appid'];
        $number->appsecret=$arr['appsecret'];
        $number->content=$arr['content'];
        $result= $number->save();
        if($result){
            return $this->redirect(array("official/list"));
        }else{
            echo "修改失败";
        }
    }


}



?>