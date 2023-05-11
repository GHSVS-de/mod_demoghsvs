<?php
defined('_JEXEC') or die;

/*
Available variables:
- Module Object $module
- Registry Object $params
- Joomla's Application Object $app
- Joomla's Input Object $input
- String $template
- String $image
- String $text
*/

$modId = 'modId-' . $module->id;
?>
<div id="<?php echo $modId; ?>" class="mod_demoghsvs">
	<div>
		<?php echo $image; ?>
	</div>
	<div>
		<?php echo $text; ?>
	</div>
	<div>
		<?php echo $app->get('sitename', ''); ?>
	</div>
</div>
