<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Topic $topic
  */
?>
<br/>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-3">
        <h2>Language</h2>
    </div>
    <div class="col-lg-9" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('Edit Topic'), ['action' => 'edit', $topic->id],['class'=>'btn btn-primary']) ?> </li>
            <?= $this->Form->postLink(__('Delete Topic'), ['action' => 'delete', $topic->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?> </li>
            <?= $this->Html->link(__('List Topics'), ['action' => 'index'],['class'=>'btn btn-default']) ?> </li>
            <?= $this->Html->link(__('New Topic'), ['action' => 'add'],['class'=>'btn btn-info']) ?> </li>
            <?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index'],['class'=>'btn btn-default']) ?> </li>
            <?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add'],['class'=>'btn btn-info']) ?> </li>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><?= h($topic->topic_name) ?></h3>
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper" id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover vertical-table">
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
                        <table class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0">
                            <tr>
                                <th scope="col"><?= __('Id') ?></th>
                                <th scope="col"><?= __('Sub Topic Name') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($topic->sub_topics as $subTopics): ?>
                            <tr>
                                <td><?= h($subTopics->id) ?></td>
                                <td><?= h($subTopics->sub_topic_name) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'SubTopics', 'action' => 'view', $subTopics->id],['class'=>'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'SubTopics', 'action' => 'edit', $subTopics->id],['class'=>'btn btn-primary']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'SubTopics', 'action' => 'delete', $subTopics->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $subTopics->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
