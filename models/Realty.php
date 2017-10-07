<?php

/**
 * Класс Realty - модель для работы с объектами
 */
class Realty
{
     /**
     * Добавляет новый объект
     * @param array $options <p>Массив с информацией об объекте</p>
     * @return integer <p>id добавленной в таблицу записи</p>
     */
    public static function createRealty($options) {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'INSERT INTO realty '
                . '(type, name, mini_descr, area, dist_sea, price_through, price, ' 
                . 'price_may, price_jun, price_jul, price_aug, price_sep, price_oct_apr, '
                . 'view, action, discount, booking, description, bedrooms, capacity, '
                . 'dist_tivat, dist_podg, transfer, internet, parking, child_bed, '
                . 'cleaning, status) '
                . 'VALUES '
                . '(:type, :name, :mini_descr, :area, :dist_sea, :price_through, :price, ' 
                . ':price_may, :price_jun, :price_jul, :price_aug, :price_sep, :price_oct_apr, :view, '
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

        $result->bindParam(':price_may', $options['price_may'], PDO::PARAM_STR);
        $result->bindParam(':price_jun', $options['price_jun'], PDO::PARAM_STR);
        $result->bindParam(':price_jul', $options['price_jul'], PDO::PARAM_STR);
        $result->bindParam(':price_aug', $options['price_aug'], PDO::PARAM_STR);
        $result->bindParam(':price_sep', $options['price_sep'], PDO::PARAM_STR);
        $result->bindParam(':price_oct_apr', $options['price_oct_apr'], PDO::PARAM_STR);

        $result->bindParam(':view', $options['view'], PDO::PARAM_STR);
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
     * Редактирует объект с заданным id
     * @param integer $id <p>id объекта</p>
     * @param array $options <p>Массив с информацей об объекте</p>
     * @return boolean <p>Результат выполнения метода</p>
     */    
    public static function updateRealtyById($id, $options) {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE realty SET 
                    type = :type, 
                    name = :name,
                    mini_descr = :mini_descr, 
                    area = :area, 
                    dist_sea = :dist_sea, 
                    price_through = :price_through, 
                    price = :price,  
                    view = :view, 
                    action = :action, 
                    discount = :discount, 
                    booking = :booking, 
                    description = :description, 
                    bedrooms = :bedrooms, 
                    capacity = :capacity, 
                    dist_tivat = :dist_tivat,  
                    dist_podg = :dist_podg, 
                    transfer = :transfer, 
                    internet = :internet, 
                    parking = :parking, 
                    child_bed = :child_bed, 
                    cleaning = :cleaning,
                    status = :status
                    WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':type', $options['type'], PDO::PARAM_STR);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':mini_descr', $options['mini_descr'], PDO::PARAM_STR);
        $result->bindParam(':area', $options['area'], PDO::PARAM_STR);
        $result->bindParam(':dist_sea', $options['dist_sea'], PDO::PARAM_STR);
        $result->bindParam(':price_through', $options['price_through'], PDO::PARAM_INT);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':view', $options['view'], PDO::PARAM_STR);
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
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($result->execute()) {
            // Если запрос выполенен успешно, возвращаем id измененной записи
            return $id;
        }
        // Иначе возвращаем 0
        return 0;
    }
    
    /**
    * Удаляет объект с указанным id
    * @param integer $id <p>id объекта</p>
    * @return boolean <p>Результат выполнения метода</p>
    */
    public static function deleteRealty($id, $name) 
    {

        // Соединение с БД
        $db = Db::getConnection();

        $realty = Realty::getRealtyById($id);

        // Удаляем папку с файлами-картинками
        if ($handle = opendir(ROOT . "/upload/images/" . $realty['name'])) {
             while ( ($imgName = readdir($handle) ) !== false) {                        
                 if ( ($imgName !== '.') && ($imgName !== '..') ) {
                    unlink(ROOT . "/upload/images/" . $name . '/' . $imgName);                
                 }
             }
             rmdir(ROOT . '/upload/images/' . $name);
             closedir($handle);
         }         

        // Текст запроса к БД
        $sql = 'DELETE FROM realty WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }


    /**
    * Удаляет картинку с указанным id
    * @param string $imgName <p>имя картинки</p>
    * @return boolean <p>Результат выполнения метода</p>
    */
    public static function deleteImgByName($folderName, $imgName) {     
        unlink(ROOT . '/upload/images/' . $folderName . '/' . $imgName);
    }


    /**
    * Возвращает список имен изображений конкретного объекта по его имени
    * В засисимости от того только что загрузилось или в бд уже есть if - elseif 
    * @param array $options <p>Массив с информацией об объекте</p>
    * @return array $imgNameList<p> Массив имен изображений конкретного объекта</p>
    */
    public static function getImgNameList($realty)
    {
        $imgNameList = [];        
        
        $dirOfImgs = is_dir(ROOT . "/upload/images/" . $realty['name']);

        if ($dirOfImgs) {
            if ($handle = opendir(ROOT . "/upload/images/" . $realty['name'])) {
                while (($imgName = readdir($handle)) !== false) {
                    if (($imgName !== '.') && ($imgName !== '..')) {
                        $imgNameList[] = $imgName;
                 }
             }

            closedir($handle);
            }
        }        

        return $imgNameList;
    }      


    /**
     * Возвращает объект с указанным id
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
     * Возвращает список объектов недвижимости
     * @return array <p>Массив с объектами недвижимости</p>
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


}
