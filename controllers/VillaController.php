<?php

/**
 * Контроллер VillasController
 * Страница Виллы
 */
class VillaController
{

    /**
     * Action для страницы "Виллы"
     */
    public function actionIndex()
    {
        // Список вилл
        $villas = Villa::getVillasList();

        // Подключаем вид
        require_once(ROOT . '/views/villa/index.php');
        return true;
    }

    public function actionSingle($id)
    {
        // Получаем конкретную виллу (массив с данными) по ее id
        $villa = Villa::getVillaById($id);

        // Подключаем вид
        require_once(ROOT . '/views/villa/single.php');
        return true;
    }

}
