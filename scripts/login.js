$(".status").hide();
$(document).ready(function () {
    $('#loginForm').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'request/login.php',
            data: $(this).serialize(),
            success: function (data) {
                if (data == 0) {
                    $(".status").text("User not found.");
                    $(".status").fadeIn("slow");
                } else if(data == 1){
                    window.location.href = 'user.php';
                } else if(data == 2){
                    $(".status").text("Wrong password.");
                    $(".status").fadeIn("slow");
                } else {
                    $(".status").text("Server error.");
                    $(".status").fadeIn("slow");
                }
            }
        });
    });
});