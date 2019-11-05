<?php

return [
    /*
     * Model 设置
     */
    'model' => [
        // 可选值: "file", "text"
        'type' => 'file',
        'file' => env('config_path') . 'casbin.rbac.conf',
        'text' => '',
    ],
    // 适配器 .
    'adapter' => CasbinAdapter\DBAL\Adapter::class,
    /*
     * 数据库设置.
     */
    'database' => [
        // 数据库连接名称，不填为默认配置.
        'connection' => '',
        // 策略表名（不含表前缀）
        'casbin_table_name' => 'casbin_rule',
        // 策略表完整名称.
        'casbin_rules_table' => null,
    ],
];