<?php

/**
 * Класс Realty - модель для работы с объектами
 */
class Realty
{

    // Количество отображаемых объектов по умолчанию
    const SHOW_BY_DEFAULT = 6;

    /**
     * Возвращает массив последних товаров
     * @param type $count [optional] <p>Количество</p>
     * @param type $page [optional] <p>Номер текущей страницы</p>
     * @return array <p>Массив с товарами</p>
     */
    public static function getLatestRealty($count = self::SHOW_BY_DEFAULT)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, price, is_new FROM Realty '
                . 'WHERE status = "1" ORDER BY id DESC '
                . 'LIMIT :count';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $RealtysList = array();
        while ($row = $result->fetch()) {
            $RealtysList[$i]['id'] = $row['id'];
            $RealtysList[$i]['name'] = $row['name'];
            $RealtysList[$i]['price'] = $row['price'];
            $RealtysList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $RealtysList;
    }

    /**
     * Возвращает список товаров в указанной категории
     * @param type $categoryId <p>id категории</p>
     * @param type $page [optional] <p>Номер страницы</p>
     * @return type <p>Массив с товарами</p>
     */
    public static function getRealtysListByCategory($categoryId, $page = 1)
    {
        $limit = Realty::SHOW_BY_DEFAULT;
        // Смещение (для запроса)
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT id, name, price, is_new FROM Realty '
                . 'WHERE status = 1 AND category_id = :category_id '
                . 'ORDER BY id ASC LIMIT :limit OFFSET :offset';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $result->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        $i = 0;
        $Realtys = array();
        while ($row = $result->fetch()) {
            $Realtys[$i]['id'] = $row['id'];
            $Realtys[$i]['name'] = $row['name'];
            $Realtys[$i]['price'] = $row['price'];
            $Realtys[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $Realtys;
    }

    /**
     * Возвращает продукт с указанным id
     * @param integer $id <p>id товара</p>
     * @return array <p>Массив с информацией о товаре</p>
     */
    public static function getRealtyById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM Realty WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполнение коменды
        $result->execute();

        // Получение и возврат результатов
        return $result->fetch();
    }

    /**
     * Возвращаем количество товаров в указанной категории
     * @param integer $categoryId
     * @return integer
     */
    public static function getTotalRealtysInCategory($categoryId)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT count(id) AS count FROM Realty WHERE status="1" AND category_id = :category_id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);

        // Выполнение коменды
        $result->execute();

