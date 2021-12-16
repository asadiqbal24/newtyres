<!-- Jquery Core Js --> 
<script src="{{asset('public/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 
<script src="{{asset('public/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js --> 

<script src="{{asset('public/assets/plugins/jquery-countto/jquery.countTo.js')}}"></script> <!-- Jquery CountTo Plugin Js --> 

<script src="{{asset('public/assets/bundles/flotscripts.bundle.js')}}"></script><!-- Flot Charts Plugin Js --> 
<script src="{{asset('public/assets/bundles/morrisscripts.bundle.js')}}"></script><!-- Morris Plugin Js --> 

<script src="{{asset('public/assets/bundles/mainscripts.bundle.js')}}"></script> 
 <script src="{{asset('public/assets/js/pages/index2.js')}}"></script>
<script>
/*global $ */
$(document).ready(function() {
  "use strict";
  $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
  //Checks if li has sub (ul) and adds class for toggle icon - just an UI

  $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');

  $(".menu > ul > li").hover(function(e) {
    if ($(window).width() > 943) {
      $(this).children("ul").stop(true, false).fadeToggle(150);
      e.preventDefault();
    }
  });
  //If width is more than 943px dropdowns are displayed on hover

  $(".menu > ul > li").click(function() {
    if ($(window).width() <= 943) {
      $(this).children("ul").fadeToggle(150);
    }
  });
  //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

  $(".h-bars").click(function(e) {
    $(".menu > ul").toggleClass('show-on-mobile');
    e.preventDefault();
  });
  //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>                       
 <script src="{{asset('public/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script> <!-- Multi Select Plugin Js -->

<script src="{{asset('public/assets/plugins/chartjs/Chart.bundle.js')}}"></script> <!-- Chart Plugins Js --> 

<script src="{{asset('public/assets/js/pages/charts/chartjs.js')}}"></script> 
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

@include('vendor.sweet.alert')  
@include('sweet.sweet_messages')  
<script type="text/javascript">
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});	


    
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    
      $('.brand_id').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("get_brands_patterns_list")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {

                    var x = '<option value="NULL">Patterns</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#pattern_id').html(x);
                    }else{
                         x = '<option value="NULL">Model</option>';
                         $('#pattern_id').html(x);
                    }

                         $("#pattern_id").selectpicker("refresh");
                }
            });


      });


      $('#vehicle').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("get_vehicle_model_details")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {

                    var x = '<option value="NULL">Model</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#make').html(x);
                    }else{
                         x = '<option value="NULL">Model</option>';
                         $('#make').html(x);
                    }

                         $("#make").selectpicker("refresh");
                }
            });


      });


      $('#make').change(function(){

        val = $(this).val();
        $.ajax({
                type:'POST',
                url:'{{route("get_vehicle_model_series")}}',
                data:{_token: "{{ csrf_token() }}",val:val
                },
                success: function( msg ) {

                    var x = '<option value="NULL">Model</option>';
                    for(i=0;i<msg.length;i++){
                        if(i==0){
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }else{
                            x += '<option value="'+msg[i].id+'">'+msg[i].name+'</option>';
                        }
                    }

                    if(x!=-1){
                        $('#series').html(x);
                    }else{
                         x = '<option value="NULL">Model</option>';
                         $('#series').html(x);
                    }

                         $("#series").selectpicker("refresh");
                }
            });


      });


</script>


<script type="text/javascript">
  
function readURL(input,type,width,height) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#'+type)
                    .attr('src',e.target.result)
                    .width(width)
                    .height(height);
            };

            reader.readAsDataURL(input.files[0]);
            $('#disable_upload_btn').prop('disabled',false);
        }
    }

function disable_remove_btn(th,type) {
  $(th).prop('disabled',true);
  $('#'+type).attr('src',"{{asset('public/images/theme/placeholder.jpg')}}");
  $('#image').val('');
}


$(document).ready(function(){

  //$('input[type=text]').val('test');

});


$('#find_postal_code').click(function(){

    val = $('#postal_code').val();

    $.ajax({
                type:'GET',
                url:'{{route("get_postal_code")}}',
                data:{val: val
                },
                success: function( msg ) {
                    // alert(msg);    
                    $('#road').val(msg['town']);
                    $('#town').val(msg['town']);
                    $('#county').val(msg['county']);d
                }
            });


});

$('.get_make').change(function(){

    id = $(this).val();
    $.ajax({
                type:'GET',
                url:'{{route("get_vehicle_make")}}',
                data:{val: id
                },
                success: function( msg ) {
                        
                    var x = '<option value="{{NULL}}">Choose</option>';
                    for(i=0;i<msg.length;i++){
                        x = x +'<option value='+msg[i].id+'>'+msg[i].model+'</option>';
                    }
                    $('#models_list').html(x);
                    $('#models_list').selectpicker('refresh')
                }
            });


});


    $('#account_search').click(function(){

            val = $('#acc_number').val();
            $.ajax({
                            type:'get',
                            url:'{{route("admin.get_account_details")}}?id='+val,
                            data:{_token: "{{ csrf_token() }}"
                            },
                            success: function( msg ) {



                                $('#company').val(msg.company);
                                $('#first_name').val(msg.first_name);
                                $('#middle_name').val(msg.middle_name);
                                $('#last_name').val(msg.last_name);
                                $('#house_no').val(msg.house_no);
                                $('#postal_code').val(msg.postal_code);
                                $('#road').val(msg.road);
                                $('#locality').val(msg.locality);
                                $('#town').val(msg.town);
                                $('#county').val(msg.county);
                                $('#telephone').val(msg.telephone);
                                $('#mobile').val(msg.mobile);
                                $('#email').val(msg.email);



                            }
                        });

    });


  $('.notes_btn').click(function(){

      $('.notes_btn').removeClass('notes_btn_cl');  
      $('.notes_div').hide();
      if($(this).data('type')=='global'){
        $('#global_notes').show();
      }else{
        $('#user_notes').show();
      }
      $(this).addClass('notes_btn_cl');        
  });

    $('.open_right_divs').click(function(){

      if($(this).data('div')=='reminders'){
          $('#reminders_div').toggle(100);
      }else if($(this).data('div')=='stock_order_info'){
          $('#stock_order_info_div').toggle(100);        
      }else if($(this).data('div')=='notes_div'){
          $('#global_notes').toggle(100);  
          $('#notes_div_btn').toggle(100);      
      }

  });
    

</script>
</body>

</html>
