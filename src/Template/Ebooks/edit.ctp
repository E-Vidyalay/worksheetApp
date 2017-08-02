<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ebook->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ebook->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ebooks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ebooks form large-9 medium-8 columns content">
    <?= $this->Form->create($ebook) ?>
    <fieldset>
        <legend><?= __('Edit Ebook') ?></legend>
        <?php
            echo $this->Form->control('book_title');
            echo $this->Form->control('language_id', ['options' => $languages]);
            echo $this->Form->control('sub_topic_id', ['options' => $subTopics]);
            echo $this->Form->control('uploaded_at');
            echo $this->Form->control('file_name');
            echo $this->Form->control('file_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
