<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\DashboardAsset;
use app\models\IdService;

$idservice = IdService::find()->count();

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
<header class="main-header">
    <a href="index.php?r=id-service/index" class="logo">
      <span class="logo-mini"><b>ANS</b></span>
      <span class="logo-lg"><b>GAIA-ANS</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">
        <span>
          <span>NAVEGAÇÃO</span>
        </span>
        </li>
        <li class="active">
          <a href="index.php?r=id-service/index">
            <span>Acordos</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Cadastros</span>
          </a>
          <ul class="treeview-menu">  
            <!-- <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>-->
            <li><a href="index.php?r=id-service/index"><i class="fa fa-files-o"></i> Acordos de Nível de Serviço</a></li>
          </ul>
        </li>
          <li class="header">LABELS</li>
          <li><a href="./index.php?r=site%2Flogout" data-method= "post"> 
            <span>Sair</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Painel Administrativo
        </h1>
    </section>
        <!-- Main content -->
    <section class="content">
          <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
          <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3><?= $idservice ?></h3>
            <p>Acordos</p>
          </div>
          <div class="icon">
            <i class="fa fa-bars"></i>
          </div>
            <a class="small-box-footer" href="index.php?r=id-service%2Findex">Todos os Acordos<i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </section>
    <section class="content">
      <?= Alert::widget() ?>
      <?= $content ?>
    </section>
    <div class="body-content">
      <div class="row">
        <div class="col-lg-12">
          <div class="box box-success">
           <div class="box-header">
             <h3 class="box-title">Acordo de Nível de Serviços</h3>
           </div>
          <div class="box-body">
            <p class="lead">O ITIL define um ANS como um acordo entre um provedor de serviços de TI e um cliente descrevendo formalmente o serviço, metas de nível desse serviço, responsabilidade do provedor, assim como do cliente.
            <p class="lead">Basicamente, um ANS é um acordo documentado entre contratado e contratante, que especifica claramente qual o nível de serviço desejado pelo contratante, ou seja, especifica detalhadamente tudo aquilo que deve ser entregue pelo contratado, assim como a forma como deve ser entregue, detalhando aspectos de entrega, qualidade, serviços de suporte e etc.</p>
            <p class="lead">O Catálogo de Serviços implementado por este documento utiliza o SLA como um documento formal que especifica o nível do serviço requerido pelo usuário que requisita o serviço em relação ao responsável por realizá-lo, sendo utilizado como referência para definição de todos os aspectos da solicitação, que vão desde os requisitos esperados até a qualidade da entrega/fornecimento do produto/serviço.</p>
            <p class="lead">Segundo a norma brasileira ABNT NBR ISO/IEC 20000-1, o ANS deve ser acordado entre os requisitantes ou interessados em um determinado serviço de TI e o responsável pelos serviços de TI da organização, e deve ser revisado periodicamente para certificar-se de que continua adequado ao atendimento das necessidades de negócio da organização.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
