<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mail[]|\Cake\Collection\CollectionInterface $mail
 */
?>
<?php echo $this->Html->css('mailer'); ?>
<div class="mail-list">
<div class="mail index large-9 medium-8 columns content">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">送信者</th>
                <th scope="col">受信者</th>
                <th scope="col">件名</th>
                <th scope="col">送信日時</th>
                <th scope="col">作成日時</th>
                <th scope="col" class="actions">削除</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mail as $mail): ?>
            <tr>
                <td><?= $this->Number->format($mail->SEND_ACNT) ?></td>
                <td><?= $this->Number->format($mail->RECEIVED_ACNT) ?></td>
                <td><?= $this->Html->link(__($mail->SUBJECT), ['action' => 'view', $mail->ID]) ?>
                <td><?= h($mail->SEND_DATE) ?></td>
                <td><?= h($mail->REC_DT) ?></td>
                <td class="actions">
                    <?php echo $this->Form->postLink(
                        $this->Html->image('/img/delete.png'),
                            ['action' => 'delete', $mail->ID],
                            ['confirm' => __('メールを削除してよろしいですか？'), 'escape' => false]
                    ); ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('最初へ')) ?>
            <?= $this->Paginator->prev('< ' . __('前へ')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次へ') . ' >') ?>
            <?= $this->Paginator->last(__('最後へ') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __(' {{pages}} ページ中 {{page}} ページ')]) ?></p>
    </div>
</div>
</div>
