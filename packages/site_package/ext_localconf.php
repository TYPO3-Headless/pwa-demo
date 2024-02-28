<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('
  module.tx_form.settings.yamlConfigurations.100 = EXT:site_package/Configuration/Form/CustomFormSetup.yaml
  plugin.tx_form.settings.yamlConfigurations.100 = EXT:site_package/Configuration/Form/CustomFormSetup.yaml
');

TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
// extension name, matching the PHP namespaces (but without the vendor)
    'SitePackage',
    // arbitrary, but unique plugin name (not visible in the backend)
    'Example',
    // all actions
    [Pwademo\SitePackage\Controller\ExampleController::class => 'list'],
    // non-cacheable actions
    [],
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);
