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


    /**
     * Action для страницы конкретной виллы
     */
    public function actionSingle($nameOfVilla, $id)
    {
        // Получаем конкретную виллу (массив с данными) по ее id
        $villa = Villa::getVillaById($id);

        // Получаем имена картинок
        $imgNameList = Realty::getImgNameList($villa);

        // Подключаем вид
        require_once(ROOT . '/views/villa/single.php');
        return true;
    }

}
