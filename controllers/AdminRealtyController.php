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
            
//            d($_FILES);
//            d($_POST);
//            d($_SERVER['DOCUMENT_ROOT']);
            
            $tmpName = null;

            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новый объект
                $id = Realty::createRealty($options);

                // Если запись добавлена
                if ($id) {
                    // Проверим, загружалось ли через форму изображение
                        if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                            $tmpName = $_FILES['image']['tmp_name'];
                            $originName = $_FILES['image']['name'];
                            // Создаем папку, где имя папки - это имя объекта
                            mkdir($_SERVER['DOCUMENT_ROOT'] . "/upload/images/" . $options['name']);
                            // Если загружалось, переместим его в нужную папке, дадим новое имя
                            move_uploaded_file($tmpName, $_SERVER['DOCUMENT_ROOT']
                                    . '/upload/images/'
                                    . $options['name']
                                    . '/'
                                    . $originName);
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
            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];

            // Сохраняем изменения
            if (Realty::updateRealtyById($id, $options)) {


                // Если запись сохранена
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                   move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/Realtys/{$id}.jpg");
                }
            }

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/realty");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_realty/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить товар"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем товар
            Realty::deleteRealtyById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/Realty");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_Realty/delete.php');
        return true;
    }

}
