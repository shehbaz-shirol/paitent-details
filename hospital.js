$(document).ready(function(){
    $('.Number').keypress(function(e)
                 {
                     charCode = e.which;
                     
                    if (charCode >= 48 && charCode <= 57) 
                    
                     return true;
                     return false;
                     
                     });  //number keypress close//
 $('.letters').keypress(function(e)
                   {
                     charCode = e.which;
                     
                    if (charCode >= 97 && charCode <= 122) 
                    
                     return true;
                     return false;
                     
                     });  //Letters keypress close//


 $("#form").submit(function(e){
    e.preventDefault();
  var letters = /^[A-Za-z]+$/;
   var emailid = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
   var pid =$("#pid").val();
    var fname = $("#fname").val();
    var mname = $("#mname").val();
    var lname = $("#lname").val();
    var gender = $("#gender").val();
    var blood = $("#blood").val();
    var ms = $("#ms").val();
    var mobile = $("#mobile").val();
    var phone = $("#phone").val();
    var email = $("#email").val();
    var dob = $("#dob").val();
    var age = $("#age").val();
    var ocupation = $("#ocupation").val();
    var city = $("#city").val();
    var country = $("#Country").val();
    var state = $("#State").val();
    var current = $("#Current").val();
    var permanent = $("#Parmenet").val();
    var Disease =$("#Disease").val();
    var Habits =$("#Habits").val();
    var reason =$("#reason").val();
     var Medications =$("#Medications").val();
     var Parmenet =$("#Parmenet").val();
     var Efname =$("#Efname").val();
     var Elname =$("#Elname").val();
     var Ename =$("#Ename").val();
     var Emobile =$("#Emobile").val();
     var relation=$("#relation").val();

      var result=0;   //Validations start.............

   if (pid =="") 
{
    $("#pid_error").html("Enter unique Id");
      result++;

     }
       
      else
      {
         $("#pid_error").empty();
      }

    if (fname =="") 
{
    $("#ferror").html("Please fill  the paitent name");
     result++;
     }
       
      else
      {
         $("#ferror").empty();
      }
    if (mname =="") 
{
    $("#merror").html("Please fill  the Father/husband name");
     result++;
     }
       
      else
      {
         $("#merror").empty();
      } 

  if (lname =="") 
{
    $("#lerror").html("Please fill  the lastname");
     result++;
     }
      
      else
      {
         $("#lerror").empty();
      }
 if (gender =="") 
{
    $("#gerror").html("Please select gender");
     result++;
     }
       
      else
      {
         $("#gerror").empty();
      }

if (ms =="") 
{
    $("#mserror").html("Please select the marital");
   result++;
     }
       
      else
      {
         $("#mserror").empty();
      }
if (mobile =="") 
{
    $("#mob_error").html("Please enter valid number");
    result++;
     }
       
      else
      {
         $("#mob_error").empty();
      }

if (email=="") 
   {
     $("#eerror").text('Please Enter Email Id ');
     result++;
   }

   if(email.match(emailid)== null)
   {
    $("#eerror").text('Please Enter valid email ');
    result++;
   }
   else
   {
    $("#eerror").empty();

   }
     

if (dob =="") 
{
    $("#derror").html("Please fill birth date");
    result++;
     }
       
      else
      {
         $("#derror").empty();
      }

      if (age =="") 
{
    $("#aerror").html("Please enter age");
     result++;
     }
       
      else
      {
         $("#aerror").empty();
      }

     if (ocupation =="") 
{
    $("#ocup_error").html("Please fill paitent ocupation");
     result++;
     }
       
      else
      {
         $("#ocup_error").empty();
      }  

   if (city =="") 
{
    $("#city_error").html("Please select city");
    result++;
     }
       
      else
      {
         $("#city_error").empty();
      }    
      
       if (country =="") 
{
    $("#country_error").html("Please select country");
    result++;
     }
       
      else
      {
         $("#country_error").empty();
      }
       if (state =="") 
{
    $("#serror").html("Please select state");
     result++;
     }
       
      else
      {
         $("#serror").empty();
      }
       if (current =="") 
{
    $("#cadderror").html("Please fill current address");
    result++;
     }
       
      else
      {
         $("#cadderror").empty();
      }
    if (Disease =="") 
{
    $("#D_error").html("Please select disease");
     result++;
     }
       
      else
      {
         $("#D_error").empty();
      }

 if (Habits =="") 
{
    $("#h_error").html("Please select Habits");
    result++;
     }
       
      else
      {
         $("#h_error").empty();
      }

 if (reason =="") 
{
    $("#reason_error").html("Please fill  the reason");
    result++;
     }
       
      else
      {
         $("#reason_error").empty();
      }
if (Medications =="") 
{
    $("#medi_error").html("Please select medications");
   result++;
     }
       
      else
      {
         $("#medi_error").empty();
      }
if (Parmenet =="") 
{
    $("#padderror").html("Please fill  the details");
     result++;
     }
       
      else
      {
         $("#padderror").empty();
      }
if (Efname =="") 
{
    $("#E_fname").html("Please fill  the details");
   result++;
     }
       
      else
      {
         $("#E_fname").empty();
      }

if (Elname =="") 
{
    $("#E_lname").html("Please fill  the details");
     result++;
     }
       
      else
      {
         $("#E_lname").empty();
      }
      if (Emobile =="") 
{
    $("#E_mobile").html("Please fill  the details");
    result++;
     }
       
      else
      {
         $("#E_mobile").empty();
      }
      if (Efname =="") 
{
    $("#E_fname").html("Please fill  the details");
   result++;
     }
       
      else
      {
         $("#E_fname").empty();
      }

    if (relation =="") 
{
    $("#E_relation").html("Please fill details");
     result++;
     }
       
      else
      {
         $("#E_relation").empty();

      }          //validation end...............

//.............Ajax Start................................
   $("#submit").attr("disabled",true);   
if (result == 0) 
   {
    $.ajax({  
                     url:$("#form").attr('action'),  
                     type:"POST",  
                     data:$('#form').serialize(),  
                     success:function(data){
                     alert("form Sucessfully submitted");
               
                     }
                   });

   }
   else{
     $("#submit").attr('disabled', false);
   }
 });
});    


