<?php

/**
 * Класс Villa - модель для работы с виллами
 */
class Villa
{
    /**
     * Возвращает массив вилл для списка на сайте
     * @return array <p>Массив с виллами</p>
     */
    public static function getVillasList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, mini_descr, area, dist_sea, price_through, price, booking FROM realty WHERE status = "1" and type = "вилла" ORDER BY id ASC');

        // Получение и возврат результатов
        $i = 0;
        $villasList = array();
        while ($row = $result->fetch()) {
            $villasList[$i]['id'] = $row['id'];
            $villasList[$i]['name'] = $row['name'];
            $villasList[$i]['mini_descr'] = $row['mini_descr'];
            $villasList[$i]['area'] = $row['area'];
            $villasList[$i]['dist_sea'] = $row['dist_sea'];
            $villasList[$i]['price_through'] = $row['price_through'];
            $villasList[$i]['price'] = $row['price'];
            $villasList[$i]['booking'] = $row['booking'];
            
            $i++;
        }

        return $villasList;
    }


    /**
     * Возвращает виллу с указанным id
     * @param integer $id <p>id виллы</p>
     * @return array <p>Массив с информацией о категории</p>
     */
    public static function getVillaById($id)
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
