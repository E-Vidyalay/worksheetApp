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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
        echo $this->Html->script('pramukhime-common');
        echo $this->Html->script('tiny_mce/tiny_mce.js');
        echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
    ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="text/javascript">
            //piresourcebase = 'tiny_mce/plugins/pramukhime/';
            tinyMCE.init({
                // General options
                mode : "textareas",
                theme: "advanced",
                plugins : "table,advhr,advimage,advlink,inlinepopups,searchreplace,print,paste,directionality,fullscreen,pramukhime",
                //auto_focus: 'typingarea',
                // Theme options
                theme_advanced_buttons1: "pramukhime,pramukhimeclick,pramukhimeconvert,pramukhimehelp,print,undo,redo,fontselect,fontsizeselect,bold,italic,underline,forecolor,backcolor,|,link,unlink,image,|,justifyleft,justifycenter,justifyright,bullist,numlist,outdent,indent,|,code,ltr,rtl",
                theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,tablecontrols,|,sub,sup,blockquote,advhr,anchor,cleanup,removeformat,|,fullscreen",
                theme_advanced_toolbar_location : "top",
                theme_advanced_toolbar_align : "left",
                theme_advanced_statusbar_location : "bottom",
                theme_advanced_resizing: true,
                convert_urls : false,
                theme_advanced_resizing_use_cookie : false,
                content_css : "/worksheetApp/css/ptparea.css",
                pramukhime_language: [
                    {
                        jsfile:'pramukhindic.js',
                        kbclassname:'PramukhIndic',
                        kbtitle:'Pramukh Indic',
                        languagelist:[

                        {language: 'gujarati', title:'Gujarati'},
                        {language: 'hindi', title:'Hindi'},

                        ]
                        },
                    { 
                        kbtitle:'', 
                        title:'English' 
                    }
                ]
            });
            function bodyload() {
                var lang = (getCookie('pramukhime_language', ':english')).split(':');
                if(typeof pramukhIME != 'undefined') {
                    pramukhIME.setLanguage(lang[1], lang[0]);
                    pramukhIME.onLanguageChange(function(l,k,c){setCookie('pramukhime_language',k+':'+l,10);},'cookie');
                }
            }
        </script>
        
        <style type="text/css">
            body, * {font-family:helvetica, sans-serif; font-size:12px;}
            img {border:0px;}
            .page { width:100%; margin:0 auto;}
            #fblogo a,#gplogo a, #twtlogo a {height:20px; width:20px; padding-left:15px; text-decoration:none;}
            #fblogo {height:20px; width:20px; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -402px no-repeat;}
            #gplogo {height:20px; width:20px; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -422px no-repeat;}
            #twtlogo {height:20px; width:20px; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -442px no-repeat;}
            .header {height:50px; border-bottom:2px solid #FF6600; background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -1342px no-repeat; padding-left:55px; }
            .divleft { float:left;}
            .headerright { text-align:right;}
            .title { font-size:20px; color:#FF6600; font-weight:bold; }
            .clear {clear:both;}
            .editor {width:100%; border:1px solid #bbb; border-collapse:collapse; }
            .editortoolbar {background:#EEEEEE; height:26px; width:100%;border:1px solid #bbb; padding:0px;}
            textarea { height:376px; padding:0px; border:0px; width:100%; overflow:auto;}
            .bottom {border-top:2px solid #FF6600; padding-top:4px;}
            .copyright {text-align:center;}
            .big {font-size:14px;}
            .bigger {font-size:16px;}
            #pi_tips {list-style-type:none; margin:0px; padding:0px;display:none}
            ul li.tipsmall {background-position: 0 0px; padding-left:20px; margin:0px; font-size:xx-small;}
            ul li.tip {height:20px; margin:0px; padding-left:20px;background:transparent url('tiny_mce/plugins/pramukhime/img/pramukhime-icon.png') 0px -260px no-repeat;}
        </style>
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
                        <li><?php
                                echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-user fa-fw')) . " Edit Profile",array('controller' => 'admins', 'action' => 'edit',$activeUser['id']),array('escape' => false));?>
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
                        <li>
                            <a href="#"><i class="fa fa-gears fa-fw"></i> Admin Users<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-eye fa-fw')) . " All Admin Users",array('controller'=>'admins','action'=>'index'),array('escape' => false)); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'fa fa-plus fa-fw')) . " Add Admin User",array('controller'=>'admins','action'=>'add'),array('escape' => false)); ?>
                                </li>
                            </ul>
                        </li>
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
