$( document ).ready(function() {
    $(document).on('change', '.input-images', function(){
        $.map($(this)[0].files, function(val, i){
            let imagePath = window.URL.createObjectURL(val);
            $('.output-images-create').html('')
            $('.output-images-create').append(`
                        <img style="width: 20%;margin-bottom: 10px" src="${imagePath}" alt="">
                     `)
        })
    })
});
