$(function () {

    // Удаление изображения при редактировании объекта
    function deleteImg() {
        var imgName = $(this).next().attr('id');
        var folderName = $(this).next().attr('realty');
        $(this).parent().hide();        

        $.ajax({
            type: 'POST', 
            url: '/admin/realty/deleteImg/' + folderName + '/' + imgName
        });
    }


    $('.close').click(deleteImg);
   

});
