<?php

return array(
    // 'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    

    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',  
    
    // Добавление объекта
    'admin/realty/create' => 'adminRealty/create',
    
    // Изменение объекта
    'admin/realty/update/([0-9]+)' => 'adminRealty/update/$1',

    // Удаление объекта
    'admin/realty/delete/([0-9]+)/(\w+)' => 'adminRealty/delete/$1/$2',

    // Удаление картинки
    'admin/realty/deleteImg/(\w+)/(\w+)' => 'adminRealty/deleteImg/$1/$2',
    
    // Управление объектами недвижимости
    'admin/realty' => 'adminRealty/index',

    // Админка главная страница
    'admin' => 'admin/index',    

    // Одиночная запись - одна вилла
    'villa/single/(\w+)/([0-9]+)' => 'villa/single/$1/$2', 

    // Одиночная запись - один апартамент
    'apartment/single/(\w+)/([0-9]+)' => 'apartment/single/$1/$2', 

    // Страницы Виллы и Апартаменты
    // 'villa\_openstat=(\w+_openstat=\w+)' => 'villa/index',
    // 'villa\_openstat=(\w+)' => 'villa/index',
    'villa' => 'villa/index',    

    // 'apartment\_openstat=(\w+)_openstat=(\w+)' => 'apartment/index',
    // 'apartment\_openstat=(\w+)' => 'apartment/index',
    'apartment' => 'apartment/index',

    // Страница Отзывы
    // 'feedback\_openstat=(\w+)_openstat=(\w+)' => 'feedback/index',
    // 'feedback\_openstat=(\w+)' => 'feedback/index',
    'feedback' => 'feedback/index',


    // Страница Контакты
    // 'contacts\_openstat=(\w+)_openstat=(\w+)' => 'site/contacts',
    // 'contacts\_openstat=(\w+)' => 'site/contacts',
    'contacts' => 'site/contacts',

    // Директ чтобы правильно отображался
    //https://mybudva.ru/?_openstat=dGVzdDsxOzE7&test-tag=200669890977905&banner-test-tags=eyIxNTIzMTI0OTk3NjkwIjoiMjAwNjY5ODkwOTc3OTA1In0%3D&

    //https://mybudva.ru/?_openstat=dGVzdDsxOzE7&test-tag=200669890977905&banner-test-tags=eyIxNTIzMTI0OTk3NjkwIjoiMjAwNjY5ODkwOTc3OTA1In0%3D&

    // '\_openstat=(\w+)&test-tag=(\w+)&banner-test-tags=' => 'site/index',
    // '\_openstat=(\w+)&_openstat=(\w+)' => 'site/index',


    // '\_openstat=(\w+)' => 'site/index',


    // Главная страница
    'index.php\_openstat=(\w+)' => 'site/index',

    'index.php' => 'site/index', // actionIndex в SiteController
    '(\w+)' => 'site/index',
    //'\?_openstat=(\w+)&test-tag=([0-9]+)' => 'site/index',
    '' => 'site/index', // actionIndex в SiteController
);
