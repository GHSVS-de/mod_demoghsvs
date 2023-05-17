<?php
defined('_JEXEC') or die;

/*
Available variables:
- Module Object $module
- Registry Object $params
- Joomla's Application Object $app
- Joomla's Input Object $input
- String $template
- String $meinImage
- String $meinText
- String $modId
*/
?>
<div id="<?php echo $modId; ?>" class="mod_demoghsvs">
	<ol>
		<li>meinImage is: <?php echo $meinImage; ?></li>
		<li>meinText is: <?php echo $meinText; ?></li>
		<li>Sitename is: <?php echo $app->get('sitename', ''); ?></li>
	</ol>
</div>
