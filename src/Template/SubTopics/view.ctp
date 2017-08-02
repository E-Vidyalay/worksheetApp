<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\SubTopic $subTopic
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sub Topic'), ['action' => 'edit', $subTopic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sub Topic'), ['action' => 'delete', $subTopic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subTopic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sub Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Topic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subTopics view large-9 medium-8 columns content">
    <h3><?= h($subTopic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($subTopic->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Topic Name') ?></th>
            <td><?= h($subTopic->sub_topic_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Topic') ?></th>
            <td><?= $subTopic->has('topic') ? $this->Html->link($subTopic->topic->id, ['controller' => 'Topics', 'action' => 'view', $subTopic->topic->id]) : '' ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ebooks') ?></h4>
        <?php if (!empty($subTopic->ebooks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
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
                <td><?= h($ebooks->id) ?></td>
                <td><?= h($ebooks->book_title) ?></td>
                <td><?= h($ebooks->language_id) ?></td>
                <td><?= h($ebooks->sub_topic_id) ?></td>
                <td><?= h($ebooks->uploaded_at) ?></td>
                <td><?= h($ebooks->file_name) ?></td>
                <td><?= h($ebooks->file_description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ebooks', 'action' => 'view', $ebooks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ebooks', 'action' => 'edit', $ebooks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ebooks', 'action' => 'delete', $ebooks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ebooks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
