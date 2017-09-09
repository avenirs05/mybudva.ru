<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/realty">Управление объектами</a></li>
                </ol>
            </div>
                        
            <h4>Добавить новый объект</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        
                        <p>Тип объекта</p>
                        <select name="type">
                            <option value="вилла">Вилла</option>
                            <option value="апартамент">Апартамент</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Мини-описание</p>
                        <input type="text" name="mini_descr" placeholder="" value="">
                        
                        <p>Площадь</p>
                        <input type="text" name="area" placeholder="" value="">
                        
                        <p>Расстояние до моря</p>
                        <input type="text" name="dist_sea" placeholder="" value="">

                        <p>Цена перечеркнутая, €</p>
                        <input type="text" name="price_through" placeholder="" value="">
                        
                        <p>Цена, €</p>
                        <input type="text" name="price" placeholder="" value=""> 
                        
                        <p>Акция</p>
                        <select name="action">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select> 
                        <br/><br/>
                         
                        <p>Скидка</p>
                        <select name="discount">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Booking</p>
                        <select name="booking">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Подробное описание</p>
                        <textarea name="description"></textarea>
                        
                        <p>Количество спален</p>
                        <input type="text" name="bedrooms" placeholder="" value=""> 
                        
                        <p>Вместимость объекта, человек</p>
                        <input type="text" name="capacity" placeholder="" value="">                                               
                        
                        <p>Расстояние до а/п Тиват</p>
                        <input type="text" name="dist_tivat" placeholder="" value=""> 
                        
                        <p>Расстояние до а/п Подгорица</p>
                        <input type="text" name="dist_podg" placeholder="" value=""> 

                        <p>Трансфер</p>
                        <select name="transfer">
                            <option value="1" selected="selected">Платный</option>
                            <option value="0">Бесплатный</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Интернет</p>
                        <select name="internet">
                            <option value="1">Платный</option>
                            <option value="0" selected="selected">Бесплатный</option>
                        </select> 
                        <br/><br/>
                         
                        <p>Паркинг</p>
                        <select name="parking">
                            <option value="1" selected="selected">Платный</option>
                            <option value="0">Бесплатный</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Детская кроватка</p>
                        <select name="child_bed">
                            <option value="1" selected="selected">Платная</option>
                            <option value="0">Бесплатная</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Уборка</p>
                        <select name="cleaning">
                            <option value="1">Платная</option>
                            <option value="0" selected="selected">Бесплатная</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Статус</p>
                        <select name="status">
                            <option value="1" selected="selected">Опубликовано</option>
                            <option value="0">Черновик</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Изображение товара</p>
                        <input type="file" name="image" placeholder="" value="">

                        <br/><br/>
                        
                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