        // Возвращаем значение count - количество
        $row = $result->fetch();
        return $row['count'];
    }

    /**
     * Возвращает список товаров с указанными индентификторами
     * @param array $idsArray <p>Массив с идентификаторами</p>
     * @return array <p>Массив со списком товаров</p>
     */
    public static function getProdustsByIds($idsArray)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Превращаем массив в строку для формирования условия в запросе
        $idsString = implode(',', $idsArray);

        // Текст запроса к БД
        $sql = "SELECT * FROM Realty WHERE status='1' AND id IN ($idsString)";

        $result = $db->query($sql);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Получение и возврат результатов
        $i = 0;
        $Realtys = array();
        while ($row = $result->fetch()) {
            $Realtys[$i]['id'] = $row['id'];
            $Realtys[$i]['code'] = $row['code'];
            $Realtys[$i]['name'] = $row['name'];
            $Realtys[$i]['price'] = $row['price'];
            $i++;
        }
        return $Realtys;
    }

    /**
     * Возвращает список рекомендуемых товаров
     * @return array <p>Массив с товарами</p>
     */
    public static function getRecommendedRealtys()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT id, name, price, is_new FROM Realty '
                . 'WHERE status = "1" AND is_recommended = "1" '
                . 'ORDER BY id DESC');
        $i = 0;
        $RealtysList = array();
        while ($row = $result->fetch()) {
            $RealtysList[$i]['id'] = $row['id'];
            $RealtysList[$i]['name'] = $row['name'];
            $RealtysList[$i]['price'] = $row['price'];
            $RealtysList[$i]['is_new'] = $row['is_new'];
            $i++;
        }
        return $RealtysList;
    }

    /**
     * Возвращает список товаров
     * @return array <p>Массив с товарами</p>
     */
    public static function getRealtiesList()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Получение и возврат результатов
        $result = $db->query('SELECT id, type, name, price FROM realty ORDER BY id ASC');
        $realtysList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $realtysList[$i]['id'] = $row['id'];
            $realtysList[$i]['type'] = $row['type'];
            $realtysList[$i]['name'] = $row['name'];
            $realtysList[$i]['price'] = $row['price'];
            $i++;
        }
        return $realtysList;
    }

    /**
     * Удаляет товар с указанным id
     * @param integer $id <p>id товара</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteRealtyById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM Realty WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирует товар с заданным id
     * @param integer $id <p>id товара</p>
     * @param array $options <p>Массив с информацей о товаре</p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateRealtyById($id, $options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE Realty
            SET 
                name = :name, 
                code = :code, 
                price = :price, 
                category_id = :category_id, 
                brand = :brand, 
                availability = :availability, 
                description = :description, 
                is_new = :is_new, 
                is_recommended = :is_recommended, 
                status = :status
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':code', $options['code'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':brand', $options['brand'], PDO::PARAM_STR);
        $result->bindParam(':availability', $options['availability'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':is_new', $options['is_new'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Добавляет новый товар
     * @param array $options <p>Массив с информацией о товаре</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createRealty($options)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
            $sql = 'INSERT INTO realty '
                . '(type, name, mini_descr, area, dist_sea, price_through, price, '
                . 'action, discount, booking, description, bedrooms, capacity, '
                . 'dist_tivat, dist_podg, transfer, internet, parking, child_bed, '
                . 'cleaning, status) '
                . 'VALUES '
                . '(:type, :name, :mini_descr, :area, :dist_sea, :price_through, :price, '
                . ':action, :discount, :booking, :description, :bedrooms, :capacity, '
                . ':dist_tivat, :dist_podg, :transfer, :internet, '
                . ':parking, :child_bed, :cleaning, :status)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':type', $options['type'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':mini_descr', $options['mini_descr'], PDO::PARAM_STR);
        $result->bindParam(':area', $options['area'], PDO::PARAM_STR);
        $result->bindParam(':dist_sea', $options['dist_sea'], PDO::PARAM_STR);
        $result->bindParam(':price_through', $options['price_through'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':action', $options['action'], PDO::PARAM_STR);
        $result->bindParam(':discount', $options['discount'], PDO::PARAM_INT);
        $result->bindParam(':booking', $options['booking'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);
        $result->bindParam(':bedrooms', $options['bedrooms'], PDO::PARAM_STR);
        $result->bindParam(':capacity', $options['capacity'], PDO::PARAM_STR);
        $result->bindParam(':dist_tivat', $options['dist_tivat'], PDO::PARAM_STR);
        $result->bindParam(':dist_podg', $options['dist_podg'], PDO::PARAM_STR);
        $result->bindParam(':transfer', $options['transfer'], PDO::PARAM_STR);
        $result->bindParam(':internet', $options['internet'], PDO::PARAM_STR);
        $result->bindParam(':parking', $options['parking'], PDO::PARAM_STR);
        $result->bindParam(':child_bed', $options['child_bed'], PDO::PARAM_STR);
        $result->bindParam(':cleaning', $options['cleaning'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_STR);

        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id добавленной записи
            return $db->lastInsertId();
        }
        // Иначе возвращаем 0
            return 0;
    }

    /**
     * Возвращает текстое пояснение наличия товара:<br/>
     * <i>0 - Под заказ, 1 - В наличии</i>
     * @param integer $availability <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    public static function getAvailabilityText($availability)
    {
        switch ($availability) {
            case '1':
                return 'В наличии';
                break;
            case '0':
                return 'Под заказ';
                break;
        }
    }

    /**
     * Возвращает путь к изображению
     * @param integer $id
     * @return string <p>Путь к изображению</p>
     */
    public static function getImage($id)
    {
        // Название изображения-пустышки
        $noImage = 'no-image.jpg';

        // Путь к папке с товарами
        $path = '/upload/images/Realtys/';

        // Путь к изображению товара
        $pathToRealtyImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToRealtyImage)) {
            // Если изображение для товара существует
            // Возвращаем путь изображения товара
            return $pathToRealtyImage;
        }

        // Возвращаем путь изображения-пустышки
        return $path . $noImage;
    }

}
