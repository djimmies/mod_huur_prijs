<?php
/**
 * @package		Dayman Media
 * @subpackage	mod_villa_prijs
 * @copyright	Copyright (C) 2014 Dayman Media, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

$h_seizoen =$params->get('hoogseizoen');
$l_seizoen =$params->get('laagseizoen');
$h_seizoen_period=$params->get('hoogseizoenperiode');
$l_seizoen_period=$params->get('laagseizoenperiode');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));


require JModuleHelper::getLayoutPath('mod_villa_prijs', $params->get('layout', 'default'));

$document = JFactory::getDocument();
$document->addStyleSheet('modules/mod_villa_prijs/css/style.css');

