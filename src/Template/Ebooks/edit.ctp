<?php
/**
  * @var \App\View\AppView $this
  */
?>
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
    <div class="col-lg-4">
        <h2>Edit Ebook</h2>
    </div>
    <div class="col-lg-8" style="text-align: right">
        <div class="btn-group">
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ebook->id],
                ['class'=>'btn btn-danger'],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ebook->id)]
            )
            ?>
            <?= $this->Html->link(__('List Ebooks'), ['action' => 'index'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <?= $this->Form->create($ebook,['type' => 'file']) ?>
                    <label for="book_title" class="control-label">Book Title <i>(required)</i></label>
                    <div class="form-group">
                        <?= $this->Form->control('book_title',['type'=>'text','required','placeholder'=>'Book Title','label'=>false,'class'=>'form-control'])?>
                    </div>
                    <label for="language_id" class="control-label">Language <i>(required)</i></label>
                    <div class="form-group">
                        <?= $this->Form->control('language_id', ['options' => $languages,'type'=>'select','required','label'=>false,'class'=>'form-control','empty'=>'-select-'])?>
                    </div>
                    <label for="sub_topic_id" class="control-label">Sub Topic <i>(required)</i></label>
                    <div class="form-group">
                        <?= $this->Form->control('sub_topic_id', ['options' => $subTopics,'type'=>'select','required','label'=>false,'class'=>'form-control','empty'=>'-select-'])?>
                    </div>
                    <label for="file_name" class="control-label">Ebook Upload <i>(required)</i></label>
                    <div class="form-group">
                        <?= $this->Form->control('file_name',[
                            'type'=>'file',
                            'label'=>false,
                            'class'=>'btn btn-sm btn-default'
                        ])?>
                    </div>
                    <label for="file_description" class="control-label">Product Name <i>(required)</i></label>
                    <div class="form-group">
                        <?= $this->Form->control('file_description',[
                            'type'=>'textarea',
                            'label'=>false,
                            'required'=>false,
                            'autofocus',
                            'class'=>'form-control'
                        ])?>
                    </div>
                <?= $this->Form->button('Submit',['type'=>'submit',
                             'div'=>false,
                             'label'=>false,
                             'class'=>'btn btn-md btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>