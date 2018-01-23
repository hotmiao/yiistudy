<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\web\Response;

class BaseController extends \yii\web\Controller
{

    private $ips = ['127.0.0.1'];

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['*'],
                'rules' => [
                    [
                        'allow' => true,
                        'controllers' => ['login'],
                        'actions' => ['index', 'login'],
                        'roles' => ['?'],
                        'ips' => $this->ips,
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['login'],
                        'actions' => ['logout'],
                        'roles' => ['@'],
                        'ips' => $this->ips,
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'ips' => $this->ips,
                    ],
                ],
            ],
        ];
    }

    public function formatJsonReturn($data = [], $code = 0, $msg = '', $rules = [])
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'data' => $data,
            'code' => $code,
            'msg' => $msg,
            'rules' => $rules,
        ];
    }

}
