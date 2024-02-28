<?php

defined('TYPO3') or die();

(static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    // extension name, matching the PHP namespaces (but without the vendor)
        'site_package',
        // arbitrary, but unique plugin name (not visible in the backend)
        'Example',
        // plugin title, as visible in the drop-down in the backend, use "LLL:" for localization
        'Example'
    );
})();
