<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ebook $ebook
  */
?>
<br/>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-2">
        <h2>Ebook</h2>
    </div>
    <div class="col-lg-10" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('Edit Ebook'), ['action' => 'edit', $ebook->id],['class'=>'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Delete Ebook'), ['action' => 'delete', $ebook->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $ebook->id)]) ?>
            <?= $this->Html->link(__('List Ebooks'), ['action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Ebook'), ['action' => 'add'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add'],['class'=>'btn btn-info']) ?>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><?= h($ebook->book_title) ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover vertical-table">
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= h($ebook->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Book Title') ?></th>
                        <td><?= h($ebook->book_title) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Language') ?></th>
                        <td><?= $ebook->has('language') ? $this->Html->link($ebook->language->language, ['controller' => 'Languages', 'action' => 'view', $ebook->language->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Sub Topic') ?></th>
                        <td><?= $ebook->has('sub_topic') ? $this->Html->link($ebook->sub_topic->sub_topic_name, ['controller' => 'SubTopics', 'action' => 'view', $ebook->sub_topic->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('File Name') ?></th>
                        <td><?= h($ebook->file_name) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('File Description') ?></th>
                        <td><?= h($ebook->file_description) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Uploaded At') ?></th>
                        <td><?= h($ebook->uploaded_at) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
