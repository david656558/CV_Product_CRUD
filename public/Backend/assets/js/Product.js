/*
$('.del-clic').on('click', function () {
    var id = $(this).attr('data-id');
    $.ajax({
        type: 'POST',
        url: "/admin/gallery/" + id,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
        },
        data: {
            id:id,
        } ,
        success: function(result){
            console.log(result.id);
            $('[data-id="'+ result.id +'"]').remove();
        }
    });
})


$('.checkbox__toggle').on('click', function () {
    var id = $(this).attr('data-id');
    let status = $(this).is(':checked');
    console.log($(this).is(':checked'));
    $.ajax({
        type: 'POST',
        url: "/admin/gallery/status/" + id,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
        },
        data: {
            id:id,
            status:status,
        } ,
        success: function(result){
            location.reload();
        }
    });
})
*/


$(document).on('click',  '.product-submit', function (e) {
    e.preventDefault();
    var err = false;
    if ($('.val-name').val() == "") {
        $('.val-name').css('border', '2px solid red');
        err = true;
    }
    if ($('.val-description').val() == "") {
        $('.val-description').css('border', '2px solid red');
        err = true;
    }
    if ($('.val-price').val() == "") {
        $('.val-price').css('border', '2px solid red');
        err = true;
    }
    if ($('.val-image').val() == "") {
        $('.valImage').css('display', 'block');
        err = true;
    }
    if(!err){
        $('#ProductForm').submit();
    }
});
// <p class="valNamme">Please Enter Name</p>


$(document).on('click',  '.product-submit-update', function (e) {
    e.preventDefault();
    var err = false;
    if ($('.val-name').val() == "") {
        $('.val-name').css('border', '2px solid red');
        err = true;
    }
    if ($('.val-description').val() == "") {
        $('.val-description').css('border', '2px solid red');
        err = true;
    }
    if ($('.val-price').val() == "") {
        $('.val-price').css('border', '2px solid red');
        err = true;
    }
    if(!err){
        $('#ProductFormUpdate').submit();
    }
});

