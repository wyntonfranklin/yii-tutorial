<?php

namespace app\controllers;

use app\models\Gallery;
use app\models\YiiUser;
use Yii;
use yii\helpers\Url;
use yii\filters\AccessControl;

class GalleryController extends \yii\web\Controller
{
    private $data;

    public function behaviors()
    {
        return [
            'access' => [
                'only' => ["create","update","edit","delete"],
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionCreate()
    {
        $model = new Gallery();
        if($model->load(Yii::$app->request->post())){
            $model->creationDate = date("Y-m-d h:i:s");
            $model->save();
            $this->redirect("/gallery/");
        }
        return $this->render('create',[
            'model' => $model
        ]);
    }

    public function actionDelete()
    {
        if(Yii::$app->request->isPost
            && Yii::$app->request->isAjax){
            $gid = Yii::$app->request->post("id");
            $model = Gallery::find()
                ->where(["id"=>$gid])
                ->one();
            if($model !== null ){
                $model->delete();
                echo "good";
            }else{
                echo "bad";
            }
        }
    }

    public function actionIndex()
    {
        $models = Gallery::find()->all();
        $this->addData("models", $models);
        $this->addData("title", Yii::$app->name);
        $this->addData("createUrl", Url::toRoute(['/gallery/create']));
        $this->addData("loginUrl", Url::toRoute(['/site/login']));
        $this->addData("logoutUrl",Url::toRoute(["/site/logout"]));
        $this->addData("userLoggedIn", !Yii::$app->user->isGuest);
        $this->addData("username", $this->getUserName(Yii::$app->user->id));
        return $this->render('index.twig',$this->getData());
    }

    private function getUserName($id)
    {
        if($id!==null)
        {
            return YiiUser::findIdentity($id)->username;
        }
    }



    public function actionUpdate( $id )
    {
        $model = Gallery::find()
            ->where(["id"=>$id])
            ->one();
        if($model->load(Yii::$app->request->post())){
            Yii::$app->session->setFlash('success',"You have succesfully updated");
            $model->update();
        }
        return $this->render('update',['model'=>$model]);
    }

    public function actionView($id)
    {
        $model = Gallery::find()
        ->where(["id"=>$id])
        ->one();
        return $this->render('view.twig',['model'=>$model]);
    }

    public function getData()
    {
        return $this->data;
    }

    public function addData($key, $value)
    {
        $this->data[$key] = $value;
    }

}
