var winHeight = $(window).height();
var winWidth = $(window).width();


function positionCenter(class1, class2){
    var left = winWidth/2 - $(class1).width()/2;
    var top = winHeight/2 - $(class1).height()/2;
    $(class2).css({"left":left,"top":top});
}


$(document).ready(function(){
    $(".authorization").css({"height" : winHeight});
    $(".menu").css({"height" : winHeight});

    $("#add_user_sub").on("click",function(e){
        var login = $("#login").val();
        var password = $("#password").val();
        var name = $("#name").val();
        var email = $("#email").val();
        var rights = $("#rights").val();
        var obj = {
            "login": login,
            "password": password,
            "name": name,
            "email": email,
            "rights": rights
        };

        if(login != "" && password != "") {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../ajax/add_user.php",
                data: obj,
                dataType: "json",
                success: function () {
                    positionCenter(".window", ".popup .window");
                    $(".popup").fadeIn(400);
                    $(".popup .done").fadeIn(400);
                },
                error: function () {
                    positionCenter(".window", ".popup .window");
                    $(".popup").fadeIn(400);
                    $(".popup .error").fadeIn(400);
                }
            });
        }
    });

    $("#add_email_sub").on("click",function(e){
        var email = $("#email").val();
        var obj = {
            "email": email
        };

        if(email != "") {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "../ajax/add_email.php",
                data: obj,
                dataType: "json",
                success: function () {
                    positionCenter(".window", ".popup .window");
                    $(".popup").fadeIn(400);
                    $(".popup .done").fadeIn(400);
                },
                error: function () {
                    positionCenter(".window", ".popup .window");
                    $(".popup").fadeIn(400);
                    $(".popup .error").fadeIn(400);
                }
            });
        }
    });

    $("#create_backup_sub").on("click",function(e){
        var filename = $("#create_backup_filename").val();
        var obj = {
            "filename": filename,
        };

        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../ajax/create_backup.php",
            data: obj,
            success: function () {
                $("#backup_list").append("<tr><td></td></tr>");
            },
        });
    });

    $("#load_backup_sub").on("click",function(e){
        var filename = $("#load_backup_filename").val();
        var obj = {
            "filename": filename,
        };

        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../ajax/load_backup.php",
            data: obj,
            dataType: "json",
            success: function () {
            },
        });
    });
});
