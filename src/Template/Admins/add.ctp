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
        <h2>Add Ebook</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('List Admins'), ['action' => 'index'],['class'=>'btn btn-primary']) ?>
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
                <?= $this->Form->create($admin) ?>
                <label for="username" class="control-label">Username <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('username',['type'=>'text','required','placeholder'=>'Username','label'=>false,'class'=>'form-control'])?>
                </div>
                <label for="username" class="control-label">Name <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('name',['type'=>'text','required','placeholder'=>'Name','label'=>false,'class'=>'form-control'])?>
                </div>
                <label for="email" class="control-label">Email <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('email',['type'=>'email','required','placeholder'=>'Email','label'=>false,'class'=>'form-control'])?>
                </div>
                <label for="password" class="control-label">Password <i>(required)</i></label>
                <div class="form-group">
                    <?= $this->Form->control('password',['type'=>'text','required','placeholder'=>'Password','label'=>false,'class'=>'form-control'])?>
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
