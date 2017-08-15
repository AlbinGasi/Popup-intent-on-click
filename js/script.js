$(function(){
$('#btn_send').click(function(){
	$('.error').css('display','none');
	var first_name = $('input[name="first_name"]').val();
	var last_name = $('input[name="last_name"]').val();
	var email = $('input[name="email"]').val();

	$.ajax({
		beforeSend: function() {
    		$("#loadingImg").css('display','block');
 		},
		type: 'post',
		dataType: "json",
		url: 'send_data.php',
		data: {'first_name':first_name,'last_name':last_name,'email':email},
		success: function(response){
			console.log(response);
		}
	}).done(function(response){
		$("#loadingImg").css('display','none');
		if(response[0].messageStatus == 'success'){
				$('.popup-right').html('<p class="success">'+response[0].messageContent+'</p>');
			}else{
				$('.error').css('display','block');
				$('.error').html(response[0].messageContent);
			}
	})

});

var popup = $('#popupM');
var btn = $('#openP');
var close = $('.close');

btn.click(function(){
	popup.css('display','block');
});

close.click(function(){
	$('.error').css('display','none');
	$('input[name="first_name"]').val('');
	$('input[name="last_name"]').val('');
	$('input[name="email"]').val('');
	popup.css('display','none');
});

$(window).click(function(e){
	/*if (e.target.id == 'popupM') {
		popup.css('display','none');
	}*/
});
})