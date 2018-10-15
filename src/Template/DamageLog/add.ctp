<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DamageLog $damageLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Damage Log'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="damageLog form large-9 medium-8 columns content">
    <?= $this->Form->create($damageLog) ?>
    <fieldset>
        <legend><?= __('Add Damage Log') ?></legend>
        <?php
            echo $this->Form->control('AT_ACNT_ID');
            echo $this->Form->control('DF_ACNT_ID');
            echo $this->Form->control('RECEIVED_DMG');
            echo $this->Form->control('MAIL_ID');
            echo $this->Form->control('REC_DT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
