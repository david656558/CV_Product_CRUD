$(document).on('click', '.add-bascet', function () {
    let id = $(this).attr('data-id');
    let count = $(this).closest('.text-center').find('.card-block').find('.count-product').val();
    $.ajax({
        type: 'POST',
        url: "/basket/create",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
        },
        data: {
            id:id,
            count:count,
        } ,
        success: function(result){
            console.log(result);

        }
    });
})


function total(){
    $.ajax({
        type: 'get',
        url: "/basket/total",
        dataType: 'json',
        success: (result)=>{
            console.log(result)
            $('.total-all').html(`Total: ${result}$`)
        }
    });
}



$(document).on('change', '.count-product', function () {
    let id = $(this).attr('data-id');
    let count = $(this).val();
    $.ajax({
        type: 'POST',
        url: "/basket/update",
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
        },
        data: {
            id:id,
            count:count,
        } ,
        success: (result)=>{
            total();
            $(this).css('border', '2px solid green')
            setTimeout( ()=> {
                $(this).css('border', '1px solid black')
            }, 4000)
        }
    });
})


$(document).on('click', '.del-basket', function () {
    let id = $(this).attr('data-id');
    $.ajax({
        type: 'POST',
        url: "/basket/delete/" + id,
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
        },
        success: (result) => {
            $(this).closest('.text-center').remove()
        }
    });
})


