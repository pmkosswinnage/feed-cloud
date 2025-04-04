<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

<div class="row">
            <div id="over">
            <span class="Centerer"></span>
            <img src="<?= Yii::$app->request->baseUrl ?>/imgs/about.png" alt="" />
            </div>
    
     <div class="overlay"> 
     <div class="col-md-8">
            <p>Feed-Cloud.com is an interactive web portal that allows students to upload 
                their feed back and manage feed-back in professional way. Base on the students feed back, 
                portal process the SWOT analysis and allows to students to make their own Action Plan with the 
                support of their personal tutor.</p>
            <br>

            <h3>Teesside University School of Computing   <br>  ICA-Individual Project Details</h3> 
            <br>
            <b> Module Title   :</b>  Advanced Server-Side Technologies <br><Br>
            <b> Assignment Title   :</b>  Feed-Cloud.com <br><Br>
            <b> Module Code    :</b>    MUL2059-N <br><Br>  
            <b> Module Leader    :</b>    Andrew Bingham <br><Br>
            <b> Local Submission Centre :</b>    London-Tec City Campus -Sri Lanka<br><Br>

            <b> Date of Deadline :</b>   03-Jan -2015  3.00 PM <br><Br>

            <br>
            <h3>Student Details</h3> 
             <br>
            <b> Student Name  :</b>  PRADEEP MANJULA KOSWINNAGE <br><Br>
            <b> Student No  :</b>   Q5222213 <br><Br>
        </div>    
        </div>
   </div> 
<!--    <code><?= __FILE__ ?></code>-->
</div>
