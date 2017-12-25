<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'WorkSheet';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('bootstrap-theme');
        echo $this->Html->css('metisMenu.css');
        echo $this->Html->css('sb-admin-2');
        echo $this->Html->css('font-awesome');
        echo $this->Html->css('timeline');
        echo $this->Html->css('app');
        echo $this->Html->css('dataTables.bootstrap.min.css');
        echo $this->Html->css('responsive.bootstrap.min.css');
        echo $this->Html->css('select.bootstrap.min.css');
        echo $this->Html->css('buttons.bootstrap.min.css');
        echo $this->Html->css('colpick');
        echo $this->Html->css('bootstrap-dialog');
        echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
    ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
    <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-top-links hidden-lg hidden-md" style="float:right;">
                <!-- dropdown-user -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a>
                                <h4><?php echo $activeUser['username'];?></h4>
                            </a>
                        </li> 
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                        <li class="divider"></li>
                        <li><?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out fa-fw')) . " Logout",array('controller' => 'admins', 'action' => 'logout'),array('escape' => false));?>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
                <?php echo $this->Html->link(_('<span class="navbar-brand">WorkSheet</span>'),array('controller'=>'admins','action'=>'home'),array('escape' => false));
                ?>
        </div>
        <ul class="nav navbar-top-links navbar-right hidden-sm hidden-xs">
                <li>
                <?php
                        echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-home fa-fw fa-1x')) . "",array('controller' => 'admins', 'action' => 'home'),array('escape' => false));?>
                </li>
                <!-- dropdown-user -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Welcome, <?= $activeUser['username'] ?>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a>
                                <h4><?php echo $activeUser['username'];?></h4>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li><?php
                                echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-sign-out fa-fw')) . " Logout",array('controller' => 'admins', 'action' => 'logout'),array('escape' => false));?>
                        </li>
                    </ul>
                        <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a> -->
                </li>
                    <!-- /.dropdown-user -->
                <!-- /.dropdown -->
            </ul>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav in" id="side-menu">
                       
                        <li>
                            <a href="#"><i class="fa fa-language fa-fw"></i> Manage Languages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Languages",array('controller'=>'languages','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Language",array('controller'=>'languages','action'=>'add'),array('escape' => false)); ?>
                                </li>                          
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-ul fa-fw"></i> Manage Topics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Topics",array('controller'=>'topics','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Topic",array('controller'=>'topics','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-list-ol fa-fw"></i> Manage Sub Topics<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View Sub Topics",array('controller'=>'sub_topics','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Sub Topic",array('controller'=>'sub_topics','action'=>'add'),array('escape' => false)); ?>
                                </li>                       
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Manage E-Books<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " View E-Books",array('controller'=>'ebooks','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add E-book",array('controller'=>'ebooks','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> Admin Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " All Admin Users",array('controller'=>'admins','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Admin User",array('controller'=>'admins','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
    </nav>
    </div>
    <div class="ev-alert">
        <?= $this->Flash->render() ?>
    </div>
    <div id="page-wrapper" style="min-height: 327px;">
            <?= $this->fetch('content') ?>
    </div>
    
    <footer>
    </footer>
    <?php
            echo $this->Html->script('jquery');
            echo $this->Html->script('app');
            echo $this->Html->script('bootstrap');
            echo $this->Html->script('bootstrap-dialog');
            echo $this->Html->script('colpick');
            echo $this->Html->script('metisMenu');
            echo $this->Html->script('sb-admin-2');
            echo $this->Html->script('jquery.dataTables.min.js');
            echo $this->Html->script('dataTables.bootstrap.min.js');
            echo $this->Html->script('dataTables.responsive.min.js');
            echo $this->Html->script('responsive.bootstrap.min.js');
            echo $this->Html->script('dataTables.select.min.js');
            echo $this->Html->script('dataTables.buttons.min.js');
            echo $this->Html->script('buttons.bootstrap.min.js');
            
        ?>
</body>
</html>
