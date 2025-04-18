<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackHedSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feed-back-hed-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'feedback_name') ?>

    <?= $form->field($model, 'acad_year_id') ?>

    <?= $form->field($model, 'module_id') ?>

    <?= $form->field($model, 'feedback_status') ?>
    
   
    
    

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
