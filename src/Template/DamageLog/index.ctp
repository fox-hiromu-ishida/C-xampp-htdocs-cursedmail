<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DamageLog[]|\Cake\Collection\CollectionInterface $damageLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Damage Log'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="damageLog index large-9 medium-8 columns content">
    <h3><?= __('Damage Log') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AT_ACNT_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DF_ACNT_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RECEIVED_DMG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('MAIL_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('REC_DT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($damageLog as $damageLog): ?>
            <tr>
                <td><?= $this->Number->format($damageLog->ID) ?></td>
                <td><?= $this->Number->format($damageLog->AT_ACNT_ID) ?></td>
                <td><?= $this->Number->format($damageLog->DF_ACNT_ID) ?></td>
                <td><?= $this->Number->format($damageLog->RECEIVED_DMG) ?></td>
                <td><?= $this->Number->format($damageLog->MAIL_ID) ?></td>
                <td><?= h($damageLog->REC_DT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $damageLog->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $damageLog->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $damageLog->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $damageLog->ID)]) ?>
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
