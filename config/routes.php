<?php

return array(
    // Товар:
    //'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController
    // Каталог:
    //'catalog' => 'catalog/index', // actionIndex в CatalogController
    // Категория товаров:
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', // actionCategory в CatalogController   
    //'category/([0-9]+)' => 'catalog/category/$1', // actionCategory в CatalogController
    // Корзина:
    //'cart/checkout' => 'cart/checkout', // actionAdd в CartController    
    //'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController    
    //'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController    
    //'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    //'cart' => 'cart/index', // actionIndex в CartController
    // Пользователь:
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    // Управление товарами:    
//    'admin/product/create' => 'adminProduct/create',
//    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
//    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
//    'admin/product' => 'adminProduct/index',
    // Управление категориями:    
//    'admin/category/create' => 'adminCategory/create',
//    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
//    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
//    'admin/category' => 'adminCategory/index',
    // Управление заказами:    
//    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
//    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
//    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
//    'admin/order' => 'adminOrder/index',    
    // О магазине
//    'contacts' => 'site/contact',
//    'about' => 'site/about',    

    
    
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
    'villa/single/([0-9]+)' => 'villa/single/$1', 

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
