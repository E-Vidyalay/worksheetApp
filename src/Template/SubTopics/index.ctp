<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubTopic[]|\Cake\Collection\CollectionInterface $subTopics
  */
?>
<br/>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-5">
        <h2>Sub Topics</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('New Sub Topic'), ['action' => 'add'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add'],['class'=>'btn btn-info']) ?>
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
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('sub_topic_name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('topic_id') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($subTopics as $subTopic): ?>
                            <tr>
                                <td><?= h($subTopic->id) ?></td>
                                <td><?= h($subTopic->sub_topic_name) ?></td>
                                <td><?= $subTopic->has('topic') ? $this->Html->link($subTopic->topic->topic_name, ['controller' => 'Topics', 'action' => 'view', $subTopic->topic->id]) : '' ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $subTopic->id],['class'=>'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subTopic->id],['class'=>'btn btn-primary']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subTopic->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $subTopic->id)]) ?>
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
            </div>
        </div>
    </div>
</div>
