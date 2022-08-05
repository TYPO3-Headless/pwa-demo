<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function(){
    ExtensionUtility::registerPlugin('SitePackage', 'DemoPlugin', 'Demo plugin');
})();
