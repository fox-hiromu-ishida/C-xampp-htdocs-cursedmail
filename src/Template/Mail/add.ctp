<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mail $mail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mail'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mail form large-9 medium-8 columns content">
    <?= $this->Form->create($mail) ?>
    <fieldset>
        <legend><?= __('Add Mail') ?></legend>
        <?php
            echo $this->Form->control('SEND_ACNT');
            echo $this->Form->control('RECEIVED_ACNT');
            echo $this->Form->control('SUBJECT');
            echo $this->Form->control('BODY');
            echo $this->Form->control('SEND_DATE');
            echo $this->Form->control('DEL_FLG');
            echo $this->Form->control('REC_DT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
