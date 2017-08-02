<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ebook[]|\Cake\Collection\CollectionInterface $ebooks
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ebook'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ebooks index large-9 medium-8 columns content">
    <h3><?= __('Ebooks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('language_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub_topic_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uploaded_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ebooks as $ebook): ?>
            <tr>
                <td><?= h($ebook->id) ?></td>
                <td><?= h($ebook->book_title) ?></td>
                <td><?= $ebook->has('language') ? $this->Html->link($ebook->language->id, ['controller' => 'Languages', 'action' => 'view', $ebook->language->id]) : '' ?></td>
                <td><?= $ebook->has('sub_topic') ? $this->Html->link($ebook->sub_topic->id, ['controller' => 'SubTopics', 'action' => 'view', $ebook->sub_topic->id]) : '' ?></td>
                <td><?= h($ebook->uploaded_at) ?></td>
                <td><?= h($ebook->file_name) ?></td>
                <td><?= h($ebook->file_description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ebook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ebook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ebook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ebook->id)]) ?>
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
