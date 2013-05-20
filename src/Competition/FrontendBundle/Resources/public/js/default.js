$(window).load(function() {
    loadFoundation();
    loadUserBarWithJavascript();
    loadRegisterForm();
    loadLoginForm();
    loadAjaxRegisterFormSubmit();
    loadAjaxLoginFormSubmit();
});

function loadFoundation()
{
    $(document).foundation();
}

function loadUserBarWithJavascript()
{
    $("#registerButton").attr('href','#');
    $("#loginButton").attr('href','#');
}

function loadRegisterForm()
{
    $("#registerButton").click(function() {
        var url = $('#registerModal').attr('data-href');
        $('#registerModalContent').load( url );
        $('#registerModal').reveal();
    });
}

function loadLoginForm()
{
    $("#loginButton").click(function() {
        var url = $('#loginModal').attr('data-href');
        console.log(url);
        $('#loginModalContent').load( url );
        $("#loginModal").reveal();
    });
}

function loadAjaxRegisterFormSubmit()
{
    $("#registerModalContent").on("submit", "#register_form",function(event) {
        event.preventDefault();
        var url=$('#register_form').attr('action');
        $('#register_form').attr('action','#');
        $.ajax({
            type: "POST",
            url: url,
            data: $('#register_form').serialize(),
            success: function(data)
            {
                $('#registerModalContent').html(data);
            }
        });
        return false;
    });
}

function loadAjaxLoginFormSubmit()
{
    $("#loginModalContent").on("submit", "#login_form",function(event) {
        event.preventDefault();
        var url=$('#login_form').attr('action');
        $('#login_form').attr('action','#');
        var geturl;
        geturl = $.ajax({
            type: "POST",
            url: url,
            data: $('#login_form').serialize(),
            success: function(data)
            {
                $('#loginModalContent').html(data);
            }
        });
        return false;
    });
}