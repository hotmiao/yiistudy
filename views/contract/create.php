<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DragonBankDeal */

$this->title = 'Create Dragon Bank Deal';
$this->params['breadcrumbs'][] = ['label' => 'Dragon Bank Deals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dragon-bank-deal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
