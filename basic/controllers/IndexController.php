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

header("content-type:text/html;charset=utf-8");

class IndexController extends Controller
{
    public $enableCsrfValidation=false;
    public $layout = "common";


    //展示登录后的首页
    public function actionIndex(){
        $session = \Yii::$app->session;
        $session->open();
        $user=$session->get('user');
        return $this->render('index',['user'=>$user]);

    }



}