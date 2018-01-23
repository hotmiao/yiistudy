<?php

namespace app\controllers;

use app\models\DragonUser;
use yii\data\Pagination;
use yii\web\Response;

class EmployeeController extends BaseController
{

    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            [
                'class' => 'yii\filters\PageCache',
                'only' => ['index'],
//                'duration' => 60, // 缓存时间 (秒)
                'variations' => [
                    \Yii::$app->language,
                ],
                'dependency' => [
                    'class' => 'yii\caching\DbDependency',
                    'sql' => 'SELECT MAX(update_time) FROM dragon_user',
                ],
            ],
        ]);
    }

    public $layout = 'hadmin';

    public function actionIndex()
    {
        $postdata = \Yii::$app->request->post();
        $whereParams[] = 'if_deleted = 0';
        if(!empty($postdata['startdate']) && empty($postdata['enddate'])) {
            $whereParams[] = 'enroll_date >= '.strtotime($postdata['startdate']);
        }
        if(empty($postdata['startdate']) && !empty($postdata['enddate'])) {
            $whereParams[] = 'enroll_date <= '.strtotime($postdata['enddate']);
        }
        if(!empty($postdata['startdate']) && !empty($postdata['enddate'])) {
            $whereParams[] = 'enroll_date between '.strtotime($postdata['startdate']).' AND '.strtotime($postdata['enddate']);
        }
        if(!empty($postdata['keyword'])) {
            $keyword = $postdata['keyword'];
            $whereParams[] = 'username like "%'.$keyword.'%" or tel like "%'.$keyword.'%" or email like "%'.$keyword.'%"';
        }
        $where = implode(' AND ', $whereParams);
        $query = DragonUser::find()->where($where);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $pageSize = \Yii::$app->params['pageSize'];
        $employees = $query->offset($pagination->offset)->limit($pageSize)->all();

        return $this->render('employee', [
            'employees' => $employees,
            'count' => $count,
            'pagination' => $pagination,
            'where' => $postdata
        ]);
    }

    /**
     * @return array
     * 雇员列表数据接口
     */
    public function actionMembers()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $postdata = \Yii::$app->request->post();
        $whereParams[] = 'if_deleted = 0';
        if(!empty($postdata['startdate']) && empty($postdata['enddate'])) {
            $whereParams[] = 'enroll_date >= '.strtotime($postdata['startdate']);
        }
        if(empty($postdata['startdate']) && !empty($postdata['enddate'])) {
            $whereParams[] = 'enroll_date <= '.strtotime($postdata['enddate']);
        }
        if(!empty($postdata['startdate']) && !empty($postdata['enddate'])) {
            $whereParams[] = 'enroll_date between '.strtotime($postdata['startdate']).' AND '.strtotime($postdata['enddate']);
        }
        if(!empty($postdata['keyword'])) {
            $keyword = $postdata['keyword'];
            $whereParams[] = 'username like "%'.$keyword.'%" or tel like "%'.$keyword.'%" or email like "%'.$keyword.'%"';
        }
        $where = implode(' AND ', $whereParams);
        $query = DragonUser::find()->where($where);
        $count = $query->count();
        $pagination = new Pagination(['totalCount' => $count]);
        $pageSize = \Yii::$app->request->get('limit') ? \Yii::$app->request->get('limit') : \Yii::$app->params['pageSize'];
        $employees = $query->offset($pagination->offset)->limit($pageSize)->asArray()->all();
        if(!empty($employees)) {
            foreach($employees as &$employee) {
                $employee['enroll_date'] = date('Y-m-d', $employee['enroll_date']);
            }
        }
        return [
            'code' => 0,
            'msg' => "",
            'count' => $count,
            'data' => $employees
        ];
    }

    public function actionEdit()
    {
        return $this->renderPartial('edit');
    }

}
