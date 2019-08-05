<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="tr"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Metro Lab</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="Mosaddek" name="author" />
    <?php
    $this->load->view('includes/include_style');
    ?>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
<?php
$msj = $this->session->flashdata('msg');
if ($msj) {echo $msj;}
?>
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <h1>Login Page</h1>
        <!-- END LOGO -->
    </div>
    <form action="<?php echo base_url("Login/Control");?>" method="post">
    <div class="login-wrap">
        <div class="metro single-size red">
            <div class="locked">
                <i class="icon-lock"></i>
                <span>Giriş</span>
            </div>
        </div>
        <div class="metro double-size green">
                <div class="input-append lock-input">
                    <input type="text" class="" name="KullaniciAdi" placeholder="Kullanıcı Adı">
                </div>

        </div>
        <div class="metro double-size yellow">

                <div class="input-append lock-input">
                    <input type="password" class="" name="Sifre" placeholder="Şifre">
                </div>

        </div>
        <div class="metro single-size terques login">

                <button type="submit" class="btn login-btn">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>

        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Beni Hatırla
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Şifremi Unuttum</a>
            </div>
        </div>
    </div>
    </form>
</body>
<!-- END BODY -->
</html>