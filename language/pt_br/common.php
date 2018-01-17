<?php
/**
*
* common [Brazilian Portuguese [pt_br]]
* Brazilian Portuguese translation by eunaumtenhoid (c) 2018 [ver 1.0.0] (https://github.com/phpBBTraducoes)
* @package language
* @version $Id$
* @copyright (c) 2014 SiteSplat.com
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'ALLOW_MASSEMAIL'                 => 'Quero receber informações/notícias do Administrador/Fórum via e-mail',
	'REGISTRATION_MASS_EMAIL_EXPLAIN' => '<strong>NOTA</strong>: Você sempre pode editar sua seleção em: <strong>Painel de controle do usuário &#187; Preferências  &#187; Editar configurações globais</strong>',
));
