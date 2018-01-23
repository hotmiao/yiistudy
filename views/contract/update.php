<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DragonBankDeal */

$this->title = 'Update Dragon Bank Deal: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Dragon Bank Deals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->document_id, 'url' => ['view', 'id' => $model->document_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dragon-bank-deal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
