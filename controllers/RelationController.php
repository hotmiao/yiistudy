<?php

namespace app\controllers;

use app\models\DragonBankDeal;
use app\models\DragonDepartment;
use Yii;
use app\models\DragonRelation;
use app\models\RelationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * RelationController implements the CRUD actions for DragonRelation model.
 */
class RelationController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DragonRelation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RelationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DragonRelation model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DragonRelation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DragonRelation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DragonRelation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DragonRelation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DragonRelation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DragonRelation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DragonRelation::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionDemo()
    {
        return $this->render('demo');
//        Yii::$app->response->format = Response::FORMAT_JSON;
//        $contract = DragonBankDeal::findOne(3163410);
//        return $contract;
//        $info = $contract->getInputuser()->asArray()->all();
//        $contract['userinfo'] = $info;
//        echo '<pre>';
//        print_r($contract->inputuser->username);
    }

    public function actionDemodata()
    {
//        Yii::$app->response->format = Response::FORMAT_JSON;
        $dept = DragonDepartment::find()->where(['dragon_department.dept_id' => 69839])
        ->joinWith(['dragonRelations dr' => function($query) {
            $query->joinWith([
                'user u'
            ], 'inner join');
        }])->all();
        $contracts= $dept[0]->dragonRelations;
        $data = [
            'dept' => $dept,
            'relaction' => $contracts
        ];
        return $this->formatJsonReturn($data);
    }
}
