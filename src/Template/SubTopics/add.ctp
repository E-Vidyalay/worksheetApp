<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Sub Topics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subTopics form large-9 medium-8 columns content">
    <?= $this->Form->create($subTopic) ?>
    <fieldset>
        <legend><?= __('Add Sub Topic') ?></legend>
        <?php
            echo $this->Form->control('sub_topic_name');
            echo $this->Form->control('topic_id', ['options' => $topics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
