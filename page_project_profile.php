<?php include 'inc/config.php'; $template['header_link'] = 'COMPONENTS'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Page content -->
<!--
    Available classes when #page-content-sidebar is used:

    'inner-sidebar-left'      for a left inner sidebar
    'inner-sidebar-right'     for a right inner sidebar
-->
<div id="page-content" class="inner-sidebar-left">
   <!-- Profile Form -->
        <form id="form-register" action="page_ready_register.php" method="post" class="form-horizontal text-center">
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" id="register-username" name="register-username" class="form-control" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="text" id="register-email" name="register-email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" id="register-password" name="register-password" class="form-control" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input type="password" id="register-password-verify" name="register-password-verify" class="form-control" placeholder="Verify Password">
                </div>
            </div>
            <div class="form-group form-actions">
                
                <div class="col-xs-6 text-right">
                    <button type="submit" class="btn btn-effect-ripple btn-success"><i class="fa fa-plus"></i> Salvar</button>
                </div>
            </div>
        </form>
        <!-- END Profile Form -->
</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/compTodo.js"></script>
<script>$(function(){ CompTodo.init(); });</script>

<?php include 'inc/template_end.php'; ?>