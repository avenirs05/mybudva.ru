<?php

/**
 * Контроллер ApartmentController
 * Страница Апартаменты
 */
class ApartmentController
{

    /**
     * Action для страницы "Апартаменты"
     */
    public function actionIndex()
    {
        // Подключаем вид
        require_once(ROOT . '/views/apartment/index.php');
        return true;
    }

}
