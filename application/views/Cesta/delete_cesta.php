<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<head>
 <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 </head>
 
 <header>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<body class="intro-header" >
<div class="container">
<br></br>
<br></br>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Pozor</h3>
                </div>
                <div class="panel-body">
                    <h4><font color="red">Naozaj chcete vymazať vybraný záznam?</font></h4>
                    <div class="col-md-6 center">
                    <a href="<?php echo base_url('Cesta'); ?>" class="btn btn-default btn-lg">Zrušiť</a>                    </div>
                    <div class="col-md-6 center">
                    <form action="<?php echo base_url('Cesta/deleting_cesta'); ?>" method="post" accept-charset="utf-8">

  <?php echo form_hidden('idCesta',$idCesta); ?>
<input type="submit" value="Vymazať"  class="btn btn-danger btn-lg" />
</form>                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- /.container -->
</header>
