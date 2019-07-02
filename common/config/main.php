<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        // 'aliases' => ['@move_uploaded_file(@app/common, uploads)'],
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        // Hapus ini
       //  'view' => [
       //      'theme' => [
       //          'pathMap' => [
       //             '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
       //          ],
       //      ],
       // ],
    ],
];