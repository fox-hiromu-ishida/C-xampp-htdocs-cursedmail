<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mail[]|\Cake\Collection\CollectionInterface $mail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mail'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mail index large-9 medium-8 columns content">
    <h3><?= __('Mail') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SEND_ACNT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RECEIVED_ACNT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('SEND_DATE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DEL_FLG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('REC_DT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mail as $mail): ?>
            <tr>
                <td><?= $this->Number->format($mail->ID) ?></td>
                <td><?= $this->Number->format($mail->SEND_ACNT) ?></td>
                <td><?= $this->Number->format($mail->RECEIVED_ACNT) ?></td>
                <td><?= h($mail->SEND_DATE) ?></td>
                <td><?= $this->Number->format($mail->DEL_FLG) ?></td>
                <td><?= h($mail->REC_DT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mail->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mail->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $mail->ID)]) ?>
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
