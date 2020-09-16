$(document).ready(function(){
    $('#resetPasswordForm').hide();
    $('#registerForm').hide();
    $('#reset').click(function(){
        $('#loginForm').hide();
        $('#registerForm').hide();
        $('#resetPasswordForm').fadeIn("slow");
    });
    $('#register').click(function(){
        $('#loginForm').hide();
        $('#resetPasswordForm').hide();
        $('#registerForm').fadeIn("slow");
    });
    $('#login').click(function(){
        $('#registerForm').hide();
        $('#resetPasswordForm').hide();
        $('#loginForm').fadeIn("slow");
    });
})