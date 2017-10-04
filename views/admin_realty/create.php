<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/realty">Управление объектами</a></li>
                    <li class="active">Добавить объект объект</li>
                </ol>
            </div>
                        
            <h4><strong>Добавить новый объект</strong></h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-9">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                        
                        <span>Тип объекта</span>
                        <select name="type">
                            <option value="вилла">Вилла</option>
                            <option value="апартамент">Апартамент</option>
                        </select> 
                        <br/><br/>
                        
                        <span>Название объекта</span>
                        <input type="text" name="name" placeholder="" value="">
                        <br/>

                        <span>Мини-описание</span>
                        <input type="text" name="mini_descr" placeholder="" value="">
                        <br/>
                        
                        <span>Площадь</span>
                        <input type="text" name="area" placeholder="" value="">
                        <br/>
                        
                        <span>Расстояние до моря</span>
                        <input type="text" name="dist_sea" placeholder="" value="">
                        <br/>

                        <span>Цена перечеркнутая, €</span>
                        <input type="text" name="price_through" placeholder="" value="">
                        <br/>
                        
                        <span>Цена, €</span>
                        <input type="text" name="price" placeholder="" value=""> 
                        <br/>
                        
                        <span>Акция</span>
                        <select name="action">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select> 
                        <br/><br/>
                         
                        <span>Скидка</span>
                        <select name="discount">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select> 
                        <br/><br/>
                        
                        <span>Booking</span>
                        <select name="booking">
                            <option value="1">Да</option>
                            <option value="0" selected="selected">Нет</option>
                        </select> 
                        <br/><br/>                     

                        <span>Количество спален</span>
                        <input type="text" name="bedrooms" placeholder="" value=""> 
                        <br/>
                        
                        <span>Вместимость объекта, человек</span>
                        <input type="text" name="capacity" placeholder="" value="">
                        <br/>

                        <span>Расстояние до а/п Тиват</span>
                        <input type="text" name="dist_tivat" placeholder="" value=""> 
                        <br/>
                        
                        <span>Расстояние до а/п Подгорица</span>
                        <input type="text" name="dist_podg" placeholder="" value=""> 
                        <br/>

                        <span>Трансфер</span>
                        <select name="transfer">
                            <option value="1" selected="selected">Платный</option>
                            <option value="0">Бесплатный</option>
                        </select> 
                        <br/><br/>
                        
                        <span>Интернет</span>
                        <select name="internet">
                            <option value="1">Платный</option>
                            <option value="0" selected="selected">Бесплатный</option>
                        </select> 
                        <br/><br/>
                         
                        <span>Паркинг</span>
                        <select name="parking">
                            <option value="1" selected="selected">Платный</option>
                            <option value="0">Бесплатный</option>
                        </select> 
                        <br/><br/>
                        
                        <span>Детская кроватка</span>
                        <select name="child_bed">
                            <option value="1" selected="selected">Платная</option>
                            <option value="0">Бесплатная</option>
                        </select> 
                        <br/><br/>
                        
                        <span>Уборка</span>
                        <select name="cleaning">
                            <option value="1">Платная</option>
                            <option value="0" selected="selected">Бесплатная</option>
                        </select> 
                        <br/><br/>
                        
                        <span>Статус</span>
                        <select name="status">
                            <option value="1" selected="selected">Опубликовано</option>
                            <option value="0">Черновик</option>
                        </select> 
                        <br/><br/>

                        <span>Подробное описание</span>
                        <textarea name="description"></textarea>
                        <br/>
                        
                        <span>Изображение объекта</span>
                        <input id="btn-pict" type="file" name="images[]" placeholder="" value="" multiple>
                        <br/>
                        
                        <?php if (isset($imgNameList)): ?>
                            <?php foreach ($imgNameList as $imgName): ?>
                                <img src="/upload/images/<?php echo $options['name']; ?>/<?php echo $imgName; ?>" width="150" height="100" alt="">
                            <?php endforeach; ?>
                        <?php endif; ?>
                        
                        
                        
                        <input id="btn-save" type="submit" name="submit" class="btn btn-default" value="Сохранить">

                        <br/><br/>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

