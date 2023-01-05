function checkpassword() {
		  
    
    var password = document.getElementById("password").value;
   

    if (password.length <=5) {

        $("#check_password").html('Enter Strong password with more than 5 digits');
       
    } 

    else {
        $("#check_password").html('');
    }
}

function checkcpassword() {
		  
    
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("cpassword").value;
   

    if (password != cpassword) {

        
        $("#check_cpassword").html('passwords are miss match');
       
    } 

    else {
        $("#check_cpassword").html('');
    }
}


function checkEmail(){
		  
    jQuery.ajax({
        url:"./jqueryValidation/check_email.php",
        data:'email='+$("#mail").val(),
        type:"POST",
        beforSend:function()
             {
                 $('#sign_up').attr('disabled','disabled');
             },
        success:function(data){
            $("#check_email").html(data);
            $('#mail').email('');
        },
        error:function (){}
    });
}

function checkUsername(){
		  
    jQuery.ajax({
        url:"./jqueryValidation/check_username.php",
        data:'username='+$("#username").val(),
        type:"POST",
        beforSend:function()
             {
                 $('#sign_up').attr('disabled','disabled');
             },
        success:function(data){
            $("#check_username").html(data);
            $('#username').email('');
        },
        error:function (){}
    });
}