<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey): void {
        ExtensionUtility::registerPlugin('SitePackage', 'DemoPlugin', 'Demo plugin');
        ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_slide');
    },
    'site_package'
);
