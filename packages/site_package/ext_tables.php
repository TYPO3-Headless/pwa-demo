<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey): void {
        ExtensionManagementUtility::allowTableOnStandardPages('tx_sitepackage_slide');
    },
    'site_package'
);
