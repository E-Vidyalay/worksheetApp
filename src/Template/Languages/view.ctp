<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Language $language
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="languages view large-9 medium-8 columns content">
    <h3><?= h($language->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($language->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= h($language->language) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ebooks') ?></h4>
        <?php if (!empty($language->ebooks)): ?>
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
            <?php foreach ($language->ebooks as $ebooks): ?>
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
