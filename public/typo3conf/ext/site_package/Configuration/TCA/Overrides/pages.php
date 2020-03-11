<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extensionKey,
            'Configuration/TSConfig/Mod/ContentElements.tsconfig',
            'SitePackage :: Content Elements'
        );

    },
    'site_package'
);
