<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SendReceived $sendReceived
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sendReceived->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sendReceived->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Send Received'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sendReceived form large-9 medium-8 columns content">
    <?= $this->Form->create($sendReceived) ?>
    <fieldset>
        <legend><?= __('Edit Send Received') ?></legend>
        <?php
            echo $this->Form->control('ACNT_ID');
            echo $this->Form->control('MAIL_ID');
            echo $this->Form->control('SEND_DATE', ['empty' => true]);
            echo $this->Form->control('RECEIVED_DATE', ['empty' => true]);
            echo $this->Form->control('SEND_RECEIVED_FLG');
            echo $this->Form->control('REC_DT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
