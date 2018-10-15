<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Account'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="account form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Add Account') ?></legend>
        <?php
            echo $this->Form->control('FIRST_NAME');
            echo $this->Form->control('LAST_NAME');
            echo $this->Form->control('FIRST_NAME_RO');
            echo $this->Form->control('LAST_NAME_RO');
            echo $this->Form->control('EMAIL');
            echo $this->Form->control('PASSWORD');
            echo $this->Form->control('HP');
            echo $this->Form->control('AUTH_TYPE');
            echo $this->Form->control('DEL_FLG');
            echo $this->Form->control('REC_DT');
            echo $this->Form->control('UPD_DT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
