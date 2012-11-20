<?php
/**
*
* AutoMOD [Deutsch — Sie]
*
* @package language
* @copyright (c) 2008 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Deutsche Übersetzung durch die Übersetzer-Gruppe von phpBB.de:
* siehe docs/AUTHORS und http://www.phpbb.de/go/ubersetzerteam
*
*/
/**
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_CAT_MODS'			=> 'AutoMOD',
	'ACP_MODS'				=> 'AutoMOD',
	'ACP_AUTOMOD'			=> 'AutoMOD',
	'ACP_AUTOMOD_CONFIG'	=> 'AutoMOD-Konfiguration',

	'LOG_MOD_ADD'		=> '<strong>Neue Modifikation hinzugefügt</strong><br />» %s',
	'LOG_MOD_CHANGE'	=> '<strong>Komponenten einer Modifikation geändert</strong><br />» %s',
	'LOG_MOD_REMOVE'	=> '<strong>Modifikation entfernt</strong><br />» %s',

	'MOD_CHANGELOG'		=> 'Changelog der Modifikation',

	'acl_a_mods'		=> array('lang' => 'Kann AutoMOD nutzen', 'cat' => 'misc'),
));



?>