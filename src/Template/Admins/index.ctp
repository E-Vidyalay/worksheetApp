<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Admin[]|\Cake\Collection\CollectionInterface $admins
  */
?>
<br/>
<div class="ev-alert">
<?=$this->Flash->render()?>
</div>
<div class="row">
    <div class="col-lg-5">
        <h2>Admins</h2>
    </div>
    <div class="col-lg-7" style="text-align: right">
        <div class="btn-group">
            <?= $this->Html->link(__('New Admin'), ['action' => 'add'],['class'=>'btn btn-primary']) ?>
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
                                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($admins as $admin): ?>
                            <tr>
                                <td><?= h($admin->username) ?></td>
                                <td><?= h($admin->name) ?></td>
                                <td><?= h($admin->email) ?></td>
                                <td class="actions">
                                    <?php if($admin->id==$activeUser['id']){?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->id],['class'=>'btn btn-info']) ?>
                                    <?php }
                                    else{?>

                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->id)]) ?>
                                    <?php }?>
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
