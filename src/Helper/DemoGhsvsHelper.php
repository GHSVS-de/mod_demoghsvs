<?php

namespace GHSVS\Module\DemoGhsvs\Site\Helper;

\defined('_JEXEC') or die;

class DemoGhsvsHelper
{
	public function getMeinText($params)
	{
		$text = trim($params->get('meinText', ''));
		return $text;
	}

	public function getMeinImage($params)
	{
		$image = trim($params->get('meinImage', ''));
		return $image;
	}
}
