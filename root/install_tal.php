<?php
/**
*
* @author Senky (Jakub Senko) jakubsenko@gmail.com
* @package Invitations
* @copy & copyright (c) 2010 Senky
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$language_file = 'mods/info_acp_tal';

$mod_name = 'TAL_TITLE';

$version_config_name = 'tal_version';

$versions = array(
	'1.0.2'	=> array(

		'table_column_add' => (array(
    	array(TOPICS_TABLE, 'topic_url', array('TINT:1', '0')),
		)),

		'cache_purge' => 'template'
	),
);

include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>