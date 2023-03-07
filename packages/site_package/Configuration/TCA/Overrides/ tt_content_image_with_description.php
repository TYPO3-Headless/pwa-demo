<?php
defined('TYPO3') || die();
call_user_func(
    static function ($extensionKey): void {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                'Image with description',
                'image_with_description',
                '',
            ],
            'CType',
            $extensionKey
        );
        $GLOBALS['TCA']['tt_content']['types']['image_with_description'] = [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header,
                    header_link,
                    subheader,
                    bodytext,
                    assets,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
            ',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                    ],
                ],
            ],
        ];
    },
    'site_package'
);
