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
        // Список апартаментов
        $apartments = Apartment::getApartmentsList();

        // Подключаем вид
        require_once(ROOT . '/views/apartment/index.php');
        return true;
    }


    /**
     * Action для страницы конкретного апартамента
     */
    public function actionSingle($nameOfApartment, $id)
    {
        // Получаем конкретный апартамент (массив с данными) по его id
        $apartment = Apartment::getApartmentById($id);

        // Получаем имена картинок
        $imgNameList = Realty::getImgNameList($apartment);

        // Подключаем вид
        require_once(ROOT . '/views/apartment/single.php');
        return true;
    }

}
