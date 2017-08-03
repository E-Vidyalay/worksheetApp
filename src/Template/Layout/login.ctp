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

$cakeDescription = 'Handcraft Cards';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<?= $cakeDescription ?>:
        	<?= $this->fetch('title') ?>
		</title>
		<?php
			echo $this->Html->css('bootstrap');
			echo $this->Html->css('bootstrap-theme');
			echo $this->Html->css('metisMenu.css');
			echo $this->Html->css('sb-admin-2');
			echo $this->Html->css('font-awesome');
			echo $this->Html->css('timeline');
			echo $this->fetch('css');
			echo $this->fetch('script');
			echo $this->Html->meta('favicon.ico','/favicon.ico',array('type'=>'icon'));
		?>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	<body>
	
		<?= $this->fetch('content') ?>
	
		<?php
			echo $this->Html->script('jquery');
			echo $this->Html->script('app');
			echo $this->Html->script('bootstrap');
			echo $this->Html->script('metisMenu');
			echo $this->Html->script('sb-admin-2');
		?>
	</body>
</html>