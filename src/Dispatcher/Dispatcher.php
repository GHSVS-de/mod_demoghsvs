<?php

namespace GHSVS\Module\DemoGhsvs\Site\Dispatcher;

\defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;
use Joomla\CMS\Helper\HelperFactoryAwareInterface;
use Joomla\CMS\Helper\HelperFactoryAwareTrait;

class Dispatcher extends AbstractModuleDispatcher implements HelperFactoryAwareInterface
{
	use HelperFactoryAwareTrait;

	protected function getLayoutData()
	{
		$data = parent::getLayoutData();

		$helper = $this->getHelperFactory()->getHelper('DemoGhsvsHelper');

		$data['meinImage'] = $helper->getMeinImage($data['params']);
		$data['meinText'] = $helper->getMeinText($data['params']);

		return $data;
	}
}
