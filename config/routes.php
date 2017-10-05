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

    // Страницы Виллы и Апартаменты
    'villa' => 'villa/index',
    'apartment' => 'apartment/index',

    // Страница Отзывы
    'feedback' => 'feedback/index',

    // Страница Контакты
    'contacts' => 'site/contacts',

    // Главная страница
    'index.php' => 'site/index', // actionIndex в SiteController
    '' => 'site/index', // actionIndex в SiteController
);
