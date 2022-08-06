<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

call_user_func(
    static function ($extensionKey): void {
        ExtensionUtility::configurePlugin(
            'SitePackage',
            'DemoPlugin',
            [
                \Pwademo\Sitepackage\Controller\DemoController::class => 'demo',
            ],
            []
        );
    },
    'site_package'
);
