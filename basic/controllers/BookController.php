<?php
//将类名放入命名空间
namespace app\controllers;

//使用哪个命名空间的类
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Book;
use app\models\Type;
class BookController extends Controller{
    //将验证数据请求关掉
    public $enableCsrfValidation = false;
    //引用公共样式
    public $layout = "common";
   /*
    * 显示表单页面
    */
    public function actionIndex(){
        //查询分类数据
        $arr=Type::find()->asArray()->all();
        return  $this->render('index',['arr'=>$arr]);
    }
    /*
     * 添加
     *
     */
    public function actionAdd()
    {
        //接值
        if (\Yii::$app->request->isPost) {
            //接图片
            $image = UploadedFile::getInstanceByName('filename');
            $dir = 'uplode/';//上传目录
            if (!is_dir($dir)) {
                mkdir($dir); //目录不存在则创建
            }
            $name = $dir . $image->name; //文件名绝对路径
            $status = $image->saveAs($name, true); //保存文件
            if ($status) {
                $model = new Book();
                $model->filename = $name;
                $arr = \Yii::$app->request->post();
                unset($arr['_csrf']);
               $model->name=$arr['name'];
               $model->author=$arr['author'];
               $model->t_id=$arr['t_id'];
               $model->price=$arr['price'];
               $model->filename=$name;
               $model->content=$arr['content'];
                $model->save();
                return $this->redirect(array("book/list"));
            }

        }
    }
    /*
     * 书名唯一性
     */
    public function actionOnly(){
        $name=\Yii::$app->request->post('name');
        //查数据库检测
        $sql="select * from book where name='$name'";
        $connection=\Yii::$app->db->createCommand($sql);
        $arr=$connection->queryOne();
        if($arr){
            echo  "1";
        }

    }
    /*
     * 展示
     */
    public function actionList(){

        //两表联查
        $sql="select book.*,type.* from A as a left join B as b on book.t_id = type.id";
        $connection=\Yii::$app->db->createCommand($sql);
        $arr=$connection->queryAll();
        print_r($arr);die;
        //return $this->render('list',['arr'=>$arr]);
    }
}