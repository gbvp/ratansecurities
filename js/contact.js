$(function(){$("#contact-form").on("submit",function(t){if(!t.isDefaultPrevented()){return $.ajax({type:"POST",url:"contact.php",data:$(this).serialize(),success:function(t){var e="alert-"+t.type,a=t.message,s='<div class="alert '+e+' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+a+"</div>";e&&a&&($("#contact-form").find(".messages").html(s),$("#contact-form")[0].reset(),grecaptcha.reset())}}),!1}})});