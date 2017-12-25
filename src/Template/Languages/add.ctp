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
        <h2>Add Language</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('List Languages'), ['action' => 'index'],['class'=>'btn btn-primary']) ?>
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
                <?= $this->Form->create($language) ?>
                <label for="language" class="control-label">New Language <i>(required)</i></label>
                <div class="form-group">
                    <?php
                        echo $this->Form->control('language',['type'=>'text','class'=>'form-control','required','label'=>false,'placeholder'=>'New Language']);
                    ?>
                </div>
                <?= $this->Form->button(__('Submit'),['type'=>'submit','div'=>false,'label'=>false,'class'=>'btn btn-md btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
