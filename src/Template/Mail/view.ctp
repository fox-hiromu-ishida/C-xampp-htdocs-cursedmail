<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mail $mail
 */
?>
<div class="mail view large-9 medium-8 columns content">
    <!--<button type="button" class="btn btn-default">返信</button>-->
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SEND ACNT') ?></th>
            <td><?= $send_account_mail ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('RECEIVED ACNT') ?></th>
            <td><?= $received_account_mail ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SEND DATE') ?></th>
            <td><?= h($mail->SEND_DATE) ?></td>
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
    <!--<button type="button" class="btn btn-default">返信</button>-->
</div>
