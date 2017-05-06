<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<body class="intro-header" >
<center>
<div class="container">
<br></br>
        <div class="row">
            <div class="box">
               <div class="col-lg-12">
                   
                    <h2 class="intro-text text-center">
                        <strong>Pridanie taxikára</strong>
                    </h2>
                    <hr>
                </div>
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Taxikari/adding_taxikar'); ?>" method="post" accept-charset="utf-8">
                <div class="form-group col-lg-4">
                  <?php echo form_label('Meno: '); ?>         <?php echo form_input('meno', set_value('meno'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
 <div class="form-group col-lg-4">
                  <?php echo form_label('Priezvisko: '); ?>        <?php echo form_input('priezvisko', set_value('priezvisko'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
                 <div class="form-group col-lg-4">
                  <?php echo form_label('Auto: '); ?>         <?php echo form_input('auto', set_value('auto'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-4">
                  <?php echo form_label('Telefónne číslo: '); ?>         <?php echo form_input('tel', set_value('tel'), 'class="form-control" maxlength="13"'); ?>
                </div>
                <div class="clearfix"></div>
                
                <a href="<?php echo base_url('Taxikari'); ?>" class="btn  btn-info">Späť</a>                <input type="submit" name="<?php echo base_url('taxikari/adding_taxikar'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
</center>
<!-- /.container -->
</body>
