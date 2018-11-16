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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <title><?= $this->fetch('title') ?></title>
</head>
<body>
	<div style="background-color:#000;">
		<div style="height:150px; width:100%; background-color:#333;">ヘッダー</div>
		<div style="height:600px; width:100%; background-color:#333;">
			<div style="display:inline-block; background-color: #888; width: 15%;">サイドバー</div>
			<div style="display:inline-block; background-color: #555; width: 85%;">
				本文
				<?= $this->fetch('content') ?>	
			</div>
		</div>
		<div style="height:150px; width:100%; background-color:red;">フッター</div>
		
	</div>
</body>
</html>
