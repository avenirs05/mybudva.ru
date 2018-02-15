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


            <h4><strong><?php echo $realty['name'];?> - №<?php echo $id; ?> </strong></h4>

            <br/>

            <div class="col-lg-9">
                <div class="login-form">
                    <form action="#" method="post" enctype="multipart/form-data">
                       
                        <span>Тип объекта</span>
                        <select name="type">
                            <option value="вилла" <?php if ($realty['type'] == 'вилла') echo ' selected="selected"'; ?>>Вилла</option>
                            <option value="апартамент" <?php if ($realty['type'] == 'апартамент') echo ' selected="selected"'; ?> >Апартамент</option>
                        </select> 
                        <br/><br/>

                        <span>Название объекта</span><span class="input-second-header">  (Только латинские буквы. Если в названии есть пробел, заменить на _ Например: Olympia_House).</span>
                        <input type="text" name="name" placeholder="" value="<?php echo $realty['name']; ?>">
                        <br/>

                        <span>Мини-описание</span>
                        <input type="text" name="mini_descr" placeholder="" value="<?php echo $realty['mini_descr']; ?>">
                        <br/>

                        <span>Площадь, м</span>
                        <input type="text" name="area" placeholder="" value="<?php echo $realty['area']; ?>">
                        <br/>

                        <span>Вид (на море, горы и т.д.)</span>
                        <input type="text" name="view" placeholder="" value="<?php echo $realty['view']; ?>"> 
                        <br/>

                        <span>Вместимость объекта, человек</span>
                        <input type="text" name="capacity" placeholder="" value="<?php echo $realty['capacity']; ?>">
                        <br/>   

                        <span>Количество спален</span>
                        <input type="text" name="bedrooms" placeholder="" value="<?php echo $realty['bedrooms']; ?>">
                        <br/> 

                        <span>Расстояние до моря, м</span>
                        <input type="text" name="dist_sea" placeholder="" value="<?php echo $realty['dist_sea']; ?>">
                        <br/>

                        <span>Цена перечеркнутая, €</span>
                        <input type="text" name="price_through" placeholder="" value="<?php echo $realty['price_through']; ?>">
                        <br/>

                        <span>Цена, €</span>
                        <input type="text" name="price" placeholder="" value="<?php echo $realty['price']; ?>"> 
                        <br/>

                        <span>Цена - май, €</span>
                        <input type="text" name="price_may" placeholder="" value="<?php echo $realty['price_may']; ?>"> 
                        <br/>

                        <span>Цена - июнь, €</span>
                        <input type="text" name="price_jun" placeholder="" value="<?php echo $realty['price_jun']; ?>"> 
                        <br/>

                        <span>Цена - июль, €</span>
                        <input type="text" name="price_jul" placeholder="" value="<?php echo $realty['price_jul']; ?>"> 
                        <br/>

                        <span>Цена - август, €</span>
                        <input type="text" name="price_aug" placeholder="" value="<?php echo $realty['price_aug']; ?>"> 
                        <br/>

                        <span>Цена - сентябрь, €</span>
                        <input type="text" name="price_sep" placeholder="" value="<?php echo $realty['price_sep']; ?>"> 
                        <br/>

                        <span>Цена - октябрь - апрель, €</span>
                        <input type="text" name="price_oct_apr" placeholder="" value="<?php echo $realty['price_oct_apr']; ?>"> 
                        <br/>

                        <span>Акция</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="action">
                            <option value="1" <?php if ($realty['action'] == 1) echo ' selected="selected"'; ?> >Есть</option>
                            <option value="0" <?php if ($realty['action'] == 0) echo ' selected="selected"'; ?> >Нет</option>
                        </select> 
                        <br/><br/>

                        <span>Скидка</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="discount">
                            <option value="1" <?php if ($realty['discount'] == 1) echo ' selected="selected"'; ?> >Есть</option>
                            <option value="0" <?php if ($realty['discount'] == 0) echo ' selected="selected"'; ?> >Нет</option>
                        </select> 
                        <br/><br/>

                        <span>Booking, оценка </span><span class="input-second-header"> (если значок надо убрать, впишите "нет" - без кавычек)</span>
                        <input type="text" name="booking" placeholder="" value="<?php echo $realty['booking']; ?>">
                        <br/>
                                          
                        <span>Расстояние до а/п Тиват, км</span>
                        <input type="text" name="dist_tivat" placeholder="" value="<?php echo $realty['dist_tivat']; ?>"> 
                        <br/>

                        <span>Расстояние до а/п Подгорица, км</span>
                        <input type="text" name="dist_podg" placeholder="" value="<?php echo $realty['dist_podg']; ?>"> 
                        <br/>

                        <span>Трансфер</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Значение жестко зафиксировано. Какое - смотри на сайте. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="transfer">
                            <option value="1" <?php if ($realty['transfer'] == 1) echo ' selected="selected"'; ?> >Платный</option>
                            <option value="0" <?php if ($realty['transfer'] == 0) echo ' selected="selected"'; ?> >Бесплатный</option>
                        </select> 
                        <br/><br/>

                        <span>Интернет</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Значение жестко зафиксировано. Какое - смотри на сайте. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="internet">
                            <option value="1" <?php if ($realty['internet'] == 1) echo ' selected="selected"'; ?> >Платный</option>
                            <option value="0" <?php if ($realty['internet'] == 0) echo ' selected="selected"'; ?> >Бесплатный</option>
                        </select> 
                        <br/><br/>

                        <span>Паркинг</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Значение жестко зафиксировано. Какое - смотри на сайте. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="parking">
                            <option value="1" <?php if ($realty['parking'] == 1) echo ' selected="selected"'; ?> >Платный</option>
                            <option value="0" <?php if ($realty['parking'] == 0) echo ' selected="selected"'; ?> >Бесплатный</option>
                        </select> 
                        <br/><br/>

                        <span>Детская кроватка</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Значение жестко зафиксировано. Какое - смотри на сайте. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="child_bed">
                            <option value="1" <?php if ($realty['child_bed'] == 1) echo ' selected="selected"'; ?> >Платная</option>
                            <option value="0" <?php if ($realty['child_bed'] == 0) echo ' selected="selected"'; ?> >Бесплатная</option>
                        </select> 
                        <br/><br/>

                        <span>Уборка</span><span class="input-second-header">&nbsp;&nbsp;&nbsp;Не трогать. Возможно понадобится в будущем. Значение жестко зафиксировано. Какое - смотри на сайте. Изменение этого селектора сейчас ни на что не повлияет.</span>
                        <select name="cleaning">
                            <option value="1" <?php if ($realty['cleaning'] == 1) echo ' selected="selected"'; ?> >Платная</option>
                            <option value="0" <?php if ($realty['cleaning'] == 0) echo ' selected="selected"'; ?> >Бесплатная</option>
                        </select> 
                        <br/><br/>

                        <span>Статус</span>
                        <select name="status">
                            <option value="1" <?php if ($realty['status'] == 1) echo ' selected="selected"'; ?> >Опубликовано</option>
                            <option value="0" <?php if ($realty['status'] == 0) echo ' selected="selected"'; ?> >Не опубликовано</option>
                        </select> 
                        <br/><br/>

                        <span>Подробное описание</span>
                        <textarea id="textarea-description" name="description"><?php echo $realty['description']; ?></textarea>  
                        <br/>                    
                        
                        <span>Изображение объекта</span><span class="input-second-header">  (Максимальное количество: 30 штук. 1-ое изображение должно иметь пропорцию 1:1,5. Только латинские буквы в названии изображения. Нельзя использовать "_" в названии изображения. Желательное разрешение изображений - не более 1024x768. Желательно перед загрузкой сжимать изображение <a href="http://optimizilla.com/ru/" target="_blank">здесь</a>)</span>                     
                        <input type="file" name="images[]" placeholder="" value="<?php echo $realty['image']; ?>" multiple>                  
                        <br/>

                        <span>Карта (код)</span>
                        <span class="input-second-header">
                            <a href="https://www.google.ru/maps/@55,103,3z?hl=ru" target="_blank"> Конструктор карт </a>-&gt;
                            <span>"Поделиться" -&gt;</span>
                            <span>"Код" -&gt;</span>
                            <span>Скопировать и вставить код -&gt;</span>
                            <span>Исправить в коде так: width="100%" height="400"</span>
                        </span>
                        <textarea name="map" rows="5"><?php echo $realty['map']; ?></textarea>
                        <br><br>
                        
                        <?php if (isset($imgNameList)): ?>
                            <?php foreach ($imgNameList as $imgName): ?>
                                <div class="img-wrap-mini">
                                    <div class="close">x</div>
                                    <img id="<?php echo $imgName; ?>" realty="<?php echo $realty['name']; ?>" src="/upload/images/<?php echo $realty['name']; ?>/<?php echo $imgName; ?>" width="150" height="100" alt="">
                                </div>                                
                            <?php endforeach; ?>
                        <?php endif; ?>
                                
                        <br/><br/>
                                
                        <input id="btn-save" type="submit" name="submit" class="btn btn-default" value="Сохранить">                      
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

