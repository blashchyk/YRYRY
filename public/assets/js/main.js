$(document).ready(function(){
    var phone = $('.phones').text();
    var array = phone.split('');
    for(var i=3;i<array.length;i++){
        if(i==3 || i==6 || i == 8){
            array[i]="-X";
        }
        else{
            array[i]='X';
        } 
    }  
    var phone_x = array.join('');
    $('.phones').text(phone_x);
    $('p.kontakt').on('click', function(){
        $('.phones').text(phone);
   });

   $('#message').on('click', function(){
    $('.b-popup').css('display', 'block');
   });
   $('#reset').on('click', function(){
    $('.b-popup').css('display', 'none');
   });
   $('.reply_mes').on('click', function(){
       
       if($(this).text()=='Ответить на сообщение'){
          $('.reply').css('display', 'block');
         var alt = $(this).parent().parent().find('img').attr('alt');
         var messanger = $(this).parent().find('.user_messanger').val();
         $('#messanger').val(messanger);
         $('#message_id').val(alt);
            $(this).text('Отмена');
       }else{
        $('.reply').css('display', 'none');
        $(this).text('Ответить на сообщение');
       }   
   });
   var slider = [];
     slider.push($('.big').attr('src'));
     slider.push($('.one').attr('src'));
     slider.push($('.two').attr('src'));
     slider.push($('.three').attr('src'));
     slider.push($('.four').attr('src'));
   var one_click = 0;
   $('.left').on('click',function(){
    // console.log(slider);
       if(one_click<=0){
           one_click = 5;
       }
        one_click--;
        $('.big').attr('src', slider[one_click]);
      
   });
   $('.right').on('click',function(){
       if(one_click>=4){
           one_click =-1;
       }
        one_click++;
        $('.big').attr('src', slider[one_click]);
   });

   $('.rental_btn.add_accom_button button').on('click', function(){
        $('.rental_btn.add_accom_button button').removeClass('active');
      $(this).addClass('active');
   });
   $('.add_transport .add_accom_button button').on('click', function(){
   
       $('.add_accom_button button').removeClass('active');
       $(this).addClass('active');
   });
   $('.add_accom .add_accom_button button').on('click', function(){
       $('.add_accom .add_accom_button button').removeClass('active');
       $(this).addClass('active');
   });

   $('.btn').on('click', function(){
       $('.btn').removeClass('active_btn');
       $(this).removeClass('main_btn');
       $(this).addClass('active_btn');
   });
  
   
  $('#search1').focus(function(){
      $('.search1').css('display', 'block');
  });
  $('#search3').focus(function(){
      $('.search3').css('display', 'block');
  });
  $('#search2').focus(function(){
      $('.search2').css('display', 'block');
  });
  $('.search3 ul li').on('click', function(){
      var city = $(this).text();
      $('#search3').val(city);
      $('.search3').css('display', 'none');
  });
 
  $('.search1 ul li').on('click', function(){
      var city = $(this).text();
      $('#search1').val(city);
      $('.search1').css('display', 'none');
  });
  $('.search2 ul li').on('click', function(){
    var city = $(this).text();
  
    $('#search2').val(city);
    $('.search2').css('display', 'none');
  });
  var files;
    $('input[type=file]').change(function(){
        files = this.files;
        
        var data = new FormData();
        $.each(files, function(key, value){
            data.append(key, value);
        });
        
        $.ajax({
            url: 'created_profile',
            type:'POST',
            data: data,
           
            processData: false, // Не обрабатываем файлы (Don't process the files)
            contentType: false, // Так jQuery скажет серверу что это строковой запрос
            success: function( data ){
                
            }
        });
    });
    $('.add_accom_button button').on('click', function(){
       var a =  $(this).attr('class');
       if(a == 'active'){
           var b = $(this).attr('name');
          var c = $('.add_accom_button input[type=hidden]').val(b);
       }
    });
});