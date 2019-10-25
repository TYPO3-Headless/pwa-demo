<?php

$loader = new Dotenv\Dotenv(__DIR__ . '/../../', '.env.dist');
$loader->overload();
if (file_exists(__DIR__ . '/../../.env')) {
    $loader = new Dotenv\Dotenv(__DIR__ . '/../../');
    $loader->overload();
}

// Database Credentials
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['host'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_HOST');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['port'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_PORT');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['user'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_USER');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['password'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_PASS');
$GLOBALS['TYPO3_CONF_VARS']['DB']['Connections']['Default']['dbname'] = getenv('TYPO3_DB_CONNECTIONS_DEFAULT_NAME');

// Graphics
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor'] = getenv('TYPO3_GFX_PROCESSOR');
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path'] = getenv('TYPO3_GFX_PROCESSOR_PATH');
$GLOBALS['TYPO3_CONF_VARS']['GFX']['processor_path_lzw'] = getenv('TYPO3_GFX_PROCESSOR_PATH_LZW');

// Mail
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport'] = getenv('TYPO3_MAIL_TRANSPORT');
$GLOBALS['TYPO3_CONF_VARS']['MAIL']['transport_smtp_server'] = getenv('TYPO3_MAIL_TRANSPORT_SMTP_SERVER');

// System
$GLOBALS['TYPO3_CONF_VARS']['SYS']['trustedHostsPattern'] ='.*';
