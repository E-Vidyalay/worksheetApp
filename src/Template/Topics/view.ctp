<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Topic $topic
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Topic'), ['action' => 'edit', $topic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Topic'), ['action' => 'delete', $topic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="topics view large-9 medium-8 columns content">
    <h3><?= h($topic->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($topic->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Topic Name') ?></th>
            <td><?= h($topic->topic_name) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sub Topics') ?></h4>
        <?php if (!empty($topic->sub_topics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Sub Topic Name') ?></th>
                <th scope="col"><?= __('Topic Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($topic->sub_topics as $subTopics): ?>
            <tr>
                <td><?= h($subTopics->id) ?></td>
                <td><?= h($subTopics->sub_topic_name) ?></td>
                <td><?= h($subTopics->topic_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'SubTopics', 'action' => 'view', $subTopics->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubTopics', 'action' => 'edit', $subTopics->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubTopics', 'action' => 'delete', $subTopics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subTopics->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
