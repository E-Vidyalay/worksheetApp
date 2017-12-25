<?php
/**
  * @var \App\View\AppView $this
  */
?>
<br/>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-5">
        <h2>Add Sub Topics</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('List Sub Topics'), ['action' => 'index'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index'],['class'=>'btn btn-default']) ?>    
            <?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add'],['class'=>'btn btn-info']) ?>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <?= $this->Form->create($subTopic) ?>
                <label for="sub_topic_name" class="control-label">Sub Topic Name <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('sub_topic_name',['required','type'=>'text','class'=>'form-control','label'=>false,'placeholder'=>'Sub Topic Name'])?>
                </div>
                <label for="topic_id" class="control-label">Select Topic <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('topic_id', ['options' => $topics,'required','type'=>'select','class'=>'form-control','empty'=>'-select-','label'=>false])?>
                </div>
                <?= $this->Form->button('Submit',['type'=>'submit','div'=>false,'label'=>false,'class'=>'btn btn-md btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
