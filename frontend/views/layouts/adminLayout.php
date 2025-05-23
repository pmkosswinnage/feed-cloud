<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;

use yii\widgets\Breadcrumbs;
use frontend\assets\DashboardAsset;


DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrapper">
 <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>F-</b>CC</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Feed-</b>Cloud.com</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php 
                    $roleid=Yii::$app->user->identity->role;
                    If ($roleid==1) {
                            echo '<img src="dist/img/user5-160x160.jpg" class="user-image" alt="User Image">';
                        }
                    Else  If ($roleid==2){
                            echo '<img src="dist/img/user7-128x128.jpg" class="user-image" alt="User Image">';
                        }
                    Else  If ($roleid==3){
                            echo '<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">';
                        }    
                ?>      
                    
                    
                  
                  <span class="hidden-xs"> 
                  <?php
                  echo Yii::$app->user->identity->username;
                  ?>
                                             
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                           <?php 
                            If ($roleid==1) {
                                echo '<img src="dist/img/user5-160x160.jpg" class="img-circle" alt="User Image">';
                                }
                            Else If ($roleid==2) {
                                echo '<img src="dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">';
                                }
                            Else If ($roleid==3) {
                                echo '<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">';
                                }
                                
                                
                            ?> 
                     <p>
                      <?php 
                        $name1= Yii::$app->user->identity->first_name;
                        $name2=Yii::$app->user->identity->last_name;
                        $roleid=Yii::$app->user->identity->role;
                        if ( $roleid==1)
                                {$rolename='Administrator';}
                        Else if ( $roleid==2)         
                                {$rolename='Student';}
                        Else if ( $roleid==3)         
                                {$rolename='Tutor';}
                                
                        Echo nl2br($name1.' '.$name2.'<br>' . $rolename);
                      ?>
                      <small>
                          <?php
                            $regisdate=Yii::$app->user->identity->register_date;
                            Echo 'Member since   '.date("M Y", strtotime($regisdate));
                          ?>
                      </small>    
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Chat</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
<!--                      <a href="#" class="btn btn-default btn-flat">Profile</a>-->
                      <?=$url = Html::a('Profile',
                        ['/user-profile/view','id'=>Yii::$app->user->identity->id],
                        ['class' => 'btn btn-block btn-warning', 'data-method'=>'post']);?>
                                     
                      
                    </div>
                    <div class="pull-right">
                     <?=$url = Html::a('Sign out',
                        ['/site/logout'],
                        ['class' => 'btn btn-success', 'data-method'=>'post']);?>
                               
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
 
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <?php 
              If ($roleid==1) {
                echo '<img src="dist/img/user5-160x160.jpg" class="img-circle" alt="User Image">';
                }
              Else If ($roleid==2){
                  echo '<img src="dist/img/user7-128x128.jpg" class="img-circle" alt="User Image">';
                }
              Else If ($roleid==3){
                  echo '<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">';
              }
              
                  
                ?>            
                
            </div>
            <div class="pull-left info">
                <p>
                     <?php 
                        $name1= Yii::$app->user->identity->first_name;
                        $name2=Yii::$app->user->identity->last_name;
                        Echo nl2br($name1.' '.$name2);
                      ?>                    
                    
                </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            
           
            
            <li class="active treeview">
              <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard-Admin</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
             
                
              <ul class="treeview-menu">
                    <li class="active">
                     <li>
                        <?php 
                        If ($roleid==1){    
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Admin Control Panel',
                        ['/site/indexadmin'],
                        ['class' => 'admin-year-index']);
                        }
                        ?>   
                    </li>
                    
                     <li>
                        <?php 
                        If ($roleid==1){ 
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Academic Year',
                        ['/admin-year/index'],
                        ['class' => 'admin-year-index']);
                        }
                        ?>
                    </li>
                    
                    <li>
                         <?php 
                        If ($roleid==1){ 
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Modules',
                        ['/admin-module2/index'],
                        ['class' => 'admin-year-index']);
                        
                        }
                        ?>
                    </li>
                    
                    <li>
                        <?php 
                        If ($roleid==1){    
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> System Users',
                        ['/userinit/index'],
                        ['class' => 'admin-year-index']);
                        }
                        ?>   
                    </li>
                    
                    
               </ul>
            </li>
            
            
            
             <li class="treeview">
              <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard-Student</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                    
                  <li class="active">
                        <?php 
                        If ($roleid==1){ 
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Student Control panel',
                        ['/site/indexstudent'],
                        ['class' => 'admin-year-index']);
                        
                        } elseif ($roleid==2) {
                            
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Student Control panel',
                        ['/site/indexstudent'],
                        ['class' => 'admin-year-index']);
                            
                        }
                        ?>
                      
                    </li>   
                     
                    <li >
                         <?php 
                        If ($roleid==1){ 
                            
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i> View Academic Modules ',
                            ['/admin-module2/viewindex'],
                            ['class' => 'admin-year-index']);
                        }elseif ($roleid==2) {
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i> View Academic Modules ',
                            ['/admin-module2/viewindex'],
                            ['class' => 'admin-year-index']);
                        
                        }
                        ?>
                    </li>
                  
                    <li >
                         <?php 
                        If ($roleid==1){ 
                                echo $url = Html::a('<i class="fa fa-circle-o"> </i> Feed-Back Forms',
                                ['/feed-back-hed/index'],
                                ['class' => 'admin-year-index']);    
                         }elseif ($roleid==2) { 
                                echo $url = Html::a('<i class="fa fa-circle-o"> </i> Feed-Back Forms',
                                ['/feed-back-hed/index'],
                                ['class' => 'admin-year-index']);
                         }
                        ?>
                        
                    </li>
                    
                     <li >
                         <?php 
                        If ($roleid==1){ 
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i> Action Plan',
                            ['/stud-actionplan-hed/index'],
                            ['class' => 'admin-year-index']);
                            
                        }elseif ($roleid==2) { 
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i> Action Plan',
                            ['/stud-actionplan-hed/index'],
                            ['class' => 'admin-year-index']);
                        }
                        ?>
                        
                    </li>
                    
                    
                    <li >
                            <?php 
                        If ($roleid==1){ 
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i>SWOT Analysis',
                            ['/site/sowtanalysis','studid'=>Yii::$app->user->identity->user_id],
                            ['class' => 'admin-year-index']);
                         }elseif ($roleid==2) { 
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i>SWOT Analysis',
                            ['/site/sowtanalysis','studid'=>Yii::$app->user->identity->user_id],
                            ['class' => 'admin-year-index']);
                        }
                        ?>
                        
                    </li>
                    
                    
                    
                    
                    
                    
              </ul>
            </li>
               
            
             <li class="treeview">
              <a href="#">
              <i class="fa fa-dashboard"></i> <span>Dashboard-Tutor</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                     <li class="active">
                       <?php 
                        If ($roleid==1){ 
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Tutor Control panel',
                        ['/tutor/index'],
                        ['class' => 'admin-year-index']);
                        
                        } elseif ($roleid==3) {
                            
                        echo $url = Html::a('<i class="fa fa-circle-o"> </i> Tutor Control panel',
                        ['/tutor/index'],
                        ['class' => 'admin-year-index']);
                            
                        }
                        ?>
                      </li>
                      
                     <li >
                         <?php 
                            If ($roleid==1){ 
                            
                                echo $url = Html::a('<i class="fa fa-circle-o"> </i> View Academic Modules ',
                                ['/admin-module2/viewindex'],
                                ['class' => 'admin-year-index']);
                            }elseif ($roleid==3) {
                                echo $url = Html::a('<i class="fa fa-circle-o"> </i> View Academic Modules ',
                                ['/admin-module2/viewindex'],
                                ['class' => 'admin-year-index']);

                            }
                            ?>
                        </li>
                    
                     <li >
                          <?php 
                        If ($roleid==1){ 
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i>SWOT Analysis',
                            ['/tutor/feedbacklist'],
                            ['class' => 'admin-year-index']);
                         }elseif ($roleid==3) { 
                            echo $url = Html::a('<i class="fa fa-circle-o"> </i>SWOT Analysis',
                            ['/tutor/feedbacklist'],
                            ['class' => 'admin-year-index']);
                        }
                        ?>
                        
                    </li>    
                      
                    
              </ul>
            </li>
               
                      
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>-->
<!--            <li>
              <a href="pages/widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>-->
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>-->
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>-->
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>-->
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
-->          <li>
    
                 <?=$url = Html::a(' <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>',
                        ['/site/calender'],
                        ['class' => '']);?>
    
