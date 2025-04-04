<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AdminYear */

$this->title = $model->acad_year;
$this->params['breadcrumbs'][] = ['label' => 'Academic Year', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-year-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            ['label' => 'Academic Year',
             'attribute'=> 'acad_year',] ,
            
            ['label' => 'Status',
            'attribute'=>'acad_status'],
        ],
    ]) ?>

</div>
