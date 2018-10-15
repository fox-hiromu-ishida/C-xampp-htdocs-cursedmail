<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SendReceived[]|\Cake\Collection\CollectionInterface $sendReceived
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Send Received'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sendReceived index large-9 medium-8 columns content">
    <h3><?= __('Send Received') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ACNT_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MAIL_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SEND_DATE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RECEIVED_DATE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SEND_RECEIVED_FLG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DEL_FLG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('REC_DT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sendReceived as $sendReceived): ?>
            <tr>
                <td><?= $this->Number->format($sendReceived->ID) ?></td>
                <td><?= $this->Number->format($sendReceived->ACNT_ID) ?></td>
                <td><?= $this->Number->format($sendReceived->MAIL_ID) ?></td>
                <td><?= h($sendReceived->SEND_DATE) ?></td>
                <td><?= h($sendReceived->RECEIVED_DATE) ?></td>
                <td><?= $this->Number->format($sendReceived->SEND_RECEIVED_FLG) ?></td>
                <td><?= $this->Number->format($sendReceived->DEL_FLG) ?></td>
                <td><?= h($sendReceived->REC_DT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sendReceived->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sendReceived->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sendReceived->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sendReceived->ID)]) ?>
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
