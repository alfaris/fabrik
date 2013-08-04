<?php
/**
 * Bootstrap Tabs Form Template - group labels above
 *
 * @package     Joomla
 * @subpackage  Fabrik
 * @copyright   Copyright (C) 2005-2013 fabrikar.com - All rights reserved.
 * @license     GNU/GPL http://www.gnu.org/copyleft/gpl.html
 * @since       3.1
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

$element = $this->element;
?>
<div class="control-group <?php echo $element->containerClass . $element->span; ?>" <?php echo $element->containerProperties?>>
	<?php echo $element->label;?>

	<?php if ($this->tipLocation == 'above') : ?>
		<span class="help-block"><?php echo $element->tipAbove ?></span>
	<?php endif ?>

	<div class="fabrikElement">
		<?php echo $element->element;?>
	</div>

	<div class="<?php echo $this->class?>">
		<?php echo $element->error ?>
	</div>

	<?php if ($this->tipLocation == 'side') : ?>
		<div class="help-block"><?php echo $element->tipSide ?></div>
	<?php endif ?>

	<?php if ($this->tipLocation == 'below') :?>
		<div class="help-block"><?php echo $element->tipBelow ?></div>
	<?php endif ?>
</div><!-- end control-group -->


