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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'main';
?>
<?php
function createBlob($stringPath=null){
    $file =$stringPath;
    $im = new imagick(realpath($file).'[0]');
    $im->setImageFormat("jpg");
    $im->resizeImage(200,200,1,0);
    header("Content-Type: image/jpg");
    // $im = new imagick('D:\CakePHPCookbook.pdf[0]');
    // $im->setImageFormat('jpg');
    // header('Content-Type: image/jpeg');
    // pr($im);
    // echo $im;

    ob_start();
    $thumbnail = $im->getImageBlob();
    $contents =  ob_get_contents();
    ob_end_clean();
    return $thumbnail;
}
// echo $thumbnail;
?>
<!-- Content Header (Page header) -->
    <!-- <section class="content-header">
    <h1>
      Top Navigation
      <small>Example 2.0</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Layout</a></li>
      <li class="active">Top Navigation</li>
    </ol>
    </section> -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Filter</h3>
                    </div>
                    <div class="box-body">
                      <button id="reset-filter" type="button" class="btn btn-primary btn-block">Reset Filter</button>
                        <div class="filter-block">
                        <form role="form" id="filterform">
                            <div class="form-group tags langauges">
                              <a href="#langauges-side" type="button" class="pull-right" data-toggle="collapse"><i class="fa fa-minus"></i></a>
                              <h4>Language</h4>
                              <div id="langauges-side" class="collapse in">
                                <?php //pr($languages);
                                  foreach($languages as $langauge){
                                ?>
                                  <div class="checkbox"><label><input type="checkbox" class="check-languages" rel="<?=$langauge->language?>" value=".<?=$langauge->language?>"/><?=$langauge->language?></label></div>
                                <?php }?>
                              </div>
                              <!-- <div class="checkbox"><label><input type="checkbox" rel="category-two"/> Category Two</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="category-three"/> Category Three</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="category-four"/> Category Four</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="category-five"/> Category Five</label></div> -->
                            </div>
                            <div class="form-group tags topics">
                              <a href="#topics-side" type="button" class="pull-right" data-toggle="collapse"><i class="fa fa-minus"></i></a>
                              <h4>Topics</h4>
                              <div id="topics-side" class="collapse in">
                                <?php //pr($topics);
                                  foreach($topics as $topic){
                                ?>
                                <div class="checkbox"><label><input type="checkbox" class="check-topics" rel="<?=$topic->topic_name?>" value=".<?=$topic->topic_name?>"/><?=$topic->topic_name?></label></div>
                                <?php }?>
                              </div>
                              <!-- <div class="checkbox"><label><input type="checkbox" rel="topic-two"/>Topic Two</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="topic-three"/>Topic Three</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="topic-four"/>Topic Four</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="topic-five"/>Topic Five</label></div> -->
                            </div>
                            <div class="form-group tags subtopics">
                              <a href="#sub-topics-side" type="button" class="pull-right" data-toggle="collapse"><i class="fa fa-minus"></i></a>
                              <h4>Sub Topics</h4>
                              <div id="sub-topics-side" class="collapse in">
                                <?php //pr($subtopics);
                                  foreach($subtopics as $subtopic){
                                ?>
                                <div class="checkbox"><label><input type="checkbox" class="check-subtopics" rel="<?=$subtopic->sub_topic_name?>" value=".<?=$subtopic->sub_topic_name?>"/><?=$subtopic->sub_topic_name?></label></div>
                                <?php }?>
                              </div>
                              <!-- <div class="checkbox"><label><input type="checkbox" rel="topic-two"/>Topic Two</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="topic-three"/>Topic Three</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="topic-four"/>Topic Four</label></div>
                              <div class="checkbox"><label><input type="checkbox" rel="topic-five"/>Topic Five</label></div> -->
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Book Names"> -->
                <!-- <div class="row margin-bottom" id="ebook-data">
                    <ul id="easyPaginate" style="list-style-type: none;padding: 0;margin: 0;" class="results">
                    <?php foreach ($ebooksAll as $book):?>
                            <li class="thumbnail col-sm-4" data-language="<?=$book->language->language?>" data-topic="<?=$book->sub_topic->topic->topic_name?>" data-sub-topic="<?=$book->sub_topic->sub_topic_name?>">
                                <?="<img class='img-responsive' src='data:image/png;base64,".base64_encode(createBlob(WWW_ROOT.'files/ebooks/'.$book->file_name))."'/>"?>
                                <div class="caption">
                                    <h3><?=$book->book_title?></h3>
                                    <p><?=$book->file_description?></p>
                                    <b>Tags:</b> 
                                    <p class="tags-label">
                                        <span class="label label-info language"><?=$book->language->language?></span>
                                        <span class="label label-primary topic"><?=$book->sub_topic->sub_topic_name?></span>
                                        <span class="label label-primary sub-topic"><?=$book->sub_topic->topic->topic_name?></span>
                                    </p>
                                    <a href="<?='files/ebooks/'.$book->file_name?>" class="btn btn-primary" role="button" download><i class="fa fa-download"></i> Download</a> <a href="<?='files/ebooks/'.$book->file_name?>" class="btn btn-default" role="button" target="_blank"><i class="fa fa-eye"></i> View</a>
                                </div>
                            </li>
                    <?php endforeach;?>
                    </ul>
                </div> -->
                <div class="row margin-bottom" id="book-list">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input id="guj-in" type="text" class="search form-control" placeholder="Search by Book Titles, Langauge, Topic and Sub Topic">
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p><b>Sort by:</b>
                      <div class="btn-group"> 
                        <button class="btn btn-primary sort" data-sort="name">
                          Book Title
                        </button>
                        <button class="btn btn-primary sort" data-sort="language">
                          Book Language
                        </button>
                        <button class="btn btn-primary sort" data-sort="topic">
                          Book Topic
                        </button>
                        <button class="btn btn-primary sort" data-sort="sub-topic">
                          Book Topic
                        </button>
                      </div>
                      </p>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-12">
                        <ul style="list-style-type: none;padding: 0;margin: 0;" class="list results" id="results">
                        <?php foreach ($ebooksAll as $book):?>
                                <li class="thumbnail col-sm-4 <?=$book->language->language?> <?=$book->sub_topic->topic->topic_name?> <?=$book->sub_topic->sub_topic_name?>" data-language="<?=$book->language->language?>" data-topic="<?=$book->sub_topic->topic->topic_name?>" data-sub-topic="<?=$book->sub_topic->sub_topic_name?>">
                                    <?="<img class='img-responsive' src='data:image/png;base64,".base64_encode(createBlob(WWW_ROOT.'files/ebooks/'.$book->file_name))."'/>"?>
                                    <div class="caption">
                                        <h3 class="name"><?=$book->book_title?></h3>
                                        <p><?=$book->file_description?></p>
                                        <b>Tags:</b> 
                                        <p class="tags-label">
                                            <span class="label label-info language"><?=$book->language->language?></span>
                                            <span class="label label-primary topic "><?=$book->sub_topic->topic->topic_name?></span>
                                            <span class="label label-primary sub-topic"><?=$book->sub_topic->sub_topic_name?></span>
                                        </p>
                                        <a href="<?='files/ebooks/'.$book->file_name?>" class="btn btn-primary" role="button" download><i class="fa fa-download"></i> Download</a> <a href="<?='files/ebooks/'.$book->file_name?>" class="btn btn-default" role="button" target="_blank"><i class="fa fa-eye"></i> View</a>
                                    </div>
                                </li>
                        <?php endforeach;?>
                        </ul>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <ul class="pagination"></ul>
                      </div>
                    </div>
                </div>
                
                <!-- <div class="paginator">
                    <ul class="pagination">
                        <?= $this->Paginator->first('<< ' . __('first')) ?>
                        <?= $this->Paginator->prev('< ' . __('previous')) ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next(__('next') . ' >') ?>
                        <?= $this->Paginator->last(__('last') . ' >>') ?>
                    </ul>
                    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                </div> -->
            </div>
        </div>
    <!-- /.box -->
    </section>
