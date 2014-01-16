<?php

// No direct access to this file
defined('_JEXEC') or die;

/**
 * todo25 component helper.
 */
abstract class todo25Helper
{
	/**
	 * Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('COM_TODO25_SUBMENU_MESSAGES'), 'index.php?option=com_todo25', $submenu == 'messages');
		JSubMenuHelper::addEntry(JText::_('COM_TODO25_SUBMENU_CATEGORIES'), 'index.php?option=com_categories&view=categories&extension=com_todo25', $submenu == 'categories');
		// set some global property
		$document = JFactory::getDocument();
		$document->addStyleDeclaration('.icon-48-todo25 {background-image: url(../media/com_todo25/images/tux-48x48.png);}');
		if ($submenu == 'categories') 
		{
			$document->setTitle(JText::_('COM_TODO25_ADMINISTRATION_CATEGORIES'));
		}
	}
	/**
	 * Get the actions
	 */
	public static function getActions($messageId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		if (empty($messageId)) {
			$assetName = 'com_todo25';
		}
		else {
			$assetName = 'com_todo25.message.'.(int) $messageId;
		}

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.delete'
		);

		foreach ($actions as $action) {
			$result->set($action,	$user->authorise($action, $assetName));
		}

		return $result;
	}
}
