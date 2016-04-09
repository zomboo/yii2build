<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    //'language' => 'zh-CN',//启用国际化支持
    //'sourceLanguage' => 'zh-CN',//源代码采用中文
    'timeZone' => 'Asia/Shanghai', //设置时区
    'bootstrap' => [
        [
            'class' => 'common\components\LanguageSelector',
            //'supportedLanguages' => ['en-US', 'ja-JP','zh-CN'],
        ],
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [
            'dateFormat' => 'Y-M-d',
            'datetimeFormat' => 'Y-M-d H:i:s',
            'timeFormat' => 'H:i:s',
            'locale' => 'zh-CN', //your language locale
            'defaultTimeZone' => 'Asia/Shanghai', // time zone
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\DbMessageSource',
                    //'basePath' => '@common/messages', // if advanced application, set @frontend/messages
                    'sourceLanguage' => 'en',
                    /*'fileMap' => [
                        'frontend' => 'frontend.php',
                        'frontend/error' => 'error.php',
                    ],*/
                ],
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages', // if advanced application, set @frontend/messages
                    //'sourceLanguage' => 'en',
                   'fileMap' => [
                        'frontend' => 'frontend.php',
                        'frontend/error' => 'error.php',
                    ],
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages', // if advanced application, set @frontend/messages
                   //'sourceLanguage' => 'en',
                    'fileMap' => [
                        'backend' => 'backend.php',
                        'backend/error' => 'error.php',
                    ],
                ],
            ],
        ],
    ],

];
