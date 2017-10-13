<?php

/**
 * Класс Apartment - модель для работы с 
 */
class Apartment
{
    /**
     * Возвращает массив апартаментов для списка на сайте
     * @return array <p>Массив с апартаментами</p>
     */
    public static function getApartmentsList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, mini_descr, area, dist_sea, price_through, price, booking FROM realty WHERE status = "1" and type = "апартамент" ORDER BY id ASC');

        // Получение и возврат результатов
        $i = 0;
        $apartmentsList = array();
        while ($row = $result->fetch()) {
            $apartmentsList[$i]['id'] = $row['id'];
            $apartmentsList[$i]['name'] = $row['name'];
            $apartmentsList[$i]['mini_descr'] = $row['mini_descr'];
            $apartmentsList[$i]['area'] = $row['area'];
            $apartmentsList[$i]['dist_sea'] = $row['dist_sea'];
            $apartmentsList[$i]['price_through'] = $row['price_through'];
            $apartmentsList[$i]['price'] = $row['price'];
            $apartmentsList[$i]['booking'] = $row['booking'];
            
            $i++;
        }

        return $apartmentsList;
    }


    /**
     * Возвращает апартамент с указанным id
     * @param integer $id <p>id апартамента</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getApartmentById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM realty WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

}
