<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DamageLog $damageLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Damage Log'), ['action' => 'edit', $damageLog->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Damage Log'), ['action' => 'delete', $damageLog->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $damageLog->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Damage Log'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Damage Log'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="damageLog view large-9 medium-8 columns content">
    <h3><?= h($damageLog->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($damageLog->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AT ACNT ID') ?></th>
            <td><?= $this->Number->format($damageLog->AT_ACNT_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DF ACNT ID') ?></th>
            <td><?= $this->Number->format($damageLog->DF_ACNT_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RECEIVED DMG') ?></th>
            <td><?= $this->Number->format($damageLog->RECEIVED_DMG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MAIL ID') ?></th>
            <td><?= $this->Number->format($damageLog->MAIL_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('REC DT') ?></th>
            <td><?= h($damageLog->REC_DT) ?></td>
        </tr>
    </table>
</div>
