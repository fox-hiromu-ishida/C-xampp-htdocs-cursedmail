<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SendReceived $sendReceived
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Send Received'), ['action' => 'edit', $sendReceived->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Send Received'), ['action' => 'delete', $sendReceived->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $sendReceived->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Send Received'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Send Received'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sendReceived view large-9 medium-8 columns content">
    <h3><?= h($sendReceived->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($sendReceived->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ACNT ID') ?></th>
            <td><?= $this->Number->format($sendReceived->ACNT_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MAIL ID') ?></th>
            <td><?= $this->Number->format($sendReceived->MAIL_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SEND RECEIVED FLG') ?></th>
            <td><?= $this->Number->format($sendReceived->SEND_RECEIVED_FLG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SEND DATE') ?></th>
            <td><?= h($sendReceived->SEND_DATE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RECEIVED DATE') ?></th>
            <td><?= h($sendReceived->RECEIVED_DATE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('REC DT') ?></th>
            <td><?= h($sendReceived->REC_DT) ?></td>
        </tr>
    </table>
</div>
