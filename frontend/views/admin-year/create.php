<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\AdminYear */

$this->title = 'New  Academic Year';
$this->params['breadcrumbs'][] = ['label' => 'Academic Year', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-year-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
