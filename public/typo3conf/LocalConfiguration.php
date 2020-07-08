<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$2y$12$V8Xxf88bKuyJ6xlNnGQbKuBer/rDnBig8FknlCfSbSUchD8q686Pu',
        'loginSecurityLevel' => 'rsa',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:70:"EXT:bootstrap_package/Resources/Public/Images/Backend/backend-logo.svg";s:20:"loginBackgroundImage";s:80:"EXT:bootstrap_package/Resources/Public/Images/Backend/login-background-image.jpg";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:68:"EXT:bootstrap_package/Resources/Public/Images/Backend/login-logo.svg";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'news' => 'a:18:{s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"1";s:21:"contentElementPreview";s:1:"1";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"dateTimeNotRequired";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"mediaPreview";s:5:"false";s:20:"advancedMediaPreview";s:1:"1";s:13:"slugBehaviour";s:6:"unique";s:24:"showAdministrationModule";s:1:"1";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => 'EXT:bootstrap_package/Resources/Public/Images/Backend/backend-logo.svg',
            'loginBackgroundImage' => 'EXT:bootstrap_package/Resources/Public/Images/Backend/login-background-image.jpg',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => 'EXT:bootstrap_package/Resources/Public/Images/Backend/login-logo.svg',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => '',
            'contentElementPreview' => '1',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '0',
            'mediaPreview' => 'false',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'showImporter' => '0',
            'slugBehaviour' => 'unique',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'rsaauth' => [
            'temporaryDirectory' => '',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '517d47fd2681627245de9c4a4a726ac2e833c8bca7c5c0ad543c12e9f2ddbd8803a83044b6a4f247b26ceddf03be451d',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'PWA Demo',
        'systemLogLevel' => 2,
        'systemMaintainers' => [
            2,
        ],
    ],
];
