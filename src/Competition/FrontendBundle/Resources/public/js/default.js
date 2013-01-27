$(window).load(function() {
    $("#randombutton").click(function() {
        alert("hola");
    });
    loadOrbit();
    loadUserBarWithJavascript();
    loadRegisterForm();
    loadLoginForm();
    loadAjaxRegisterFormSubmit();
    loadAjaxLoginFormSubmit();
});

function loadOrbit()
{
    $('#featured').orbit({
        animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
        animationSpeed: 800,                // how fast animtions are
        timer: true,                        // true or false to have the timer
        resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
        advanceSpeed: 6000,                 // if timer is enabled, time between transitions
        pauseOnHover: false,                // if you hover pauses the slider
        startClockOnMouseOut: false,        // if clock should start on MouseOut
        startClockOnMouseOutAfter: 1000,    // how long after MouseOut should the timer start again
        directionalNav: true,               // manual advancing directional navs
        captions: true,                     // do you want captions?
        captionAnimation: 'fade',           // fade, slideOpen, none
        captionAnimationSpeed: 800,         // if so how quickly should they animate in
        bullets: false,                     // true or false to activate the bullet navigation
        bulletThumbs: false,                // thumbnails for the bullets
        bulletThumbLocation: '',            // location from this file where thumbs will be
        afterSlideChange: function(){},     // empty function
        fluid: true                         // or set a aspect ratio for content slides (ex: '4x3')
    });
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