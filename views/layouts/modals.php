<div class="modal fade" id="modal-free-consult" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="handler-free.php" method="get">
                    <div><div>Имя</div><input id="customer-name" type="text" name="customer-name" required></div>
                    <div><div>Телефон</div><input id="customer-phone" type="text" name="customer-phone" required></div>
                    <input type="submit" value="Перезвоните мне" name="submit-free-consult">
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <a href="/index.php" class="item-menu text-center">Главная</a>
                <a href="/villa" class="item-menu text-center">Виллы</a>
                <a href="/apartment" class="item-menu text-center">Апартаменты</a>
                <a href="/feedback" class="item-menu text-center">Отзывы</a>
                <a href="/contacts" class="item-menu text-center">Контакты</a>
            </div>
        </div>
    </div>
</div>