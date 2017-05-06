<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<header class="intro-header" >
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
                    <h4>Naozaj chcete vymazať vybraný záznam?</h4>
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
