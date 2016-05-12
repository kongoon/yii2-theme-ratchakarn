การติดตั้ง
---
composer require kongoon/yii2-theme-ratchakarn

การใช้งาน
เปิดไฟล์ frontend/config/main.php

components = [
//...
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/kongoon/yii2-theme-ratchakarn/views'
            ]
        ]
    ]

//...
]
