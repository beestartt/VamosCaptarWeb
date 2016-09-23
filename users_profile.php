<?php include 'inc/config.php'; 
$template['header_link'] = 'WELCOME'; 
?>
<?php include 'inc/template_start.php'; ?>

<!-- Page content -->
<div id="page-content">

    <div class="row">
        <div class="col-lg-3 text-center">
            <img src="img/logo.png"></img>
        </div>
        <div class="col-lg-6 text-center">
            <h2>ESCOLHA O PERFIL EM QUE MAIS SE ENCAIXA</h2>
        </div>
        <div class="col-lg-3"></div>
    </div>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-sm-6 col-lg-4">
            <!-- Stats User Widget -->
            <a href="entreapneur_dashboard.php" class="widget">
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/startup.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Empreendedor</h2>
                    <span class="text-muted">
                        <strong>Tenho uma startup ou uma grande ideia</strong>
                    </span>
                </div>
            </a>
            <!-- END Stats User Widget -->
        </div>
        <div class="col-lg-4">
            <!-- Stats User Widget -->
            <a href="ecosystem_dashboard.php" class="widget">
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/ecosystem.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Ecossistema</h2>
                    <span class="text-muted">
                        <strong>Frase sobre o ecossistema</strong>
                    </span>
                </div>
            </a>
            <!-- END Stats User Widget -->
        </div>
        <div class="col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-4">
            <!-- Stats User Widget -->
            <a href="service_company_dashboard.php" class="widget">
                <div class="widget-content border-bottom text-dark">
                    
                </div>
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/service.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Prestador de Serviço</h2>
                    <span class="text-muted">
                        <strong>Sou o braço direito das startups</strong>
                    </span>
                </div>
            </a>
            <!-- END Stats User Widget -->
        </div>
        <div class="col-sm-6 col-lg-4">
            <!-- Stats User Widget -->
            <a href="consultant_dashboard.php" class="widget">
                <div class="widget-content border-bottom text-dark">
                    
                </div>
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/consult.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Consultor / empresa de consultoria</h2>
                    <span class="text-muted">
                        <strong>Posso ajudar as empresas</strong>
                    </span>
                </div>
            </a>
            <!-- END Stats User Widget -->
        </div>
        <div class="col-lg-2"></div>
    </div>

</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>