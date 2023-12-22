<?php

use App\Support\Classes\SwaggerMakeToken;

return [
    /*
     * Версия OpenApi
     */
    'openapi' => '3.0.0',

    /*
     * Блок информации
     */
    'info' => [
        'title' => 'Fashion API',
        'description' => 'Документация к API сервиса Fashion',
        'version' => '1.0.0',
        'termsOfService' => 'https://openweathermap.org/terms',
        'contact' => [
            'name' => 'test',
            'url' => 'https://example.com',
            'email' => 'email@mail.ru',
        ],
        'license' => [
            'name' => 'CC Attribution-ShareAlike 4.0 (CC BY-SA 4.0)',
            'url' => 'https://openweathermap.org/price',
        ],
    ],

    /*
     * Схемы авторизации
     */
    'securitySchemes' => [
        'passport' => [
            'type' => 'http',
            'in' => 'header',
            'name' => 'Authorization',
            'scheme' => 'Bearer',
            'description' => 'Для авторизации используйте ключ ',
        ],
        'sanctum' => [
            'type' => 'http',
            'in' => 'header',
            'name' => 'Authorization',
            'scheme' => 'Bearer',
            'description' => 'Для авторизации используйте ключ ',
        ],
    ],

    /*
     * Сервера для выполнения запросов
     */
    'servers' => [
        [
            'url' => env('APP_URL'),
            'description' => 'Сервер для тестирования',
        ],
    ],

    'auth' => [
        /*
         * Есть ли авторизация
         */
        'has_auth' => true,

        /*
         * ПО, которое проверяет авторизацию для маршрута
         */
        'middleware' => 'auth.api',

        /*
         * Схема для авторизации
         */
        'security_schema' => 'passport',

        /*
         * Метод для получения токена(ов) для авторизации
         */
        'make_token' => [
            'action' => SwaggerMakeToken::class,
        ],
    ],

    /*
     * Информация по хранению файлов с данными после тестирования
     */
    'storage' => [
        'driver' => 'local',
        'path' => 'data',
    ],

    /*
     * Первый ключ, который не относится к ресурсам
     */
    'pre_key' => 'data',

    'resources_keys' => [
        /*
         * Есть ли у ресурсов ключ
         */
        'has_pre_key' => true,

        /*
         * Использование свойство wrap в качестве имени ресурса
         */
        'use_wrap' => false,
    ],

    /*
     * Описание кодов ответа
     */
    'codes' => [
        200 => 'Запрос выполнен успешно',
        201 => 'Объект успешно создан',
        204 => 'Нет контента',
        401 => 'Нет авторизации',
        403 => 'Нет прав',
        404 => 'Нет страницы',
        422 => 'Ошибка валидации данных',
        500 => 'Ошибка сервера',
    ],
];
