<?php

namespace app\controllers;


class IndexController extends BaseController
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

    public function actionWelcome()
    {
        return $this->renderPartial('welcome');
    }

    public function actionAdmin()
    {
        return $this->renderPartial('admin');
    }

    public function actionTestimage()
    {
        return $this->renderPartial('testimage');
    }

}
