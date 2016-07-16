<?php

namespace app\controllers;
use app\models\Ip;
use yii\data\Pagination;

class IpController extends \yii\web\Controller
{
    public $enableCsrfValidation =false;
    public $layout="menu.php";

    /*
     *
     * ip展示页面
     * */
    public function actionList(){
        $search=\Yii::$app->request->post('search');
        if($search){
            $query = Ip::find()->where("statu=0 and (ip like '%$search%')");
        }else{
            $query = Ip::find()->where(['statu'=>0]);
        }
        $pagination = new Pagination([
            'defaultPageSize' =>'3',
            'totalCount' => $query->count(),
        ]);
        $arr = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('list', [
            'arr' => $arr,
            'pagination' => $pagination,
        ]);
    }

    /*
     * ip的删除
     * */
    public function actionDel(){
        $id=\Yii::$app->request->get('id');
        $ip=new ip();
        $customer = $ip->findOne($id);
        $customer->statu=1;
        $arr=$customer->save();
        if($arr){
            return $this->redirect(array('/ip/list'));
        }else{
            return $this->redirect(array('/ip/list'));
        }
    }

    /*
     * IP管理的回收站
     * */
    public function actionTrash(){
        $query = Ip::find()->where(['statu'=>1]);
        $pagination = new Pagination([
            'defaultPageSize' =>'10',
            'totalCount' => $query->count(),
        ]);
        $arr = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('trash', [
            'arr' => $arr,
            'pagination' => $pagination,
        ]);
    }
    /*
     * 回收站还原
     *
     * */
    public function actionRestore(){
        $id=\Yii::$app->request->get('id');
        $ip=new ip();
        $customer = $ip->findOne($id);
        $customer->statu=0;
        $arr=$customer->save();
        if($arr){
            return $this->redirect(array('/ip/list'));
        }else{
            return $this->redirect(array('/ip/list'));
        }
    }

    /*
     * 回收站删除
     * */
    public function actionDell(){
        $id=\Yii::$app->request->get('id');
        $ip=new ip();
        $customer = $ip->findOne($id);
        $arr=$customer->delete();
        if($arr){
            return $this->redirect(array('/ip/trash'));
        }else{
            return $this->redirect(array('/ip/trash'));
        }
    }

    /*IP限制的操作
     *
     * */
    public function actionZhuangtai(){
        $id=\Yii::$app->request->get('id');
        $sta=\Yii::$app->request->get('sta');
        $result=Ip::find()->where(['id'=>$id])->one();
        print_r($result);
        if($sta==0){
            $result->zhangtai=1;
        }else{
            $result->zhangtai=0;
        }
        $arr=$result->save();
        if($arr){
            return $this->redirect(array('/ip/list'));
        }else{
            return $this->redirect(array('/ip/list'));
        }
    }
    /*
     * 新增IP的显示页面
     * */
    public function actionAdd(){
        return $this->render('add');
    }

    /*
     * 新增IP接受数据
     * */
    public function actionAdd1(){
        $post=\Yii::$app->request->post();
        $result=new Ip();
        $result->ip=$post['ip'];
        $result->zhangtai=$post['zhangtai'];
        $arr=$result->save();
        if($arr){
            return $this->redirect(array('/ip/list'));
        }
    }

    /*
     * IP管理
     * */
    public function actionUpdate(){
        $id=\Yii::$app->request->get('id');
        $result=Ip::find()->where(['id'=>$id])->one();
//        print_r($result);die;
        return $this->render('update',['result'=>$result]);
    }
    /*
    * IP管理修改接受的数据
    * */
    public function actionUpdate1(){
        $zhangtai=\Yii::$app->request->post('zhangtai');//状态值
        $id=\Yii::$app->request->post('id');             //当前的ID值
        $ip=\Yii::$app->request->post('ip');
        //新的IP地址
        $result=Ip::find()->where(['id'=>$id])->one();
        $result->ip=$ip;
        $result->zhangtai=$zhangtai;
        $arr=$result->save();
        if($arr){
            echo 1;
        }else{
            echo 0;
        }
    }

}
?>