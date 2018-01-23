<?php

namespace app\controllers;

use app\models\LoginForm;

class LoginController extends BaseController
{
    public function actionIndex()
    {
        if(!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        return $this->renderPartial('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $post = \Yii::$app->request->post();
        $data['_csrf'] = $post['_csrf'];
        $data['LoginForm']['tel'] = $post['tel'];
        $data['LoginForm']['pwd'] = $post['pwd'];
        if ($model->load($data) && $model->login()) {
            return $this->goBack();
        }
        return $this->renderPartial('index', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        \Yii::$app->user->logout();
        return $this->goHome();
    }

}
