<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Feed-Cloud.com';

?>
<div class="site-index">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>   

             <!-- Wrapper for carousel items -->
        
            <div class="carousel-inner">
                <div class="item active">
                <img src="<?= Yii::$app->request->baseUrl ?>/imgs/sd1.jpg" alt="First Slide">
                </div>
                
                <div class="item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/imgs/sd2.jpg" alt="Second Slide">
                </div>

                <div class="item">
                    <img src="<?= Yii::$app->request->baseUrl ?>/imgs/sd3.jpg" alt="Third Slide">
                </div>

             </div>
         <div class="row">    
        <div class="jumbotron" id="Formlay">
                   
        <p class="lead" style="color: white">Inspiring Your Success</p>
        
        <p> 
            
            <?=$url = Html::a('Get Started with Feed-Cloud.com',
                        ['/site/login'],
                        ['class' => 'btn btn-lg btn-success', 'data-method'=>'post']);?>
            
<!--            <a class="btn btn-lg btn-success" href="http://www.yiiframework.com" id="StartFeed">Get Started with Feed-Cloud.com</a></p>-->
             
         </div>
         </div>    
             <!-- Carousel controls -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                 <span class="glyphicon glyphicon-chevron-left"></span>
             </a>

            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

   

 </div>
    

 


    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>About Feed-Cloud.com</h2>
                
                <p>Feed-Cloud.com is an interactive web portal that allows students to 
                    upload their feed back and manage them in professional way. 
                    Base on the students feed back, portal process the SWOT analysis and 
                    allows to students to make their own Action Plan.</p>

                <p>
                    <?=$url = Html::a('Read more ..',
                        ['/site/about'],
                        ['class' => 'btn btn-block btn-info', 'data-method'=>'post']);?>
                    
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Signup</h2>

                <p>
                    To start the interactive Feed-Cloud Service, user need to register with portal. 
                    Please click below button to validate your User ID and start Signup Process. 
                    If portal not validate your User ID, please contact 
                    Administrator using the Contact Area of the portal.                
                    
                </p>

                <p>
                     <?=$url = Html::a('Start Signup Here ...',
                        ['/userinit/validsign'],
                        ['class' => 'btn btn-block btn-warning', 'data-method'=>'post']);?>
                    

                </p>
            </div>
            <div class="col-lg-4">
                <h2>Login to Feed-Cloud.com</h2>

                <p>
                   To access your portal please click on below button. You can experience the ultimate services of 
                   Feed-Cloud.com portal. If you forgot your login details, 
                   please contact Portal Administrator with your User ID Information using the Contact Area of the portal.
                    
                </p>

                <p>
                    <?=$url = Html::a('Start Signup Here ...',
                        ['/site/login'],
                        ['class' => 'btn btn-block btn-danger', 'data-method'=>'post']);?>
                    
                    
                </p>
            </div>
        </div>

    </div>
</div>
