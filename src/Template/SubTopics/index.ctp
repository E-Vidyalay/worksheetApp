<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubTopic[]|\Cake\Collection\CollectionInterface $subTopics
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sub Topic'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subTopics index large-9 medium-8 columns content">
    <h3><?= __('Sub Topics') ?></h3>
    <table cellpadding="0" cellspacing="0">
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
                <td><?= $subTopic->has('topic') ? $this->Html->link($subTopic->topic->id, ['controller' => 'Topics', 'action' => 'view', $subTopic->topic->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subTopic->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subTopic->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subTopic->id)]) ?>
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
