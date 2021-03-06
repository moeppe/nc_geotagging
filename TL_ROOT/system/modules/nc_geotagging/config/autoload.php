<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   NC Geotagging
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2015
 * @website   https://www.noltecomputer.com
 * @credits   Helmut Schottmüller <typolight@aurealis.de>
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'NC',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Widgets
	'NC\NcGeoPositionWidget' => 'system/modules/nc_geotagging/widgets/NcGeoPositionWidget.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_geocode_widget' => 'system/modules/nc_geotagging/templates/backend',
));
