<?php

/**
 * Контроллер VillasController
 * Страница Апартаменты
 */
class ApartmentController
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
        require_once(ROOT . '/views/apartment/index.php');
        return true;
    }

}
