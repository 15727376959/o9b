<?php

namespace app\controllers;
use app\models\Login;
use app\models\Ip;

class LoginController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public $layout="menu.php";
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    /*
     * 登录检测
     * */
    //检测登陆
    function actionCheck_login(){
        $name=\Yii::$app->request->get("uname");
        $pwd=\Yii::$app->request->get("upwd");

        //当前登录者的IP
        $ip1=\Yii::$app->request->userIP;
        //查数据库检测登录
        $login=new login();
        $ip=new ip();
        $arr=$login->find()->where(['name'=>$name])->asArray()->one();
        //IP检测是否被限制
        $arr1=$ip->find()->where(['ip'=>$ip1,'statu'=>0,'zhangtai'=>0])->asArray()->one();
        if($arr){
            if($arr['pwd']==$pwd){
                // if($arr1){
                    //把用户名用session存起来
                    $session = \Yii::$app->session;
                    $session->open();
                    $session->set("id",$arr['id']);
                    $session->set("name",$name);
                    echo "1";
                // }else{
                //     echo 4;
                // }
            }else{
                echo "2";
            }
        }else{
            echo "3";
        }
    }

    /*公共部分的修改密码
     *
     * */
    public function actionSet_pwd(){
        $session = \Yii::$app->session;
        $session->open();
        $uname=$session->get("name");
        return $this->renderPartial('demo',['uname'=>$uname]);
    }


    /*
     * 验证码
     *
     * */







}
