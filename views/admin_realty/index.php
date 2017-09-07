<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Админпанель</a></li>
                    <li class="active">Управление объектами недвижимости</li>
                </ol>
            </div>

            <a href="/admin/realty/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить объект</a>
            
            <h4>Список объектов недвижимости</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Тип</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($realtiesList as $realty): ?>
                    <tr>
                        <td><?php echo $realty['id']; ?></td>
                        <td><?php echo $realty['type']; ?></td>
                        <td><?php echo $realty['name']; ?></td>
                        <td><?php echo $realty['price']; ?></td>  
                        <td><a href="/admin/Realty/update/<?php echo $realty['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/Realty/delete/<?php echo $realty['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

