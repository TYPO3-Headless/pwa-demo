<?php

defined('TYPO3_MODE') || die();

call_user_func(
    static function ($extensionKey) {
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
            [
                'sitepackage_slider',
                'sitepackage_slider'
            ],
            'CType',
            $extensionKey
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', [
            'tx_sitepackage_slide' => [
                'label' => 'Slide',
                'config' => [
                    'type' => 'inline',
                    'foreign_table' => 'tx_sitepackage_slide',
                    'appearance' => [
                        'useSortable' => true,
                        'showSynchronizationLink' => true,
                        'showAllLocalizationLink' => true,
                        'showPossibleLocalizationRecords' => true,
                        'showRemovedLocalizationRecords' => false,
                        'expandSingle' => true,
                        'enabledControls' => [
                            'localize' => true,
                        ]
                    ],
                    'behaviour' => [
                        'mode' => 'select',
                    ]
                ]
            ],
        ]);

        $GLOBALS['TCA']['tt_content']['types']['sitepackage_slider'] = [
            'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;Header,
                 tx_sitepackage_slide;LLL:EXT:sitepackage/Resources/Private/Language/locallang_be.xlf:tx_sitepackage_slider.form.title,
            --div--;Appearance,
                --palette--;,
                    frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                    space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                    space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,',
        ];
    },
    'site_package'
);
