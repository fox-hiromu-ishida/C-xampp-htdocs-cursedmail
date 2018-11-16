<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account[]|\Cake\Collection\CollectionInterface $account
 */
?>
<?php echo $this->Html->css('mailer'); ?>
<div class="login-all">
    <div class="login-content">
        <div class="login-title">
            <h2>呪いのメーラー</h2>
        </div>
        <div class="login-form">
            <form>
                <h3>ユーザ名</h3>
                <input type="text">
                <h3>パスワード</h3>
                <input type="text">
                <br />
                <div class="button-area">
                    <?php echo $this->Html->link("ログイン", ['controller' => 'Mail', 'action' => 'index'], ['class' => 'submit-button']); ?>
                    <?php echo $this->Html->image('wara.png', array('alt' => 'img')); ?>
                </div>
            </form>
        </div>
    </div>
</div>
