<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $account->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Account'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="account view large-9 medium-8 columns content">
    <h3><?= h($account->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FIRST NAME') ?></th>
            <td><?= h($account->FIRST_NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LAST NAME') ?></th>
            <td><?= h($account->LAST_NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FIRST NAME RO') ?></th>
            <td><?= h($account->FIRST_NAME_RO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LAST NAME RO') ?></th>
            <td><?= h($account->LAST_NAME_RO) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EMAIL') ?></th>
            <td><?= h($account->EMAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PASSWORD') ?></th>
            <td><?= h($account->PASSWORD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($account->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HP') ?></th>
            <td><?= $this->Number->format($account->HP) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AUTH TYPE') ?></th>
            <td><?= $this->Number->format($account->AUTH_TYPE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DEL FLG') ?></th>
            <td><?= $this->Number->format($account->DEL_FLG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('REC DT') ?></th>
            <td><?= h($account->REC_DT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UPD DT') ?></th>
            <td><?= h($account->UPD_DT) ?></td>
        </tr>
    </table>
</div>
