<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DragonRelation */

$this->title = 'Create Dragon Relation';
$this->params['breadcrumbs'][] = ['label' => 'Dragon Relations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dragon-relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
