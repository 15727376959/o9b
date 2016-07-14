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
use app\models\Ip;
use app\models\Admin;

header("content-type:text/html;charset=utf-8");

class IpController extends Controller
{
    public $enableCsrfValidation = false;
    public $layout = "common";
    //展示ip访问权限受阻的IP页面

    public function actionRestricted()
    {

        $session=\Yii::$app->session;
        $session->open();
        $a['user']=$session->get('user');
        if($a['user']){

            $argb = Ip::find()->where(['statu'=>1 ])->asArray()->all();
           return  $this->render('list',['arr'=>$argb]);
        }else{
            return $this->redirect(array('Index/index'));
        }



    }


    //展示未受限制ip页面
    public function actionNoip()
    {
        $session = \Yii::$app->session;
        $session->open();
        $a['user'] = $session->get('user');

        if ($a['user']) {
            $row = Ip::find()->where(['statu'=>0 ])->asArray()->all();
//            print_r($row);
//            exit;
            return $this->render('noip', ['arr' => $row]);
        } else {
            return $this->redirect(array('login/index'));
        }
    }


    //展示IP添加页面
    public function actionShow(){
        $session=\Yii::$app->session;
        $session->open();
        $a['user']=$session->get('user');
        if($a['user']){
            return $this->render('add');
        }else{
            return $this->redirect(array('login/index'));
        }

    }

    //添加方法
    public function actionAdd(){
        $ip=\yii::$app->request->post('ip');
        $customer = new Ip();
        $customer->ip =$ip;
       $res= $customer->save();

        if($res){
            echo "<script>alert('添加成功');location.href='index.php?r=ip/noip';</script>";

        }
    }


    //删除id
    public function actionDel(){
        $id=\yii::$app->request->get('id');
//        print_r($id);
//        exit;
        $customer = Ip::findOne($id);
      $re=$customer->delete();

        if($re){
            echo "<script>alert('删除成功');location.href='index.php?r=ip/noip';</script>";
        }
    }


    //解除IP的锁定
    public function actionRelieve()
    {
        $id=\yii::$app->request->get('id');
        $customer = Ip::findOne($id);
        $customer->statu = '0';
        $a=$customer->save();
        if($a)
        {
            echo "<script>alert('解除成功');location.href='index.php?r=ip/noip';</script>";
        }


    }

    //禁止IP
    public function actionForbid()
    {

        $id=\yii::$app->request->get('id');
        $customer = Ip::findOne($id);
        $customer->statu = '1';
        $a=$customer->save();
        if($a)
        {
            echo "<script>alert('禁止成功');location.href='index.php?r=ip/restricted';</script>";
        }

    }
    /*
     * 练习展示分页
     */
    public function actionList(){
        //$arr=Admin::find()->asArray()->all();
      //  print_r($arr);
        //return $this->render('show',['arr'=>$arr]);
        $query = Admin::find();
        $pagination = new Pagination([
            'defaultPageSize' =>'2',
            'totalCount' => $query->count(),
        ]);
        $arr = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('show', ['arr' => $arr, 'pagination' => $pagination,]);



    }
    public function actionSearch()
    {
        //接值
        $user=\Yii::$app->request->post('user');
        print_r($user);
    }

}