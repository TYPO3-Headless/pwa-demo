<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function ($extensionKey) {
        /**
         * Default TypoScript for site_package
         */
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript/Setup',
            'SitePackage :: Base setup'
        );
    },
    'site_package'
);
