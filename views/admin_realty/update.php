<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li><a href="/admin/realty">Управление объектами</a></li>
                    <li class="active">Редактировать объект</li>
                </ol>
            </div>


            <h4>Редактировать объект #<?php echo $id; ?></h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                       
                        <p>Тип объекта</p>
                        <select name="type">
                            <option value="вилла" <?php if ($realty['type'] == 'вилла') echo ' selected="selected"'; ?>>Вилла</option>
                            <option value="апартамент" <?php if ($realty['type'] == 'апартамент') echo ' selected="selected"'; ?> >Апартамент</option>
                        </select> 
                        <br/><br/>

                        <p>Название</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $realty['name']; ?>">

                        <p>Мини-описание</p>
                        <input type="text" name="mini_descr" placeholder="" value="<?php echo $realty['mini_descr']; ?>">

                        <p>Площадь</p>
                        <input type="text" name="area" placeholder="" value="<?php echo $realty['area']; ?>">

                        <p>Расстояние до моря</p>
                        <input type="text" name="dist_sea" placeholder="" value="<?php echo $realty['dist_sea']; ?>">

                        <p>Цена перечеркнутая, €</p>
                        <input type="text" name="price_through" placeholder="" value="<?php echo $realty['price_through']; ?>">

                        <p>Цена, €</p>
                        <input type="text" name="price" placeholder="" value="<?php echo $realty['price']; ?>"> 

                        <p>Акция</p>
                        <select name="action">
                            <option value="1" <?php if ($realty['action'] == 1) echo ' selected="selected"'; ?> >Есть</option>
                            <option value="0" <?php if ($realty['action'] == 0) echo ' selected="selected"'; ?> >Нет</option>
                        </select> 
                        <br/><br/>

                        <p>Скидка</p>
                        <select name="discount">
                            <option value="1" <?php if ($realty['discount'] == 1) echo ' selected="selected"'; ?> >Есть</option>
                            <option value="0" <?php if ($realty['discount'] == 0) echo ' selected="selected"'; ?> >Нет</option>
                        </select> 
                        <br/><br/>

                        <p>Booking</p>
                        <select name="booking">
                            <option value="1" <?php if ($realty['booking'] == 1) echo ' selected="selected"'; ?> >Есть</option>
                            <option value="0" <?php if ($realty['booking'] == 0) echo ' selected="selected"'; ?> >Нет</option>
                        </select> 
                        <br/><br/>

                        <p>Подробное описание</p>
                        <textarea name="description"><?php echo $realty['description']; ?></textarea>

                        <p>Количество спален</p>
                        <input type="text" name="bedrooms" placeholder="" value="<?php echo $realty['bedrooms']; ?>"> 

                        <p>Вместимость объекта, человек</p>
                        <input type="text" name="capacity" placeholder="" value="<?php echo $realty['capacity']; ?>">                                             
                        <p>Расстояние до а/п Тиват</p>
                        <input type="text" name="dist_tivat" placeholder="" value="<?php echo $realty['dist_tivat']; ?>"> 

                        <p>Расстояние до а/п Подгорица</p>
                        <input type="text" name="dist_podg" placeholder="" value="<?php echo $realty['dist_podg']; ?>"> 

                        <p>Трансфер</p>
                        <select name="transfer">
                            <option value="1" <?php if ($realty['transfer'] == 1) echo ' selected="selected"'; ?> >Платный</option>
                            <option value="0" <?php if ($realty['transfer'] == 0) echo ' selected="selected"'; ?> >Бесплатный</option>
                        </select> 
                        <br/><br/>

                        <p>Интернет</p>
                        <select name="internet">
                            <option value="1" <?php if ($realty['internet'] == 1) echo ' selected="selected"'; ?> >Платный</option>
                            <option value="0" <?php if ($realty['internet'] == 0) echo ' selected="selected"'; ?> >Бесплатный</option>
                        </select> 
                        <br/><br/>

                        <p>Паркинг</p>
                        <select name="parking">
                            <option value="1" <?php if ($realty['parking'] == 1) echo ' selected="selected"'; ?> >Платный</option>
                            <option value="0" <?php if ($realty['parking'] == 0) echo ' selected="selected"'; ?> >Бесплатный</option>
                        </select> 
                        <br/><br/>

                        <p>Детская кроватка</p>
                        <select name="child_bed">
                            <option value="1" <?php if ($realty['child_bed'] == 1) echo ' selected="selected"'; ?> >Платная</option>
                            <option value="0" <?php if ($realty['child_bed'] == 0) echo ' selected="selected"'; ?> >Бесплатная</option>
                        </select> 
                        <br/><br/>

                        <p>Уборка</p>
                        <select name="cleaning">
                            <option value="1" <?php if ($realty['cleaning'] == 1) echo ' selected="selected"'; ?> >Платная</option>
                            <option value="0" <?php if ($realty['cleaning'] == 0) echo ' selected="selected"'; ?> >Бесплатная</option>
                        </select> 
                        <br/><br/>

                        <p>Статус</p>
                        <select name="status">
                            <option value="1" <?php if ($realty['status'] == 1) echo ' selected="selected"'; ?> >Опубликовано</option>
                            <option value="0" <?php if ($realty['status'] == 0) echo ' selected="selected"'; ?> >Не опубликовано</option>
                        </select> 
                        <br/><br/>
                        
                        <p>Изображение объекта</p>                     
                        <input type="file" name="images[]" placeholder="" value="<?php echo $realty['image']; ?>" multiple>                  
                        <br/><br/>
                        
                        <?php if (isset($imgNameList)): ?>
                            <?php foreach ($imgNameList as $imgName): ?>
                                <div class="img-wrap-mini">
                                    <div class="close">x</div>
                                    <img src="/upload/images/<?php echo $realty['name']; ?>/<?php echo $imgName; ?>" width="150" height="100" alt="">
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                                
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

