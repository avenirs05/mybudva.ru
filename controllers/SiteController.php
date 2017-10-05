<?php

/**
 * Контроллер SiteController
 */
class SiteController
{

    /**
     * Action для главной страницы
     */
    public function actionIndex()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    
    /**
     * Action для страницы "О магазине"
     */
    public function actionContacts()
    {
        // Подключаем вид
        require_once(ROOT . '/views/site/contacts.php');
        return true;
    }

}
