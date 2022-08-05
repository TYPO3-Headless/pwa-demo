<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

// encapsulate all locally defined variables
(static function() {
    ExtensionUtility::configurePlugin(
        'SitePackage',
        'DemoPlugin',
        [
            \Pwademo\Sitepackage\Controller\DemoController::class => 'demo',
        ],
        // non-cacheable actions
        []
    );
})();
