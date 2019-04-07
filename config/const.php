<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Role
    |--------------------------------------------------------------------------
    |
    */

    'role' => [

        'super' => [
            'key' => 'super',
            'level' => '1',
            'name' => '特権管理者'
        ],

        'administrator' => [
            'key' => 'administrator',
            'level' => '10',
            'name' => '管理者'
        ],

        'basic' => [
            'key' => 'basic',
            'level' => '50',
            'name' => 'ベーシックプラン'
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Patient Status
    |--------------------------------------------------------------------------
    |
    */

    'patient_status' => [

        'none' => [
            'label' => '未設定',
            'value' => 'none',
        ],

        'new' => [
            'label' => '新規',
            'value' => 'new',
        ],

        'first' => [
            'label' => '初診',
            'value' => 'first',
        ],

        'before' => [
            'label' => '治療前',
            'value' => 'before',
        ],

        'treatment' => [
            'label' => '治療中',
            'value' => 'treatment',
        ],

        'suspend' => [
            'label' => '中断',
            'value' => 'suspend',
        ],

        'complete' => [
            'label' => '治療済み',
            'value' => 'complete',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Holiday
    |--------------------------------------------------------------------------
    |
    */

    'holiday' => [

        'full' => [
            'key' => 'full',
            'title' => '休診日',
            'color' => '#c6384a'
        ],

        'am' => [
            'key' => 'am',
            'title' => '午前休診日',
            'color' => '#49a2bc'
        ],

        'pm' => [
            'key' => 'pm',
            'title' => '午後休診日',
            'color' => '#45ad7e'
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Mail Inbox Types
    |--------------------------------------------------------------------------
    |
    */

    'mail_inbox_type' => [

        'error' => [
            'value' => 'error',
            'label' => 'エラー'
        ],

        'new' => [
            'value' => 'new',
            'label' => '予約'
        ],

        'change' => [
            'value' => 'change',
            'label' => '変更'
        ],

        'cancel' => [
            'value' => 'cancel',
            'label' => 'キャンセル'
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Appointment Way
    |--------------------------------------------------------------------------
    |
    */

    'appointment_way' => [

        'web' => [
            'value' => 'web',
            'label' => 'ウェブ予約'
        ],

        'app' => [
            'value' => 'app',
            'label' => 'アプリ'
        ],

        'tel' => [
            'value' => 'tel',
            'label' => '電話'
        ],

    ],

];