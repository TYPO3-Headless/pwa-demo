<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$2y$12$V8Xxf88bKuyJ6xlNnGQbKuBer/rDnBig8FknlCfSbSUchD8q686Pu',
        'loginSecurityLevel' => 'normal',
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
            'backend' => 'a:6:{s:9:"loginLogo";s:68:"EXT:bootstrap_package/Resources/Public/Images/Backend/login-logo.svg";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:80:"EXT:bootstrap_package/Resources/Public/Images/Backend/login-background-image.jpg";s:13:"loginFootnote";s:0:"";s:11:"backendLogo";s:70:"EXT:bootstrap_package/Resources/Public/Images/Backend/backend-logo.svg";s:14:"backendFavicon";s:0:"";}',
            'bootstrap_package' => 'a:8:{s:16:"disablePageTsRTE";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:28:"disablePageTsContentElements";s:1:"0";s:20:"disableCssProcessing";s:1:"0";s:24:"disableGoogleFontCaching";s:1:"0";s:17:"disableFontLoader";s:1:"0";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
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
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableFontLoader' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
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
