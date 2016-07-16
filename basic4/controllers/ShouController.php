<?php

namespace app\controllers;
use app\models\Account;
use app\models\Login;

class ShouController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public $layout="menu.php";
    public function actionIndex(){
        $session = \Yii::$app->session;
        $session->open();
        $id=$session->get("id");
        if($id){
            return $this->render('index');
        }else{
            return $this->redirect(array('/login/index'));
        }

    }

    /*
     * 微新公众号的开发
     * */
    public function actionAdd(){
        return $this->render('add');
    }

    /*
     * 公众好的添加
     * */
    public function actionInsert(){
        $atok=$this->actionRands(5);
        //接受表单穿过来的数据
        $arr=\Yii::$app->request->post();
        $http='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        $aurl=substr($http,0,strpos($http,'web')).'we/we.php?str='.$atok;//////
        $session = \Yii::$app->session;
        $session->open();
        $uid=$session->get('id');///////当前登录者的ID值
        $arr['atoken']=md5(rand(1000,9999));
        $atoken=md5(rand(1000,9999));
        $reg="/^[a-zA-Z]&/";
        if(preg_match($reg,substr($atoken,0,1))){
            $arr['atoken']=$atoken;
        }else{
            $aa=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
            $num=rand(0,52);
            $arr['atoken']=substr_replace($atoken,$aa[$num],0,1);
        }
        $account=new Account();
        $account->mid='';
        $account->uid=$uid;
        $account->aname=$arr['aname'];
        $account->appid=$arr['appid'];
        $account->appsecret=$arr['appsecret'];
        $account->aurl=$aurl;
        $account->account=$arr['account'];
        $account->atoken=$arr['atoken'];
        $account->atok=$atok;
        $ss=$account->save();
        if($ss){
            return $this->redirect(array('/shou/list'));
        }

    }

    /*
     * 生成atok
     * */
    public function actionRands($length){
        $str = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randString = '';
        $len = strlen($str)-1;
        for($i = 0;$i < $length;$i ++)
        {
            $num = mt_rand(0, $len);
            $randString .= $str[$num];
        }
        return $randString ;
    }


    /*微新公众好的展示页面
     *
     * */
    public function actionList(){
        //实例化Model层
        $admin=new Login();
        $hao=new Account();
        $session = \Yii::$app->session;
        $session->open();
        $uid=$session->get('id');///////当前登录者的ID值
        $arr['list']=Account::find()->joinWith("login")->where("uid='$uid'")->asArray()->all();
        return $this->render('list',$arr);
    }

    /*
     * 公众好的详细信息
     * */
    public function actionCheck(){

    }

}