<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mail $mail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mail'), ['action' => 'edit', $mail->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mail'), ['action' => 'delete', $mail->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $mail->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Mail'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mail'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mail view large-9 medium-8 columns content">
    <h3><?= h($mail->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($mail->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SEND ACNT') ?></th>
            <td><?= $this->Number->format($mail->SEND_ACNT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RECEIVED ACNT') ?></th>
            <td><?= $this->Number->format($mail->RECEIVED_ACNT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DEL FLG') ?></th>
            <td><?= $this->Number->format($mail->DEL_FLG) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SEND DATE') ?></th>
            <td><?= h($mail->SEND_DATE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('REC DT') ?></th>
            <td><?= h($mail->REC_DT) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('SUBJECT') ?></h4>
        <?= $this->Text->autoParagraph(h($mail->SUBJECT)); ?>
    </div>
    <div class="row">
        <h4><?= __('BODY') ?></h4>
        <?= $this->Text->autoParagraph(h($mail->BODY)); ?>
    </div>
</div>
