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
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.3/css/foundation.min.css"> -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css"> -->

    <!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php
        echo $this->Html->css('../bower_components/bootstrap/dist/css/bootstrap.min.css');
    	echo $this->Html->css('../bower_components/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('../bower_components/Ionicons/css/ionicons.min.css');
        echo $this->Html->css('../dist/css/AdminLTE.min.css');
        echo $this->Html->css('../dist/css/skins/_all-skins.min.css');
        echo $this->Html->css('pramukhtypepad.css');
        echo $this->Html->script('pramukhime.js');
        echo $this->Html->script('pramukhindic.js');
        echo $this->Html->script('pramukhime-common.js');
        // echo $this->Html->css('foundation-icons/foundation-icons.css');
        echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
        // echo $this->Html->script('vendor/modernizr.min.js');
    ?>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script language="javascript" type="text/javascript">
      pramukhIME.addLanguage(PramukhIndic);
      pramukhIME.enable();
      pramukhIME.onLanguageChange(scriptChangeCallback);
      var lang = (getCookie('pramukhime_language',':english')).split(':');
      pramukhIME.setLanguage(lang[1], lang[0]);
      var ul = document.getElementById('pi_tips');

      var elem, len = ul.childNodes.length, i;
      for (i = 0; i < len; i++) {
          elem = ul.childNodes[i];
          if (elem.tagName && elem.tagName.toLowerCase() == 'li') {
              tips.push(elem.innerHTML);
          }
      }
      for (i = len - 1; i > 1; i--) {
          ul.removeChild(ul.childNodes[i]);
      }
      ul.childNodes[i].className = 'tip'; // replace small tip text with large

      showNextTip(); // call for first time
      setTimeout('turnOffTip()', 90000); // show tips for 1.5 minutes
            document.getElementById('typingarea').focus();

            // set width and height of dialog
            var w = window, d = document, e = d.documentElement, g = d.getElementsByTagName('body')[0], x = w.innerWidth || e.clientWidth || g.clientWidth, y = w.innerHeight || e.clientHeight || g.clientHeight;
            var elem = document.getElementById('dialog');
            elem.style.top = ((y - 550) / 2) + 'px';
            elem.style.left = ((x - 700) / 2) + 'px';
            
    </script>
    <script type="text/javascript">
      // Load the Google Transliterate API
      google.load("elements", "1", {
            packages: "transliteration"
          });
      function onLoad() {     
  var options = {
          sourceLanguage: 'en',
          destinationLanguage: ['gu'],        
          transliterationEnabled: true
        };  
     
var control = new google.elements.transliteration.TransliterationControl(options);  
var ids = ["guj-in"];  
  control.makeTransliteratable(ids);
      }
      google.setOnLoadCallback(onLoad);
    </script>
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
    <style type="text/css">
        .ev-alert{
            right:20px;
            position: absolute;
            z-index: 2;
        }
        #myInput {
            background-position: 10px 12px; /* Position the search icon */
            background-repeat: no-repeat; /* Do not repeat the icon image */
            width: 100%; /* Full-width */
            font-size: 16px; /* Increase font-size */
            padding: 12px 20px 12px 40px; /* Add some padding */
            border: 1px solid #ddd; /* Add a grey border */
            margin-bottom: 12px; /* Add some space below the input */
        }
        /*#easyPaginate {width:300px;}*/
        /*#easyPaginate li {display:block;margin-bottom:10px;}*/
        .easyPaginateNav a {
          background: #fff;
          display: inline-block;
          margin-right: 3px;
          padding: 4px 12px;
          text-decoration: none;
          line-height: 1.5em;
        
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
        }
        .easyPaginateNav a.current {
          background: rgba(190, 190, 190, 0.75);
        }
        .easyPaginateNav a:hover {
            background-color: #BEBEBE;
            color: #fff;
        }
        /*.sort {
          padding:4px 30px;
          border-radius: 6px;
          border:none;
          display:inline-block;
          color:#fff;
          text-decoration: none;
          background-color: #28a8e0;
          height:30px;
        }*/
        .sort:hover {
          text-decoration: none;
          background-color:#1b8aba;
        }
        .sort:focus {
          outline:none;
        }
        .sort:after {
          width: 0;
          height: 0;
          border-left: 5px solid transparent;
          border-right: 5px solid transparent;
          border-bottom: 5px solid transparent;
          content:"";
          position: relative;
          top:-10px;
          right:-5px;
        }
        .sort.asc:after {
          width: 0;
          height: 0;
          border-left: 5px solid transparent;
          border-right: 5px solid transparent;
          border-top: 5px solid #fff;
          content:"";
          position: relative;
          top:13px;
          right:-5px;
        }
        .sort.desc:after {
          width: 0;
          height: 0;
          border-left: 5px solid transparent;
          border-right: 5px solid transparent;
          border-bottom: 5px solid #fff;
          content:"";
          position: relative;
          top:-10px;
          right:-5px;
        }
    </style>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet" type="text/css"> -->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                  <div class="container">
                    <div class="navbar-header">
                      <?php echo $this->Html->link(_('<b>WorkSheet</b>App'),array('action'=>'/'),array('class'=>'navbar-brand','escape' => false));
                      ?>
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                      <ul class="nav navbar-nav">
                        <li><?php echo $this->Html->link(_('Home'),array('action'=>'/'));?></li>
                        <!-- <li><a href="#">Link</a></li> -->
                        <!-- <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li> -->
                      </ul>
                      <!-- <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                        </div>
                      </form> -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li><?=$this->Html->link(_('<i class="fa fa-sign-in"></i>'),array('controller'=>'admins','action'=>'login'),array('escape'=>false));?></li>
                      </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                  </div>
                  <!-- /.container-fluid -->
                </nav>
              </header>
            <div class="ev-alert">
                <?= $this->Flash->render() ?>
            </div>
            <div style="min-height: 327px;">
                <div class="content-wrapper">
                    <div class="container">
                        <?= $this->fetch('content') ?>
                    </div>
                <!-- /.container -->
                </div>
            </div>
              <!-- /.content-wrapper -->
              <footer class="main-footer">
                <div class="container">
                  <!-- <div class="pull-right hidden-xs">
                    <b>Version</b> 2.4.0
                  </div> -->
                  <strong>Developed By <a href="https://adminlte.io">Kashyap Ashara</a>.</strong>
                </div>
                <!-- /.container -->
              </footer>
            </div>
        <!-- </div>
    </div> -->
    <?= $this->Html->script('../bower_components/jquery/dist/jquery.min.js')?>
    <?= $this->Html->script('../bower_components/bootstrap/dist/js/bootstrap.min.js')?>
    <?= $this->Html->script('../bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>
    <?= $this->Html->script('../bower_components/fastclick/lib/fastclick.js')?>
    <?= $this->Html->script('../dist/js/adminlte.min.js')?>
    <?= $this->Html->script('../dist/js/demo.js')?>
    <?= $this->Html->script('jquery.easyPaginate.js')?>
    <?= $this->Html->script('list.js')?>
    
    <script>
          $(document).ready(function(){
            setTimeout(function(){
                $('.alert').fadeOut(800);
            },2000);
            var bookList = new List('book-list', {
              valueNames: ['name','language','topic','sub-topic'],
              page: 3,
              pagination: true
            });
            $('div.tags').find('input:checkbox').click( function () {
                // $('.results > li').hide();
                $('div.tags').find('input:checked').each(function () {
                  console.log($(this).attr('rel'));
                  var languageString=$(this).attr('rel');
                  var topicString=$(this).attr('rel');
                  var subTopicString=$(this).attr('rel');
                  // console.log($('.results > li[data-language='+$(this).attr('rel')+']'));
                    // $('.results > li[data-language='+$(this).attr('rel')+']').show();
                    // $('.results > li[data-topic='+$(this).attr('rel')+']').show();
                    // $('.results > li[data-sub-topic='+$(this).attr('rel')+']').show();
                    bookList.filter(function(item) {
                      console.log(item['_values']['sub-topic']);
                      if (item.values().language === languageString || item.values().topic === topicString || item['_values']['sub-topic'] === subTopicString) {
                         return true;
                      } else {
                         return false;
                      }
                    });
                });
                // console.log($("input:checkbox"));
                if($("input:checkbox").length===$("input:checkbox:not(:checked)").length){
                  // $('.results > li').show();
                  bookList.filter();
                }
                // console.log($("input:checkbox:not(:checked)"));
              })
            $("#reset-filter").click(function(){
              bookList.filter();
              $('input:checkbox').each(function(){
                $(this)[0].checked=false  
              });

            });
        });
    </script>
    <script>
      function myFunction() {
          // Declare variables
          var input, filter, ul, li, a, i;
          input = document.getElementById('myInput');
          filter = input.value.toUpperCase();
          ul = document.getElementById("ebook-data");
          li = ul.getElementsByClassName('caption');
          var thumbnail;
          // Loop through all list items, and hide those who don't match the search query
          for (i = 0; i < li.length; i++) {
              a = li[i].getElementsByTagName("h3")[0];
              var thumbnail=a.parentElement.parentElement;
              console.log(thumbnail);
              if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                  thumbnail.style.display = "";
              } else {
                  thumbnail.style.display = "none";
              }
          }
      }
      $('#easyPaginate').easyPaginate({
        paginateElement: 'li',
        elementsPerPage: 3
      });
      // $('#search-nodata').hideseek({
      //   nodata: 'No results found'
      // });

    </script>
</body>
</html>
