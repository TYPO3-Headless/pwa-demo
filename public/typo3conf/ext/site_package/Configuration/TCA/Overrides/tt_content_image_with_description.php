<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                'Image with description',
                'sitepackage_image_with_description',
                ''
            ],
            'CType',
            $extensionKey
        );

        $GLOBALS['TCA']['tt_content']['types']['sitepackage_image_with_description'] = [
            'showitem' => '
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
         header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
         header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
         bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
         assets;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_formlabel,
         --div--;Appearance,
         --palette--;,
         layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
         frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
        space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
        space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
        custom_class,Custom class,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
         --palette--;;language,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
         --palette--;;hidden,',
            'columnsOverrides' => [
                'bodytext' => [
                    'config' => [
                        'enableRichtext' => true,
                    ]
                ],
                'assets' => [
                    'config' => [
                        'minitems' => 1
                    ]
                ]
            ]
        ];
    },
    'site_package'
);
