<?php include 'inc/config.php'; $template['header_link'] = 'WELCOME'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>
<?php
    session_start();
    $_SESSION["profile"] = "consultant";
?>

<!-- Page content -->
<div id="page-content">
   <!-- Static Layout Header -->
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Bem vindo, CONSULTOR</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Vamos Captar</li>
                        <li><a href="">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- END Static Layout Header -->
    <!-- First Row -->
    <div class="row">
        <!-- Simple Stats Widgets -->
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background">
                        <i class="gi gi-cardio text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3">
                        <strong><span data-toggle="counter" data-to="2835"></span></strong>
                    </h2>
                    <span class="text-muted">VENDAS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-success">
                        <i class="gi gi-user text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-success">
                        <strong>+ <span data-toggle="counter" data-to="2862"></span></strong>
                    </h2>
                    <span class="text-muted">USUÁRIOS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-warning">
                        <i class="gi gi-briefcase text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-warning">
                        <strong>+ <span data-toggle="counter" data-to="75"></span></strong>
                    </h2>
                    <span class="text-muted">PROJETOS</span>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3">
            <a href="javascript:void(0)" class="widget">
                <div class="widget-content widget-content-mini text-right clearfix">
                    <div class="widget-icon pull-left themed-background-danger">
                        <i class="gi gi-wallet text-light-op"></i>
                    </div>
                    <h2 class="widget-heading h3 text-danger">
                        <strong>R$ <span data-toggle="counter" data-to="5820"></span></strong>
                    </h2>
                    <span class="text-muted">GANHOS</span>
                </div>
            </a>
        </div>
        <!-- END Simple Stats Widgets -->
    </div>
    <!-- END First Row -->

    <div class="row">
        <div class="col-lg-12">
            <!-- Stats User Widget -->
            <a href="#" class="widget">
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/info_icon.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Mantenha seus dados atualizados</h2>
                    <span class="text-muted">
                        <strong>É importante para que possamos lhe oferecer um melhor serviço.</strong>
                    </span>
                </div>
            </a>
            <!-- END Stats User Widget -->
        </div>

        <div class="col-lg-12">
            <!-- Stats User Widget -->
            <a href="service_company_dashboard.php" class="widget">
                <div class="widget-content border-bottom text-dark">
                    CLIPPING
                </div>
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/news_icon.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Título da notícia</h2>
                    <span class="text-muted">
                        <strong>O resumo da notícia virá aqui dentro. Procurar linkar com a referência externa desta notícia.</strong>
                    </span>
                </div>
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/news_icon.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Título da notícia</h2>
                    <span class="text-muted">
                        <strong>O resumo da notícia virá aqui dentro. Procurar linkar com a referência externa desta notícia.</strong>
                    </span>
                </div>
                <div class="widget-content border-bottom text-center themed-background-muted">
                    <img src="img/news_icon.png" alt="avatar" class="img-circle img-thumbnail img-thumbnail-avatar-2x">
                    <h2 class="widget-heading h3 text-dark">Título da notícia</h2>
                    <span class="text-muted">
                        <strong>O resumo da notícia virá aqui dentro. Procurar linkar com a referência externa desta notícia.</strong>
                    </span>
                </div>
            </a>

            <!-- END Stats User Widget -->
        </div>
    </div>

</div>
<!-- END Page Content -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/readyDashboard.js"></script>
<script>$(function(){ ReadyDashboard.init(); });</script>

<?php include 'inc/template_end.php'; ?>