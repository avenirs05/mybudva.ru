<?php

/**
 * Контроллер FeedbackController
 * Страница Виллы
 */
class FeedbackController
{

    /**
     * Action для страницы "Виллы"
     */
    public function actionIndex()
    {
        // Список категорий для левого меню
        // $categories = Category::getCategoriesList();

        // Список последних товаров
        // $latestProducts = Product::getLatestProducts(12);

        // Подключаем вид
        require_once(ROOT . '/views/feedback/index.php');
        return true;
    }

}
