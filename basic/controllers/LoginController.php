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
use app\models\Admin;
use app\models\Ip;


header("content-type:text/html;charset=utf-8");

class LoginController extends Controller
{
    public $enableCsrfValidation=false;
    public $layout=false;
    //展示登录页面
    public function actionIndex(){
        $this->layout=false;
        return $this->render('index');

    }

    //验证登录信息
    public function actionCheck(){
//
        $session=\Yii::$app->session;
        $session->open();
        //两个值，名字与值

        $user=\yii::$app->request->post('user');
//        print_r($user);
//        exit;
        $session->set('user',$user);

        $pwd=\yii::$app->request->post('pwd');
//        $pwd=md5($pwd);

        //获取用户客户端的IP
        $ip=$_SERVER["REMOTE_ADDR"];

        $argb = Admin::find()->where(['user' =>$user ])->asArray()->one();
        if($argb){
            if($argb['pwd']==$pwd){
                $ip = Ip::find()->where(['ip' =>$ip,'statu'=>0 ])->asArray()->one();
                $ip_id=$ip['id'];
                if($ip){
                    $data=time();
                    $customer = Ip::findOne($ip_id);;
//                    print_r($customer);
//                    exit;
                    $customer->time =$data;
                    $customer->save();
                    echo 1;
                }else{
                    echo 2;
                }

            }else{
                echo 3;
            }
        }else{
            echo 4;
        }
    }
/*
退出
 */
 public  function actionSignout(){
    
     $this->renderAjax('login');

 }






}