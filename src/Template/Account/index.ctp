<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $account
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="account index large-9 medium-8 columns content">
    <h3><?= __('Account') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FIRST_NAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LAST_NAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FIRST_NAME_RO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LAST_NAME_RO') ?></th>
                <th scope="col"><?= $this->Paginator->sort('EMAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PASSWORD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('HP') ?></th>
                <th scope="col"><?= $this->Paginator->sort('AUTH_TYPE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DEL_FLG') ?></th>
                <th scope="col"><?= $this->Paginator->sort('REC_DT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('UPD_DT') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($account as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->ID) ?></td>
                <td><?= h($account->FIRST_NAME) ?></td>
                <td><?= h($account->LAST_NAME) ?></td>
                <td><?= h($account->FIRST_NAME_RO) ?></td>
                <td><?= h($account->LAST_NAME_RO) ?></td>
                <td><?= h($account->EMAIL) ?></td>
                <td><?= h($account->PASSWORD) ?></td>
                <td><?= $this->Number->format($account->HP) ?></td>
                <td><?= $this->Number->format($account->AUTH_TYPE) ?></td>
                <td><?= $this->Number->format($account->DEL_FLG) ?></td>
                <td><?= h($account->REC_DT) ?></td>
                <td><?= h($account->UPD_DT) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID)]) ?>
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
