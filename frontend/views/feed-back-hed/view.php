<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model frontend\models\FeedBackHed */

$this->title = $model->feedback_name;
$this->params['breadcrumbs'][] = ['label' => 'Feed-Back Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feed-back-hed-view">
   
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
           // 'id',
            ['label' => 'Academic Year',
             'attribute'=> 'acadYear.acad_year',] ,
            
            ['label' => 'Module Name',
             'attribute'=> 'module.mod_name',] ,
            
            ['label' => 'Feedback Name',
             'attribute'=> 'feedback_name',] ,
            
            ['label' => 'Status',
             'attribute'=> 'feedback_status',] ,
           
            
        ],
    ]) ?>
    
  
   <div class="row">
            <?php
            
//            foreach ($dataResult->models as $model) {
//             echo "addMarker({$model->feedback_ques}, {$model->swot_cate});";
//             }
            
            
          echo GridView::widget([
           'dataProvider' => $dataResult,
             'columns' => [
               ['class' => 'yii\grid\SerialColumn'],   
                 'feedback_ques',
                'swot_cate',
                ['class' => 'yii\grid\ActionColumn'],  
                
            ],
            ]);
            
            
//            }
            
            ?>
                   
   
    </div>
     
    


</div>
