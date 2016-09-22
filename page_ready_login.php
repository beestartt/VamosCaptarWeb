<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>

<!-- Login Container -->
<div id="login-container">
    <!-- Login Header -->
    <div class="text-center">
        <img src="img/logo.png"></img>
    </div>
    <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
        <strong>Bem vindo ao Vamos Captar</strong>
    </h1>
    <!-- END Login Header -->

    <!-- Login Block -->
    <div class="block animation-fadeInQuickInv">
        <!-- Login Title -->
        <div class="block-title">
            <div class="block-options pull-right">
                <a href="page_ready_reminder.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Esqueceu sua senha??"><i class="fa fa-exclamation-circle"></i></a>
                <a href="page_ready_register.php" class="btn btn-effect-ripple btn-primary" data-toggle="tooltip" data-placement="left" title="Crie sua conta"><i class="fa fa-plus"></i></a>
            </div>
            <h2>FAÇA SEU LOGIN</h2>
        </div>
        <!-- END Login Title -->

        <!-- Login Form -->
        <form id="form-login" action="index.php" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" id="login-email" name="login-email" class="form-control" placeholder="Seu e-mail...">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" id="login-password" name="login-password" class="form-control" placeholder="Sua senha...">
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-8">
                    <label class="csscheckbox csscheckbox-primary">
                        <input type="checkbox" id="login-remember-me" name="login-remember-me">
                        <span></span>
                    </label>
                    Lembrar me?
                </div>
                <div class="col-xs-4 text-right">
                    <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Entrar</button>
                </div>
            </div>
        </form>
        <!-- END Login Form -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center animation-pullUp">
        <small><span id="year-copy"></span> &copy; <a href="http://www.beestart.com.br" target="_blank"><?php echo $template['name'] . ' ' . $template['version']; ?></a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->

<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyLogin.js"></script>
<script>$(function(){ ReadyLogin.init(); });</script>

<?php include 'inc/template_end.php'; ?>