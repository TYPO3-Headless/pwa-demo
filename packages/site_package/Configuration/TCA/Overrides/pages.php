<?php
defined('TYPO3_MODE') || die();

call_user_func(
    static function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extensionKey,
            'Configuration/TSConfig/Mod/ContentElements.tsconfig',
            'SitePackage :: Content Elements'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extensionKey,
            'Configuration/TSConfig/Mod/BackendLayouts.tsconfig',
            'SitePackage :: Backend Layouts'
        );

    },
    'site_package'
);
