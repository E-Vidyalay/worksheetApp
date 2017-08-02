<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ebook $ebook
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ebook'), ['action' => 'edit', $ebook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ebook'), ['action' => 'delete', $ebook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ebook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ebooks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ebook'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ebooks view large-9 medium-8 columns content">
    <h3><?= h($ebook->id) ?></h3>
    <table class="vertical-table">
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
            <td><?= $ebook->has('language') ? $this->Html->link($ebook->language->id, ['controller' => 'Languages', 'action' => 'view', $ebook->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Topic') ?></th>
            <td><?= $ebook->has('sub_topic') ? $this->Html->link($ebook->sub_topic->id, ['controller' => 'SubTopics', 'action' => 'view', $ebook->sub_topic->id]) : '' ?></td>
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
