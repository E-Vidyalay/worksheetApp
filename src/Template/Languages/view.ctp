<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Language $language
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
            <?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->id],['class'=>'btn btn-primary']) ?>
            <?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $language->id)]) ?>
            <?= $this->Html->link(__('List Languages'), ['action' => 'index'],['class'=>'btn btn-default']) ?>
            <?= $this->Html->link(__('New Language'), ['action' => 'add'],['class'=>'btn btn-primary']) ?>
            <?= $this->Html->link(__('List Ebooks'), ['controller' => 'Ebooks', 'action' => 'index'],['class'=>'btn btn-info']) ?>
            <?= $this->Html->link(__('New Ebook'), ['controller' => 'Ebooks', 'action' => 'add'],['class'=>'btn btn-default']) ?>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            </div>
            <div class="panel-body">
                <h3><small>Language:</small> <?= h($language->language) ?></h3>
                <h4><small>ID:</small> <?= h($language->id) ?></h4>
                <hr>
                <div class="dataTable_wrapper" id="no-more-tables">
                    <div class="related">
                    <h4><?= __('Related Ebooks') ?></h4>
                    <?php if (!empty($language->ebooks)): ?>
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                                <?= $this->Html->link(__('View'), ['controller' => 'Ebooks', 'action' => 'view', $ebooks->id],['class'=>'btn btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ebooks', 'action' => 'edit', $ebooks->id],['class'=>'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ebooks', 'action' => 'delete', $ebooks->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $ebooks->id)]) ?>
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
