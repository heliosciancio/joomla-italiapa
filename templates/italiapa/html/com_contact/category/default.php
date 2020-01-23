<?php
/**
 * @package		Joomla.Site
 * @subpackage	Templates.ItaliaPA
 *
 * @author		Helios Ciancio <info (at) eshiol (dot) it>
 * @link		http://www.eshiol.it
 * @copyright	Copyright (C) 2017 - 2020 Helios Ciancio. All Rights Reserved
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL v3
 * Template ItaliaPA is free software. This version may have been modified
 * pursuant to the GNU General Public License, and as distributed it includes
 * or is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

defined('_JEXEC') or die;

if (JFactory::getApplication()->input->get('layout') === 'organigramma')
{
	include __DIR__ . '/organigramma.php';
}
else
{
	$this->subtemplatename = 'items';
	$this->params->set('show_category_heading_title_text', 0);
	echo JLayoutHelper::render('joomla.content.category_default', $this);
}