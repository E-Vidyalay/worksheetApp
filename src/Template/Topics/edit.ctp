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
        <h2>Add Topic</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $topic->id],
                ['class'=>'btn btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]
            )?>
            <?= $this->Html->link(__('List Topics'), ['action' => 'index'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add'],['class'=>'btn btn-info']) ?>
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
                <?= $this->Form->create($topic) ?>
                <label for="topic_name" class="control-label">Topic Name <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('topic_name',['type'=>'text','class'=>'form-control','required','label'=>false,'placeholder'=>'Topic Name'])?>
                </div>
                <?= $this->Form->button('Submit',['type'=>'submit','div'=>false,'label'=>false,'class'=>'btn btn-md btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
