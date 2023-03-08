<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$2a$12$eCPenIJ4AUYrkXke5DpuVuNX5gKxGSzBu2ExOdYrDwTXtOT2kUiK.',
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
    'EXT' => [],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => 'EXT:bootstrap_package/Resources/Public/Images/Backend/backend-logo.svg',
            'loginBackgroundImage' => 'EXT:bootstrap_package/Resources/Public/Images/Backend/login-background-image.jpg',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => 'EXT:bootstrap_package/Resources/Public/Images/Backend/login-logo.svg',
            'loginLogoAlt' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'mask' => [
            'backend' => 'EXT:site_package/Resources/Private/Mask/Backend/Templates',
            'backend_layouts_folder' => '',
            'backendlayout_pids' => '0',
            'content' => 'EXT:site_package/Resources/Private/Mask/Frontend/Templates',
            'content_elements_folder' => '',
            'json' => 'EXT:site_package/Configuration/Mask/mask.json',
            'layouts' => 'EXT:site_package/Resources/Private/Mask/Frontend/Layouts',
            'layouts_backend' => 'EXT:site_package/Resources/Private/Mask/Backend/Layouts',
            'loader_identifier' => 'json',
            'partials' => 'EXT:site_package/Resources/Private/Mask/Frontend/Partials',
            'partials_backend' => 'EXT:site_package/Resources/Private/Mask/Backend/Partials',
            'preview' => 'EXT:site_package/Resources/Public/Mask/',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'debug' => true,
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
        'exceptionalErrors' => 12290,
        'features' => [
            'headless.elementBodyResponse' => false,
            'headless.frontendUrls' => true,
            'headless.simplifiedLinkTarget' => false,
            'headless.redirectMiddlewares' => false,
            'headless.workspaces' => false,
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'PWA Demo',
        'systemMaintainers' => [
            2,
        ],
        'trustedHostsPattern' => '.*.*',
    ],
];
