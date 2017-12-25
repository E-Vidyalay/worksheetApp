<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubTopic $subTopic
  */
?>
<br/>
<div class="ev-alert">
    <?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-3">
        <h2>Sub Topic</h2>
    </div>
    <div class="col-lg-9" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('Edit Sub Topic'), ['action' => 'edit', $subTopic->id],['class'=>'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Delete Sub Topic'), ['action' => 'delete', $subTopic->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $subTopic->id)]) ?>
            <?= $this->Html->link(__('List Sub Topics'), ['action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Sub Topic'), ['action' => 'add'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add'],['class'=>'btn btn-primary']) ?>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><small>Sub Topic Name:</small> <?= h($subTopic->sub_topic_name) ?></h3>
            </div>
            <div class="panel-body">
                <table class="table table-striped table-bordered table-hover vertical-table">
                    <tr>
                        <th scope="row"><?= __('Id') ?></th>
                        <td><?= h($subTopic->id) ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= __('Topic') ?></th>
                        <td><?= $subTopic->has('topic') ? $this->Html->link($subTopic->topic->topic_name, ['controller' => 'Topics', 'action' => 'view', $subTopic->topic->id]) : '' ?></td>
                    </tr>
                </table>
                <div class="related">
                    <h4><?= __('Related Ebooks') ?></h4>
                    <?php if (!empty($subTopic->ebooks)): ?>
                    <table class="table table-striped table-bordered table-hover vertical-table" cellpadding="0" cellspacing="0">
                        <tr>
                            <th scope="col"><?= __('Book Title') ?></th>
                            <th scope="col"><?= __('Language Id') ?></th>
                            <th scope="col"><?= __('Sub Topic Id') ?></th>
                            <th scope="col"><?= __('Uploaded At') ?></th>
                            <th scope="col"><?= __('File Name') ?></th>
                            <th scope="col"><?= __('File Description') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($subTopic->ebooks as $ebooks): ?>
                        <tr>
                            <td><?= h($ebooks->book_title) ?></td>
                            <td><?= h($ebooks->language_id) ?></td>
                            <td><?= h($ebooks->sub_topic_id) ?></td>
                            <td><?= h($ebooks->uploaded_at) ?></td>
                            <td><?= h($ebooks->file_name) ?></td>
                            <td><?= h($ebooks->file_description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ebooks', 'action' => 'view', $ebooks->id],['class'=>'btn btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ebooks', 'action' => 'edit', $ebooks->id],['class'=>'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ebooks', 'action' => 'delete', $ebooks->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $ebooks->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <?php endif; ?>
                </div>
            </div>
