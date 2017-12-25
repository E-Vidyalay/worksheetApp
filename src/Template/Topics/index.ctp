<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Topic[]|\Cake\Collection\CollectionInterface $topics
  */
?>
<br/>
<div class="ev-alert">
    <?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-5">
        <h2>Topics</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('New Topic'), ['action' => 'add'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add'],['class'=>'btn btn-info']) ?>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-lg-10">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper" id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('topic_name') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($topics as $topic): ?>
                            <tr>
                                <td><?= h($topic->topic_name) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $topic->id],['class'=>'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $topic->id],['class'=>'btn btn-primary']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $topic->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
                    </div>
                </div>
