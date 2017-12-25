<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Ebook[]|\Cake\Collection\CollectionInterface $ebooks
  */
?>
<br/>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-5">
        <h2>Ebooks</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('New Ebook'), ['action' => 'add'],['class'=>'btn btn-primary']) ?></li>
            <?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index'],['class'=>'btn btn-default']) ?></li>
            <?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add'],['class'=>'btn btn-info']) ?></li>
            <?= $this->Html->link(__('List Sub Topics'), ['controller' => 'SubTopics', 'action' => 'index'],['class'=>'btn btn-default']) ?></li>
            <?= $this->Html->link(__('New Sub Topic'), ['controller' => 'SubTopics', 'action' => 'add'],['class'=>'btn btn-info']) ?></li>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <div class="dataTable_wrapper" id="no-more-tables">
                    <table class="table table-striped table-bordered table-hover" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
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
                            <tr>.
                                <td><?= h($ebook->book_title) ?></td>
                                <td><?= $ebook->has('language') ? $this->Html->link($ebook->language->language, ['controller' => 'Languages', 'action' => 'view', $ebook->language->id]) : '' ?></td>
                                <td><?= $ebook->has('sub_topic') ? $this->Html->link($ebook->sub_topic->sub_topic_name, ['controller' => 'SubTopics', 'action' => 'view', $ebook->sub_topic->id]) : '' ?></td>
                                <td><?= h($ebook->uploaded_at) ?></td>
                                <td><?= h($ebook->file_name) ?></td>
                                <td><?= h($ebook->file_description) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $ebook->id],['class'=>'btn btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ebook->id],['class'=>'btn btn-primary']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ebook->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $ebook->id)]) ?>
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
