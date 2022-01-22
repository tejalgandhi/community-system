$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

$(document).on('click','.read_all_notifications_admin',function(){
    console.log('addsada')
    $.ajax({
        type: "GET",
        url: base_url+'/admin/readnotification',
        datatype: JSON,
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            $('.noti_counter').html('0');
        }
    });
});
$(document).on('click','.deleteNotificationAdmin',function(){
    var notification_id = $(this).attr('data-notification-id'),
        user_id = $('#user_id').val();
    if((parseFloat($('.noti_counter').html())-1) > 0)
    {
        $('.noti_counter').html((parseFloat($('.noti_counter').html())-1))
    }//parseFloat($('.noti_counter').html())-1);
    $(this).parent().fadeOut();
    $('.loader-outer-container').css('display','table');
    var form_data = new FormData();
    form_data.append('notification_id',notification_id);
    form_data.append('user_id',user_id);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: base_url+'/admin/deleteNotification',
        datatype: JSON,
        processData: false,
        contentType: false,
        cache: false,
        data: form_data, // a JSON object to send back
        success: function (data) {
            $('.loader-outer-container').css('display','none');
            if(data.code == 201){
                toastr.error(data.message);
                //swal(data.message);
                return false;
            }else{
                toastr.success(data.message);
                /*setTimeout(function(){
                 location.reload(true);
                 },1500)*/
            }
        }
    });
});