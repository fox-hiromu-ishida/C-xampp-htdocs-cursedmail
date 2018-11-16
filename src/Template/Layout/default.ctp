<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
<!-- 
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
 -->
    <?= $this->fetch('meta') ?>
    <!-- <?= $this->fetch('css') ?> -->
    <?= $this->fetch('script') ?>
</head>
<body style="background-color:#000; border:0px; margin:0px; color:#FFF;">
    <div style="background-color:#000; border:0px; margin:0px; ">
        <div style="height:75px; width:100%; background-color:#000; border:0px; margin:0px;">
            <h1><a href="" style="color:red; text-decoration: none;"><img src="https://3.bp.blogspot.com/-YRHyt5Fdbvo/VxC3Vo3ZjmI/AAAAAAAA534/pXWlbejfjT0DkorPmN5W9-5h_wqIrXHiQCLcB/s800/waraningyou.png" height="50px" width="50px">呪いのメール</a></h1>
        </div>
        <div style="height:580px; width:100%; background-color:#000; border:0px; margin:0px;">
            <div style="float:left; height:100%; background-color: #000; width: 15%; border:0px; margin:0px;">サイドバー</div>
            <div style="float:left; height:100%; background-color: #000; width: 85%; border:0px; margin:0px;">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>  
            </div>
        </div>
        <div style="height:75px; width:100%; background-color:#000; border:0px; margin:0px;">フッター</div>
        
    </div>

</body>
</html>
