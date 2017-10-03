<?php

/**
 * Контроллер AdminRealtyController
 * Управление объектами в админпанели
 */
class AdminRealtyController extends AdminBase
{

    /**
     * Action для страницы "Управление объектами недвижимости"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список объектов
        $realtiesList = Realty::getRealtiesList();

        // Подключаем вид
        require_once(ROOT . '/views/admin_realty/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить объект"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $options['type'] = $_POST['type'];
            $options['name'] = $_POST['name'];
            $options['mini_descr'] = $_POST['mini_descr'];
            $options['area'] = $_POST['area'];
            $options['dist_sea'] = $_POST['dist_sea'];
            $options['price_through'] = $_POST['price_through'];
            $options['price'] = $_POST['price'];
            $options['action'] = $_POST['action'];
            $options['discount'] = $_POST['discount'];
            $options['booking'] = $_POST['booking'];
            $options['description'] = $_POST['description'];         
            $options['bedrooms'] = $_POST['bedrooms'];
            $options['capacity'] = $_POST['capacity'];            
            $options['dist_tivat'] = $_POST['dist_tivat'];
            $options['dist_podg'] = $_POST['dist_podg'];               
            $options['transfer'] = $_POST['transfer'];
            $options['internet'] = $_POST['internet'];
            $options['parking'] = $_POST['parking'];
            $options['child_bed'] = $_POST['child_bed'];
            $options['cleaning'] = $_POST['cleaning'];
            $options['status'] = $_POST['status'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }      

            if ($errors == false) {
                // Если ошибок нет, добавляем новый объект
                $id = Realty::createRealty($options);

                // Если запись добавлена
                if ($id) { 
                    $tmpNames = $_FILES['images']['tmp_name'];
                    $originNames = $_FILES['images']['name'];
                    // Проверим, загружалось ли через форму изображение
                    if (is_uploaded_file($tmpNames[0])) {    
                        // Создаем папку, где имя папки - это имя объекта
                        mkdir(ROOT . '/upload/images/' . $options['name']);                        
                        // Перемещаем загруженные файлы в соответсвующую папку с именем объекта
                        for ($i = 0; $i < count($tmpNames); $i++) {
                            move_uploaded_file($tmpNames[$i], ROOT
                                    . '/upload/images/'
                                    . $options['name']
                                    . '/'
                                    . $originNames[$i]);
                        }                           
                    }
                };             

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /admin/realty");
            }
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_realty/create.php');
        return true;
    }


    /**
     * Action для страницы "Редактировать объект"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном заказе
        $realty = Realty::getRealtyById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы редактирования. При необходимости можно валидировать значения
            $options['type'] = $_POST['type'];
            $options['name'] = $_POST['name'];
            $options['mini_descr'] = $_POST['mini_descr'];
            $options['area'] = $_POST['area'];
            $options['dist_sea'] = $_POST['dist_sea'];
            $options['price_through'] = $_POST['price_through'];
            $options['price'] = $_POST['price'];
            $options['action'] = $_POST['action'];
            $options['discount'] = $_POST['discount'];
            $options['booking'] = $_POST['booking'];
            $options['description'] = $_POST['description'];
            $options['bedrooms'] = $_POST['bedrooms'];
            $options['capacity'] = $_POST['capacity'];
            $options['dist_tivat'] = $_POST['dist_tivat'];
            $options['dist_podg'] = $_POST['dist_podg'];
            $options['transfer'] = $_POST['transfer'];
            $options['internet'] = $_POST['internet'];
            $options['parking'] = $_POST['parking'];
            $options['child_bed'] = $_POST['child_bed'];
            $options['cleaning'] = $_POST['cleaning'];
            $options['status'] = $_POST['status'];
            
            // Если меняется имя объекта, то удаляем старую директорию 
            // вместе с изображениями и создаем новую с новым
            if ($options['name'] !== $realty['name']) {
                if ($handle = opendir(ROOT . "/upload/images/" . $realty['name'])) {
                    rename(ROOT.'/upload/images/'. $realty['name'],
                           ROOT.'/upload/images/'. $options['name']);

                    closedir($handle);
                }
            }

            // Сохраняем изменения
            $id = Realty::updateRealtyById($id, $options);

            // Если запись изменена
            if ($id) {
                $tmpNames = $_FILES['images']['tmp_name'];
                $originNames = $_FILES['images']['name'];
                $dirOfImgs = is_dir(ROOT . "/upload/images/" . $realty['name']);
                
                // Проверим, загружалось ли через форму изображение 
                // и есть ли директория с именем объекта 
                if (is_uploaded_file($tmpNames[0]) && $dirOfImgs === true ) {
                    // Перемещаем загруженные файлы в соответсвующую папку с именем объекта
                    for ($i = 0; $i < count($tmpNames); $i++) {
                        move_uploaded_file($tmpNames[$i], ROOT
                                . '/upload/images/'
                                . $options['name']
                                . '/'
                                . $originNames[$i]);
                    }
                }
                //Если изображение загружалось, но директории с именем объекта нет
                if (is_uploaded_file($tmpNames[0]) && $dirOfImgs === false) {
                    // Перемещаем загруженные файлы в соответсвующую папку с именем объекта
                    for ($i = 0; $i < count($tmpNames); $i++) {
                        move_uploaded_file($tmpNames[$i], ROOT
                                . '/upload/images/'
                                . $options['name']
                                . '/'
                                . $originNames[$i]);
                    }                    
                }
            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/realty");
        }   

        // Получаем список имен загруженных файлов
        $imgNameList = Realty::getImgNameList($realty);

        // Подключаем вид
        require_once(ROOT . '/views/admin_realty/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить объект"
     */
    public function actionDelete($id, $name)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Realty::deleteRealty($id, $name);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/realty");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_realty/delete.php');
        return true;
    }


    /**
     * Action для удаления картинки при редактировании объекта
     */
    public function actionDeleteImg($folderName, $imgName)
    {       
        //Проверка доступа
        self::checkAdmin();

        Realty::deleteImgByName($folderName, $imgName);
        return true;
    }

}
