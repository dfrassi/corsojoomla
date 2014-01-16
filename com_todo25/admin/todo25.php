<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_todo25')) 
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

// require helper file
JLoader::register('todo25Helper', dirname(__FILE__) . DS . 'helpers' . DS . 'todo25.php');

// import joomla controller library
jimport('joomla.application.component.controller');

// Get an instance of the controller prefixed by todo25
$controller = JController::getInstance('todo25');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
