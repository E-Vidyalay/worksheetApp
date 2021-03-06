<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<title><?php echo $this->fetch('title'); ?></title>
	<style type="text/css">
	</style>
</head>
<body style="background: #f0f0f0;" align="center">
	<div class="header" style="background: #054b9a;
		height: 70px;
		width: 100%;
		color: #fff;
		text-align: center;">
        <span class="brand-name" style="float: right;margin-right: 34%;font-size: 32px;padding-top:12px;">WorksheetApp</span>
	</div>
	<div class="content" style="background-color: #fff;
  		padding: 10px;height:100%;" align="left">
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
</html>
