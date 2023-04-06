$(document).ready(function () {
    if($('.regist').html()!=""){
    $('html, body').animate({
        scrollTop: $('.registrasi').offset().top
    }, 'slow');
  }else{

  }
});


var base_url = "http://localhost/PasifikApps/"

function prosesLogin(){

var username = $('#username').val();
var password = $('#password').val();

$.ajax({
        type: 'POST',
        url: base_url+'homepage/login',
        data: {
          username : username,
          password : password
        },
        beforeSend: function(){
           $('.error_msg').html("");
           $('.error_msg2').html("");
        },
        success: function(result){

          console.log(result);
             if(result==0){
              $('.error_msg').html('Username harus diisi');
              $('.error_msg2').html('Password harus diisi'); 
            }else if(result==1){
              $('.error_msg2').html('Password harus diisi');
            }else if(result==2){
              $('.error_msg').html('Username harus diisi');            
            }else if(result==3){
              $('.error_msg').html('Username tidak terdaftar');
            }else if(result==4){
              $('.error_msg2').html('Password salah');
            }else if(result==10){
              window.location = base_url+"admin";
            }else if(result==20){
              window.location = base_url+"user";
            }else if(result==30){
              window.location = base_url+"staff";
            }
          }
            
  });

};