<!--              <a href="pages/calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>-->
            </li>
            <li>
                 <?=$url = Html::a('<i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>',
                        ['/site/mailbox'],
                        ['class' => '']);?>
                
<!--              <a href="pages/mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>-->
            </li>
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>-->
<!--            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>-->
<!--            <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      
 

   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <?php 
                    $roleid=Yii::$app->user->identity->role;
                    If ($roleid==1) {
                            echo $url = Html::a('<small> Admin Control panel</small>',
                                    ['/site/indexadmin'],['class' => '']);
                        }
                    Else  If ($roleid==2){
                            echo $url = Html::a('<small> Student Control panel</small>',
                                                            ['/site/indexstudent'],['class' => '']);
                        }
                    Else  If ($roleid==3){
                            echo $url = Html::a('<small> Tutor Control panel</small>',
                                                            ['/tutor/index'],['class' => '']);
                        }    
                ?>   
            
             
            
          </h1>
            <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            
<!--          <ol class="breadcrumb">
             
              
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">
                       
          </ol>-->
        </section>

        <!-- Main content -->
        <section class="content">
        <?= $content ?>
        </section>    
    </div>
   
 </div>  

    <footer class="footer">
    <div class="container">
        <p class="pull-left"><?= Yii::powered() ?> </p>
        <p class="pull-right">&copy; K. Pradeep Manju: MedOne-E-Channeling @ <?= date('Y') ?></p>
    </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
